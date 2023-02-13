<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Continents;
use App\Models\Countries;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $continents = [
            ['id' => 1, 'name' => 'Africa'],
            ['id' => 2, 'name' => 'Europe'],
            ['id' => 3, 'name' => 'South America'],
            ['id' => 4, 'name' => 'North America'],
            ['id' => 5, 'name' => 'Asia'],
        ];

        // foreach($continents as $continent){
        //     Continents::factory()->create($continent)
        //     ->each(function($c){
        //         $c->country()->saveMany(Countries::factory(10)->make());
        //     });
        // }

        Product::factory(20)->create();
    }
}
