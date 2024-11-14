<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
        /* Estilo básico para la imagen */
        .imagen-hover {
            width: 300px;
            height: auto;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        /* Efecto cuando el puntero pasa sobre la imagen */
        .imagen-hover:hover {
            transform: scale(1.1); /* Amplía ligeramente la imagen */
            filter: brightness(70%); /* Oscurece la imagen */
        }
        body {
            background-image: url("fondo2.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: black;
            color: white;
            font-family: 'Roboto', sans-serif; /* Fuente modernista */
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
    </style>

</head>
<body>
	

    <?php
    // Ruta de la imagen
    $rutaImagen = "modern.jpg";
    ?>

    <!-- Imagen con efecto hover -->
    <img src="<?php echo $rutaImagen; ?>" alt="Imagen con efecto" class="imagen-hover">


	<div class="text">
													<p>El espacio ha sido históricamente una metáfora de la aspiración humana, un lugar donde la humanidad puede trascender sus limitaciones físicas y sociales, alcanzar nuevas alturas de conocimiento y, posiblemente, escapar de sus problemas terrenales. No obstante, al introducir zombies en este espacio, Zombies in Spaceland subraya una de las grandes contradicciones del sueño humano de explorar el cosmos: a pesar de nuestros avances tecnológicos, seguimos siendo vulnerables a nuestras propias sombras.</p>

<p>Los zombies en esta historia no son solo muertos reanimados, sino una manifestación de lo peor de la humanidad: la incapacidad para evolucionar, la repetición interminable de patrones destructivos y la falta de propósito. Al estar situados en un entorno que, por definición, está alejado de la “humanidad” como la conocemos, estos zombies se convierten en un recordatorio de que las limitaciones humanas no son necesariamente geográficas. Si bien la tecnología espacial permite a los humanos llegar a nuevas fronteras, los zombies son un recordatorio de que, por dentro, seguimos siendo los mismos, atrapados en ciclos interminables de violencia y decadencia.</p>
</div>

</body>
</html>