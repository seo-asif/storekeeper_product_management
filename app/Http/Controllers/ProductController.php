<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('pages.add_product');
    }

    public function updatePrice()
    {
        return view('pages.update__product_price');
    }
}
