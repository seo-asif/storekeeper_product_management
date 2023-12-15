<?php

namespace App\Http\Controllers;

class SaleController extends Controller
{
    public function showSale()
    {
        return view('pages.all_sale');
    }

    public function saleProduct()
    {
        return view('pages.sale_product');
    }
}
