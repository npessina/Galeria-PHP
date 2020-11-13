<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galería</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	    <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
			    <li class="nav-item">
				    <a class="nav-link" href="subir.php">Subir foto</a>
			    </li>
			    <li class="nav-item">
				    <a class="nav-link" href="index.php">Galería</a>
			    </li>
		    </ul>
	    </div>
    </nav>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Mi Galería en PHP y MySQL</h1>
            </div>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $foto):?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['Id']; ?>">
                        <img src="imagenes/<?php echo $foto['Imagen'] ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="paginacion">
                <?php if ($pagina_actual > 1): ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
                <?php endif; ?>

                <?php if ($total_paginas != $pagina_actual): ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Página Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <footer>
        <p class="copyright">Galería creada por Nicolás Pessina</p>
    </footer>
</body>
</html>