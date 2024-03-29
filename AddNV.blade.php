<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('css/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('css/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('css/assets/css/material-dashboard.css')}}" rel="stylesheet" />
    <link href="{{asset('css/assets/demo/demo.css')}}" rel="stylesheet" />
    <link href="{{asset('css/assets/demo/css.css')}}" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white">
        <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

                Tip 2: you can also add an image using data-image tag
            -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Quản lý sinh viên
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item   ">
                    <a class="nav-link" href="{{ route('admin')}}">
                        <i class="material-icons">dashboard</i>
                        <p>Thống kê</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('thongtin')}}">
                        <i class="material-icons">person</i>
                        <p>Thông tin</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('sinhvien')}}">
                        <i class="material-icons">content_paste</i>
                        <p>Sinh viên</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="{{route('nhanvien')}}">
                        <i class="material-icons">library_books</i>
                        <p>Giáo Viên</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('monhoc')}}">
                        <i class="material-icons">bubble_chart</i>
                        <p>Môn học</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('lop')}}">
                        <i class="material-icons">location_ons</i>
                        <p>Lớp</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="material-icons">notifications</i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="material-icons">language</i>
                        <p>RTL Support</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <button type="button" class="btn btn-success">Thêm giáo viên</button>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                          <a class="nav-link" href="#pablo">
                            <i class="material-icons">dashboard</i>
                            <p class="d-lg-none d-md-block">
                              Stats
                            </p>
                          </a>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                          <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                            <p class="d-lg-none d-md-block">
                              Some Actions
                            </p>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Mike John responded to your email</a>
                            <a class="dropdown-item" href="#">You have 5 new tasks</a>
                            <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                            <a class="dropdown-item" href="#">Another Notification</a>
                            <a class="dropdown-item" href="#">Another One</a>
                          </div>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a>
                                <form id="logout-form" action="{{ route('logout') }} " method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row hienthi">
                    <!-- Trigger the modal with a button -->

                    <!-- Modal -->

                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Thêm Giáo viên</h4>
                            <p class="card-category">Trường Đào Tạo Lập trình viên Quốc tế FPT Aptech</p>
                        </div>
                        <div class="card-body table-responsive">
                            <form action="{{url("nhan-vien/create")}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <p class="text-warning col-lg-3" >Họ và tên</p>
                                    <input type="text" class="col-lg-8" value="{{old("teacher_name")}}" name="teacher_name" placeholder="nhập tên">
                                    @if($errors->has("teacher_name"))
                                        <span class="invalid-feedback" role="alert" style="color: red">
                                                <strong>{{$errors->first("teacher_name")}}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <p class="text-warning col-lg-3" >Ảnh</p>
                                    <input type="file" class="col-lg-8" value="{{old("teacher_image")}}" name="teacher_image" placeholder="">
                                </div>

                                <div class="row">
                                    <p class="text-warning col-lg-3">Tuổi</p>
                                    <input type="text" class="col-lg-8" value="{{old("teacher_age")}}" name="teacher_age" placeholder="nhập tuỏi">
                                    @if($errors->has("teacher_age"))
                                        <span class="invalid-feedback" role="alert" style="color: red">
                                                <strong>{{$errors->first("teacher_age")}}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <p class="text-warning col-lg-3">Giới tính</p>
                                    <input type="text" class="col-lg-8" value="{{old("teacher_gender")}}" name="teacher_gender" placeholder="giới tính">
                                    @if($errors->has("teacher_gender"))
                                        <span class="invalid-feedback" role="alert" style="color: red">
                                            <strong>{{$errors->first("teacher_gender")}}</strong>
                                          </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <p class="text-warning col-lg-3">Lớp Id</p>
                                    <select name="lop_id" class="col-lg-8">
                                        <option value="">lớp</option>
                                        @foreach($lops as $lop)
                                            <option @if(old("lop_id")== $lop->lop_id)selected @endif value="{{$lop->lop_id}}">{{$lop->lop_name}}</option>
                                        @endforeach
                                    </select>

                                    @if($errors->has("lop_id"))
                                        <span class="invalid-feedback" role="alert" style="color: red">
                                                <strong>{{$errors->first("lop_id")}}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <p class="col-lg-3"></p>
                                    <div class="col-lg-8 cl"> <input type="submit" value="Xác nhận" class="submit"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="row">--}}

{{--                <div class="col-lg-12 col-md-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header card-header-warning">--}}
{{--                            <h4 class="card-title">Danh sách giáo viên</h4>--}}
{{--                            <p class="card-category">Trường Đào Tạo Lập trình viên Quốc tế FPT Aptech</p>--}}
{{--                        </div>--}}
{{--                        @if(Session::has("message"))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{Session::get("message")}}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        <div class="card-body table-responsive">--}}
{{--                            <table class="table table-hover">--}}
{{--                                <thead class="text-warning">--}}
{{--                                <th>ID</th>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Age</th>--}}
{{--                                <th>gender</th>--}}
{{--                                <th>class_id</th>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($teachers as $teacher)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$teacher->teacher_id}}</td>--}}
{{--                                        <td>{{$teacher->teacher_name}}</td>--}}
{{--                                        <td>{{$teacher->teacher_age}}</td>--}}
{{--                                        <td>{{$teacher->teacher_gender}}</td>--}}
{{--                                        <td>{{$teacher->teacher_id}}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

</div>
</div>
<script src="{{ asset('css/assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('css/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('css/assets/js/core/bootstrap-material-design.min.js') }}"></script>
<script src="{{ asset('css/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('css/assets/js/plugins/moment.min.js') }}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('css/assets/js/plugins/sweetalert2.js') }}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('css/assets/js/plugins/jquery.validate.min.js') }}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('css/assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('css/assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('css/assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('css/assets/js/plugins/jquery.dataTables.min.js') }}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('css/assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('css/assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('css/assets/js/plugins/fullcalendar.min.js') }}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('css/assets/js/plugins/jquery-jvectormap.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('css/assets/js/plugins/nouislider.min.js') }}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js') }}"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('css/assets/js/plugins/arrive.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{ asset('css/assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('css/assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('css/assets/js/material-dashboard.js') }}?v=2.1.1" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('css/assets/demo/demo.js') }}"></script>
<script>
    $(document).ready(function () {
        $().ready(function () {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function (event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function () {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function () {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function () {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function () {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function () {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function () {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
    $(".btn-success").click(function () {
        $(".hienthi").toggle(500);
    });
</script>
</body>

</html>