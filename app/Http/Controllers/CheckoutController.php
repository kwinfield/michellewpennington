<?php

namespace App\Http\Controllers;

use Session;
use Mail;
use Stripe\Charge;
use Stripe\Stripe;
use Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function pay()
    {
        Stripe::setApiKey('sk_test_51HkDDJGmOrpmjtnUgTTKp1SRecLMYyXtbzQerrL9prjhUgoXbZoMqRzxDXabWiZZyCzjQd0speXSSlQsKem4Qswl000tmVsNuO');

        $token = request()->stripeToken;

        $charge = Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'description' => 'test selling books',
            'source' => $token
        ]);

        Session::flash('success', 'Purchase successfull. We will email you soon.');

        Cart::destroy();

        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

        return redirect('/');


    }
}


