<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into ingredients (name, description, score) values ('Basil', 'test', 1)");
        DB::insert("insert into ingredients (name, description, score) values ('Chives', 'test', 2)");
        DB::insert("insert into ingredients (name, description, score) values ('Flask', 'test', 3)");
        DB::insert("insert into ingredients (name, description, score) values ('Lavender', 'test', 2)");
        DB::insert("insert into ingredients (name, description, score) values ('Oregano', 'test', 4)");
        DB::insert("insert into ingredients (name, description, score) values ('Rosemary', 'test', 1)");
        DB::insert("insert into ingredients (name, description, score) values ('Sage', 'test', 2)");
        DB::insert("insert into ingredients (name, description, score) values ('Wands', 'test', 1)");
        DB::insert("insert into ingredients (name, description, score) values ('Specialties', 'test', 3)");

    }
}
