@extends('layouts.site')

@section('title', 'Chi Tiết Sản Phẩm')

@section('content')
    <main>
        <section class="product-detail">
            <h2>Chi Tiết Sản Phẩm</h2>
            <div class="product-image">
                <img src="{{ asset('images/product-detail.jpg') }}" alt="Chi Tiết Sản Phẩm">
            </div>
            <div class="product-info">
                <h3>Sản Phẩm 1</h3>
                <p>Mô tả chi tiết về sản phẩm 1. Đây là sản phẩm chất lượng cao với nhiều tính năng nổi bật.</p>
                <p>Giá: 1,000,000 VND</p>
                <button>Mua Ngay</button>
            </div>
        </section>
    </main>
@endsection
