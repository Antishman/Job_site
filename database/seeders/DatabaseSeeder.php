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
        User::factory(5)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Listing::factory(6)->create();
        /*     Listing::create([
            'title'=> 'Laravel Senior Developer' ,
            'tags'=>'laravel, javascript',
            'company'=>'Kuraz tech',
            'location'=>'Boston,MA',
            'email'=> 'email1@gmail.com',
            'website'=>'https://www.acme.com',
            'description'=> 'this is the description for the listing one so im just writig because i dont know where to get that text whch most use'       
               ]);
        Listing::create([
            'title'=> 'full-stack Developer' ,
            'tags'=>'laravel, backend, laravel',
            'company'=>'acme corp',
            'location' =>'New York,NY',
            'email'=> 'email12@gmail.com',
            'website'=>'https://www.starkindustries.com',
            'description'=> 'this is the description for the listing one so im just writig because i dont know where to get that text whch most use'       
                ]); */
    }
}
