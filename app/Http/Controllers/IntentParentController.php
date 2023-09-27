<?php

namespace App\Http\Controllers;

use App\Models\IntentParent;
use Illuminate\Http\Request;

class IntentParentController extends Controller
{
    public function show(IntentParent $parent)
    {
        return view('parent.show', [
            'parent' => $parent
        ]);
    }
}
