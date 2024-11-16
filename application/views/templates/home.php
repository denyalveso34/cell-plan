<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cell Plan BTS - Diskominfo Kabupaten Malang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .card-custom {
            max-width: 800px; /* Memperbesar ukuran card */
            width: 90%; /* Mengisi 90% dari lebar layar */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 20px;
        }
        .card-header-custom {
            background-color: #007bff;
            color: #fff;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            padding: 15px;
        }
        .card-body-custom {
            padding: 40px;
        }
        .logo-img {
            height: 120px; /* Memperbesar logo */
            width: auto;
        }
    </style>
</head>

<body class="animsition bg-light">
    <!-- Main Content -->
    <div class="page-wrapper d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container d-flex justify-content-center">
            <!-- Card Frame yang Lebih Besar -->
            <div class="card card-custom">
                <!-- Header Card -->
                <div class="card-header text-center card-header-custom">
                    <h3>Cell Plan BTS - Diskominfo Kabupaten Malang</h3>
                </div>
                <!-- Body Card -->
                <div class="card-body card-body-custom text-center">
                    <!-- Logo Diskominfo (Tengah) -->
                    <div class="mb-4">
                        <img src="<?= base_url('assets/') ?>images/icon/logo-kominfo.png" alt="Logo Diskominfo" class="logo-img">
                    </div>

                    <!-- Judul Halaman (Tengah) -->
                    <h4 class="fw-bold">Kabupaten Malang</h4>
                    <p class="lead mb-4">Sistem Informasi Pemetaan dan Manajemen BTS oleh Diskominfo Kabupaten Malang</p>

                    <!-- Tombol Login (Tengah) -->
                    <a href="<?= base_url('auth') ?>">
                        <button class="btn btn-primary btn-lg">Login</button>
                    </a>
                </div>
                <!-- Footer Card -->
                <div class="card-footer text-center">
                    <p class="text-muted mb-0">&copy; 2024 Diskominfo Kabupaten Malang. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
