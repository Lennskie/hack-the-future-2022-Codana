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
    updateGui();
}

function checkIngredients(){
    if(ingredients.length > 0){
        document.querySelector(".button").style = "display: block";
    }
}

function updateGui(){
    document.querySelector(".currentPotionList").innerHTML = "";
    ingredients.forEach(ingredient => {
        document.querySelector(".currentPotionList").innerHTML += `<img item-id="${ingredient.id}"  src="/img/${ingredient.name}.png">`
    });
    document.querySelectorAll('.currentPotionList img').forEach(elem => {
        elem.addEventListener("click", removeIngredient);
    });
}

function removeIngredient(e){
    console.log(e.currentTarget);
    let exit = false;
    ingredients.forEach(elem => {
        if(exit) return;
        if(elem.id == e.currentTarget.getAttribute('item-id')){
            ingredients.splice(ingredients.indexOf(elem), 1);
            exit = true;
        }
    });
    updateGui();
}
