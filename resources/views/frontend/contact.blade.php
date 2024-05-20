@extends('layouts.site')

@section('title', 'Liên Hệ')

@section('content')
    <main>
        <section class="contact-form">
            <h2>Liên Hệ Với Tôi Để Đặt Hàng Nhé</h2>
            <form action="submit-contact.php" method="post">
                <label for="name">Họ và Tên:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Nội Dung:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Gửi</button>
            </form>
            <p>Hoặc liên hệ với tôi qua số điện thoại: <strong>035 355 1494</strong> hoặc email: <strong>nguyenthithaoxuan.04022004@gmail.com</strong>.</p>
        </section>
    </main>
@endsection
