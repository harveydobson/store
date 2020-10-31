<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotographController extends Controller
{
    public function index(Request $request)
    {
        $purchase_reference = $request->input('purchase_ref');
    }
}
