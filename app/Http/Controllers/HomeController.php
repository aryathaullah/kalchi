<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index(){
        return view('pages.home', [
            'title' => 'HOME | KAL-CHI',
            'faqs' => Faq::where('is_active', true)->get(),
        ]);
    }
}
