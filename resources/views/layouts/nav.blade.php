@php
    $currentRouteName = Route::currentRouteName();
@endphp
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

