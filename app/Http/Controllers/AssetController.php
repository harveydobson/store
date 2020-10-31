<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function indexByPost(Request $request)
    {
        return $this->image_check($request->input('purchase_ref'));
    }

    public function indexByGet($purchase_ref)
    {
        return $this->image_check($purchase_ref);
    }

    public function image_check($purchase_reference)
    {
        $image_file = base_path() . '/digitalassets/HIGHRES/' . $purchase_reference . '.jpg';

        if(file_exists($image_file))
        {
            return view('asset')->with('purchase_ref', $purchase_reference);

        } else {
            return view('welcome')->with('status', 'Cannot find asset for that purchase reference, please try again.');
        }
    }

    public function image($purchase_reference)
    {
        $pathToFile = base_path() . '/digitalassets/PROOF/' . $purchase_reference . '.jpg';

        return response()->file($pathToFile);
    }
}
