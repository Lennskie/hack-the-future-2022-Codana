<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\Potion;
use App\Models\Recipe;


class PotionController extends Controller
{
    public function getPotions(){
        return Potion::all();
    }

    public function createPotion(Request $request){
        $validated = $request->validate([
            'ingredients' => 'required|array',
        ]);

        $ingredients = $validated['ingredients'];
        $brew_score = 0;
        foreach($ingredients as $ingredient){
            $brew_score += $ingredient['score'];
        }
        $recipes = Recipe::all();
        foreach($recipes as $recipe){
            if($recipe['required_score'] == $brew_score){
                $potion = new Potion();
                $potion->name = $recipe['name'];
                $potion->description = "";
                $potion->save();
                return $potion;
            }
        }

    }
}
