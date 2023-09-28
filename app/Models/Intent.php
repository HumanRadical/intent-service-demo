<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intent extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function children()
    {
        return $this->hasMany(Intent::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Intent::class);
    }

    public function scopeFilter(Builder $query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn (Builder $query, $search) => 
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%')
        );

        $query->when($filters['date'] ?? false, fn (Builder $query, $date) => 
            $query->whereBetween('created_at', [$date, $date . ' 23:59:59'])
        );
    }
}
