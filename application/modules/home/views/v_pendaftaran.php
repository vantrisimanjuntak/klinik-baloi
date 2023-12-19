<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!-- Site Metas -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- <link rel="shortcut icon" href="images/fevicon.png" type=""> -->

<title> <?= $title; ?> </title>


<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/asset-home/carint-1.0.0/css/bootstrap.css'); ?>" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="<?= base_url('assets/asset-home/carint-1.0.0/css/font-awesome.min.css'); ?>" rel="stylesheet" />
<!-- <link href="<?= base_url('assets/fontawesome-free-6.5.1-web/css/fontawesome.min.css'); ?>" rel="stylesheet" /> -->

<!-- Custom styles for this template -->
<link href="<?= base_url('assets/asset-home/carint-1.0.0/css/style.css'); ?>" rel="stylesheet" />
<!-- responsive style -->
<link href="<?= base_url('assets/asset-home/carint-1.0.0/css/responsive.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/tambahan.css'); ?>" rel="stylesheet" />



<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<!-- jQery -->
<script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/jquery-3.4.1.min.js'); ?>"></script>
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- custom js -->
<script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/custom.js'); ?>"></script>

</head>

<body style="background:#c5eef6;">

    <div class="hero_area">

        <?php $this->load->view('header'); ?>
        <div class="container mt-4 w-75 pb-5 bg-white">
            <h5 class="text-center font-weight-bold">Form Pendaftaran</h5>
            <form action="<?= base_url('registrasi/submit'); ?>" method="POST">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-12 col-md-10 col">
                        <input type="text" class="form-control" name="nama" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">No. KTP</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="no_ktp" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="" class="form-control" id="" cols="20" name="alamat" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-5">
                        <select class="custom-select" name="jenis_kelamin">
                            <option selected> -- Pilih Jenis Kelamin --</option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Layanan</label>
                    <div class="col-sm-8">
                        <select class="custom-select" name="layanan">
                            <option selected> -- Pilih Jenis Layanan --</option>
                            <option value="layanan_poli_umum">Layanan Poli Umum</option>
                            <option value="layanan_poli_gigi_mulut">Layanan Poli Gigi dan Kesehatan Mulut</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Kontrol</label>
                    <div class="col-sm-10">
                        <input id="datepicker" type="text" name="tgl_kontrol" class="form-control" width="276" />
                        <script type="text/javascript">
                            $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap4',
                                timezone: 'Asia/Jakarta',
                                dateFormat: "dd-mm-yy"
                            });
                        </script>
                    </div>
                </div>
                <div class="container-fluid">
                    <button class="btn btn-primary pull-right">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- footer -->
    <?php $this->load->view('footer'); ?>


    <!-- bootstrap js -->
    <script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/bootstrap.js'); ?>"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
</body>

</html>