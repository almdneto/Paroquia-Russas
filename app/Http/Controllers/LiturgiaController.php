<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Http;


class LiturgiaController extends Controller
{
    public function index()
    {
        $liturgia = null;
        $erro = null;

        try {
            $response = Http::withoutVerifying()
                ->timeout(15)
                ->get("https://liturgia.up.railway.app/v2/");

            if ($response->successful()) {
                $liturgia = $response->json();
            } else {
                $erro = 'Status HTTP: ' . $response->status();
            }
        } catch (\Exception $e) {
            $erro = $e->getMessage();
        }
        // dd($liturgia);
        return view('liturgia.index', compact('liturgia', 'erro'));
    }

    public function downloadPdf(){
    try {
        $response = Http::withoutVerifying()
            ->timeout(15)
            ->get("https://liturgia.up.railway.app/v2/");

        if (!$response->successful()) {
            return back()->with('erro', 'Não foi possível buscar a liturgia.');
        }

        $liturgia = $response->json();

    } catch (\Exception $e) {
        return back()->with('erro', $e->getMessage());
    }

    $pdf = Pdf::loadView('liturgia.pdf', compact('liturgia'))
        ->setPaper([0, 0, 360, 780], 'portrait');

    $filename = 'liturgia-' . now()->format('Y-m-d') . '.pdf';

    return $pdf->download($filename);
    }
}

