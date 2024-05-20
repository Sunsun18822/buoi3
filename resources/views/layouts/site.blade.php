<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Thức ăn nhanh</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

</head>

<body>
    <header>
        <div class="logo">
            <img src="{{ asset('assets/images/logo.webp') }}" alt="Logo Công Ty ABC">
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                <li><a href="{{ url('/products') }}">Sản Phẩm</a></li>
                <li><a href="{{ url('/contact') }}">Liên Hệ</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer class="section_footer bg-dark text-white pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>VỀ CHÚNG TÔI</h4>
                    <p>Chúng tôi chuyên cung cấp các sản phẩm thực phẩm sạch, an toàn cho sức khoẻ người tiêu dùng <br>

                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#5f6368">
                            <path
                                d="M480-301q99-80 149.5-154T680-594q0-56-20.5-95.5t-50.5-64Q579-778 544-789t-64-11q-29 0-64 11t-65 35.5q-30 24.5-50.5 64T280-594q0 65 50.5 139T480-301Zm0 101Q339-304 269.5-402T200-594q0-71 25.5-124.5T291-808q40-36 90-54t99-18q49 0 99 18t90 54q40 36 65.5 89.5T760-594q0 94-69.5 192T480-200Zm0-320q33 0 56.5-23.5T560-600q0-33-23.5-56.5T480-680q-33 0-56.5 23.5T400-600q0 33 23.5 56.5T480-520ZM200-80v-80h560v80H200Zm280-514Z" />
                        </svg>Ladeco Building, 266 Doi Can Street, Hà Nội <br>

                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#5f6368">
                            <path
                                d="M760-480q0-117-81.5-198.5T480-760v-80q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-480h-80Zm-160 0q0-50-35-85t-85-35v-80q83 0 141.5 58.5T680-480h-80Zm198 360q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
                        </svg>1900 6750 <br>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#5f6368">
                            <path
                                d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                        </svg>Thứ 2 - Chủ nhật: 9:00 - 18:00 <br>

                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#5f6368">
                            <path
                                d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                        </svg>support@sapo.vn
                    </p>
                </div>
                <div class="col-md">
                    <h4> LIÊN KẾT NHANH</h4>
                    <ul>
                        <li>Trang chủ</li>
                        <li>Giới thiệu</li>
                        <li> Thực đơn</li>
                        <li>Tin tức</li>
                        <li> Liên hệ</li>
                        <li>Nhượng quyền</li>
                    </ul>

                </div>

                <div class="col-md">
                    <h4> HƯỚNG DẪN SỬ DỤNG</h4>
                    <ul>
                        <li>Trang chủ</li>
                        <li>Giới thiệu</li>
                        <li> Thực đơn</li>
                        <li>Tin tức</li>
                        <li> Liên hệ</li>
                        <li>Nhượng quyền</li>
                    </ul>
                </div>
                <div class="col-md">
                    <h4> KẾT NỐI VỚI DUALEO</h4>
                    <ul>
                        <li>Trang chủ</li>
                        <li>Giới thiệu</li>
                        <li> Thực đơn</li>
                        <li>Tin tức</li>
                        <li> Liên hệ</li>
                        <li>Nhượng quyền</li>
                    </ul>
                </div>
                <hr class="m-0 p-0">
                <div class="row py-3">
                    <div class="col-12 text-center">
                        © Bản quyền thuộc về Dualeo | Cung cấp bởi Sapo </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
