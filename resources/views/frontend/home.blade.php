@extends('layouts.site')

@section('title', 'Trang Chủ')

@section('content')
   
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="assets/images/banner1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="assets/images/banner3.jpg" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <main>
      
        <section class="services">
            <h2>Bạn Muốn Ăn Gì Nào...</h2>
            <div class="service-item">
                <img src="{{ asset('assets/images/ham.jpg') }}" alt="Dịch Vụ 1">
                <h3>Hamburger</h3>
                <p>Hãy tưởng tượng một chiếc bánh hamburger với lớp vỏ bánh mềm mịn, bên trong là thịt bò nướng thơm lừng, phô mai tan chảy, rau tươi ngon và sốt đặc biệt. Mỗi miếng cắn đều đầy ắp hương vị, khiến bạn khó có thể cưỡng lại. 
                  Còn chờ gì nữa, hãy thưởng thức ngay một chiếc hamburger tuyệt hảo!</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/images/banhmi.jpg') }}" alt="Dịch Vụ 2">
                <h3>Bánh Mì Hong</h3>
                <p>Hãy tưởng tượng cắn vào một chiếc bánh mì nóng hổi, giòn tan, với lớp nhân thơm ngon gồm thịt nguội, pate, dưa chuột và rau thơm. Hương vị hòa quyện hoàn hảo, tạo nên trải nghiệm ẩm thực tuyệt vời. Chắc chắn bạn sẽ không thể cưỡng lại được sức hấp dẫn này đâu! 
                  Hãy tự thưởng cho mình một chiếc bánh mì ngay bây giờ nhé!</p>
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/images/khoaitay.jpg') }}" alt="Dịch Vụ 3">
                <h3>Khoai Tây Chiên</h3>
                <p>Hãy tưởng tượng vị giòn rụm, vàng ươm của khoai tây chiên nóng hổi tan chảy trong miệng bạn. Chấm thêm chút tương ớt hay sốt mayonnaise, ngon khó cưỡng! 
                  Bạn có muốn thử ngay không?</p>
            </div>
        </section>
    </main>
@endsection
