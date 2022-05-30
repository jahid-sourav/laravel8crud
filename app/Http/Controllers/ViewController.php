<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class ViewController extends Controller
{
   protected $brands;
   public function index()
   {
        $this->brands = Brand::all();
        return view('theme.home', ['brands' => $this->brands]);
   }
}
