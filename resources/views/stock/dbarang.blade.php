<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ali Inventory | Stock</title>
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
                            <li>
                                <a href="/dashboard"><i class="fa-solid fa-house"></i></i></i><span>Dashboard</span></a>
                            </li>
                            <li><a href="/notes"><i class="fa-regular fa-comment"></i><span>Notes</span></a></li>
                            <li class="active">
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
                                <li><a href="/dashboard">Dashboard</a></li>
                                <li><span>Daftar Barang</span></li>
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

                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h2>Daftar Barang</h2>
                                    <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal"
                                        class="btn btn-info col-md-2"><span
                                            class="glyphicon glyphicon-plus"></span>Tambah Barang</button>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="display" style="width:100%">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Jenis</th>
                                                <th>Merk</th>
                                                <th>Seri</th>
                                                <th>Stock</th>
                                                <th>Satuan</th>
                                                <th>Kondisi</th>
                                                <th>Lokasi</th>

                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach ($data1 as $item)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->jenis }}</td>
                                                    <td>{{ $item->merk }}</td>
                                                    <td>{{ $item->seri }}</td>
                                                    <td>{{ $item->stock }}</td>
                                                    <td>{{ $item->satuan }}</td>
                                                    <td>{{ $item->kondisi }}</td>
                                                    <td>{{ $item->lokasi }}</td>
                                                    <td>
                                                        {{-- <button class="btn btn-warning" data-toggle="modal" data-target="#edit" ><i class="fa-solid fa-pen-to-square"></i> Edit</button> --}}
                                                        <a href="/editdata/{{ $item->idx }}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{ $item->idx }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="/hapusdata/{{ $item->idx }}" onclick="return confirm('Apakah Anda Yakin ingin menghapus ?');"  class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                                                    </td>
                                                    {{-- <td><button data-toggle="modal" data-target="#edit....."
                                                            class="btn btn-warning">Edit</button> <button
                                                            data-toggle="modal" data-target="#del ........"
                                                            class="btn btn-danger">Del</button></td> --}}
                                                </tr>
                                            @endforeach


                                            <!-- The Modal Edit -->
                                            @foreach ($data1 as $item)
                                            <div class="modal fade" id="edit{{ $item->idx }}" role="dialog" >
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="/updatedata/{{ $item->idx }}" method="POST">
                                                            @csrf
                                                            
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Barang
                                                                    {{ $item->nama }} - {{ $item->jenis }}
                                                                    - {{ $item->merk }} - {{ $item->kondisi }}</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">

                                                                <label for="nama">Nama</label>
                                                                <input type="text" id="nama" name="nama"
                                                                    class="form-control"
                                                                    value="{{ $item->nama }}" required>

                                                                <label for="jenis">Jenis</label>
                                                                <input type="text" id="jenis" name="jenis"
                                                                    class="form-control"
                                                                    value="{{ $item->jenis }}" required>

                                                                <label for="merk">Merk</label>
                                                                <input type="text" id="merk" name="merk"
                                                                    class="form-control"
                                                                    value="{{ $item->merk }}" required>

                                                                <label for="seri">Seri</label>
                                                                <input type="text" id="seri" name="seri"
                                                                    class="form-control"
                                                                    value="{{ $item->seri }}" required>

                                                                <label for="stock">Stock</label>
                                                                <input type="text" id="stock" name="stock"
                                                                    class="form-control"
                                                                    value="{{ $item->stock }}" disabled>

                                                                <label for="satuan">Satuan</label>
                                                                <input type="text" id="satuan" name="satuan"
                                                                    class="form-control"
                                                                    value="{{ $item->satuan }}"required>

                                                                <label for="satuan">kondisi</label>
                                                                <input type="text" id="kondisi" name="kondisi"
                                                                    class="form-control"
                                                                    value="{{ $item->kondisi }}"disabled>

                                                                <label for="lokasi">Lokasi</label>
                                                                <input type="text" id="lokasi" name="lokasi"
                                                                    class="form-control"
                                                                    value="{{ $item->lokasi }}" required>
                                                                <input type="hidden" name="idbrg" value="#">


                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button class="btn btn-success">Save</button>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            <!-- The Modal Hapus -->
                                            {{-- <div class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form method="post">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Hapus Barang
                                                                    Laptop - Laptop
                                                                    - SDe1</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                Apakah Anda yakin ingin menghapus barang ini dari daftar
                                                                stock?
                                                                <input type="hidden" name="idbrg" value="#">
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-success"
                                                                    name="hapus">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>      --}}
                                        </tbody>
                                    </table>
                                </div>
                                <a href="/exportstock" target="_blank" class="btn btn-info">Export Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Masukkan stok manual</h4>
                </div>
                <div class="modal-body">
                    <form action="/tambahdata" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama Barang" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis</label>
                            <input name="jenis" type="text" class="form-control" placeholder="Jenis / Kategori Barang" required>
                        </div>
                        <div class="form-group">
                            <label>Merk</label>
                            <input name="merk" type="text" class="form-control" placeholder="Merk Barang" required>
                        </div>
                        <div class="form-group">
                            <label>Seri</label>
                            <input name="seri" type="text" class="form-control" placeholder="seri" required>
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <input name="stock" type="number" min="0" class="form-control" placeholder="Qty" required>
                        </div>
                        <div class="form-group">
                            <label>Satuan</label>
                            <select name="satuan" class="custom-select form-control" required>
                                <option value="">--Pilih Satuan--</option>
                                <option value="Buah">Buah</option>
                                <option value="Unit">Unit</option>
                                <option value="Meter">Meter</option>
                                <option value="Milimeter">Centimeter</option>
                                <option value="Milimeter">Milimeter</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kondisi</label>
                            <select name="kondisi" class="custom-select form-control" required>
                                <option value="">--Pilih Kondisi--</option>
                                <option value="Baik">Baik</option>
                                <option value="Buruk">Buruk</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input name="lokasi" type="text" class="form-control" placeholder="Lokasi barang" autocomplete="off" required>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <input name="submit" type="submit" class="btn btn-primary" value="Simpan">
                </div>
                </form>
            </div>
        </div>
    </div>

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