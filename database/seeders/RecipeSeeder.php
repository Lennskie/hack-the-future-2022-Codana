<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert("insert into recipe (name, image-description, required_score) values ('Potion of Night vision', 'potion-1', 5)");
        DB::insert("insert into recipe (name, image-description, required_score) values ('Potion of Invisibility', 'potion-2', 7)");
        DB::insert("insert into recipe (name, image-description, required_score) values ('Potion of Leaping', 'potion-3', 9)");
        DB::insert("insert into recipe (name, image-description, required_score) values ('Potion of Strength', 'potion-4', 11)");
        DB::insert("insert into recipe (name, image-description, required_score) values ('Potion of Slow Falling', 'potion-5', 13)");
        DB::insert("insert into recipe (name, image-description, required_score) values ('Potion of Regeneration', 'potion-6', 15)");
        DB::insert("insert into recipe (name, image-description, required_score) values ('Potion of Rizz', 'potion-7', 17)");

    }
}
