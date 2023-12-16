<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('pages.add_product');
    }

    public function updatePrice()
    {
        $products = DB::table('products')->get();

        return view('pages.update__product_price', compact('products'));
    }

    public function storeProduct(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name'     => 'required|max:100',
            'quantity' => 'nullable|integer',
            'price'    => 'required|numeric',
        ]);

        // Insert the product into the database using query builder
        DB::table('products')->insert([
            'name'       => $validatedData['name'],
            'quantity'   => $validatedData['quantity'],
            'price'      => $validatedData['price'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Optionally, you can redirect to a specific route or perform other actions
        return redirect()->route('add.product')->with('success', 'Product created successfully');
    }

    public function updateProductPrice(Request $request)
    {

        foreach ($request->input('update_price') as $productId => $updatedPrice) {
            // Use query builder to update product price
            if ($updatedPrice !== null) {
                // Use query builder to update product price
                DB::table('products')->where('id', $productId)->update(['price' => $updatedPrice]);
            }
        }

        return redirect()->route('update.price')->with('success', 'Product prices updated successfully');
    }

}
