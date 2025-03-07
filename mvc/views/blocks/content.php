<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/main.css">
    <title>Document</title>
</head>

<body>
    <header class="hero-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="overlay"></div>
                    <img src="public/img/anh1.png" class="d-block w-100" alt="Banking">
                    <div class="carousel-caption">
                        <h1>Ngân Hàng Đơn Giản</h1>
                        <p>Giải pháp ngân hàng an toàn, đáng tin cậy và thuận tiện cho mọi người.</p>
                        <button class="btn btn-primary btn-lg">Bắt Đầu Ngay</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay"></div>
                    <img src="public/img/anh2.png" class="d-block w-100" alt="Mobile Banking">
                    <div class="carousel-caption">
                        <h1>Ngân Hàng Di Động</h1>
                        <p>Truy cập tài khoản của bạn mọi lúc, mọi nơi với ứng dụng di động an toàn của chúng tôi.</p>
                        <button class="btn btn-primary btn-lg">Tải Ứng Dụng</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay"></div>
                    <img src="public/img/anh2.png" class="d-block w-100" alt="Investment">
                    <div class="carousel-caption">
                        <h1>Phát Triển Tài Sản</h1>
                        <p>Khám phá các lựa chọn đầu tư và dịch vụ lập kế hoạch tài chính của chúng tôi.</p>
                        <button class="btn btn-primary btn-lg">Tìm Hiểu Thêm</button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center p-4 bg-white rounded shadow-sm h-100">
                        <div class="feature-icon bg-primary-subtle p-3 rounded-circle mx-auto mb-3">
                            <i class="bi bi-shield-lock fs-3 text-primary"></i>
                        </div>
                        <h3 class="h5">Ngân Hàng An Toàn</h3>
                        <p class="text-muted">Mã hóa tiên tiến và xác thực đa yếu tố để giữ an toàn cho tiền của bạn.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4 bg-white rounded shadow-sm h-100">
                        <div class="feature-icon bg-primary-subtle p-3 rounded-circle mx-auto mb-3">
                            <i class="bi bi-phone fs-3 text-primary"></i>
                        </div>
                        <h3 class="h5">Ngân Hàng Di Động</h3>
                        <p class="text-muted">Quản lý tài khoản, chuyển tiền và thanh toán hóa đơn từ điện thoại thông minh của bạn.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4 bg-white rounded shadow-sm h-100">
                        <div class="feature-icon bg-primary-subtle p-3 rounded-circle mx-auto mb-3">
                            <i class="bi bi-graph-up-arrow fs-3 text-primary"></i>
                        </div>
                        <h3 class="h5">Lập Kế Hoạch Tài Chính</h3>
                        <p class="text-muted">Tư vấn chuyên gia và công cụ giúp bạn đạt được mục tiêu tài chính.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./mvc/views/pages/" . $data["Page"] . ".php" ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>