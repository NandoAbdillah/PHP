<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiak & Weton</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <style>
        .font-option {
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Z-Diac</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-2 ">
                <ul>
                    <li class="list-unstyled font-option my-4"><a href="?menu=temukan" class="text-decoration-none">Temukan</a></li>
                    <li class="list-unstyled font-option my-4"><a href="?menu=pelajari" class="text-decoration-none">Pelajari</a></li>
                    <li class="list-unstyled font-option my-4"><a href="?menu=info" class="text-decoration-none">Info Lain</a></li>
                    <li class="list-unstyled font-option my-4"><a href="?menu=temukan" class="text-decoration-none">Bagikan</a></li>
                </ul>
            </div>
            <div class="col-10 g-5   ">
                <?php
                if (isset($_GET['menu'])) {
                    $menu = $_GET['menu'];
                    require_once "$menu.php";
                }
                else {
                    echo "Selamat Datang !";
                }
                ?>
            </div>

        </div>
    </div>
    <!-- <input type="date" name="tanggal-lahir" id="" class="form-control"> -->
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>