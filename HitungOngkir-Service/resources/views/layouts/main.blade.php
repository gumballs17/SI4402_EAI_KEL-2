<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg bg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">KungFu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cek-toko">Lokasi Toko</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cek-ongkir">Cek Ongkir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section style="margin-top: 50px; margin-left: 100px; margin-right: 100px;">
        @yield('container')
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
