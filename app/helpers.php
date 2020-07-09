<?php

function setActive($routeName){
    return request()->routeIs($routeName) ? 'current-page-item' : '';
}