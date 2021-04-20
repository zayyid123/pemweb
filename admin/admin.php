<!doctype html>
<html lang="en">
    <head>
    <!-- responsive -->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- css admin -->
    <link rel="stylesheet" href="css_admin/css_admin.css">

    <!-- font awesome -->
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous"
    />

    <title>admin</title>
    </head>
    <body>
    <!-- navbar atas -->
    <?php 
        include "halaman_admin/navbar_admin.php"
    ?>
    <div class="wrapper">
        <!-- sidebar -->
        <?php 
        include "halaman_admin/sidebar.php"
        ?>

        <div id="content">
            <!-- toggel -->
            <?php 
            include "halaman_admin/toggle.php"
            ?>

            <!-- konten -->
            <?php
            @$page = $_GET['page'];

            if(!empty($page)){

                
                switch ($page) {
                        case 'dashboard':
                            include "halaman_admin/dashboard.php";
                            break;
                    
                        case 'data_barang':
                            include "halaman_admin/data_barang.php";
                            break;
                            
                        case 'tambahBarang':
                            include "halaman_admin/tambahBarang.php";
                            break;

                        case 'updateBarang':
                            include "halaman_admin/updateBarang.php";
                            break;

                        case 'hapusBarang':
                            include "halaman_admin/hapusBarang.php";
                            break;

                        case 'updateTransaksi':
                            include "halaman_admin/updateTransaksi.php";
                            break;

                        case 'hapusTransaksi':
                            include "halaman_admin/hapusTransaksi.php";
                            break;

                        case 'updateDetailTr':
                            include "halaman_admin/updateDetailTransaksi.php";
                            break;

                        case 'hapusDetailTr':
                            include "halaman_admin/hapusDetailTransaksi.php";
                            break;

                        case 'data_konsumen':
                            include "halaman_admin/data_konsumen.php";
                            break;
                            
                        case 'updateKonsumen':
                            include "halaman_admin/updateKonsumen.php";
                            break;
                        
                        case 'hapusKonsumen':
                            include "halaman_admin/hapusKonsumen.php";
                            break;
                            
                        case 'transaksi':
                            include "halaman_admin/transaksi.php";
                            break;
                        
                        default:
                            include "halaman_admin/dashboard.php";
                            break;
                }

            }else{

                include "halaman_admin/dashboard.php";

            }
        ?>
            <!-- akhir konten -->
        </div>
    </div>
    










    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js_admin/js_admin.js"></script>
    </body>
</html>