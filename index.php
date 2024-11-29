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
            <a href="#">CodzSword</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item active">
            <a href="index.php" class="sidebar-link">
                <i class="lni lni-home"></i>
                <span>Home</span>
            </a>
        </li>
        
        <li class="sidebar-item">
            <a href="books.php" class="sidebar-link">
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
            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid jumbotron-custom text-center d-flex justify-content-center align-items-center rounded-3">
            <div class="container">
    <div class="row align-items-center justify-content-between">
        <!-- Gambar Kiri (Disembunyikan di Mobile) -->
        <div class="col-md-3 d-none d-md-block tinggi">
            <img src="assets/BUKU_1-removebg-preview.png" alt="Gambar Kiri" class="img-fluid tinggi rounded-3">
        </div>
        <!-- Teks di Tengah -->
        <div class="col-12 col-md-6 text-center">
            <h5 class="display-4">Welcome Back,<br> Lusy Lestary</h5>
            <p class="lead">Ini adalah contoh jumbotron dengan gambar latar belakang yang responsif.</p>
            <button class="btn btn-primary" type="button">Learn More</button>
        </div>
        <!-- Gambar Kanan (Disembunyikan di Mobile) -->
        <div class="col-md-3 d-none d-md-block tinggi">
            <img src="assets/BUKU_2-removebg-preview.png" alt="Gambar Kanan" class="img-fluid tinggi rounded-3">
        </div>
    </div>
</div>

</div>



            <!-- Container untuk Category dan Item Jualan -->
            <!-- Container untuk Category dan Item Jualan -->
<div class="row mt-5 main">
    <!-- Kategori (Kanan) -->
    <!-- Item Jualan (Kiri) -->
<div class="col-md-9 order-md-0 mb-4 item-jualan-container">
    <div class="item-jualan-container p-4 border mb-4 rounded-3">
        <h4 class="fw-bold">Popular</h4>
        <!-- Wrapper untuk membuat scroll horizontal -->
        <div class="d-flex overflow-x-auto">
            <a href="detail.php" class="text-decoration-none text-black">
                <div class="item me-4 border p-3 rounded">
                    <img src="assets/book/Tere Liye.jpg" alt="Item 1" class="img-fluid mb-2">
                    <h5 style="font-size: 1.5rem;">Item 1</h5>
                    <p>deskripsi</p>
                </div>
            </a>
            <a href="detail.php" class="text-decoration-none text-black">
                <div class="item me-4 border p-3 rounded">
                    <img src="assets/book/Perahu Kertas ⛵ _ Dee Lestari.jpg" alt="Item 2" class="img-fluid mb-2">
                    <h5 style="font-size: 1.5rem;">Item 2</h5>
                    <p>deskripsi</p>
                </div>
            </a>
            <a href="detail.php" class="text-decoration-none text-black">
                <div class="item me-4 border p-3 rounded">
                    <img src="https://via.placeholder.com/250" alt="Item 3" class="img-fluid mb-2">
                    <h5 style="font-size: 1.5rem;">Item 3</h5>
                    <p>deskripsi</p>
                </div>
            </a>
            <a href="detail.php" class="text-decoration-none text-black">
                <div class="item me-4 border p-3 rounded">
                    <img src="https://via.placeholder.com/250" alt="Item 4" class="img-fluid mb-2">
                    <h5 style="font-size: 1.5rem;">Item 4</h5>
                    <p>deskripsi</p>
                </div>
            </a>
            <a href="detail.php" class="text-decoration-none text-black">
                <div class="item me-4 border p-3 rounded">
                    <img src="https://via.placeholder.com/250" alt="Item 5" class="img-fluid mb-2">
                    <h5 style="font-size: 1.5rem;">Item 5</h5>
                    <p>deskripsi</p>
                </div>
            </a>
            <a href="detail.php" class="text-decoration-none text-black">
                <div class="item me-4 border p-3 rounded">
                    <img src="https://via.placeholder.com/250" alt="Item 6" class="img-fluid mb-2">
                    <h5 style="font-size: 1.5rem;">Item 6</h5>
                    <p>deskripsi</p>
                </div>
            </a>
            <!-- Tambahkan item-item lainnya -->
        </div>

    </div>

    <div class="item-jualan-container p-4 border mb-4 rounded-3">
        <h4 class="fw-bold">Ongoing</h4>
        <!-- Wrapper untuk membuat scroll horizontal -->
        <div class="d-flex overflow-x-auto">
            <div class="item me-4 border p-3 rounded">
                <img src="https://via.placeholder.com/250" alt="Item 1" class="img-fluid mb-2">
                <h5 style="font-size: 1.5rem;">Item 1</h5>
            </div>
            <div class="item me-4 border p-3 rounded">
                <img src="https://via.placeholder.com/250" alt="Item 2" class="img-fluid mb-2">
                <h5 style="font-size: 1.5rem;">Item 2</h5>
            </div>
            <div class="item me-4 border p-3 rounded">
                <img src="https://via.placeholder.com/250" alt="Item 3" class="img-fluid mb-2">
                <h5 style="font-size: 1.5rem;">Item 3</h5>
            </div>
            <div class="item me-4 border p-3 rounded">
                <img src="https://via.placeholder.com/250" alt="Item 4" class="img-fluid mb-2">
                <h5 style="font-size: 1.5rem;">Item 4</h5>
            </div>
            <div class="item me-4 border p-3 rounded">
                <img src="https://via.placeholder.com/250" alt="Item 5" class="img-fluid mb-2">
                <h5 style="font-size: 1.5rem;">Item 5</h5>
            </div>
            <div class="item me-4 border p-3 rounded">
                <img src="https://via.placeholder.com/250" alt="Item 6" class="img-fluid mb-2">
                <h5 style="font-size: 1.5rem;">Item 6</h5>
            </div>
            <!-- Tambahkan item-item lainnya -->
        </div>
    </div>
</div>


<div class="col-md-3 order-md-1 mb-4 progress-container">
    <div class="progress-container p-4 border mb-4 rounded-3">
        <h4>Progress Buku</h4>
        
        <!-- Buku 1 -->
        <div class="mb-4 d-flexs align-items-center">
            <img src="image1.jpg" alt="Buku 1" class="book-image mr-4">
            <div>
                <h5>Buku 1: The Great Adventure</h5>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
            </div>
        </div>
        
        <!-- Buku 2 -->
        <div class="mb-4 d-flexs align-items-center">
            <img src="image2.jpg" alt="Buku 2" class="book-image mr-4">
            <div>
                <h5>Buku 2: Journey to the Unknown</h5>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                </div>
            </div>
        </div>
    </div>

    <div class="best-sales-container p-4 border rounded-3">
    <h4>Top Books</h4>
    
    <div class="books-list" style="max-height: 600px; overflow-y: auto;">
        <!-- Best-Selling Book 1 -->
        <div class="item mb-4 d-flex align-items-center">
            <img src="path-to-your-image1.jpg" alt="The Great Adventure" style="width: 50px; height: 75px; object-fit: cover; margin-right: 15px;">
            <h5>The Great Adventure</h5>
        </div>
        
        <!-- Best-Selling Book 2 -->
        <div class="item mb-4 d-flex align-items-center">
            <img src="path-to-your-image2.jpg" alt="Journey to the Unknown" style="width: 50px; height: 75px; object-fit: cover; margin-right: 15px;">
            <h5>Journey to the Unknown</h5>
        </div>
        
        <!-- Best-Selling Book 3 -->
        <div class="item mb-4 d-flex align-items-center">
            <img src="path-to-your-image3.jpg" alt="The Mystery of Time" style="width: 50px; height: 75px; object-fit: cover; margin-right: 15px;">
            <h5>The Mystery of Time</h5>
        </div>

        <!-- Best-Selling Book 4 -->
        <div class="item mb-4 d-flex align-items-center">
            <img src="path-to-your-image4.jpg" alt="Science of the Future" style="width: 50px; height: 75px; object-fit: cover; margin-right: 15px;">
            <h5>Science of the Future</h5>
        </div>

        <!-- Best-Selling Book 5 -->
        <div class="item mb-4 d-flex align-items-center">
            <img src="path-to-your-image5.jpg" alt="Buku si Unyil" style="width: 50px; height: 75px; object-fit: cover; margin-right: 15px;">
            <h5>Buku si Unyil</h5>
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
