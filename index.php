<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- produk all -->
    <link rel="stylesheet" href="css/produkAll.css">

    <!-- katalog -->
    <link rel="stylesheet" href="css/katalog.css">

    <!-- for datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- font awesome -->
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous"
    />
    <title>Campingkuy</title>
    </head>
    <body>

        <!-- php navbar -->
        <?php
        include "halaman/navbar.php";
        ?>
        <!-- akhir php navbar -->

        <!-- php konten -->
        <?php
            @$page = $_GET['page'];

            if(!empty($page)){

                
                switch ($page) {
                        case 'home':
                            include "halaman/home.php";
                            break;

                        case 'produk':
                            include "halaman/produk.php";
                            break;
                        
                        case 'daftarKonsumen':
                            include "halaman/daftarKonsumen.php";
                            break;

                        case 'daftarTransaksi':
                            include "halaman/daftarTransaksi.php";
                            break;

                        case 'daftarDetailTransaksi':
                            include "halaman/daftarDetailTransaksi.php";
                            break;

                        case 'katalog_produk':
                            include "halaman/katalog_produk.php";
                            break;

                        case 'cart':
                            include "halaman/cart.php";
                            break;

                        case 'cetakKuitansi':
                            include "halaman/cetakKuitansi.php";
                            break;
                            
                        case 'transaksiSewa' :
                            include "halaman/transaksiSewa.php";
                            break;

                        default:
                            include "halaman/home.php";
                            break;
                }

            }else{

                include "halaman/home.php";

            }
        ?>
        <!-- akhir php konten -->



        <!-- php tentang -->
        <?php
        include "halaman/tentang.php";
        ?>
        <!-- akhir php tentang -->



        <!-- php kontak -->
        <?php
        include "halaman/kontak.php";
        ?>
        <!-- akhir php kontak -->

        <!--cart -->
        <!-- <a href="?page=cart">
            <button class="btn btn-danger button_cart">
                <p class="tooltip">Buka Cart</p>
                <i class="fas fa-cart-plus"></i>
            </button>
        </a> -->
        <!-- akhir cart-->

        <!-- php footer -->
        <?php
        include "halaman/footer.php";
        ?>
        <!-- akhir php footer -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="js/lottie-player.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>