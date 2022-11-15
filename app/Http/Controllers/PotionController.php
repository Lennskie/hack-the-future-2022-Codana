<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\Potion;


class PotionController extends Controller
{
    public function getPotions(){
        return Potion::all();
    }

    public function createPotion(Request $request){

    }
}
