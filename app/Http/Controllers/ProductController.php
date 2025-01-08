<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //

    public function showElectronics(){
        $productSerive = new ProductService('Electronics');
        $products = $productSerive->getProducts();

        if(isset($products['error'])){
            return response()->json(['error' => $products['error']],500);
        }


        return response()->json($products);
    }
}
