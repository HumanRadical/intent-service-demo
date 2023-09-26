<?php

namespace App\Http\Controllers;

use App\Models\Intent;
use Illuminate\Http\Request;

class IntentController extends Controller
{
    public function index()
    {
        return view('index', [
            'intents' => Intent::all()
        ]);
    }
}
