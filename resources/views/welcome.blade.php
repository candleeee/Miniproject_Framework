<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candle Store</title>
    @vite('resources/css/style.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">

</head>
<body>
    <div class="autumn-collection">
        <div class="container">
            <h1 class="mb-4"><span class="autumn">AUTUMN</span> <span class="collection">COLLECTION</span></h1>
            <div class="col-md-2 offset-md-5 mt-4">
                <div class="d-grid gap-2">
                    <a class="btn btn-shop-now" href="{{ route('shop') }}">Shop Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="box">
        <h2 class="h2">EVERYDAY APPAREL FOR EVERYONE</h2>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
