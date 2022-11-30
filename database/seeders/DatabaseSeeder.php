<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)
            ->has(Post::factory()->count(5))
            ->create();

        // Create Test token API, add Header "Authorization: Bearer 2|7P1hZsvrtMzMCt643jaC4nmrp4Kc0vtSed7v78Y3"
        DB::insert('INSERT INTO personal_access_tokens (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [2, 'App\Models\User', 3, 'token_name', '867dd5bc69c343d4d6172b0eb928c14eded56803f8fd153ea70d06926a2b0da9', '["*"]', NULL, NULL, NOW(), NOW()]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
