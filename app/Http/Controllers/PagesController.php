<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {		
    		$clients = 0;
    		return view('pages.index', compact('clients'));
    }

    public function about()
    {
    		return view('pages.about');
    }

    public function corporate()
    {
    		return view('pages.corporate');
    }

    public function clients()
    {
    		return view('pages.clients');
    }

    public function feed()
    {
    		return view('pages.feed');
    }

    public function payment()
    {
    		return view('pages.payment');
    }

    public function contact()
    {
    		return view('pages.contact');
    }
}
