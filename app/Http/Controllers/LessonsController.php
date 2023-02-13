<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonsController extends Controller
{
    //

    public function cal(){
        return view('setup.cal');
    }

    public function todo(){
        return view('setup.todo');
    }

    public function drop(){
        return view('setup.drop');
    }

    public function register(){
        return view('setup.register');
    }

    public function search(){
        return view('setup.search');
    }

    public function upload(){
        return view('setup.upload');
    }

    
}
