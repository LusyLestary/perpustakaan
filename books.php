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
            <!-- Container untuk Category dan Item Jualan -->
<div class="row mt-5 main">
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Featured Categories</h2>
            <a href="#" class="text-decoration-none">All Categories &rarr;</a>
        </div>
        <div class="row g-3">
        <!-- Card 1 -->
        <div class="col-2 col-md-2">
            <div class="card text-center p-5 shadow-sm" style="background-color: #f8f9fa;">
                <div class="mb-3">
                    <img src="https://img.icons8.com/?size=100&id=0N5TwKMaFRZK&format=png&color=000000" alt="Petualangan" class="img-fluid" style="width: 50px; height: 50px;">
                </div>
                <h5 class="fs-6">Petualangan</h5>
                <a href="#" class="btn btn-link"></a>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-6 col-md-2">
            <div class="card text-center p-5 shadow-sm" style="background-color: #e5f7ff;">
                <div class="mb-3">
                    <img src="https://img.icons8.com/?size=100&id=Fg_1mwX-EwWy&format=png&color=000000" alt="Fantasi"  style="width: 50px; height: 50px;">
                </div>
                <h5 class="fs-6">Fantasi</h5>
                <a href="#" class="btn btn-link"></a>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-6 col-md-2">
            <div class="card text-center p-5 shadow-sm" style="background-color: #ffe5e6;">
                <div class="mb-3">
                    <img src="https://img.icons8.com/?size=100&id=sEj05B5Tee8r&format=png&color=000000" alt="Romantis"  style="width: 50px; height: 50px;">
                </div>
                <h5 class="fs-6">Romantis</h5>
                <a href="#" class="btn btn-link"></a>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-6 col-md-2">
            <div class="card text-center p-5 shadow-sm" style="background-color: #fff4e6;">
                <div class="mb-3">
                    <img src="https://img.icons8.com/?size=100&id=GBu1KXnCZZ8j&format=png&color=000000" alt="Fiksi Ilmiah"  style="width: 50px; height: 50px;">
                </div>
                <h5 class="fs-6">Fiksi Ilmiah</h5>
                <a href="#" class="btn btn-link"></a>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-6 col-md-2">
            <div class="card text-center p-5 shadow-sm" style="background-color: #fff4e6;">
                <div class="mb-3">
                    <img src="https://img.icons8.com/?size=100&id=74556&format=png&color=000000" alt="Sejarah"  style="width: 50px; height: 50px;">
                </div>
                <h5 class="fs-6">Sejarah</h5>
                <a href="#" class="btn btn-link"></a>
            </div>
        </div>
    </div>
</div>

    <!-- Item Jualan (Kiri) -->
    <div class="col-md-9 order-md-0 mb-4 item-jualan-container">
    <div class="item-jualan-container p-4 border mb-4 rounded-3">
        <h4 class="fw-bold">Buku-buku yang tersedia:</h4>
        <!-- Wrapper untuk membuat elemen berjejer ke kanan dengan kotak di setiap item -->
        <div class="row">
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail.php" class="text-decoration-none text-black">
                    <div class="border p-3 rounded">
                        <img src="https://via.placeholder.com/250" alt="Item 1" class="img-fluid mb-2">
                        <h5 style="font-size: 1.5rem;">Item 1</h5>
                        <p>Deskripsi</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail.php" class="text-decoration-none text-black">
                    <div class="border p-3 rounded">
                        <img src="https://via.placeholder.com/250" alt="Item 2" class="img-fluid mb-2">
                        <h5 style="font-size: 1.5rem;">Item 2</h5>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail.php" class="text-decoration-none text-black">
                    <div class="border p-3 rounded">
                        <img src="https://via.placeholder.com/250" alt="Item 3" class="img-fluid mb-2">
                        <h5 style="font-size: 1.5rem;">Item 3</h5>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail.php" class="text-decoration-none text-black">
                    <div class="border p-3 rounded">
                        <img src="https://via.placeholder.com/250" alt="Item 4" class="img-fluid mb-2">
                        <h5 style="font-size: 1.5rem;">Item 4</h5>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail.php" class="text-decoration-none text-black">
                    <div class="border p-3 rounded">
                        <img src="https://via.placeholder.com/250" alt="Item 5" class="img-fluid mb-2">
                        <h5 style="font-size: 1.5rem;">Item 5</h5>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail.php" class="text-decoration-none text-black">
                    <div class="border p-3 rounded">
                        <img src="https://via.placeholder.com/250" alt="Item 6" class="img-fluid mb-2">
                        <h5 style="font-size: 1.5rem;">Item 6</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>




<div class="col-md-3 order-md-1 mb-4 progress-container">
<div class="category-container p-4 border mb-4 rounded-3">
    <h4>Semua Genre</h4>
    <!-- Wrapper untuk kategori -->
    <div class="d-flex flex-wrap">
        <!-- Genre 1 -->
        <div class="category-item text-center border p-2 me-3 mb-3 rounded-pill" style="background-color: #f2f2f2; font-weight: 600;">
            <span>Petualangan</span>
        </div>
        
        <!-- Genre 2 -->
        <div class="category-item text-center border p-2 me-3 mb-3 rounded-pill" style="background-color: #f2f2f2; font-weight: 600;">
            <span>Fantasi</span>
        </div>
        
        <!-- Genre 3 -->
        <div class="category-item text-center border p-2 me-3 mb-3 rounded-pill" style="background-color: #f2f2f2; font-weight: 600;">
            <span>Romantis</span>
        </div>
        
        <!-- Genre 4 -->
        <div class="category-item text-center border p-2 me-3 mb-3 rounded-pill" style="background-color: #f2f2f2; font-weight: 600;">
            <span>Fiksi Ilmiah</span>
        </div>
        
        <!-- Genre 5 -->
        <div class="category-item text-center border p-2 me-3 mb-3 rounded-pill" style="background-color: #f2f2f2; font-weight: 600;">
            <span>Sejarah</span>
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
