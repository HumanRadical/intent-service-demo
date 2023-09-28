<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Intent;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Intent::truncate();

        User::factory()->create();
        for ($i = 0; $i < 10; $i++) {
            $this->createIntent();
        }
    }

    private function createIntent(Intent $parent = null, int $maxChildren = 5): void
    {
        $intent = Intent::factory()->create(['parent_id' => $parent?->id]);
        $childrenCount = rand(0, $maxChildren);
        for ($i = 0; $i < $childrenCount; $i++) {
            $this->createIntent($intent, $maxChildren - 1);
        }
    }
}
