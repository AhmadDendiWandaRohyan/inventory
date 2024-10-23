<!DOCTYPE html>
<html lang="en">
    <head>
        <title>*Data Barang Masuk</title>
        <link rel="icon" type="image/png" href="favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
        <link rel="stylesheet" type="text/css" href="styles.css">
        </script>
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

        <style type="text/css">
            @media print {
                #printbtn {
                    display :  none;
                }
            }
        </style>
    
    </head>
    
    <body>
        <div class="container">
            <h2>Transaksi Barang : Masuk / Kembali</h2>
            <h4>(Inventory)</h4>
            <h4><center>Laporan Barang Masuk/Kembali</h4>
            <h4><center>Ali Inventory</h4>  
            <a><center><img src="/img/logoali.png" alt="logo" width="20%"></center></a>
            <style>
                .garis-kop1 {
                    border: none;
                    border-top: 2px solid black; /* Garis dengan ketebalan 2px */
                    margin-bottom: 0; /* Jarak antara garis pertama dan garis kedua */
                }
        
                .garis-kop2 {
                    border: none;
                    border-top: 4px solid black; /* Garis dengan ketebalan 4px */
                    margin-top: 5px; /* Jarak antara garis kedua dan elemen berikutnya */
                }
            </style>
            <hr class="garis-kop1">
            <hr class="garis-kop2">
            <input id ="printbtn" type="button" value="Print" onclick="window.print();" >
            <div class="data-tables datatable-dark">
                <table class="display" id="dataTable3" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Barang</th>
                            <th>Jenis</th>
                            <th>Merk</th>
                            <th>Seri</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Kondisi</th>
                            <th>Keterangan</th>
    
                            <!--<th>Opsi</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($data1 as $item)
                            
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->tgl }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>{{ $item->merk }}</td>
                                <td>{{ $item->seri }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->satuan }}</td>
                                <td>{{ $item->kondisi }}</td>
                                <td>{{ $item->keterangan }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    
        <script>
        $(document).ready(function() {
            $('#dataTable3').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    // 'copy', 'csv', 'excel', 'pdf', 'print',
                ]
            });
        });
        </script>
    
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    
    
    
    </body>
    
    </html>