<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use App\Models\tanggal;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mpdf\Mpdf;


class PesanController extends Controller
{
    public function pemesan()
    {
        $tanggals = tanggal::all(); 
        return view('tiket', compact('tanggals'));
    }

    public function simpandata(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'jumlah_tiket' => 'required|integer|min:1',
            'email' => 'required|email',
            'tanggal_id' => 'required|exists:tanggals,id',
        ]);

        $hargaTiket = tanggal::find($request->tanggal_id)->harga;
        $total = $hargaTiket * $request->jumlah_tiket;

         $pemesanan = pemesanan::create([
                'nama' => $request->nama,
                'no_hp' => $request->no_hp,
                'jumlah_tiket' => $request->jumlah_tiket,
                'email' => $request->email,
                'tanggal_id' => $request->tanggal_id,
                'user_id' => Auth::id(),
                'status' => 'belum bayar',
                'total' => $total,
            ]);
    // Menggunakan dd untuk melihat data yang sudah disimpan
    
        return redirect()->route('historypesanan')->with('success', 'Data berhasil ditambahkan.');

    }

    public function historypesanan()
    {
        // Mengambil semua katalog untuk tampilan history pesanan
        $pemesans = pemesanan::where('user_id', Auth::id())->get();
        return view('historypesanan', compact('pemesans')); // Kirim data ke view
    }

    public function show($id)
    {
        // Menampilkan detail pemesan berdasarkan ID
        $pemesans = pemesanan::findOrFail($id);

        return view('detailpesanan', compact('pemesans'));
    }

    public function viewtiket($id)
    {
        // Menampilkan detail pemesan berdasarkan ID
        $pemesans = pemesanan::findOrFail($id);

        return view('bukti', compact('pemesans'));
    }
}
