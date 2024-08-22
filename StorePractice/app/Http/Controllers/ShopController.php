<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller {
    public function show($id) {
        // TBA Item Model
        $item = Item::find($id);

        if ($item) {
            return view('shop-details', ['item' => $item]);
        }
    }
}
