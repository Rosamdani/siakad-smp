<?php

namespace App\Filament\Resources\Presences\RelationManagers;

use App\Enums\PresenceStatus;
use Filament\Actions\Action;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Table;

class StudentPresencesRelationManager extends RelationManager
{
    protected static string $relationship = 'studentPresences';

    public function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('status'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('status')
            ->columns([
                TextColumn::make('student.name')
                    ->label('Nama Siswa')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('student.nisn')
                    ->label('NISN')
                    ->searchable(),
                ViewColumn::make('status')
                    ->label('Status Kehadiran')
                    ->view('tables.columns.presence-status-checkboxes')
                    ->state(fn ($record) => $record->status?->value)
                    ->viewData([
                        'statuses' => [
                            PresenceStatus::PRESENT->value => 'Hadir',
                            PresenceStatus::SICK->value => 'Sakit',
                            PresenceStatus::PERMISSION->value => 'Izin',
                            PresenceStatus::LATE->value => 'Terlambat',
                            PresenceStatus::ABSENT->value => 'Alpa',
                        ],
                    ])
                    ->disabledClick(),
                TextInputColumn::make('note')
                    ->placeholder('Masukkan Catatan (Opsional)')
                    ->label('Catatan')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Action::make('save')
                    ->label('Simpan Semua')
                    ->action(function () {
                        Notification::make()
                            ->title('Berhasil menyimpan presensi siswa.')
                            ->success()
                            ->send();
                    })
                    ->color('success'),
            ]);
    }

    public function updatePresenceStatus($recordId, $statusValue)
    {
        $record = $this->getRelationship()->find($recordId);

        if ($record) {
            if ($record->status?->value === $statusValue) {
                $record->update(['status' => null]);
            } else {
                $record->update(['status' => PresenceStatus::from($statusValue)]);
            }
        }
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
