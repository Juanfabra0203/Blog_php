<?php

include '../conexion/conexion.php';

$sql = "SELECT * FROM entradas ORDER BY fecha DESC";

$result = $conexion->query($sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Inicio</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">BLOG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main role="main">
        <section class="text-center p-5">
            <h1>BLOG</h1>
            <p class="lead text-center" style="width: 70%; margin: 0 auto;">Algo breve y conciso sobre la colección a continuación: su contenido, el creador, etc. Hágalo breve y conciso, pero no demasiado corto para que la gente no lo pase por alto por completo.</p>
        </section>

        <section class="container d-flex justify-content-center">
            <?php
            while ($fila = $result->fetch_assoc()) {
                echo "
                <div class='card m-2' style='width: 18rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>". htmlspecialchars($fila['titulo']). "</h5>
                        <p class='card-text'>". nl2br(htmlspecialchars(substr($fila['contenido'],0,100))) . "...</p>
                        <p class='card-text'>" . date('d/m/Y', strtotime($fila['fecha'])) . "</p>
                        <a href='#' class='btn btn-primary'>Leer mas</a>
                    </div>
                </div>";
            }

            ?>
        </section>
    </main>







</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>

</html>