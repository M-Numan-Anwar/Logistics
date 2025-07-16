<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }
      public function homeOne()
    {
        return view('home');
    }
        public function homeTwo()
    {
        return view('home-two');
    }
         public function homeThree()
    {
        return view('home-three');
    }
         public function homeDark()
    {
        return view('home-dark');
    }
          public function roadFreight()
    {
        return view('road-freight');
    }
           public function airFreight()
    {
        return view('air-freight');
    }
      public function about() {
        return view('about');
    }

    public function service() {
        return view('service');
    }
      public function serviceDetails() {
        return view('service-details');
    }

    public function team() {
        return view('team');
    }
       public function teamDetails() {
        return view('team-details');
    }
     public function project() {
        return view('project');
    }
          public function projectDetails()
    {
        return view('project-details');
    }
     public function faq() {
        return view('faq');
    }
      public function notfound()
    {
        return view('404');
    }
       public function blog()
    {
        return view('blog');
    }
         public function blogDetails()
    {
        return view('blog-details');
    }
        public function contact()
    {
        return view('contact');
    }
}
