<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    //
    public function buy(Request $request, $purchase_reference)
    {

        //$stripeCustomer = $user->createAsStripeCustomer();

        $image_file = base_path() . '/digitalassets/HIGHRES/' . $purchase_reference . '.jpg';

        if(!file_exists($image_file))
        {
            return view('welcome')->with('status', 'Cannot find asset for that purchase reference, please try again.');
        }


        $stripeCharge = $request->user()->charge(
            1, $request->paymentMethodId
        );

        $request->user()->createOrGetStripeCustomer();

        return view('buy')->with('purchase_ref', $stripeCharge);
    }


}
