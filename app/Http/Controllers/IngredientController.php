<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class IngredientController extends Controller
{
    public function addIngredient(Request $request){

    }

    public function getIngredients(){
        return Ingredient::all();
    }
}
