<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;
use WebsiteSetting;

class ManageWebsite extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = WebsiteSetting::class;

    protected static ?string $title = 'Kelola Website';

    protected static string|UnitEnum|null $navigationGroup = 'Pengaturan';

    protected static ?int $navigationSort = 100;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Pengaturan Umum')
                            ->icon(Heroicon::OutlinedCog6Tooth)
                            ->schema([
                                TextInput::make('site_name')
                                    ->placeholder('Masukkan nama situs')
                                    ->label('Nama Situs')
                                    ->required(),
                                FileUpload::make('site_logo')
                                    ->label('Logo Situs')
                                    ->image()
                                    ->nullable(),
                            ]),
                        Tab::make('Kontak')
                            ->icon(Heroicon::OutlinedPhone)
                            ->schema([
                                TextInput::make('email')
                                    ->label('Email')
                                    ->placeholder('Masukkan Email')
                                    ->email(),
                                TextInput::make('phone')
                                    ->placeholder('Masukkan Nomor Telepon')
                                    ->label('Nomor Telepon')
                                    ->tel(),
                                Textarea::make('address')
                                    ->placeholder('Masukkan Alamat Lengkap')
                                    ->label('Alamat Lengkap')
                                    ->rows(3),
                            ]),
                    ]),
            ]);
    }
}
