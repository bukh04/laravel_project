<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ContantController extends Controller
{
    public function index(){
       return view('contacts');
    }
}
