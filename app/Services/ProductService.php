<?php
namespace App\Services;

use Exception;
use Illuminate\Support\Facades\DB;

class ProductService{
    private $category;

    public function __construct($category){
        $this->category = $category;
    }
    
    public function getProducts(){

        try{
            return DB::table('products')->where('category', $this->category)->get(['id', 'name', 'category', 'price']);
        }
        catch(Exception $e){
            return ['error' => $e->getMessage()];
        }
    }
}


