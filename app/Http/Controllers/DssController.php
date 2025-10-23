<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;

class DssController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            'nama_pengguna' => 'required|string',
            'preferensi_wisata' => 'required',
            'suasana' => 'required',
            'aktivitas_air' => 'required',
            'dekat_pantai' => 'required',
            'kuliner' => 'required',
        ]);

        $hasil = $this->tentukanRekomendasi($validated);

        $response = Response::create([
            'nama_pengguna' => $validated['nama_pengguna'],
            'preferensi_wisata' => $validated['preferensi_wisata'],
            'suasana' => $validated['suasana'],
            'aktivitas_air' => $validated['aktivitas_air'] === 'ya',
            'dekat_pantai' => $validated['dekat_pantai'] === 'ya',
            'kuliner' => $validated['kuliner'] === 'ya',
            'hasil_rekomendasi' => $hasil,
        ]);

        return view('result', [
            'hasil' => $hasil,
            'nama' => $validated['nama_pengguna']
        ]);
    }

    private function tentukanRekomendasi($data)
    {
        $preferensi = $data['preferensi_wisata'];
        $suasana = $data['suasana'];
        $air = $data['aktivitas_air'] === 'ya';
        $pantai = $data['dekat_pantai'] === 'ya';
        $kuliner = $data['kuliner'] === 'ya';

        if ($preferensi === 'alam' && $suasana === 'tenang' && !$pantai) {
            return "Kintamani";
        } elseif ($preferensi === 'alam' && $air && $pantai) {
            return "Nusa Penida";
        } elseif ($preferensi === 'budaya' && $suasana === 'tenang') {
            return "Ubud";
        } elseif ($preferensi === 'budaya' && $suasana === 'ramai') {
            return "Tanah Lot";
        } elseif ($preferensi === 'alam' && $kuliner) {
            return "Bedugul";
        } else {
            return "Seminyak / Kuta";
        }
    }
}
