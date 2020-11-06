@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row bg-border-color">
            <div class="container">
                <div class="row">

                    <div class="col-12">

                        <div class="cart">

                            <h1 class="cart-title">In Your Shopping Cart: <span class="c-primary"> {{ Cart::content()->count() }} items</span></h1>

                        </div>

                        <form action="#" method="post" class="cart-main col-lg-6">

                            {{-- <table class="shop_table cart">
                                <thead class="cart-product-wrap-title-main">
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody> --}}

                                @foreach (Cart::content() as $book)
                                {{-- <tr class="cart_item">

                                    <td class="product-remove">
                                        <a href="{{ route('cart.delete', ['id' => $book->rowId ])}}">
                                            <button type="button" class="close mx-5" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </a>
                                    </td>

                                    <td class="product-thumbnail">

                                        <div class="cart-product__item">
                                            <img src="{{ asset($book->model->image)}}" alt="product" style="width: 200px" class="ml-5">
                                            <div class="cart-product-content">
                                                <p class="cart-author">{{ $book->name }}</p>
                                                <h5 class="cart-product-title">Search Marketing</h5>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="product-price">
                                        <h5 class="price amount">${{ $book->price }}</h5>
                                    </td>

                                    <td class="product-quantity">

                                        <div class="quantity">
                                            <a href="{{ route('cart.decr', ['id' => $book->rowId, 'qty' => $book->qty ]) }}" class="quantity-minus">-</a>
                                            <input title="Qty" class="email input-text qty text" type="text" placeholder="1" readonly value="{{ $book->qty }}">
                                            <a href="{{ route('cart.incr', ['id' => $book->rowId, 'qty' => $book->qty ]) }}" class="quantity-plus">+</a>
                                        </div>

                                    </td>

                                    <td class="product-subtotal">
                                        <h5 class="total amount">{{ $book->total()}}</h5>
                                    </td>

                                </tr> --}}
                                <div class="container">
                                    <div class="product-details row justify-content-center">
                                        <div class="col-12">
                                            <h4 class="product-details-info-title mt-5 text-center">{{ $book->name }}</h4>
                                            <h5 class="text-success mt-3 text-center" name="price">${{ $book->price }}</h5>
                                            <div>
                                                <img src="{{ asset($book->model->image)}}" alt="product" class="mx-auto d-block mb-5 img-fluid" style="max-width: 200px">
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="product-details-info">
                                                
                             
                                                <div class="row">
                                                    <div class="quantity mx-auto">
                                                        <a href="{{ route('cart.decr', ['id' => $book->rowId, 'qty' => $book->qty ]) }}" class="quantity-minus text-danger">-</a>
                                                        <input title="Qty" class="email input-text qty text-secondary" type="text" placeholder="1" readonly value="{{ $book->qty }}">
                                                        <a href="{{ route('cart.incr', ['id' => $book->rowId, 'qty' => $book->qty ]) }}" class="quantity-plus text-success">+</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                

                                {{-- <tr>
                                    <td colspan="5" class="actions">

                                        <div class="coupon">
                                            <input name="coupon_code" class="email input-standard-grey" value="" placeholder="Coupon code" type="text">
                                            <div class="btn btn-medium btn--breez btn-hover-shadow">
                                                <span class="text">Apply Coupon</span>
                                                <span class="semicircle--right"></span>
                                            </div>
                                        </div>

                                        <div class="btn btn-medium btn--dark btn-hover-shadow">
                                            <span class="text">Apply Coupon</span>
                                            <span class="semicircle"></span>
                                        </div>

                                    </td>
                                </tr> --}}

                                </tbody>
                            </table>


                        </form>

                        <div class="cart-total col-lg-6">
                            <h3 class="cart-total-title">Cart Total</h3>
                            <h5 class="cart-total-total">Total: <span class="text-success">${{ Cart::total()}}</span></h5>
                            <a href="{{ route('cart.checkout')}}">
                                <button class="btn btn-secondary mb-5">Checkout</button>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection