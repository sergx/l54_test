<?php
// made with TERMINAL command:
// php artisan make:controller PagesController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view("pages.index");
        // return "Index!";
    }
    public function about(){
        return view("pages.about");
    }
    public function services(){
        return view("pages.services");
    }
}
