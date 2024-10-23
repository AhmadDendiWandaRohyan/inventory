<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ali Inventory | Notes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/assets2/images/icon/favicon.ico">
    <link rel="stylesheet" href="/assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets2/css/themify-icons.css">
    <link rel="stylesheet" href="/assets2/css/metisMenu.css">
    <link rel="stylesheet" href="/assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets2/css/slicknav.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-144808195-1');
    </script>
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="/assets2/css/typography.css">
    <link rel="stylesheet" href="/assets2/css/default-css.css">
    <link rel="stylesheet" href="/assets2/css/styles.css">
    <link rel="stylesheet" href="/assets2/css/responsive.css">
    <!-- modernizr css -->
    <script src="/assets2/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <a><img src="/img/logoali.png" alt="logo" width="80%"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="/dashboard"><i class="fa-solid fa-house"></i></i></i><span>Dashboard</span></a>
                            </li>
                            <li class="active"><a href="/notes"><i class="fa-regular fa-comment"></i><span>Notes</span></a></li>
                            <li>
                                <a href="/stock/dbarang"><i class="ti-dashboard"></i><span>Stock Barang</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-layout"></i><span>Transaksi Data
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="/stock/brg_masuk">Barang Masuk / Kembali</a></li>
                                    <li><a href="/stock/brg_keluar">Barang Keluar</a></li>
                                </ul>
                            </li>
                            <li>
                                @if(Auth::user()->role  == "admin")
                                    <a href="/dataaccount"><i class="fa-solid fa-users"></i></i></i><span>Manage Account</span></a>
                                @endif
                            </li>
                            <li>
                                @if(Auth::user()->role  == "admin")
                                    <a href="/register"><i class="fa-solid fa-user-plus"></i><span>Create Account</span></a>
                                @endif
                            </li>
                            <li>
                                <a href="/logout"><span>Logout</span></a>

                            </li>

                            

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
<div class="main-content">
    <!-- header area start -->
    <div class="header-area">
        <div class="row align-items-center">
            <!-- nav and search button -->
            <div class="col-md-6 col-sm-8 clearfix">
                <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="search-box pull-left">
                    <form action="#">
                        <h2>Hi, {{ Auth::user()->nickname}}!</h2>
                    </form>
                </div>
            </div>
            <!-- profile info & task notification -->
            <div class="col-md-6 col-sm-4 clearfix">
                <ul class="notification-area pull-right">
                    <li>
                        <h3>
                            <div class="date">
                                <script type='text/javascript'>
                                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
                                    'Agustus', 'September', 'Oktober', 'November', 'Desember'
                                ];
                                var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                var date = new Date();
                                var day = date.getDate();
                                var month = date.getMonth();
                                var thisDay = date.getDay(),
                                    thisDay = myDays[thisDay];
                                var yy = date.getYear();
                                var year = (yy < 1000) ? yy + 1900 : yy;
                                document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                </script></b>
                            </div>
                        </h3>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- header area end -->
    

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="/dashboard">Dashboard</a></li>
                        <li><span>Notes</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right" style="color:black; padding:0px;">
                    <img src="/img/log.jpg" width="220px" class="user-name dropdown-toggle" data-toggle="dropdown" \>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">
        

        @yield('content')


            <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Ali Inventory</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="/assets2/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/assets2/js/popper.min.js"></script>
    <script src="/assets2/js/bootstrap.min.js"></script>
    <script src="/assets2/js/owl.carousel.min.js"></script>
    <script src="/assets2/js/metisMenu.min.js"></script>
    <script src="/assets2/js/jquery.slimscroll.min.js"></script>
    <script src="/assets2/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="/assets2/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="/assets2/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="/assets2/js/plugins.js"></script>
    <script src="/assets2/js/scripts.js"></script>
</body>

</html>