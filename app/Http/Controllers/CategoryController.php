<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	return Category::all();
    }

    public function topics($categoryID)
    {
    	return Category::findOrFail($categoryID)
    				->topics()
    				->orderBy('created_at', 'desc')
    				->get();
    }
}
