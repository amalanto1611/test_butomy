<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Fetch all products from the database
        //dd( $products);
        return view('dashboard', compact('products'));
    }

}
