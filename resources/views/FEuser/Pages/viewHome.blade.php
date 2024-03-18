@extends ('FEuser.master')
@section('meta')
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Khóa Học Online | Chia Sẻ Khoá Học Online Qua Google Drive" />
    <meta property="og:description"
        content="Website Học Online - Trực Tuyến Giá Rẻ Cho Sinh Viên | Ưu Đãi Giảm Giá Đến 95% - Truy Cập Ngay" />
    <meta property="og:image"
        content="https://res.cloudinary.com/dtvczrcdk/image/upload/v1706145775/gssuck0yqwersvwfpkhk.jpg" />
@stop

@php
    $shuffledCategories = $list_category->shuffle();
@endphp

@section('Edurock_Home_View')
    <!-- course__section__start   -->
    <div class="coursearea sp_top_200 sp_bottom_50" style="padding-top: 150px; padding-bottom: 550px;">
        <div class="container">
            <div class="row">
                <div style="position: relative; z-index: 999;">
                    <div class="offcanvas offcanvas-start" id="demo">
                        <div class="offcanvas-header" style="align-items: center; justify-content: space-evenly;">
                            <a class="offcanvas-title"><img loading="lazy" style="width: 220px;"
                                    src="{{ url('asset') }}/img/herobanner/logooooo-removebg-preview.png"
                                    alt="logo"></a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="mobile-off-canvas-active-category">
                                <div class="header-mobile-aside-wrap">
                                    <div class="mobile-menu-wrap headerarea">
                                        <div class="mobile-navigation">
                                            <nav>
                                                <ul class="mobile-menu">
                                                    <li class="menu-item-has-children "><a href="#">DANH MỤC KHÓA
                                                            HỌC</a>
                                                        <ul class="dropdown">
                                                            @foreach ($list_category as $category)
                                                                @if ($category->classify == 0)
                                                                    @if ($category->checkCate == 0 || $category->checkCate == 1)
                                                                        <li class="menu-item-has-children">
                                                                            <a target="_blank" href="https://chiasekhoahoc.com.vn/tat-ca-khoa-hoc/danh-muc/{{ $category->slug }}" style="color: black;font-weight: 600;">{{ $category->name }}</a>
                                                                            <ul class="dropdown">
                                                                                @foreach ($list_category as $categorys)
                                                                                    @if ($categorys->classify != 0 && $categorys->classify == $category->id)
                                                                                        <li style="width: 100%;">
                                                                                            <a href="https://chiasekhoahoc.com.vn/list-khoa-hoc/danh-muc/{{ $categorys->slug }}" target="_blank" style="display: flex;justify-content: space-between;width: 100%;">
                                                                                                <span><i class="{{ $categorys->iconText }}"></i> {{ $categorys->name }} </span>
                                                                                                <span style="font-weight: 600;">({{ $categorys->courses_count }})</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    @endif
                                                                                @endforeach
                                                                            </ul>
                                                                        </li>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="mobile-curr-lang-wrap">
                                        <div class="single-mobile-curr-lang">
                                            <a class="mobile-account-active" href="#">TÀI KHOẢN<i
                                                    class="icofont-thin-down"></i></a>
                                            <div class="lang-curr-dropdown account-dropdown-active">
                                                <ul>
                                                    <li><a target="_blank" href="https://chiasekhoahoc.com.vn/dang-nhap">Đăng Nhập</a></li>
                                                    <li><a target="_blank" href="https://chiasekhoahoc.com.vn/dang-ky">/ Đăng Ký</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 col-12">
                    <div class="headerarea__left" style="text-align: center; align-items: flex-end; display: flex;">
                        <div class="headerarea__left__logo">
                            <a><img loading="lazy" style="width: 70%; padding-bottom: 20px;"
                                    src="{{ url('asset') }}/img/herobanner/logooooo-removebg-preview.png"alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding: 0px;">
                        <form method="GET">
                            <div class="headerarea__2__input">
                                <input type="text" name="search" id="searchInput" placeholder="Tìm Kiếm Khóa Học....."
                                    autocomplete="off">
                                <i class="icofont-search-1" style="bottom: 14px;"></i>
                                <ul class="recent-search-list" id="searchResultsList"
                                    style="max-height: 450px; overflow-y: auto; overflow-x: hidden;">
                                </ul>
                            </div>
                            <div style="display: flex; justify-content: center;">
                                <div style="padding: 10px;">
                                    <ul>
                                        <li><a type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">Danh Mục
                                                Khóa Học</a></li>
                                    </ul>
                                </div>
                                <div style="padding: 10px;">
                                    <ul>
                                        <li><a target="_blank" href="https://chiasekhoahoc.com.vn/dang-nhap">Đăng Nhập</a></li>
                                        <li><a target="_blank" href="https://chiasekhoahoc.com.vn/dang-ky">/ Đăng Ký</a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
