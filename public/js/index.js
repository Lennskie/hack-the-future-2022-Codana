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
        document.querySelector(".button").addEventListener("click", brewPotion);
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
    checkIngredients();
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


async function brewPotion(){
    ingredients.forEach(elem => {
        if(elem.name.includes("potion")){
            elem.is_potion = true;
        }
    })
    let api = window.location.href;
    api = api.slice(0, -2);
    const data = await fetch(`http://htf2022.local/api/potions/create`,{
        method:"post",
        headers:{
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            "ingredients": ingredients
        })
    })
    if(data.status === 200){
        location.reload();
    }
    if(data.status === 400){
        alert("no rizz");
    }

}
