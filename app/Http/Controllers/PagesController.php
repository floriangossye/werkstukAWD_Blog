<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
return view('pages.welcome');
    }
     public function getAbout(){
        $first = 'Florian';
        $last = 'Gossye';
        $full = $first." ".$last;
        $email = 'florian_gossye@hotmaail.com';
        $data=[];
        $data['email'] = $email;
        $data['full'] = $full;

     return view('pages.about')->withData($data);
     }
     public function getPost(){
         return view('pages.post');
     }
     public function postContact(){

     }
}