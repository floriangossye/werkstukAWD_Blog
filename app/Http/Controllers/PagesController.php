<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
return view('pages.welcome');
    }
     public function getAbout(){
     return view('pages.about');
     }
     public function getPost(){
         return view('pages.post');
     }
     public function postContact(){

     }
}