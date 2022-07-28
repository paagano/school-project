<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        public function homePage()
    {
        return view("pages.home");
    }

        public function loginPage()
    {
        return view("pages.login");
    }

        public function signupPage()
    {
        return view("pages.signup");
    }     
    
        public function aboutPage()
    {
        return view("pages.about");
    }

        public function placesPage()
    {
        return view("pages.places");
    }

}
