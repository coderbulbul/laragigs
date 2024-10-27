<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   
    public function run(): void
    {
        // User::factory(5)->create();

        $user = User::factory()->create([
            'name' => "John Doe",
            'email' => 'john@gmail.com',
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);


        // Listing::create([
        //     'title' => "Laravel Senior Developer",
        //     'tags' => "laravel, javascript",
        //     'company' => "Brain Station 23",
        //     'location' => 'Dhaka, Bangladesh',
        //     'email' => "brainstation23@info",
        //     'website' => "https://www.brainstation23.com",
        //     'description' => "lorem ipsum dummy test given by brad lorem ipsum dummy test given by brad lorem ipsum dummy test given by bradlorem ipsum dummy test given by brad", 
        // ]);

        // Listing::create( [
        //     'title' => "Full Stack Developer",
        //     'tags' => "laravel, javascript. React",
        //     'company' => "Brain Station 23",
        //     'location' => 'Dhaka, Bangladesh',
        //     'email' => "brainstation23@info",
        //     'website' => "https://www.brainstation23.com",
        //     'description' => "lorem ipsum dummy test given by brad lorem ipsum dummy test given by brad lorem ipsum dummy test given by bradlorem ipsum dummy test given by brad", 
        // ] );        
    }
}
