@extends('layouts.user')
@section('main')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Minuman</h3>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">

                                    @foreach ($produk as $item)
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{ asset('storage/' . $item->foto) }}" alt=""
                                                    style="max-height: 100px">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{ $item->kategori->nama }}</p>
                                                <h3 class="product-name">
                                                    <a href="#">{{ $item->nama }}</a>
                                                </h3>
                                                <h4 class="product-price">
                                                    Rp{{ $item->harga }}
                                                    <del class="product-old-price">Rp990.00</del>
                                                </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div>
                                                    <button class="btn btn-success">
                                                        <i class="bi bi-whatsapp"></i>
                                                        Whatsapp
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
