<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntentParent extends Model
{
    use HasFactory;

    public function intents()
    {
        return $this->hasMany(Intent::class);
    }
}
