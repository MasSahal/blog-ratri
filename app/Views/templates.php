<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/public/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="icon" href="<?= base_url('public/favicon.ico') ?>">
    <title>Ratri's Blog</title>
</head>

<body style="background:#ffa5b0">

    <!-- ini class container, biar agak ketengah -->
    <div class="container">

        <!-- Ini awal navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background:#e0dede">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Ratri's Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/category') ?>">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/post') ?>">Post</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Ini akhir navbar -->

        <!-- Ini awal row -->
        <div class="row my-4">

            <!-- ini awal sidebar, buat konten sebelah kiri -->
            <div class="col-md-3 px-0">
                <div class="container-fluid">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action" style="background:#f5f5f5">
                            Menu
                        </a>
                        <a href="<?= base_url('/') ?>" class="list-group-item list-group-item-action">Home</a>
                        <a href="<?= base_url('/category') ?>" class="list-group-item list-group-item-action">Kategori</a>
                        <a href="<?= base_url('/post') ?>" class="list-group-item list-group-item-action">Artikel</a>
                    </div>
                </div>
            </div>
            <!-- Ini akhir sidebar -->

            <!-- ini awal content, buat konten sebelah kanan -->
            <div class="col-md-9">

                <!-- Ini awal card, buat kotak gitu lah -->
                <div class="card">
                    <div class="container">
                        <h2> <?= $this->renderSection("title") ?></h2>
                        <?= $this->renderSection("content") ?>
                        <hr>
                        Copyright &copy;2020 Ratri Anindya Siwi - Allright Reserved
                    </div>
                </div>
                <!-- Ini awal card -->

            </div>
            <!-- Ini akhir conten -->

        </div>
        <!-- Ini awal row -->

    </div>
    <!-- Ini akhir container -->



    <script src="<?= base_url('/public/jquery/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= base_url('/public/popper/popper.js') ?>"></script>
    <script src="<?= base_url('/public/bootstrap/js/bootstrap.js') ?>"></script>

</body>