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
            <h1 class="titulo">Foto: <?php  if(!empty($foto['Titulo'])) {
                echo $foto['Titulo'];    
            } else {
                echo $foto['Imagen'];
            }?></h1>
            </div>
        </div>
    </header>

    <div class="contenedor">
        <div class="foto">
            <img src="imagenes/<?php echo $foto['Imagen']; ?>" alt="">
            <p class="texto"><?php echo $foto['Texto']; ?></p>
            <a href="index.php" class="regresar"><li class="fa fa-long-arrow-left"></li> Regresar</a>
        </div>
    </div>

    <footer>
        <p class="copyright">Galería creada por Nicolás Pessina</p>
    </footer>
</body>
</html>