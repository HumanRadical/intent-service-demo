<?php

namespace App\Http\Controllers;

use App\Models\Intent;
use Illuminate\Http\Request;

class IntentController extends Controller
{
    public function index()
    {
        return view('index', [
            'intents' => Intent::latest()->filter(
                request(['search'])
            )->get()
        ]);
    }

    public function show(Intent $intent)
    {
        return view('show', [
            'intent' => $intent
        ]);
    }
}
