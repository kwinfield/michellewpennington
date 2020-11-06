<?php

namespace App\Http\Controllers;

use Session;
use Cart;
use App\Models\Book;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function cart_add()
    {

            //   dd(request()->all());

            $book = Book::find(request()->book_id);

            $cart = Cart::add([
                'id' => $book->id,
                'name' => $book->name,
                'qty' => request()->qty,
                'price' => $book->price
              ]);

            Cart::associate($cart->rowId, 'App\Models\Book');

            Session::flash('success', 'Product added to cart!');

            return redirect()->route('cart');
    }

    public function cart()
    {
        return view('cart');
    }

    public function cart_delete($id)
    {
        Cart::remove($id);

        Session::flash('success', 'Product removed from cart!');

        return redirect()->back();
    }

    public function incr($id, $qty)
    {
        Cart::update($id, $qty + 1);

        Session::flash('success', 'Product quantity updated!');

        return redirect()->back();
    }

    public function decr($id, $qty)
    {
        Cart::update($id, $qty - 1);

        Session::flash('success', 'Product quantity updated!');

        return redirect()->back();
    }
}
