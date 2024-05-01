<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- buat icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        rel="stylesheet">
    @vite('resources/css/card.css')

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="{{ route('shop') }}" class="navbar-brand mb-0 h1">
                <img src="{{ Vite::asset('../resources/images/autumn.png') }}" alt="Autumn Logo" class="me-2"
                    style="height: 24px;">
                Autumn Collection
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-6 col-md-auto"><a href="{{ route('shop') }}" class="nav-link">Shop</a></li>
                    <li class="nav-item col-6 col-md-auto"><a href="{{ route('checkout.index') }}"
                            class="nav-link">Checkout</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('checkout.index') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi bi-cart me-1"></i> Add Order</a>
            </div>
        </div>
        </div>
    </nav>
    {{-- biodata --}}
    <div class="text">
        <h2>HOLLA! NICE TO MEET YOU</h2>
    </div>
    <div class="card-owner">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ Vite::asset('../resources/images/owner.jpeg') }}" class="img-fluid rounded mx-auto"
                    alt="Owner">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Herlina Karolina</h5>
                    <p class="card-text">Saya lahir di Sidoarjo, saat ini berusia 19 Tahun, memiliki hobi bermain alat
                        musik keyboard dan membaca buku. Kesibukan saya saat ini yaitu berkuliah dan aktif di UKM Telkom
                        Art, untuk kegiatan external saya aktif menjadi bagian dari involunteer Surabaya.</p>
                    <p class="card-text"><small class="text-muted">Nim: 1204220084</small></p>
                    <p class="card-text"><small class="text-muted">Prodi: Sistem Informasi</small></p>
                    <p class="card-text"><small class="text-muted">Email: herlina@student.ittelkom-sby.ac.id</small></p>
                    <p class="card-text"><small class="text-muted">Terima kasih! Saya senang sekali Anda bisa berkunjung
                            ke toko Saya <3 </small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- new in  --}}
    <div class="text">
        <h2>NEW IN</h2>
    </div>
    <div class="card-container">
        <div class="card">
            <img src="{{ Vite::asset('../resources/images/shawl.jpg') }}" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Knitted Wraps ShawlCraft</h5>
                <p class="card-text">Rp 65.000</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ Vite::asset('../resources/images/men1.jpg') }}" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Round Neck Casual Sweater</h5>
                <p class="card-text">Rp 279.000</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ Vite::asset('../resources/images/bag1.jpg') }}" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Minimalist Flap Square Bag</h5>
                <p class="card-text">Rp 185.000</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ Vite::asset('../resources/images/woman1.jpg') }}" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Turtleneck Sweater Lantern </h5>
                <p class="card-text">Rp 300.000</p>
            </div>
        </div>
    </div>
    <div class="text">
        <h2>KATALOG</h2>
    </div>
    <div class="katalog">
        <!-- Katalog 1 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/woman2.jpg') }}" alt="Product 1">
            <div class="katalog-content">
                <p>Cropped Blazer</p>
                <button>More</button>
            </div>
        </div>
        <!-- Katalog 2 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/shawl3.jpg') }}" alt="Product 2">
            <div class="katalog-content">
                <p>Shawl</p>
                <button>More</button>
            </div>
        </div>
        <!-- Katalog 3 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/woman3.jpg') }}" alt="Product 3">
            <div class="katalog-content">
                <p>High Waist Cord Wide Leg Pants</p>
                <button>More</button>
            </div>
        </div>
        <!-- Katalog 4 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/men2.jpg') }}" alt="Product 4">
            <div class="katalog-content">
                <p>Jacket</p>
                <button>More</button>
            </div>
        </div>
        <!-- Katalog 5 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/beanie.jpg') }}" alt="Product 5">
            <div class="katalog-content">
                <p>Beanie's</p>
                <button>More</button>
            </div>
        </div>
        <!-- Katalog 6 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/bag2.jpg') }}" alt="Product 6">
            <div class="katalog-content">
                <p>Cuttie Bag</p>
                <button>More</button>
            </div>
        </div>
    </div>

    {{-- Promo --}}
    <div class="promo-box">
        <img src="{{ Vite::asset('../resources/images/images5.jpeg') }}" alt="Promo Image">
        <div class="promo-content">
            <h3>UP TO 50% OFF</h3>
            <p>Free Shipping over Rp 100.000</p>
            <button>Shop Now</button>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
