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

    public function payment()
    {
    		return view('pages.payment');
    }

}
