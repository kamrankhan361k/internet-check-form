<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternetCheckController extends Controller
{
    public function showForm()
    {
        return view('internet-check');
    }
}
