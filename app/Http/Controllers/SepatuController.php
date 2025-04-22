<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu;

class SepatuController extends Controller
{
    public function index()
    {
        $sepatus = Sepatu::all(); 
        return view('sepatu.index', compact('sepatus'));
    }
}  