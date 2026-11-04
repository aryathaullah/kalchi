<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index(){
        return view('pages.home', [
            'title' => 'Home | Kal-Chi',
            'faqs' => Faq::all(),
        ]);
    }
}
