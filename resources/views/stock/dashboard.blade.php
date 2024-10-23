<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ali Inventory | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/assets2/images/icon/favicon.ico">
    <link rel="stylesheet" href="/assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets2/css/themify-icons.css">
    <link rel="stylesheet" href="/assets2/css/metisMenu.css">
    <link rel="stylesheet" href="/assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets2/css/slicknav.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

	<link rel="stylesheet" href="/assets3/css/azzara.min.css">

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
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

    <!-- others css -->
    <link rel="stylesheet" href="/assets2/css/typography.css">
    <link rel="stylesheet" href="/assets2/css/default-css.css">
    <link rel="stylesheet" href="/assets2/css/styles.css">
    <link rel="stylesheet" href="/assets2/css/responsive.css">
    <!-- modernizr css -->
    <script src="/assets2/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
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
                            <li class="active">
                                <a href="/dashboard"><i class="fa-solid fa-house"></i></i></i><span>Dashboard</span></a>
                            </li>
                            <li><a href="/notes"><i class="fa-regular fa-comment"></i><span>Notes</span></a></li>
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
                                    <a href="/dataaccount"><i class="fa-solid fa-users"></i></i><span>Manage Account</span></a>
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
                                <li><span>Dashboard</span></li>
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
            <br>
            <div style="margin-left: 20px; margin-right:20px;">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                                            <i class="fa-solid fa-calculator"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Total Stock</p>
                                            <p>Kondisi: Baik dan Buruk</p>
                                            @foreach($data as $item)
                                                <p>Total: {{ $item->total_stock }}</p>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-success bubble-shadow-small">
                                            <i class="fa-solid fa-cubes"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Jumlah Barang</p>
                                            @foreach($data1 as $item)
                                                <p>Kondisi: {{ $item->kondisi }}</p>
                                                <p>Total: {{ $item->total_stock }}</p>
                                            @endforeach
                                            {{-- @foreach($data1 as $item)
                                                <p>{{ $item->nama }}</p>
                                                <p>{{ $item->stock }}</p>
                                            @endforeach --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-danger bubble-shadow-small">
                                            <i class="fa-solid fa-cubes"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Jumlah Barang</p>
                                            @foreach($data2 as $item)
                                                <p>Kondisi: {{ $item->kondisi }}</p>
                                                <p>Total: {{ $item->total_stock }}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @foreach($data3 as $item)
                        <div class="col-sm-6 col-md-4">
                            <div class="card card-stats card-round">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                                <i class="fa-solid fa-cube"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ml-3 ml-sm-0">
                                            <div class="numbers">
                                                <p class="card-category">Nama Barang</p>
                                                    <p><b>{{ $item->nama }}</b></p>
                                                    <p>Kondisi Baik: {{ $item->jumlah_baik }}</p>
                                                    <p>Kondisi Buruk: {{ $item->jumlah_buruk }}</p>
                                                    <p>Total : {{ $item->total_stock }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                    <div style="margin-right: 100px; margin-left: 100px;">
                        @foreach($data4 as $item)
                        <div>
                            <canvas id="myChart" width="1000" height="350" ></canvas>
                        </div>
                      
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        
                        <script>
                        
                            const ctx = document.getElementById('myChart').getContext('2d');
                        
                            new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Kondisi Baik', 'Kondisi Buruk'],
                                datasets: [{
                                    label: 'Total',
                                    data: [{{ $item->jumlah_baik }},{{ $item->jumlah_buruk }}],
                                    backgroundColor: [
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 99, 132, 0.2)'
                                        
                                    ],
                                    borderColor: [
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 99, 132, 1)'
                                        
                                    ],
                                    borderWidth: 1
                                    }]
                                },
                                options: {
                                        scales: {
                                            xAxes: [{
                                                ticks: {
                                                    beginAtZero: true 
                                                    
                                                }
                                            }],
                                            yAxes: [{
                                                display: false
                                            }]
                                        }
                                    }
                                });
                            </script>
                        @endforeach
                    </div>
                </div>
            </div>    <!-- market value area start -->
            <!-- row area start-->
        </div>
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>Ali Inventory</p>
        </div>
    </footer>
    <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- modal input -->
    

    <script>
    $(document).ready(function() {
        $('input').on('keydown', function(event) {
            if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event
                    .shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
                var $t = $(this);
                event.preventDefault();
                var char = String.fromCharCode(event.keyCode);
                $t.val(char + $t.val().slice(this.selectionEnd));
                this.setSelectionRange(1, 1);
            }
        });
    });

    $(document).ready(function() {
        $('#dataTable3').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'print'
            ]
        });
    });
    </script>


    <!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/assets2/js/popper.min.js"></script>
    <script src="/assets2/js/bootstrap.min.js"></script>
    <script src="/assets2/js/owl.carousel.min.js"></script>
    <script src="/assets2/js/metisMenu.min.js"></script>
    <script src="/assets2/js/jquery.slimscroll.min.js"></script>
    <script src="/assets2/js/jquery.slicknav.min.js"></script>
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
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