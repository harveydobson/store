<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $purchase_reference = $request->input('purchaseref');
        return redirect()->route('asset', [ urlencode($purchase_reference) ]);
    }
}
