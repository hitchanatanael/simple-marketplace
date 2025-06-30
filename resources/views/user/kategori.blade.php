@extends('layouts.user')
@section('main')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Makanan</h3>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    @foreach ($produk as $item)
                                        <div class="product"
                                            style="margin: 15px; border: 1px solid #eee; border-radius: 10px; padding: 15px;">
                                            <div class="product-img">
                                                <img src="{{ asset('storage/' . $item->foto) }}" alt=""
                                                    class="img-fluid"
                                                    style="height: 180px; object-fit: cover; width: 100%;">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category text-muted">{{ $item->kategori->nama }}</p>
                                                <h3 class="product-name">
                                                    <a href="#" class="text-dark">{{ $item->nama }}</a>
                                                </h3>
                                                <h4 class="product-price text-danger">
                                                    Rp{{ number_format($item->harga, 0, ',', '.') }}
                                                    <del class="product-old-price">Rp990.00</del>
                                                </h4>
                                                <div class="product-rating mb-2">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                </div>
                                                <a href="https://wa.me/6282285774472?text=Halo%20saya%20mau%20beli%20{{ urlencode($item->nama) }}"
                                                    target="_blank" class="btn btn-success btn-block mt-2">
                                                    <i class="fa fa-whatsapp"></i> Beli via WhatsApp
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav mt-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
