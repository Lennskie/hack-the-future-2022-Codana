"use strict";

document.addEventListener("DOMContentLoaded", init);

let ingredients = [];

function init(){
    document.querySelectorAll('.clickable-ingredient').forEach(elem => {
        elem.addEventListener("click", addIngredientToCauldron);
    });

}


function addIngredientToCauldron(e){
    e.preventDefault();
    let ingredient = {"id": e.currentTarget.getAttribute('item-id'), "name": e.currentTarget.getAttribute('item-name')};
    ingredients.push(ingredient);
    console.log(ingredients);
    checkIngredients();
}

function checkIngredients(){
    if(ingredients.length > 0){
        document.querySelector(".button").style = "display: block";
    }
}
