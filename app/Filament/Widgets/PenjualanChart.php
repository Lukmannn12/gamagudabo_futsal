<?php

namespace App\Filament\Widgets;

use App\Models\pemesanan;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class PenjualanChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Penjualan Tiket per Bulan';

    protected function getData(): array
    {
        // Ambil data jumlah tiket per bulan
        $penjualan = pemesanan::selectRaw('MONTH(created_at) as bulan, SUM(jumlah_tiket) as total')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan');

        $labels = [];
        $data = [];

        for ($i = 1; $i <= 12; $i++) {
            $labels[] = Carbon::create()->month($i)->translatedFormat('F'); // Nama bulan (Januari, dst)
            $data[] = $penjualan[$i] ?? 0; // Default 0 kalau gak ada penjualan
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Tiket Terjual',
                    'data' => $data,
                    'backgroundColor' => 'rgba(59, 130, 246, 0.5)', // Warna biru transparan
                    'borderColor' => '#3B82F6', // Biru solid
                    'borderWidth' => 1,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Bisa diubah ke 'line', 'pie', dll
    }

    // Agar tampil 1 baris penuh
    public function columnSpan(): int|string|null
    {
        return 'full';
    }

    public static function getSort(): int
    {
        return 2;
    }
}
