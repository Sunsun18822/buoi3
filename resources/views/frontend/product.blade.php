@extends('layouts.site')

@section('title', 'Sản Phẩm')

@section('content')
  <div class="products" id="products">
    <div class="products-container">
      <!-- box 1 -->
      <div class="box">
        <img src="assets/images/_com1.webp"/>
        <div class="box-text">
          <h6>FastFood</h6>
          <h2>Mì RaMen</h2>
          
          <h3 class="price">150.000</h3>
          <i class="ph ph-shopping-cart"></i>
          <i class="ph-fill ph-heart"></i>
          <span class="discount">-20%</span>
        </div>
      </div>
      <!-- box 2 -->
      <div class="box">
        <img src="assets/images/snack.webp" alt="" />
        <div class="box-text">
          <h6>FastFood</h6>
          <h2>Snack Khoai Tây</h2>
          <h3 class="price">15.000</h3>
          <i class="ph ph-shopping-cart"></i>
          <i class="ph-fill ph-heart"></i>
          <!-- <span class="discount">-20%</span> -->
        </div>
      </div>
      <!-- box 3 -->
      <div class="box">
        <img src="assets/images/_com3.webp" alt="" />
        <div class="box-text">
          <h6>FastFood</h6>
          <h2>Gà Cay</h2>
          <h3 class="price">200.000</h3>
          <i class="ph ph-shopping-cart"></i>
          <i class="ph-fill ph-heart"></i>
          <span class="discount">-20%</span>
        </div>
      </div>
      <!-- box 4 -->
      <div class="box">
        <img src="assets/images/ham.jpg" alt="" />
        <div class="box-text">
          <h6>FastFood</h6>
          <h2>HamBurGer</h2>
          <h3 class="price">50.000</h3>
          <i class="ph ph-shopping-cart"></i>
          <i class="ph-fill ph-heart"></i>
          <!-- <span class="discount">-20%</span> -->
        </div>
      </div>
      <div class="box">
        <img src="assets/images/banhmi.jpg" alt="" />
        <div class="box-text">
          <h6>FastFood</h6>
          <h2>Bánh Mì</h2>
          <h3 class="price">30.000</h3>
          <i class="ph ph-shopping-cart"></i>
          <i class="ph-fill ph-heart"></i>
          <span class="discount">-20%</span>
        </div>
      </div>
      <div class="box">
        <img src="assets/images/khoaitay.jpg" alt="" />
        <div class="box-text">
          <h6>FastFood</h6>
          <h2>Khoai Tây Chiên</h2>
          <h3 class="price">45.000</h3>
          <i class="ph ph-shopping-cart"></i>
          <i class="ph-fill ph-heart"></i>
          <!-- <span class="discount">-20%</span> -->
        </div>
      </div>
    </div>
  </div>  
@endsection
