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

        $ingredients = $request['ingredients'];
        return $ingredients;
        return response()->json(["ingredients"=>$ingredients]);
        $brew_score = 0;
        foreach($ingredients as $ingredient){
            if($ingredient['is_potion']) {
                $brew_score = $brew_score + Potion::where('id', $ingredient['id'])->first()->score;
            }else{
                $brew_score = $brew_score + Ingredient::where('id', $ingredient['id'])->first()->score;
            }
        }
        $recipes = Recipe::all();
        foreach($recipes as $recipe){
            if($recipe['required_score'] == $brew_score){
                $potion = new Potion();
                $potion->name = $recipe['name'];
                $potion->description = $recipe['image_description'];
                $potion->score = $brew_score;
                $potion->save();
                return response()->json(["potion" => $potion]);
            }
        }
        return response()->json(["error"=> "could not make potion"], 400);
    }
}
