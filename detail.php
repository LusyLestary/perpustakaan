<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="index.php">CodzSword</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="index.php" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item active">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Books</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Pinjaman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
                <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
                </li>
            </ul>
            
        </aside>
        <div class="main p-3">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <!-- Search Bar (kiri) -->
                <div class="search-bar d-flex justify-content-start w-50">
                    <input type="text" class="form-control" placeholder="Search...">
                </div>

                <!-- Profil dan Archive Logo (kanan) -->
                <div class="d-flex justify-content-end align-items-center">
                    <!-- Archive Logo -->
                    <div class="archive-logo">
                        <i class="lni lni-archive"></i> <!-- Ganti dengan gambar ikon sesuai -->
                    </div>
                    
                    <!-- Profile Avatar -->
                    <div class="profile ms-3">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="rounded-circle">
                    </div>
                </div>
            </div>
            <!-- Kotak Pembungkus untuk Category dan Item Jualan -->
            <div class="container p-3">
                <!-- Row yang Terpusat -->
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Gambar Buku -->
                                <img src="https://via.placeholder.com/500" alt="Buku Detail" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6">
                                <!-- Detail Buku -->
                                <h2 class="fw-bold">Judul Buku</h2>
                                <p class="text-muted">Pengarang: <span class="fw-normal">Nama Pengarang</span></p>
                                <p class="text-muted">Penerbit: <span class="fw-normal">Nama Penerbit</span></p>
                                <p class="text-muted">Tahun Terbit: <span class="fw-normal">2024</span></p>
                                <p class="text-muted">Kategori: <span class="fw-normal">Fiksi, Edukasi</span></p>

                                <div class="mt-3">
                                    <h5 class="fw-bold">Deskripsi</h5>
                                    <p>
                                        Buku ini merupakan sebuah karya yang menceritakan tentang berbagai topik menarik seputar teknologi dan kehidupan manusia. Penulis menyampaikan ide-ide yang mendalam dengan bahasa yang mudah dipahami.
                                    </p>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary">
                                        <i class="lni lni-save"></i> Simpan
                                    </button>
                                    <button class="btn btn-primary">Pinjam</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
