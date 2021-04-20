<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- style.css -->
    <link rel="stylesheet" href="../css/login-daftar.css">

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
    <!-- awal login -->
    <div class="container login">
        <div class="row">
            <div class="col">
                <a href="../index.php?page=home" class="link-login">
                    <h3>Camping<span class="kuy">Kuy</span></h3>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Daftar akun baru sekarang</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Akun Email" required>
                    <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" placeholder="Konfirmasi Password" required>
                    </div>
                    <P>Saya telah membaca dan menyetujui Syarat dan Ketentuan serta Kebijakan Privasi <span class="logo">Camping<span class="kuy">kuy</span></span></P>
                    <button type="submit" class="btn btn-dark btn-block">Daftar</button>
                    <br>
                    <hr>
                    <p>Atau sudah punya akun? <a href="login.php">Login</a> sekarang</p>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
    <!-- akhir login -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>