<?php
// made with TERMINAL command:
// php artisan make:controller PagesController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel!";
        //return view("pages.index", compact('title')); // Можно так
        return view("pages.index")->with('title', $title); // Лучше так
    }
    public function about(){
        $subtitle = "This is the about page";
        return view("pages.about")->with('subtitle', $subtitle); // Will be added with echo
    }
    public function services(){
        $data = array(
            'title' => "Services",
            'subtitle' => 'This is the services page',
            'services' => ['Web design', 'Programming','SEO']
        );
        return view("pages.services")->with($data);
    }
}
