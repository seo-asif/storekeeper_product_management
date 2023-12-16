<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function showSale()
    {
        $sales = DB::table('sales')
            ->join('products', 'sales.product_id', 'products.id')
            ->select('sales.*', 'products.name as product_name')
            ->orderBy('sales.created_at', 'desc')
            ->get();

        // return $sales;

        return view('pages.all_sale', compact('sales'));
    }

    public function viewSaleProduct()
    {
        $products = DB::table('products')->get();
        return view('pages.sale_product', compact('products'));
    }

    public function saleProduct(Request $request)
    {
        // Get the quantities sold from the request
        $quantitiesSold = $request->input('quantity_sold');

        // Loop through the sold quantities
        foreach ($quantitiesSold as $productId => $soldQuantity) {
            // Find the product in the database
            $product = DB::table('products')->find($productId);

            if ($product && $soldQuantity !== null) {
                if ($soldQuantity > $product->quantity) {
                    return redirect()->route('add.sale')->with('error', 'Not enough stock for ' . $product->name);
                }
                // Calculate the new quantity after sale
                $newQuantity = max(0, $product->quantity - $soldQuantity);

                // Update the product's quantity
                DB::table('products')->where('id', $productId)->update(['quantity' => $newQuantity]);

                // Calculate subtotal based on product price and sold quantity
                $subtotal = $product->price * $soldQuantity;

                // Insert a new record into the sales table
                DB::table('sales')->insert([
                    'product_id' => $productId,
                    'quantity'   => $soldQuantity,
                    'price'      => $product->price,
                    'subtotal'   => $subtotal,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        return redirect()->route('add.sale')->with('success', 'Products sold successfully');
    }

}
