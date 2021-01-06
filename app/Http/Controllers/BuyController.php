<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    //
    public function buy($purchase_reference)
    {
        $image_file = base_path() . '/digitalassets/HIGHRES/' . $purchase_reference . '.jpg';

        if(!file_exists($image_file))
        {
            return view('welcome')->with('status', 'Cannot find asset for that purchase reference, please try again.');
        }

        return view('buy')->with('purchase_ref', $purchase_reference);
    }


}
