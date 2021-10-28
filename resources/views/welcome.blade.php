<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Kampung Rotan</title>
    <style>
        * {
            font-family: 'Rubik', sans-serif;
            padding: 0;
            margin: 0;
        }

        .navbar-name {
            font-size: 22px;
            font-weight: bold;
        }

        .navbar-name span {
            color: #EC5863;
        }

        .btn {
            background: #EC5863;
            text-align: center;
            color: #FFF;
            border-radius: 7px;
        }

        .btn-login {
            margin: 6px 0;
            font-size: 14px;
            font-weight: bolder;
            padding: 5px 25px;
            margin-left: 50px;
        }

        .btn-header {
            font-size: 18px;
            padding: 13px 50px;
        }

        .nav-item {
            margin: 0 10px;
        }

        .container-header {
            background-image: url("{{ asset('img/landing-background.png') }}");
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: -79px;
            top: 0;
            z-index: -1;
        }

        .text-title {
            font-size: 44px;
            font-weight: bold;
        }

        .text-description {
            font-size: 14px;
            font-weight: 400;
        }

        .image-services {
            width: 237px;
            height: 237px;
        }

        .content-service {
            width: 350px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light px-5 py-3">
        <a class="navbar-brand navbar-name" href="#">Kampung <span>Rotan</span></a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto d-flex align-items-center justify-content-center">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">E-katalog</a>
                <a class="nav-item nav-link" href="#">About us</a>
                <a class="nav-item nav-link" href="#">Contact us</a>
                <a class="btn btn-login" href="#">LOGIN</a>
            </div>
        </div>
    </nav>

    <!-- bagian header -->
    <section class="container-fluid container-header d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h2 class="text-title">Pusat Kerajinan Rotan
                di Kalimantan Tengah</h2>
            <p class="text-description" style="margin-bottom: 20px; margin-top: 19px;">Lebih dari 300 produk lokal hasil karya pengerajin dipasarkan dan dilakukan analisasi di Aplikasi ini.</p>
            <a class="btn btn-header" href="#"> MULAI SEKARANG</a>
        </div>
    </section>

    <!-- bagian service -->
    <section class="container-fluid d-flex justify-content-center" style="height: 100vh;">
        <div class=" text-center" style="width: 85%;">
            <div style="margin-bottom: 200px; margin-top: 90px;">
                <h2 class="text-title mb-4" style="color: #EC5863;">SERVICES</h2>
                <b class="text-description">Beberapa layanan yang dapat anda akses dalam laman web kampung rotan diantaranya</b>
            </div>
            <div class="d-flex justify-content-between my-5">
                <div class="content-service">
                    <img class="image-services" src="{{asset('img/task.png')}}" style="margin-bottom: 20px;" />
                    <h2 class="mb-4">E-Catalogue</h2>
                    <p>Katalog produk perajin rotan di Kota Palangka Raya beserta informasi lengkap masing-masing produk</p>
                </div>
                <div class="content-service">
                    <img class="image-services" src="{{asset('img/rated.png')}}" style="margin-bottom: 20px;" />
                    <h2 class="mb-4">Dashboard</h2>
                    <p>Dashboard data digital marketing yang telah dilakukan oleh perajin</p>
                </div>
                <div class="content-service">
                    <img class="image-services" src="{{asset('img/people.png')}}" style="margin-bottom: 20px;" />
                    <h2 class="mb-4">Collaboration</h2>
                    <p>Portal kolaborasi kerja sama untuk proyek rotan dalam skala mengenah dan besar</p>
                </div>
            </div>
        </div>
    </section>

    <!-- bagian katalog -->
    <section class="container-fluid d-flex justify-content-center" style="height: 100vh; background-color: #E5E5E5;">
        <div class=" text-center" style="width: 85%;">
            <div style="margin-bottom: 50px; margin-top: 90px;">
                <h2 class="text-title mb-4" style="color: #000;">E-KATALOG</h2>
                <b class="text-description">Dalam E-katalog terdapat lebih dari 300 produk yang menjadi karya orisinil pengerajin bangsa.</b>
            </div>
            <div class="mx-auto" style="width: 90%;">
                <div class="d-flex justify-content-between mx-auto" style="width: 35%;">
                    <a href="#" class="btn btn-danger">KATEGORI 1</a>
                    <a href="#" class="btn btn-danger">KATEGORI 2</a>
                    <a href="#" class="btn btn-danger">KATEGORI 3</a>
                    <a href="#" class="btn btn-danger">KATEGORI 4</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>