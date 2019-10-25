<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <title>Trường Đại Học Nguyễn Tất Thành</title>
    <!-- My CSS -->
    <link rel="stylesheet" href=vendor/bootstrap.min.css> <script src="vendor/jquery-3.3.1.slim.min.js">
    </script>
    <script src="vendor/popper.min.js"></script>
    <script src="vendor/font-awesome.min.css"></script>
    <script src="vendor/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="https://s3-ap-northeast-1.amazonaws.com/vnschool/school/799/truong-dai-hoc-nguyen-tat-thanh-0-5UyHiA.jpg" type="image/x-icon">
    <link rel="stylesheet" href="public/css/index.css">



</head>

<body>
 
<!-- header -->
<?php if (session_id() == '') session_start(); ?>
<div class="top-header">
    <span class="top-header__hotline">HOTLINE: 0912.289.300 - 0906.289.300</span>
    <div class="top-header__right">
        <ul class="top-header__items">
            <li class="top-header__item">Sinh Viên</li>
            <li class="top-header__item">Giảng Viên</li>
            <li class="top-header__item">Đào Tạo Quốc Tế</li>
            <?php if (isset($_SESSION['name'])) : ?>
                <li class="top-header__item"><a href="profile.php">Xin chào <?php echo $_SESSION['name'] ?></a></li>
                <li class="top-header__item"><a href="dangxuat.php">Đăng Xuất</a></li>
            <?php else : ?>
                <li class="top-header__item"><a href="dangnhap.php">Đăng Nhập</a></li>
                <li class="top-header__item"><a href="dangky.php">Đăng Ký</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<div class="main-header">
    <div class="main-header__image">
        <a href="index.php"><img src=" public/img/logo_ntt.png" alt=""></a>
    </div>
    <div class="main-header__right">
        <ul class="main-header__items">
            <li class="main-header__item"><i class="fa fa-info-circle"></i> giới thiệu</li>
            <li class="main-header__item"><i class="fa fa-graduation-cap"></i> tuyển sinh</li>
            <li class="main-header__item"><i class="fa fa-book"></i> đào tạo</li>
            <li class="main-header__item"><i class="fa fa-bookmark"></i> nghiên cứu</li>
            <li class="main-header__item"><i class="fa fa-handshake-o"></i> hợp tác doanh nghiệp</li>
        </ul>
    </div>
</div>


<!-- end header -->

<div class="main-content">
        <div class="main-slider">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="bottom-banner">
                                <img src="public/img/banner1.jpg" class="d-block w-100" alt="...">
                                <h2>Trường đại học Nguyễn Tất Thành nhận hồ sơ đến hết ngày 03/09/2019</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="bottom-banner">
                                <img src="public/img/Chinh-sach-hoc-bong-NTTU_Web-Slider.jpg" class="d-block w-100"
                                    alt="...">
                                <h2>Chính sách học bổng trường đại học Nguyễn Tất Thành 2019</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="bottom-banner">
                                <img src="public/img/BANER-FUTSAL-SINH-VIEN-TP-HCM-2019_NTTU.jpg" class="d-block w-100"
                                    alt="...">
                                <h2>Giải đấu futsal SV Thành Phố Hồ Chí Minh 2019</h2>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- end main content -->

<?php
if (session_id() == '') {
    session_start();
}
require_once('database/xulicsdl.php');
$posts = get3post();
?>
<!-- newspaper -->
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h2>Tin Tức</h2>
                <span class="mb-3" style="width: 40px; height: 2px; background: #aa914d;display:block;"></span>
                <div class="content-news">
                    <!-- <div class="container"> -->
                    <div class="row mb-3">
                        <!--  -->
                        <?php foreach ($posts as $post) : ?>
                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="<?php echo $post['img_title'] ?>" class="img-fluid">
                                    <div class="card-body pt-0 pl-2">
                                        <h5 class="card-title" style="font-style: 16px;"></h5> <a href="postdetail.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></h5>
                                        <p class="card-text" style="font-size: 13px;"><?php echo $post['content'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!--  -->

                    </div>
                    <div class="row">
                        <div class="col-9 more">
                            <a href="#" class="mr-0"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                        </div>
                    </div>

                </div>

            </div>


            <div class="col-sm-3">
                <h2>Media</h2>
                <span class="mb-3" style="width: 40px; height: 2px; background: #aa914d;display:block;"></span>
                <div class="video">
                    <div class="img-container">
                        <iframe width="270" height="140" src="https://www.youtube.com/embed/JViDyojZzhs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <br>
                    <ul class="list-news">
                        <li><a href="#"><i class="fa fa-angle-right"></i>Điểm tin tháng 8</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>ĐH Nguyễn Tất Thành - 20 năm dấu ấn một
                                chặng đường</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>NỎ THẦN-TẬP 8 | BẬT MÍ VỀ NỎ THẦN VÀ NHỮNG
                                CÂU CHUYỆN CÓ THẬT</a></li>
                    </ul>
                    <div class="seemore-right my-4">
                        <a href="#"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- end newspaper -->

<div class="container mb-5 py-5" style="background: #024282;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_doanhnghiep-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Chuẩn 3 sao QS-Stars (Anh Quốc)</h5>
                                <p class="card-text text-white text-center">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_nguoithay-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Đạt chuẩn chất lượng quốc gia</h5>
                                <p class="card-text text-white text-center">Là trường đại học ngoài công lập đầu tiên tại TP>HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&ĐT ban hành.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_nhatruong-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Đại học hạnh phúc</h5>
                                <p class="card-text text-white text-center">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_sinhvien-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Chuẩn 3 sao QS-Stars (Anh Quốc)</h5>
                                <p class="card-text text-white text-center">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_xhoi-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Chuẩn 3 sao QS-Stars (Anh Quốc)</h5>
                                <p class="card-text text-white text-center">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card pt-5 border-0" style="background: url(http://ntt.edu.vn/web/upload/images/hp_doanhnghiep-01.svg) no-repeat top/50%">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center" style="font-size: 24px;">Chuẩn 3 sao QS-Stars (Anh Quốc)</h5>
                                <p class="card-text text-white text-center">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev justify-content-start" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next justify-content-end" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="row my-4">
    <div class="container">
        <div class="row">

            <div class="col-4">
                <h3 class="lead mb-1">Hợp tác quốc tế</h3>
                <span class="mb-3" style="width: 80px; height: 2px; background: #aa914d;display:block;"></span>
                <div class="card border-0" style="width: 18rem;">
                    <img class="card-img-top img-fluid" style="height: 180px;" src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201910_tin/72329960_550533865752919_8452850179488350208_n.jpg">
                    <div class="card-body px-0">
                        <h5 class="card-title" style="font-size: 18px;">Sinh viên Hàn Quốc tham gia học tập Tiếng Việt</h5>
                        <p class="card-text" style="font-size: 13px;">NTTU – Sáng ngày 07/10/2019, tại cơ sở quận 7, Trường ĐH Nguyễn Tất Thành đã tổ chức thành công chương trình Khai giảng khóa học Tiếng Việt ĐH Kyungsung (Hàn Quốc)</p>
                    </div>
                    <div class="more">
                        <a href="#" class="mr-0"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <h3 class="lead mb-1">Môi trường học tập</h3>
                <span class="mb-3" style="width: 80px; height: 2px; background: #aa914d;display:block;"></span>
                <div class="card border-0" style="width: 18rem;">
                    <img class="card-img-top img-fluid" style="height: 180px;" src="http://ntt.edu.vn/web/upload/images/3e3.JPG">
                    <div class="card-body px-0">
                        <h5 class="card-title" style="font-size: 18px;">Tìm hiểu về các câu lạc bộ tại Trường ĐH Nguyễn Tất Thành</h5>
                        <p class="card-text" style="font-size: 13px;">NTTU – Sáng ngày 07/10/2019, tại cơ sở quận 7, Trường ĐH Nguyễn Tất Thành đã tổ chức thành công chương trình Khai giảng khóa học Tiếng Việt ĐH Kyungsung (Hàn Quốc)</p>
                    </div>
                    <div class="more">
                        <a href="#" class="mr-0"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <h3 class="lead mb-1">Sự kiện nổi bật</h3>
                <span class="mb-3" style="width: 80px; height: 2px; background: #aa914d;display:block;"></span>
                <div class="card border-0 my-3" style="">
                    <div class="row align-items-center">
                        <div class="col-3 text-center" style="background: #024282; color:white; font-size: 30px;">
                            Oct <br> 10
                        </div>
                        <div class="col-9">
                            <div class="card-body py-0">
                                <h5 class="card-title" style="font-size: 16px; font-weight: 600;">Ngày Doanh nhân Việt Nam và Đại hội CLB Doanh nghiệp Trường Đại học Nguyễn Tất Thành</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 my-3" style="">
                    <div class="row align-items-center">
                        <div class="col-3 text-center" style="background: #024282; color:white; font-size: 30px;">
                            Oct <br> 10
                        </div>
                        <div class="col-9">
                            <div class="card-body py-0">
                                <h5 class="card-title" style="font-size: 16px; font-weight: 600;">Ngày Doanh nhân Việt Nam và Đại hội CLB Doanh nghiệp Trường Đại học Nguyễn Tất Thành</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 my-3" style="">
                    <div class="row align-items-center">
                        <div class="col-3 text-center" style="background: #024282; color:white; font-size: 30px;">
                            Oct <br> 10
                        </div>
                        <div class="col-9">
                            <div class="card-body py-0">
                                <h5 class="card-title" style="font-size: 16px; font-weight: 600;">Ngày Doanh nhân Việt Nam và Đại hội CLB Doanh nghiệp Trường Đại học Nguyễn Tất Thành</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

 

    <div class="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h3>ĐH Nguyễn Tất Thành</h3>
                        <ul class="list-items">
                            <li>
                                <a href="#">Thư ngỏ</a>
                            </li>
                            <li><a href="#">Tầm nhìn - sứ mệnh</a></li>
                            <li><a href="#">Văn hóa ĐH Nguyễn Tất Thành</a></li>
                            <li><a href="#">Thông tin 3 công khai</a></li>
                            <li><a href="#">Đảm bảo chất lượng</a></li>
                            <li><a href="#">Phát triển bền vững</a></li>
                            <li><a href="#">Trường Trung cấp Nguyễn Tất Thành</a></li>
                            <li><a href="#">Trường Tiểu học Anh Việt Mỹ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h2><a href="#">PHÒNG - BAN</a></h2>
                        <h2><a href="#">THƯ VIỆN ẢNH</a></h2>
                        <h2><a href="#">E-LEARNING</a></h2>
                    </div>
                    <div class="col-sm-3">
                        <h3>ĐH Nguyễn Tất Thành</h3>
                        <ul class="list-items">
                            <li><a href="#">Thư ngỏ</a></li>
                            <li><a href="#">Tầm nhìn - xứ mệnh</a></li>
                            <li><a href="#">Văn hóa ĐH Nguyễn Tất Thành</a></li>
                            <li><a href="#">Thông tin 3 công khai</a></li>
                            <li><a href="#">Đảm bảo chất lượng</a></li>
                            <li><a href="#">Phát triển bền vững</a></li>
                            <li><a href="#">Trường Trung cấp Nguyễn Tất Thành</a></li>
                            <li><a href="#">Trường Tiểu học Anh Việt Mỹ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="socials-link">
                            <p><a href="" class="socials-link">
                                    <i class="fa fa-facebook-official"></i>
                                    <span>Facebook</span>
                                </a></p>
                            <p><a href="" class="socials-link">
                                    <i class="fa fa-google-plus-official"></i>
                                    <span>Google Plus</span>
                                </a></p>
                            <p>

                                <a href="" class="socials-link">
                                    <i class="fa fa-youtube-play"></i>
                                    <span>Youtube</span>
                                </a>
                            </p>
                            <p>
                                <a href="" class="socials-link">
                                    <i class="fa fa-envelope"></i>
                                    <span>Email</span>
                                </a>
                            </p>
                            <p>
                                <a href="" class="socials-link">
                                    <i class="fa fa-wechat"></i>
                                    <span>Zalo</span>
                                </a>
                            </p>
                            <p>
                                <a href="" class="socials-link">
                                    <i class="fa fa-mortar-board"></i>
                                    <span>E-Offices</span>
                                </a>
                            </p>
                            <p>
                                <a href="" class="socials-link">
                                    <i class="fa fa-users"></i>
                                    <span>Tuyển Dụng</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h6>THÔNG TIN LIÊN HỆ</h6>
                    <p>Trụ sở chính: <b>300A – Nguyễn Tất Thành, Phường 13, Quận 4, TP. Hồ Chí Minh, Việt Nam</b></p>
                    <p>Điện thoại: <b>1900 2039</b> Fax: <b>028 39 404 759</b></p>
                    <p>Hotline: <b>0902 298 300 – 0906 298 300 – 0912 298 300 – 0914 298 300</b></p>
                    <p>Email: <b>tttvtsinh@ntt.edu.vn – bangiamhieu@ntt.edu.vn</b></p>
                </div>
                <div class="col-sm-6">
                    <p>&copy;2017. Bản quyền thuộc về trường <b>Đại học Nguyễn Tất Thành</b></p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>