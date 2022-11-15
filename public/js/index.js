"use strict";

document.addEventListener("DOMContentLoaded", init);

let ingredients = [];

function init(){
    document.querySelectorAll('.clickable-ingredient').forEach(elem => {
        elem.addEventListener("click", addIngredientToCauldron);
    });
    document.querySelectorAll('.brewedPotions a').forEach(elem => {
        elem.addEventListener("click", addPotionToCauldron);
    });

}


function addIngredientToCauldron(e){
    e.preventDefault();
    let ingredient = {"id": e.currentTarget.getAttribute('item-id'), "name": e.currentTarget.getAttribute('item-name'), 'is_potion':false};
    ingredients.push(ingredient);
    checkIngredients();
    updateGui();
}

function checkIngredients(){
    if(ingredients.length > 0){
        document.querySelector(".button").style = "display: block";
    }else{
        document.querySelector('.button').style = "display: none";
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
    document.querySelectorAll('.brewedPotions a').forEach(elem => {
        elem.addEventListener("click", removePotion);
    });
}

function removeIngredient(e){
    let exit = false;
    ingredients.forEach(elem => {
        if(exit) return;
        if(elem.id == e.currentTarget.getAttribute('item-id') && !elem.is_potion){
            ingredients.splice(ingredients.indexOf(elem), 1);
            exit = true;
        }
    });
    updateGui();
}

function removePotion(e){
    let exit = false;
    ingredients.forEach(elem => {
        if(exit) return;
        if(elem.id == e.currentTarget.getAttribute('item-id') && elem.is_potion){
            ingredients.splice(ingredients.indexOf(elem), 1);
            exit = true;
        }
    });
    updateGui();
}

function addPotionToCauldron(e){
    e.preventDefault();
    let ingredient = {"id": e.currentTarget.getAttribute('item-id'), "name": e.currentTarget.getAttribute('item-name'), 'is_potion':false};
    ingredients.push(ingredient);
    checkIngredients();
    updateGui();
}
