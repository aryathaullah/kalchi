<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use Illuminate\Http\Request;

class FounderController extends Controller{

    public function index(){

        return view('pages.founder', [
            'title' => 'OUR FOUNDERS',
            'founders' => Founder::all(),
        ]);

    }
    
}









