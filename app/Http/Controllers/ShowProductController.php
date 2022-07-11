<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    public function index()
    {
        # code...
        $data = product::all();
        $count = product::count();
        $name = [];
        
        $new_product = new product;
        $new_product->product_name = 'test insert product';
        $new_product->save();

        foreach ($data as $key => $value) {
            $name[] = $value->product_name;
        }
        // var_dump($name);
        return view('productShow', compact(['data','name','count']));
    }
}
