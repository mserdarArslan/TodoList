<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $data = array(
            'name' => 'Serdar ARSLAN',
            'date' => date('Y-m-d')
        );
        return view('welcome')->with($data);
    }
}