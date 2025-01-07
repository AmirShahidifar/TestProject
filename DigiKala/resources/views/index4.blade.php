@extends('layout.master')

@section('content')

<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
    <div class="col">
        <div class="card overflow-hidden rounded-4">
            <div class="card-body p-2">
                <div class="d-flex align-items-stretch justify-content-between  rounded-4 overflow-hidden bg-pink">
                    <div class="w-50 p-3">
                        <p class="text-white">کل سفارشات</p>
                        <h4 class="text-white">8,542</h4>
                    </div>
                    <div class="w-50 p-3">
                        <p class="mb-3 text-white text-end">+ 16درصد <i class="bi bi-arrow-up"></i></p>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card overflow-hidden  rounded-4">
            <div class="card-body p-2">
                <div class="d-flex align-items-stretch justify-content-between rounded-4 overflow-hidden bg-purple">
                    <div class="w-50 p-3">
                        <p class="text-white">کل بازدیدها</p>
                        <h4 class="text-white">12.5میل</h4>
                    </div>
                    <div class="w-50  p-3">
                        <p class="mb-3 text-white text-end">- 3.4درصد <i class="bi bi-arrow-down"></i></p>
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card overflow-hidden rounded-4">
            <div class="card-body p-2">
                <div class="d-flex align-items-stretch justify-content-between rounded-4 overflow-hidden bg-success">
                    <div class="w-50 p-3">
                        <p class="text-white">درآمد</p>
                        <h4 class="text-white">65 تومان</h4>
                    </div>
                    <div class="w-50 p-3">
                        <p class="mb-3 text-white text-end">+ 24درصد <i class="bi bi-arrow-up"></i></p>
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card overflow-hidden rounded-4">
            <div class="card-body p-2">
                <div class="d-flex align-items-stretch justify-content-between rounded-4 overflow-hidden bg-orange">
                    <div class="w-50 p-3">
                        <p class="text-white">مشتریان</p>
                        <h4 class="text-white">25.8هزار</h4>
                    </div>
                    <div class="w-50 p-3">
                        <p class="mb-3 text-white text-end">+ 8.2درصد <i class="bi bi-arrow-up"></i></p>
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--end row-->

<div class="row row-cols-1 row-cols-lg-3">
    <div class="col d-flex">
        <div class="card radius-10 w-100 overflow-hidden">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">حراجی</h6>
                    <div class="fs-5 ms-auto">
                        <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                            <div class="font-13"><i class="bi bi-circle-fill text-primary"></i><span class="ms-2">آی پد</span></div>
                            <div class="font-13"><i class="bi bi-circle-fill text-primary-2"></i><span class="ms-2">تلفن</span></div>
                            <div class="font-13"><i class="bi bi-circle-fill text-primary-3"></i><span class="ms-2">لپتاپ</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="chart5"></div>
        </div>
    </div>
    <div class="col d-flex">
        <div class="card rounded-4 overflow-hidden w-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">توسط دستگاه</h6>
                    <div class="fs-5 ms-auto dropdown">
                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">عمل</a></li>
                            <li><a class="dropdown-item" href="#">یک اقدام دیگر</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">یه چیز دیگه اینجا</a></li>
                        </ul>
                    </div>
                </div>
                <div class="by-device-container p-3">
                    <canvas id="chart6"></canvas>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex align-items-center justify-content-between bg-transparent border-top">
                    <i class="bi bi-tablet-landscape-fill me-2 text-orange"></i> <span>تبلت - </span> <span>22.5درصد</span>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between bg-transparent">
                    <i class="bi bi-phone-fill me-2 text-success"></i> <span>موبایل - </span> <span>62.3درصد</span>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between bg-transparent">
                    <i class="bi bi-display-fill me-2 text-primary"></i> <span>پی سی - </span> <span>15.2درصد</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="col d-flex">
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">ترافیک</h6>
                    <div class="fs-5 ms-auto">
                        <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                            <div class="font-13"><i class="bi bi-circle-fill text-pink"></i><span class="ms-2">معرف</span></div>
                            <div class="font-13"><i class="bi bi-circle-fill text-pink opacity-50"></i><span class="ms-2">جستجو کردن</span></div>
                        </div>
                    </div>
                </div>
                <div id="chart7"></div>
            </div>
        </div>
    </div>
</div><!--end row-->

<div class="row">
    <div class="col-12 col-lg-6 d-flex">
        <div class="card rounded-4 w-100">
            <div class="card-header bg-transparent border-0">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h6 class="mb-0">بالاترین فروش</h6>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                            <div class="dropdown">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">عمل</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">یک اقدام دیگر</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">یه چیز دیگه اینجا</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="best-product p-2 mb-3">
                    <div class="best-product-item">
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/01.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                                <div class="progress-wrapper">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;"></div>
                                    </div>
                                </div>
                                <p class="product-name mb-0 mt-2 fs-6">تی شرت پولو سفید <span class="float-end">245</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="best-product-item">
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/02.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                                <div class="progress-wrapper">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 70%;"></div>
                                    </div>
                                </div>
                                <p class="product-name mb-0 mt-2 fs-6">شلوار کت مشکی <span class="float-end">245</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="best-product-item">
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/03.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                                <div class="progress-wrapper">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"></div>
                                    </div>
                                </div>
                                <p class="product-name mb-0 mt-2 fs-6">شلوار جین سایه آبی <span class="float-end">245</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="best-product-item">
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/04.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                                <div class="progress-wrapper">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <p class="product-name mb-0 mt-2 fs-6">ژاکت زمستانی زرد <span class="float-end">245</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="best-product-item">
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/05.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                                <div class="progress-wrapper">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 40%;"></div>
                                    </div>
                                </div>
                                <p class="product-name mb-0 mt-2 fs-6">کفش اسپرت مردانه نایک <span class="float-end">245</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="best-product-item">
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/06.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                                <div class="progress-wrapper">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%;"></div>
                                    </div>
                                </div>
                                <p class="product-name mb-0 mt-2 fs-6">مبل خانه فانتزی <span class="float-end">245</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="best-product-item">
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/07.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                                <div class="progress-wrapper">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-pink" role="progressbar" style="width: 20%;"></div>
                                    </div>
                                </div>
                                <p class="product-name mb-0 mt-2 fs-6">ساعت ورزشی تایم <span class="float-end">245</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="best-product-item">
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/08.png" alt="">
                            </div>
                            <div class="product-info flex-grow-1">
                                <div class="progress-wrapper">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 10%;"></div>
                                    </div>
                                </div>
                                <p class="product-name mb-0 mt-2 fs-6">زنان آبی شفا می دهد <span class="float-end">245</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 d-flex">
        <div class="card rounded-4 w-100 overflow-hidden">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">سفارشات</h6>
                    <div class="fs-5 ms-auto dropdown">
                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">عمل</a></li>
                            <li><a class="dropdown-item" href="#">یک اقدام دیگر</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">یه چیز دیگه اینجا</a></li>
                        </ul>
                    </div>
                </div>
                <div id="chart8"></div>
                <div class="d-flex align-items-center gap-5 justify-content-center mt-0 p-2 bg-light radius-10 border">
                    <div class="text-center">
                        <h2 class="mb-2 text-info">9.32میل</h2>
                        <p class="mb-0">جمع <br> سفارشات</p>
                    </div>
                    <div class="border-end sepration"></div>
                    <div class="text-center">
                        <h2 class="mb-2">2.56</h2>
                        <p class="mb-0">به ازای هر <br> مشتری</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--end row-->


<div class="row">
    <div class="col-12 col-lg-12 col-xl-4 d-flex">
        <div class="card w-100 radius-10">
            <div class="card-body">
                <div class="card radius-10 border shadow-none">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <h6 class="mb-0">فروش ماهانه</h6>
                            </div>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">عمل</a></li>
                                    <li><a class="dropdown-item" href="#">یک اقدام دیگر</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">یه چیز دیگه اینجا</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-0">
                            <div class="widget-icon mx-auto mb-2 bg-light-success text-success">
                                <i class="bi bi-bank2"></i>
                            </div>
                            <h4 class="mb-0 text-center">46 تومان</h4>
                        </div>
                        <div id="chart9"></div>
                    </div>
                </div>
                <div class="card radius-10 border shadow-none">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <h6 class="mb-0">کل کلیک ها</h6>
                            </div>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">عمل</a></li>
                                    <li><a class="dropdown-item" href="#">یک اقدام دیگر</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">یه چیز دیگه اینجا</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="chart10"></div>
                    </div>
                </div>
                <div class="card radius-10 border shadow-none mb-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <h6 class="mb-0">جلسات</h6>
                            </div>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">عمل</a></li>
                                    <li><a class="dropdown-item" href="#">یک اقدام دیگر</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">یه چیز دیگه اینجا</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="chart11"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-8 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0">بازدید کنندگان</h6>
                                <div class="fs-5 ms-auto dropdown">
                                    <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">عمل</a></li>
                                        <li><a class="dropdown-item" href="#">یک اقدام دیگر</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">یه چیز دیگه اینجا</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-sm-flex align-items-center gap-3 mt-3">
                                <div class="mb-2 mb-sm-0">
                                    <h4 class="mb-0">254,852</h4>
                                    <p class="mb-0">جدید / بازگشت</p>
                                </div>
                                <div class="d-none d-sm-block border-end sepration-2"></div>
                                <div class="align-self-end mb-2 mb-sm-0">
                                    <p class="mb-0">45,762 / 2,491</p>
                                </div>
                                <div class="align-self-end ms-auto">
                                    <div class="d-flex align-items-center gap-3">
                                        <p class="mb-0 font-13">
                                            <i class="bi bi-square-fill ms-1 text-primary"></i> بازدیدکنندگان جدید
                                        </p>
                                        <p class="mb-0 font-13">
                                            <i class="bi bi-square-fill ms-1 text-primary-3"></i> بازدیدکنندگان بازگشتی
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="chart12"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div id="chart13"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div id="chart14"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div id="chart15"></div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
</div><!--end row-->


<div class="card rounded-4">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h6 class="mb-0">سفارشات اخیر</h6>
            <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">عمل</a></li>
                    <li><a class="dropdown-item" href="#">یک اقدام دیگر</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">یه چیز دیگه اینجا</a></li>
                </ul>
            </div>
        </div>
        <div class="table-responsive mt-2">
            <table class="table align-middle mb-0">
                <thead class="table-light">
                <tr>
                    <th>#شناسه</th>
                    <th>تولید - محصول</th>
                    <th>تعداد</th>
                    <th>قیمت</th>
                    <th>تاریخ</th>
                    <th>اقدامات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>#89742</td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/11.png" alt="">
                            </div>
                            <div class="product-info">
                                <h6 class="product-name mb-1">تلفن همراه هوشمند</h6>
                            </div>
                        </div>
                    </td>
                    <td>2</td>
                    <td>214 تومان</td>
                    <td>8 خرداد، 1400</td>
                    <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="نمایش جزئیات" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="ویرایش اطلاعات" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="حذف" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>#68570</td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/07.png" alt="">
                            </div>
                            <div class="product-info">
                                <h6 class="product-name mb-1">ساعت ورزشی</h6>
                            </div>
                        </div>
                    </td>
                    <td>1</td>
                    <td>185 تومان</td>
                    <td>9 خرداد، 1400</td>
                    <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="نمایش جزئیات" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="ویرایش اطلاعات" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="حذف" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>#38567</td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/17.png" alt="">
                            </div>
                            <div class="product-info">
                                <h6 class="product-name mb-1">کفش پاشنه قرمز زنانه</h6>
                            </div>
                        </div>
                    </td>
                    <td>3</td>
                    <td>356 تومان</td>
                    <td>10 خرداد، 1400</td>
                    <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="نمایش جزئیات" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="ویرایش اطلاعات" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="حذف" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>#48572</td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/04.png" alt="">
                            </div>
                            <div class="product-info">
                                <h6 class="product-name mb-1">ژاکت زمستانی زرد</h6>
                            </div>
                        </div>
                    </td>
                    <td>1</td>
                    <td>149 تومان</td>
                    <td>11 خرداد، 1400</td>
                    <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="نمایش جزئیات" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="ویرایش اطلاعات" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="حذف" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>#96857</td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/10.png" alt="">
                            </div>
                            <div class="product-info">
                                <h6 class="product-name mb-1">هدفون میکرو نارنجی</h6>
                            </div>
                        </div>
                    </td>
                    <td>2</td>
                    <td>199 تومان</td>
                    <td>15 خرداد، 1400</td>
                    <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="نمایش جزئیات" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="ویرایش اطلاعات" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="حذف" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>#96857</td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="assets/images/products/12.png" alt="">
                            </div>
                            <div class="product-info">
                                <h6 class="product-name mb-1">لپ تاپ پرو سامسونگ</h6>
                            </div>
                        </div>
                    </td>
                    <td>1</td>
                    <td>699 تومان</td>
                    <td>18 خرداد، 1400</td>
                    <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
