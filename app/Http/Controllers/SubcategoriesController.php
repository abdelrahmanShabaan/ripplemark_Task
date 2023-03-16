<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcategories;

class SubcategoriesController extends Controller
{
    public function index()
    {
        $subcategories = subcategories::all();
        return view('subcategories', compact('subcategories'));

    }
}
