@extends('layout')

@section('title')
    Evolve - From Heart Breaks to Hearts Healed
@endsection

@section('content')
    <div class="container">
                <div class="product-details row justify-content-center">
                    <div class="col-10 col-xl-6">
                        <div>
                            <img src="{{ asset($book->image) }}" alt="product" class="mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-10 col-xl-6">
                        <form action="/cart/add" method="POST">
                            {{ csrf_field() }}
                            <div class="product-details-info">
                                <div class="product-details-info-price text-success mt-3" name="price">${{ $book->price }}</div>
                                <h3 class="product-details-info-title">{{ $book->name }}</h3>
                                <p class="product-details-info-text" name="description">{{ $book->description }}
                                </p>
                                
                                <input type="hidden" name="book_id" value="{{ $book->id }}">

                                <div class="row">
                                    <div class="quantity mx-auto">
                                        <a href="#" class="quantity-minus quantity-minus-d bg-danger">-</a>
                                        <input title="Qty" class="email input-text qty text-secondary" type="text" value="1" name="qty">
                                        <a href="#" class="quantity-plus quantity-plus-d bg-success">+</a>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <button href="19_cart.html" class="btn btn-secondary mx-auto d-block">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
@endsection