<?php

namespace App\Filament\Resources\Assesments\RelationManagers;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Table;

class StudentAssesmentsRelationManager extends RelationManager
{
    protected static string $relationship = 'studentAssesments';

    protected static ?string $title = 'Nilai Siswa';

    public function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columns(2)
                    ->schema([
                        TextEntry::make('student.name')
                            ->label('Nama Siswa'),
                        TextEntry::make('score')
                            ->label('Nilai'),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('score')
            ->columns([
                TextColumn::make('student.name')
                    ->label('Nama Siswa')
                    ->sortable(),
                TextInputColumn::make('score')
                    ->placeholder('Masukkan Nilai')
                    ->rules(['required', 'numeric', 'min:0', 'max:100'])
                    ->label('Nilai')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->headerActions([
                Action::make('save')
                    ->label('Simpan Semua')
                    ->action(function () {
                        Notification::make()
                            ->title('Berhasil menyimpan semua nilai siswa.')
                            ->success()
                            ->send();
                    })
                    ->color('success'),
            ])
            ->paginated(false)
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
