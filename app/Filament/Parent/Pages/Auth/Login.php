<?php

namespace App\Filament\Parent\Pages\Auth;

use App\Models\User;
use Carbon\Carbon;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Actions\Action;
use Filament\Auth\Http\Responses\Contracts\LoginResponse;
use Filament\Auth\Pages\Login as BaseLogin;
use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Filament\Models\Contracts\FilamentUser;
use Filament\Schemas\Schema;
use Illuminate\Validation\ValidationException;

class Login extends BaseLogin
{
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nisn')
                    ->label('NISN')
                    ->numeric()
                    ->required()
                    ->autocomplete('username')
                    ->autofocus()
                    ->extraInputAttributes(['tabindex' => 1]),
                TextInput::make('date_of_birth')
                    ->label('Tanggal Lahir (hhbbyyyy)')
                    ->required()
                    ->placeholder('Contoh: 01022010')
                    ->minLength(8)
                    ->maxLength(8)
                    ->regex('/^(0[1-9]|[12][0-9]|3[01])(0[1-9]|1[0-2])[0-9]{4}$/')
                    ->extraInputAttributes([
                        'tabindex' => 2,
                        'inputmode' => 'numeric',
                        'pattern' => '\\d*',
                    ]),
                $this->getRememberFormComponent(),
            ]);
    }

    public function authenticate(): ?LoginResponse
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            $this->getRateLimitedNotification($exception)?->send();

            return null;
        }

        $data = $this->form->getState();

        $birthDate = $this->parseBirthDate($data['date_of_birth']);

        /** @var FilamentUser|null $user */
        $user = User::query()
            ->where('nisn', $data['nisn'])
            ->whereDate('date_of_birth', $birthDate)
            ->first();

        if (
            (! $user) ||
            (! $user->canAccessPanel(Filament::getCurrentOrDefaultPanel()))
        ) {
            $this->throwFailureValidationException();
        }

        Filament::auth()->login($user, $data['remember'] ?? false);

        session()->regenerate();

        return app(LoginResponse::class);
    }

    /**
     * @return array<Action>
     */
    protected function getFormActions(): array
    {
        return [
            $this->getAuthenticateFormAction(),
            $this->getAdminLoginAction(),
        ];
    }

    protected function getAdminLoginAction(): Action
    {
        return Action::make('adminLogin')
            ->label('Masuk sebagai Admin')
            ->url(Filament::getPanel('admin')?->getLoginUrl() ?? url('/admin/login'))
            ->color('gray')
            ->outlined();
    }

    protected function parseBirthDate(string $input): Carbon
    {
        $birthDate = Carbon::createFromFormat('dmY', $input);

        if ($birthDate === false) {
            $this->throwFailureValidationException();
        }

        return $birthDate;
    }

    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.nisn' => __('filament-panels::auth/pages/login.messages.failed'),
        ]);
    }
}
