<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    //
    public function index()
    {
        $material = Material::all();
        return view('textlearning');
    }
}
