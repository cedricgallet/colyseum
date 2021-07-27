<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/../assets/img/logo.png">
    <!-- Lien css -->
    <link href="/../assets/css/style.css" rel="stylesheet">
    <!-- Lien bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>PDO</title>
</head>

<body>

    <!-- =======================NAVBAR========================= -->

    <div class="container-fluid p-0">

        <nav class="navbar navbar-expand-lg navbar-light border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand" href="/../index.php">
                    
                    PDO
                </a>

                <button class="navbar-toggler border-success" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/../index.php">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/../controllers/contact-controllers.php">Contact</a>
                        </li>
                    </ul>

                    <ul id="logoutLogin" class="nav navbar-nav navbar-right text-white h-100">
                        <li>
                            <a href="/controllers/login-controllers.php"
                                class="bottom text-decoration-none rounded-pill">
                                Se connecter</a>

                            <a href="/controllers/registration-controllers.php"
                                class="bottom text-decoration-none rounded-pill">
                                Inscription
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- ==============================FIN NAVBAR===================================-->

    <!-- ==============================HEADER===================================-->