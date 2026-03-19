<?php

namespace App\Http\Controllers;

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

        return view('liturgia.index', compact('liturgia', 'erro'));
    }
}