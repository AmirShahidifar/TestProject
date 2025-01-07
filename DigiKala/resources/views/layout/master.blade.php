<!doctype html>
<html lang="en" class="semi-dark" dir="rtl">


<!-- Mirrored from codetheme.ir/onedash/demo/rtl/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 May 2024 08:55:58 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('panel/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{asset('panel/assets/plugins/simplebar/css/simplebar.css"')}} rel="stylesheet" />
    <link href="{{asset('panel/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('panel/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('panel/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('panel/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link href="{{asset('panel/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('panel/assets/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('panel/assets/fonts/googlefonts.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('panel/assets/fonts/bootstrap-icons.css')}}">

    <!-- loader-->
    <link href="{{asset('panel/assets/css/pace.min.css')}}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{asset('panel/assets/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('panel/assets/css/light-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('panel/assets/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{asset('panel/assets/css/header-colors.css')}}" rel="stylesheet" />

    <title>Onedash - الگوی مدیریت بوت استرپ 5</title>
</head>

<body>

<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-icon fs-3 d-flex d-lg-none">
                <i class="bi bi-list"></i>
            </div>
            <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="برای جستجو اینجا تایپ کنید">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-auto">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item search-toggle-icon d-flex d-lg-none">
                        <a class="nav-link" href="javascript:;">
                            <div class="">
                                <i class="bi bi-search"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown"><img src="assets/images/county/02.png" width="22" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-2">
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/01.png" width="20" alt=""><span class="ms-2">انگلیسی</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/02.png" width="20" alt=""><span class="ms-2">کاتالان</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/03.png" width="20" alt=""><span class="ms-2">فرانسوی</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/04.png" width="20" alt=""><span class="ms-2">بلیز</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/05.png" width="20" alt=""><span class="ms-2">کلمبیا</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/06.png" width="20" alt=""><span class="ms-2">اسپانیایی</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/07.png" width="20" alt=""><span class="ms-2">گرجی</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/08.png" width="20" alt=""><span class="ms-2">هندی</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dark-mode d-none d-sm-flex">
                        <a class="nav-link dark-mode-icon" href="javascript:;">
                            <div class="">
                                <i class="bi bi-moon-fill"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="projects">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="row row-cols-3 gx-2">
                                <div class="col">
                                    <a href="ecommerce-orders.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-purple">
                                                <i class="bi bi-basket2-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">سفارشات</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-info">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">کاربران</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="ecommerce-products-grid.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-success">
                                                <i class="bi bi-trophy-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">محصولات</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="component-media-object.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
                                                <i class="bi bi-collection-play-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">رسانه ها</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="pages-user-profile.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <p class="mb-0 apps-name">حساب</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
                                                <i class="bi bi-file-earmark-text-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">اسناد</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="ecommerce-orders-detail.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
                                                <i class="bi bi-credit-card-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">پرداخت</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
                                                <i class="bi bi-calendar-check-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">مناسبت ها</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
                                                <i class="bi bi-book-half"></i>
                                            </div>
                                            <p class="mb-0 apps-name">داستان</p>
                                        </div>
                                    </a>
                                </div>
                            </div><!--end row-->
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="messages">
                                <span class="notify-badge">5</span>
                                <i class="bi bi-chat-left-text-fill"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end p-0">
                            <div class="p-2 border-bottom m-2">
                                <h5 class="h5 mb-0">پیام ها</h5>
                            </div>
                            <div class="header-message-list p-2">
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('panel/assets/images/avatars/avatar-1.png')}}" alt="" class="rounded-circle" width="50" height="50">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">آملیو جولی <span class="msg-time float-end text-secondary">1 ساعت</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">لورم ایپسوم...</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">آلته کاباردو <span class="msg-time float-end text-secondary">7 ساعت</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">لورم ایپسوم...</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">کاترین پچون <span class="msg-time float-end text-secondary">2 ساعت</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">لورم ایپسوم...</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/avatars/avatar-4.png" alt="" class="rounded-circle" width="50" height="50">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">پیتر کوستانزو <span class="msg-time float-end text-secondary">3 ساعت</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">لورم ایپسوم...</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/avatars/avatar-5.png" alt="" class="rounded-circle" width="50" height="50">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">توماس ویلر <span class="msg-time float-end text-secondary">1 روز</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">لورم ایپسوم...</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/avatars/avatar-6.png" alt="" class="rounded-circle" width="50" height="50">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">جانی سیتز <span class="msg-time float-end text-secondary">2 ماه</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">لورم ایپسوم...</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">آملیو جولی <span class="msg-time float-end text-secondary">1 ساعت</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">لورم ایپسوم...</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">آلته کاباردو <span class="msg-time float-end text-secondary">7 ساعت</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">لورم ایپسوم...</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">کاترین پچون <span class="msg-time float-end text-secondary">2 ساعت</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">لورم ایپسوم...</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <div>
                                    <hr class="dropdown-divider">
                                </div>
                                <a class="dropdown-item" href="#">
                                    <div class="text-center">مشاهده همه پیام ها</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="notifications">
                                <span class="notify-badge">8</span>
                                <i class="bi bi-bell-fill"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end p-0">
                            <div class="p-2 border-bottom m-2">
                                <h5 class="h5 mb-0">اطلاعیه</h5>
                            </div>
                            <div class="header-notifications-list p-2">
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">سفارشات جدید <span class="msg-time float-end text-secondary">1 دقیقه</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">شما سفارشات جدیدی دریافت کرده اید</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-purple text-purple"><i class="bi bi-people-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">مشتریان جدید <span class="msg-time float-end text-secondary">7 دقیقه</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5 کاربر جدید ثبت نام کرد</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-success text-success"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">24 فایل پی دی اف <span class="msg-time float-end text-secondary">2 ساعت</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">فایل های پی دی اف تولید شده است</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-orange text-orange"><i class="bi bi-collection-play-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">پاسخ زمان <span class="msg-time float-end text-secondary">3 ساعت</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">پاسخ زمان متوسط 5.1 دقیقه</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-info text-info"><i class="bi bi-cursor-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">محصول جدید تایید شده <span class="msg-time float-end text-secondary">1 د</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">محصول جدید شما تایید شده است</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-pink text-pink"><i class="bi bi-gift-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">نظرات جدید <span class="msg-time float-end text-secondary">2 ماه</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">نظرات مشتریان جدید دریافت شد</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-warning text-warning"><i class="bi bi-droplet-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">24 نویسنده جدید<span class="msg-time float-end text-secondary">1 دقیقه</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">24 نویسنده جدید هفته گذشته به آن پیوستند</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-primary text-primary"><i class="bi bi-mic-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">کالای شما ارسال شده است <span class="msg-time float-end text-secondary">7 دقیقه</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">مورد شما با موفقیت ارسال شد</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-success text-success"><i class="bi bi-lightbulb-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">هشدارهای دفاعی <span class="msg-time float-end text-secondary">2 ساعت</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45٪ هشدار کدقیقه 4 هفته طول می کشد</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-info text-info"><i class="bi bi-bookmark-heart-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">4 ثبت نام جدید <span class="msg-time float-end text-secondary">2 ماه</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">4 کاربر جدید ثبت نام</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-bronze text-bronze"><i class="bi bi-briefcase-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">همه اسناد آپلود شد <span class="msg-time float-end text-secondary">1 ماه</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">همه فایل‌ها را با دقت آپلود کرد</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <div>
                                    <hr class="dropdown-divider">
                                </div>
                                <a class="dropdown-item" href="#">
                                    <div class="text-center">مشاهده همه اعلان ها</div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="dropdown dropdown-user-setting">
                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                    <div class="user-setting d-flex align-items-center gap-3">
                        <img src="{{asset('panel/assets/images/avatars/avatar-1.png')}}" class="user-img" alt="">
                        <div class="d-none d-sm-block">
                            <p class="user-name mb-0">جان دیو</p>
                            <small class="mb-0 dropdown-user-designation">مدیریت منابع انسانی</small>
                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="pages-user-profile.html">
                            <div class="d-flex align-items-center">
                                <div class=""><i class="bi bi-person-fill"></i></div>
                                <div class="ms-3"><span>مشخصات</span></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                                <div class=""><i class="bi bi-gear-fill"></i></div>
                                <div class="ms-3"><span>تنظیمات</span></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="index2.html">
                            <div class="d-flex align-items-center">
                                <div class=""><i class="bi bi-speedometer"></i></div>
                                <div class="ms-3"><span>داشبورد</span></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                                <div class=""><i class="bi bi-piggy-bank-fill"></i></div>
                                <div class="ms-3"><span>درآمد</span></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                                <div class=""><i class="bi bi-cloud-arrow-down-fill"></i></div>
                                <div class="ms-3"><span>دانلودها</span></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="authentication-signup-with-header-footer.html">
                            <div class="d-flex align-items-center">
                                <div class=""><i class="bi bi-lock-fill"></i></div>
                                <div class="ms-3"><span>خروج</span></div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{asset('panel/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text"> تکنو کالا</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="index.php" class="">
                    <div class="parent-icon"><i class="bi bi-house-fill"></i>
                    </div>
                    <div class="menu-title">داشبورد</div>
                </a>

            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                    </div>
                    <div class="menu-title">مدیران</div>
                </a>
                <ul>
                    <li> <a href=""><i class="bi bi-circle"></i>لیست مدیران</a>
                    </li>

                </ul>
            </li>
            <!-- <li class="menu-label">عناصر رابط کاربری</li> -->
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
                    </div>
                    <div class="menu-title">مشتریان</div>
                </a>
                <ul>
                    <li> <a href="members_list.php"><i class="bi bi-circle"></i>لیست مشتریان</a>
                    </li>
                    <li> <a href="wishlists_list.php"><i class="bi bi-circle"></i>لیست علاقه مندی ها</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                    </div>
                    <div class="menu-title">محصولات</div>
                </a>
                <ul>
                    <li> <a href="products_list.php"><i class="bi bi-circle"></i>لیست محصولات</a>
                    </li>
                    <li> <a href="product_images_list.php"><i class="bi bi-circle"></i>لیست تصاویر محصولات</a>
                    </li>
                    <li> <a href="products_categories_list.php"><i class="bi bi-circle"></i>لیست دسته بندی محصولات</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="menu-title">خصوصیات محصول</div>
                </a>
                <ul>
                    <li> <a href="brands_list.php"><i class="bi bi-circle"></i>لیست برندها</a>
                    </li>
                    <li> <a href="colors_list.php"><i class="bi bi-circle"></i>لیست رنگ ها</a>
                    </li>
                    <li> <a href="materials_list.php"><i class="bi bi-circle"></i>لیست جنس ها</a>
                    </li>
                    <li> <a href="essential_oils_list.php"><i class="bi bi-circle"></i>لیست اسانس ها</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-award-fill"></i>
                    </div>
                    <div class="menu-title">بلاگ ها</div>
                </a>
                <ul>
                    <li> <a href="blogs_list.php"><i class="bi bi-circle"></i>لیست بلاگ</a>
                    </li>
                    <li> <a href="blogs_categories_list.php"><i class="bi bi-circle"></i>لیست دسته بندی بلاگ</a>
                    </li>

                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="menu-title">سفارشات و سبدخرید</div>
                </a>
                <ul>
                    <li> <a href="orders_list.php"><i class="bi bi-circle"></i>لیست سفارشات</a>
                    </li>
                    <li> <a href="baskets_list.php"><i class="bi bi-circle"></i>لیست سبدخرید</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="menu-title">تبلیغات</div>
                </a>
                <ul>
                    <li> <a href="ads_list.php"><i class="bi bi-circle"></i>لیست تبلیغات</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="menu-title">شهر و استان</div>
                </a>
                <ul>
                    <li> <a href="provinces_list.php"><i class="bi bi-circle"></i>لیست استان ها</a>
                    </li>
                    <li> <a href="citys_list.php"><i class="bi bi-circle"></i>لیست شهرها</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="menu-title">نظرات و پیام ها</div>
                </a>
                <ul>
                    <li> <a href="contacts_list.php"><i class="bi bi-circle"></i>لیست پیام ها</a>
                    </li>
                    <li> <a href="comments_list.php"><i class="bi bi-circle"></i>لیست نظرات</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="menu-title">سوالات متداول</div>
                </a>
                <ul>
                    <li> <a href="faqs_list.php"><i class="bi bi-circle"></i>لیست سوالات</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="menu-title">باقی محتوا</div>
                </a>
                <ul>
                    <li> <a href="pages_list.php"><i class="bi bi-circle"></i>لیست درباره ما</a>
                    </li>
                    <li> <a href="teams_list.php"><i class="bi bi-circle"></i>لیست تیم ما</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="menu-title">روش های ارسال</div>
                </a>
                <ul>
                    <li> <a href="shippingtypes_list.php"><i class="bi bi-circle"></i>لیست روش ارسال</a>
                    </li>
                </ul>
            </li>



            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                    </div>
                    <div class="menu-title">تنظیمات</div>
                </a>
                <ul>
                    <li> <a href="settings.php"><i class="bi bi-circle"></i>لیست تنظیمات صفحه</a>
                    </li>
                    <li> <a href="slideshows_list.php"><i class="bi bi-circle"></i>لیست اسلایدشو</a>
                    </li>
                    <li> <a href="counters_list.php"><i class="bi bi-circle"></i>لیست آمار بازدید</a>
                    </li>
                </ul>
            </li>

        </ul>
        <!--end navigation-->
    </aside>
    <!--end sidebar -->

    <!--start content-->
    <main class="page-content">

        @yield('content')

    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--start footer-->
    <footer class="footer">
        <div class="footer-text">
            حق نشر © 2022. کلیه حقوق محفوظ است.
        </div>
    </footer>
    <!--end footer-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">سفارشی ساز تم</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">تنوع تم</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
                    <label class="form-check-label" for="LightTheme">روشن</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                    <label class="form-check-label" for="DarkTheme">تاریک</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
                    <label class="form-check-label" for="SemiDarkTheme">نیمه دارک</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" checked>
                    <label class="form-check-label" for="MinimalTheme">تم مینیمال</label>
                </div>
                <hr/>
                <h6 class="mb-0">رنگ های سرصفحه</h6>
                <hr/>
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator headercolor1" id="headercolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor2" id="headercolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor3" id="headercolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor4" id="headercolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor5" id="headercolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor6" id="headercolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor7" id="headercolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor8" id="headercolor8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{asset('panel/assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('panel/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('panel/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('panel/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('panel/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('panel/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('panel/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('panel/assets/js/pace.min.js')}}"></script>
<script src="{{asset('panel/assets/plugins/chartjs/js/Chart.min.js')}}"></script>
<script src="{{asset('panel/assets/plugins/chartjs/js/Chart.extension.js')}}"></script>
<script src="{{asset('panel/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<!--app-->
<script src="{{asset('panel/assets/js/app.js')}}"></script>
<script src="{{asset('panel/assets/js/index4.js')}}"></script>
<script>
    new PerfectScrollbar(".best-product")
</script>


</body>


<!-- Mirrored from codetheme.ir/onedash/demo/rtl/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 May 2024 08:55:58 GMT -->
</html>

