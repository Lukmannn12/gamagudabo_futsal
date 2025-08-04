<?php

namespace App\Filament\Widgets;

use App\Models\jadwal;
use App\Models\pemesanan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pertandingan', value: jadwal::count())
                ->description('Jumlah pertandingan')
                ->color('info')
                ->icon('heroicon-o-rectangle-stack'),

            Stat::make('Total Tiket Terjual', value: pemesanan::sum('jumlah_tiket'))
                ->description('Jumlah tiket yang terjual')
                ->color('success')
                ->icon('heroicon-o-ticket'),
            Stat::make('Total Pembeli', value: pemesanan::count())
                ->description('Jumlah Pembeli')
                ->color('info')
                ->icon('heroicon-o-rectangle-stack'),
        ];
    }

    public static function getSort(): int
{
    return 1; // Lebih kecil = muncul lebih atas
}
}
