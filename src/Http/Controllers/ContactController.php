<?php

namespace Ratech\AdminPanel\Http\Controllers;



use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
}