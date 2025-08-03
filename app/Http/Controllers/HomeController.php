<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
    }


    public function index_one_page()
    {
        return view('home.index-one-page');
    }


    public function index2()
    {
        return view('home.index2');
    }


    public function index2_one_page()
    {
        return view('home.index2-one-page');
    }


    public function index3()
    {
        return view('home.index3');
    }


    public function index3_one_page()
    {
        return view('home.index3-one-page');
    }

}
            