<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {

       if(request()->categorie) {

        $products = Product::with('categories')->whereHas('categories', function ($query) {
            $query->where('slug', request()->categorie);
        })->orderBy('created_at', 'DESC')->paginate(6);

      }else{
        $products = Product::with('categories')->paginate(6);
      }


        //dd($products);
        return view('products.index')->with('products',$products);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.show')->with('product', $product);
    }


}
