<?php

//rende template home
require 'src/render.php';
$title= "Dashboard";

echo render('dashboard', ['title'=>$title]);