<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php 
        $setting = Cache::get('setting');
        $about = DB::table('about')->where('com', 'gioi-thieu')->first();
    ?>
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name='revisit-after' content='1 days' /> 
    <title><?php if(!empty($title)) echo $title; else echo $setting->title; ?></title>
    <meta name="author" content="{!! $setting->website !!}" />
    <meta name="copyright" content="GCO" />
    <meta name="keywords" content="<?php if(!empty($keyword)) echo $keyword; else echo $setting->keyword; ?>" />
    <meta name="description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />
    <meta http-equiv="content-language" content="vi" />
    <meta property="og:title" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:url" content="{!! $setting->website !!}" />
    <meta property="og:site_name" content="<?php if(!empty($title)) echo $title; else echo $setting->title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php if(!empty($img_share)) echo $img_share; else echo asset('upload/hinhanh/'.$setting->photo) ?>" />
    <meta property="og:description" content="<?php if(!empty($description)) echo $description; else echo $setting->description; ?>" />

    <meta name="googlebot" content="all, index, follow" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="10.764338, 106.69208" />
    <meta name="geo.placename" content="Hà Nội" />
    <meta name="Area" content="HoChiMinh, Saigon, Hanoi, Danang, Vietnam" />
    <link rel="shortcut icon" href="{!! asset('upload/hinhanh/'.$setting->favico) !!}" type="image/png" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="{{ asset('public/plugin/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/plugin/fonts/themify-icons/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/plugin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/plugin/slick/slick.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/plugin/animate/css/animate.css')}}" rel="stylesheet" />

    <link href="{{ asset('public/css/style.css')}}" rel="stylesheet" />
  
</head>
<body>
    
    <div class="animsition main-wrapper">

    <header class="vk-header">
        <div class="container">

            <div class="vk-header__content">
                <div class="vk-header__logo">
                    <a href="#">
                        <img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="" class="">
                    </a>
                </div>
                <div class="vk-header__right">

                    <button class="vk-header__btn vk-btn" data-toggle="collapse" data-target="#menu"><i class="ti-menu"></i></button>
                    <ul class="vk-list vk-menu__main collapse" id="menu">
                        <li class="vk-list__item"><a href="#" data-scroll-to="#id1">CHÍNH SÁCH BÁN HÀNG</a></li>
                        <li class="vk-list__item"><a href="#" data-scroll-to="#id2">THE ARENA CAM RANH</a></li>
                        <li class="vk-list__item"><a href="#" data-scroll-to="#id3">VỊ TRÍ</a></li>
                        <li class="vk-list__item"><a href="#" data-scroll-to="#id4">MẶT BẰNG TIỆN ÍCH</a></li>
                        <li class="vk-list__item"><a href="#" data-scroll-to="#id5">CODOTEL ARENA CAM RANH</a></li>
                        <li class="vk-list__item"><a href="#" data-scroll-to="#id6">TIẾN ĐỘ THANH TOÁN</a></li>
                    </ul>



                </div>
            </div>
        </div>


    </header> <!--./vk-header-->

    <section class="vk-content">

        <div class="vk-home__banner vk-slider" data-slider="banner" >
            <div class="_item">
                <div class="vk-banner">
                    <div class="vk-banner__caption">
                        <h2>Dự án Vịnh Cam Ranh – Condotel Arena Cam Ranh</h2>
                        <p>Dự án Vịnh Cam Ranh – Condotel Arena Cam Ranh</p>

                    </div>
                </div>
            </div>
            <div class="_item">
                <div class="vk-banner">
                    <div class="vk-banner__caption">
                        <h2>Dự án Vịnh Cam Ranh – Condotel Arena Cam Ranh</h2>
                        <p>Dự án Vịnh Cam Ranh – Condotel Arena Cam Ranh</p>

                    </div>
                </div>
            </div>
        </div> <!--./banner-->


        <div class="vk-home__info vk-background--grey-1 p-3">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-lg-2 pb-3 pb-lg-0 text-center">
                        <img src="{{ asset('public/images/2.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-8">
                        <?php $gioithieu1 = DB::table('about')->where('com', 'gioi-thieu')->first(); ?>
                        <div class="vk-text--bold">
                            {!! $gioithieu1->content !!}

                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="{{ asset('public/images/3.png')}}" alt="" class="img-fluid">
                    </div>

                </div> <!--./row-->

            </div> <!--./container-->
        </div> <!--./info-->

        <div class="vk-home__box pt-5 pb-5"id="id1">
            <div class="container">
                <h3 class="text-center vk-home__title vk-text--blue-1">CHÍNH SÁCH BÁN HÀNG MỚI NHẤT TỪ CHỦ ĐẦU TƯ. HOTLINE:
                    {{$setting->hotline}}</h3>
                <div class="row">
                    <?php $chinhsach = DB::table('about')->where('com', 'chinhsach')->first();
                        $video = DB::table('about')->where('com', 'video')->first();
                    ?>
                    <div class="col-lg-6">
                        {!! $chinhsach->content !!}
                    </div>
                    <div class="col-lg-6 pt-3 pt-lg-0">
                       {!! $video->content !!}
                    </div>
                </div>
                <div class="row" style="margin-top: 20px; text-align: center;">
                    <div class="col-md-12">
                        <h3> BẢNG HOẠCH TOÁN KINH DOANH CHO THUÊ</h3>
                        <img src="{{ asset('public/images/exel.png')}}" style="width:100%; height: auto" alt="" />

                    </div>
                    
                </div>
            </div>
        </div>

        <div class="vk-home__box vk-background--blue-1 pt-5 pb-4 mb-5 vk-text--white ">
            <div class="container">
                <h3 class="vk-home__title text-center fsz-22">NHẬN BẢNG GIÁ GỐC TOÀN DỰ ÁN & THƯ MỜI SỰ KIỆN MỞ BÁN HOTLINE:
                    {{$setting->hotline}}</h3>
                <p class="vk-home__text text-center">Các trường được đánh dấu <span class="vk-text--red-1">*</span> là bắt buộc</p>
                <form action="{{ route('postNewsletter') }}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" required="" name="name" class="form-control" placeholder="Họ tên">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="email" name="email" required="" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" required="" name="phone" class="form-control" placeholder="Điện thoại">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <button type="submit" class="vk-btn vk-btn--brown-1 vk-btn--block">ĐĂNG KÝ</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="vk-home__box" id="id2">
            <div class="container">
                <div class="vk-home__box-content">
                    <?php $thearena = DB::table('about')->where('com','thearena')->first(); ?>
                    <div class="vk-box vk-box--style-1 vk-background--blue-1 vk-text--white p-3">
                        <h3 class="vk-home__title vk-home__title--style-1">{{$thearena->name}}</h3>
                        <p>
                            {{$thearena->content}}
                        </p>
                    </div>
                </div>


                <div class="vk-home__box-bot vk-background--grey-1 vk-text--brown-1 p-4 mb-5">

                    <h3 class="vk-home__title vk-home__title--style-1">MÓN QUÀ MANG GIÁ TRỊ VƯỢT THỜI GIAN</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <p><strong>CHỦ ĐẦU TƯ: {{$setting->company}}</strong></p>
                            <p><strong>QUY MÔ: {{$setting->quymo}}</strong></p>
                            <p><strong>GIÁ BÁN: {{$setting->giaban}}</strong></p>
                        </div>
                        <div class="col-lg-6">
                            <p><strong>VỊ TRÍ: {{$setting->address}}</strong></p>
                            <p><strong>DIỆN TÍCH: {{$setting->dientich}}</strong></p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="vk-home__box vk-background--blue-1 vk-text--white pt-3 pb-3 mb-5"  id="id3">
            <div class="container-fluid">
                <div class="row">
                    <?php $vitri = DB::table('about')->where('com','vitri')->first(); ?>
                    <div class="col-lg-6">
                        <img src="{{ asset('upload/hinhanh/'.$vitri->photo) }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 pt-3">

                        {!! $vitri->content !!}


                    </div>
                </div>
            </div>
        </div>

        <div class="vk-home__box pb-5" id="id4">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 pr-2">
                        <?php $tienich = DB::table('about')->where('com','tienich')->first();
                            $albums = DB::table('slider')->where('com','thu-vien-anh')->get();
                        ?>
                        <div class="vk-box vk-background--brown-1 vk-text--white p-4">
                            <h3 class="vk-home__title vk-home__title--style-1">{{ $tienich->name }}</h3>
                            {!! $tienich->content !!}


                        </div>
                        <div class="text-center pt-3">
                            <a href="#" class="vk-btn vk-btn--blue-1">XEM CHI TIẾT
                                <i class="ti-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <div class="pb-lg-2">
                                    <img src="{{asset('upload/hinhanh/'.@$albums[0]->photo)}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-6 pr-lg-1">
                                <img src="{{asset('upload/hinhanh/'.@$albums[1]->photo)}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-6 pl-lg-1">
                                <img src="{{asset('upload/hinhanh/'.@$albums[2]->photo)}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--./box-->

        <div class="vk-home__box vk-background--blue-1 vk-text--white pt-5 pb-5" id="id5">
            <div class="container">
                <?php $duan = DB::table('about')->where('com', 'duan-arena')->first();
                    $images_duan = DB::table('slider')->where('com', 'duan-arena')->get();
                ?>
                <div class="row no-gutters">
                    <div class="col-lg-3 pr-lg-2">

                        <img src="{{ asset('upload/hinhanh/'.@$images_duan[0]->photo) }}" alt="" class="img-fluid pb-3">


                        <h3 class="vk-home__title vk-home__title--style-1">DỰ ÁN THE ARENA CAM RANH</h3>
                        <p>
                           
                            {!! $duan->content !!}

                        </p>
                    </div>
                    <div class="col-lg-6  pr-lg-2">
                        <div class="vk-home__img mb-3">
                            <img src="{{ asset('upload/hinhanh/'.@$images_duan[1]->photo) }}" alt="" class="img-fluid ">

                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <ul class="vk-list vk-list--style-1">
                                    <li><span>1 PN BT :</span><span></span>37 m2</li>
                                    <li><span>1 PN BT :</span><span></span>40 m2</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="vk-list vk-list--style-1">
                                    <li><span>1 PN BT :</span><span></span>37 m2</li>
                                    <li><span>1 PN BT :</span><span></span>40 m2</li>
                                </ul>
                            </div>
                        </div> -->

                    </div>
                    <div class="col-lg-3">
                        <div class="vk-home__img mb-2">
                            <img src="{{ asset('upload/hinhanh/'.@$images_duan[2]->photo) }}" alt="" class="img-fluid ">
                        </div>

                        <div class="vk-home__img mb-2">
                            <img src="{{ asset('upload/hinhanh/'.@$images_duan[3]->photo) }}" alt="" class="img-fluid ">

                        </div>

                    </div>
                </div>

                <div class="text-center pt-4">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScVrpMWFZOtgtfLqiAkV2TFLnfo-3ilN69D2rytCPnKHy8EGw/viewform?edit2=2_ABaOnuekuc5ElPu5aiPJZ0vGWzQNfDfSlxzKDqlvpZdXf9VzKGcxitMU7g" target="_blank" class="vk-btn vk-btn--green-1">XEM CHI TIẾT <i class="ti-arrow-right ml-2"></i></a>
                </div>

            </div>
        </div> <!--./box-->

        <div class="vk-home__box pt-5 pb-5" id="id5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9 pr-lg-2">
                        <div class="vk-home__box-content vk-home__box-content--style-1">
                        <?php $camranh = DB::table('about')->where('com', 'condotel-camranh')->first(); ?>
                            <div class="vk-box vk-box--style-2 vk-background--brown-1 vk-text--white p-4">
                                <h3 class="vk-home__title vk-home__title--style-1">CONDOTEL ARENA CAM RANH</h3>
                                <p>
                                    {!! $camranh->mota !!}


                                </p>
                                <img src="{{ asset('public/images/14.jpg')}}" alt="" class="img-fluid">
                            </div>


                            <div class="vk-box vk-box--style-3">
                                <p>
                                    {!! $camranh->content !!}


                                </p>
                            </div>


                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="vk-home__img mb-2">
                            <img src="{{ asset('public/images/15.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <div class="vk-box vk-background--brown-1 vk-text--white p-3">
                            <p>
                                 {!! $camranh->content_more !!}

                            </p>
                        </div>
                    </div>
                </div> <!--./row-->
                <div class="text-center pt-4">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScVrpMWFZOtgtfLqiAkV2TFLnfo-3ilN69D2rytCPnKHy8EGw/viewform?edit2=2_ABaOnuekuc5ElPu5aiPJZ0vGWzQNfDfSlxzKDqlvpZdXf9VzKGcxitMU7g" target="_blank" class="vk-btn vk-btn--blue-1">XEM CHI TIẾT <i class=" ti-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div> <!--./box-->

        <div class="vk-home__box vk-home__box--style-1 pt-5 pb-5 vk-text--white">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-lg-6">
                        <div class="vk-box">
                            <h3 class="vk-home__title vk-home__title--style-1">CONDOTEL ARENA CAM RANH - VỊNH CAM RANH</h3>
                            <p>
                                Condotel Arena Cam Ranh được trang bị hệ thống tiện ích nghỉ dưỡng đẳng cấp và giải trí đa
                                dạng, hiện đại, bao gồm: bể bơi nước mặn lớn nhất Việt Nam; Spa và hồ bơi nước khoáng nóng,
                                khu vui chơi ngoài trời và nhà hàng view hồ san hô, phố ẩm thực, phố mua sắm (shophouse),
                                sân khấu nhạc nước, công viên giải trí… Ngoài ra, quý khách hàng còn thừa hưởng được hệ
                                thống tiện ích ngoại khu phong phú và đa dạng từ quần thể khu du lịch bắc bán đảo Cam Ranh.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="vk-home__box pt-5 pb-5">
            <div class="container">
                <h3 class="vk-home__title vk-home__title--style-2 text-center">TIỆN ÍCH 5 SAO - ĐẲNG CẤP QUỐC TẾ</h3>
                <p class="text-center"><img src="{{ asset('public/images/star.png')}}" alt="" class="d-inline-block"></p>
                <?php $star = DB::table('news')->where('com', 'tienich')->get(); ?>
                <div class="row">
                @foreach($star as $s)
                    <div class="col-lg-4">
                        <div class="vk-opt">
                            <img src="{{asset('upload/news/'.$s->photo)}}" alt="">
                            <h3 class="vk-opt__title vk-text--brown-1">{{$s->name}}</h3>
                        </div>
                    </div>
                @endforeach    
                </div>
            </div>
        </div>

        <div class="vk-home__box pb-5" id="id6">
             <?php $tiendo = DB::table('about')->where('com', 'tien-do')->first(); ?>
            <div class="container">
                <h2 class="vk-home__title text-center">TIẾN ĐỘ THANH TOÁN</h2>

                {!! $tiendo->content !!}
            </div>
        </div> <!--./box-->

        <div class="phone-ringAlo phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon"
             style="left:150px; bottom: 10px; display: block;position: fixed;z-index:99999">
            <div class="phonering-alo-ph-circle"></div>
            <div class="phonering-alo-ph-circle-fill"></div>
            <a href="tel:{{$setting->hotline}}"></a>
            <div class="phonering-alo-ph-img-circle">
                <a href="tel:{{$setting->hotline}}"></a>
                <a href="tel:{{$setting->hotline}}" class="pps-btn-img " title="Liên hệ">
                    <img src="https://i.imgur.com/v8TniL3.png" alt="Liên hệ" width="50" onmouseover="this.src = 'https://i.imgur.com/v8TniL3.png';" onmouseout="this.src = 'https://i.imgur.com/v8TniL3.png';">
                </a>
            </div>
        </div>



    </section>
    <!--./content-->

    <footer class="vk-footer">

        <div class="vk-footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="vk-footer__item">

                            <div class="vk-footer__logo">
                                <a href="#">
                                    <img src="{{ asset('public/images/logo-2.png')}}" alt="">
                                </a>
                            </div>

                            <p>
                                Vị Trí: {{$setting->address}} <br>
                                Hotline: {{$setting->hotline}} <br>
                                Email: {{$setting->email}} <br>

                            </p>



                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="vk-footer__item">

                            <h3 class="vk-footer__title">NHẬN VÉ MỜI THAM QUAN DỰ ÁN</h3>
                            <p>
                                Nhận vé tham quan hỗ trợ 100% chi phí cho 20 Khách hàng đầu tiên. Hạn đăng ký trước ngày 2/9/2017


                            </p>
                            <div class="vk-newsletter text-center">

                                <p>Các trường được đánh dấu <span class="vk-text--red-1">*</span> là bắt buộc</p>
                            <form action="{{ route('postContact') }}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="email" placeholder="Email" required="" name="email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="text" placeholder="Điện thoại" required="" name="phone" class="form-control">
                                </div>

                                <div class="">
                                    <button type="submit" class="vk-btn vk-btn--green-1">ĐĂNG KÝ</button>
                                </div>
                            </form>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="vk-footer__item">

                            <h3 class="vk-footer__title">PHÂN PHỐI TRỰC TIẾP CHỦ ĐẦU TƯ</h3>
                            <p>
                                Nhận vé tham quan hỗ trợ 100% chi phí cho 20 Khách hàng đầu tiên. Hạn đăng ký trước ngày 2/9/2018


                            </p>
                            <ul class="vk-list vk-footer__list">
                                <li><i class="_icon fa fa-check-square-o mr-1"></i> Cung cấp những thông tin nhanh chóng cập nhật nhất từ chủ đầu tư.</li>
                                <li><i class="_icon fa fa-check-square-o mr-1"></i> Không thu thêm bất cứ khoản phí nào.</li>
                                <li><i class="_icon fa fa-check-square-o mr-1"></i> Hỗ trợ làm thủ tục trực tiếp với chủ đầu tư, trước và sau bán hàng lâu dài</li>
                                <li><i class="_icon fa fa-check-square-o mr-1"></i> Hỗ trợ làm thủ tục vay vốn với ngân hàng bảo lãnh.</li>
                                <li><i class="_icon fa fa-check-square-o mr-1"></i> Hỗ trợ quý khách tìm được căn tầng đẹp nhất.</li>
                                <li><i class="_icon fa fa-check-square-o mr-1"></i> Xem nhà mẫu dự án trực tiếp để khách hàng lựa chọn căn hộ ưng ý.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="vk-footer__bot">
            <div class="container">
                © 2018 Condotel Arena Cam Ranh. All right reserved.
            </div>
        </div> <!--./vk-footer__bot-->
    </footer><!--./vk-footer-->
</div>



<script src="{{ asset('public/plugin/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('public/plugin/jquery/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{ asset('public/plugin/popper/popper.min.js')}}"></script>
<script src="{{ asset('public/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/plugin/scrollup/jquery.scrollUp.min.js')}}"></script>
<script src="{{ asset('public/plugin/slick/slick.min.js')}}"></script>
<script src="{{ asset('public/plugin/stickOnScroll/jquery.stickOnScroll.min.js')}}"></script>
<script src="{{ asset('public/plugin/waypoint/jquery.waypoints.min.js')}}"></script>

<script src="{{ asset('public/plugin/main.js')}}"></script>
<script src="{{ asset('public/plugin/custom.js')}}"></script>   
</body>
</html>