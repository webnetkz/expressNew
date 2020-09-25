"use strict";
import {parallaxScroll} from './moduls/parallaxScroll.js';
parallaxScroll('.slider');
import {darkMod} from './moduls/darkMod.js';
//darkMod();

function showMenu(elem) {
    let menu = document.querySelector('menu');
    let closeMenuMob = document.querySelector('.closeMenuMob');

    elem.style.opacity = '0';
    closeMenuMob.style.right = '10px';
    menu.style.left = '0px';
}
function closeMenu(elem) {
    let menu = document.querySelector('menu');
    let menuMob = document.querySelector('.menuMob');

    menuMob.style.opacity = '1';
    elem.style.right = '-20%';
    menu.style.left = '-100%';
}