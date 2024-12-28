<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\tanggal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
   
    public function getJadwalsByTanggal(Request $request)
{
    $tanggal = Tanggal::with('jadwals')
        ->where('id', $request->query('tanggal_id'))
        ->first();

    if ($tanggal) {
        return response()->json([
            'tanggal' => \Carbon\Carbon::parse($tanggal->tanggal)->format('d F Y'),
            'hari' => $tanggal->hari,
            'jadwals' => $tanggal->jadwals
        ]);
    }

    return response()->json(['message' => 'Data tidak ditemukan'], 404);
}

    public function home()
    {
        $tanggals = tanggal::all(); 
        return view('landing', compact('tanggals')); // Kirim data ke view
    }
}
