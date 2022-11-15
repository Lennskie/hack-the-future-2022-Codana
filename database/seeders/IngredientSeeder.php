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
        DB::insert("insert into ingredients (name, description, score) values ('basil', 'test', 1)");
        DB::insert("insert into ingredients (name, description, score) values ('chives', 'test', 2)");
        DB::insert("insert into ingredients (name, description, score) values ('flask-1', 'test', 3)");
        DB::insert("insert into ingredients (name, description, score) values ('lavender', 'test', 2)");
        DB::insert("insert into ingredients (name, description, score) values ('oregano', 'test', 4)");
        DB::insert("insert into ingredients (name, description, score) values ('rosemary', 'test', 1)");
        DB::insert("insert into ingredients (name, description, score) values ('sage', 'test', 2)");
        DB::insert("insert into ingredients (name, description, score) values ('wands', 'test', 1)");
        DB::insert("insert into ingredients (name, description, score) values ('potions', 'test', 3)");

    }
}
