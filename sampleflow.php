<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   //
   public function showAll() {
      $dataDariModel = "Data Product";
      return view ('product.display', ["products" =>
      $dataDariModel]);
   }
}
