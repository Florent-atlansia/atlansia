<?php

namespace Database\Seeders;

use App\Models\categories;
use App\Models\post;
use App\Models\User;
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
        //creer 05 cateories
        $categories = categories::factory(5)->create(); 
        
       /**creer un utilisateur,ensuite pour chaque utilisateur creer la methode
       each() le recupere et cree son post (entre 1 ou 3 posts. ensuite en creant
       le post on cree directement les champs des clés etrangères*/

       
        User::factory(10)->create()->each(function($user) use ($categories){
            post::factory(rand(1,3))->create([
                'user_id' => $user->id,
                'categories_id' => ($categories->random(1)->first())->id
            ]);
            
        });
            
        
    }
}