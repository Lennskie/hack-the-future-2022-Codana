<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function addIngredient(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        $ingredient = new Ingredient();
        $ingredient->name = $validated['name'];
        $ingredient->description = $validated['description'];
        $ingredient->score = rand(1,4);
        $ingredient->save();
        return $ingredient;
    }

    public function getIngredients(){
        return Ingredient::all();
    }
}
