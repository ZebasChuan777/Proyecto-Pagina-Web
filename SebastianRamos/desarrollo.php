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
        body{
            background-image: url("fondo.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: black;
            font-family: cursive;
            font-size: 30px; 
            background-color: black;
            color: white;
            font-family: 'Roboto', sans-serif; /* Fuente modernista */
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>

</head>
<body>
	

    <?php
    // Ruta de la imagen
    $rutaImagen = "zombies.jpg";
    ?>

    <!-- Imagen con efecto hover -->
    <img src="<?php echo $rutaImagen; ?>" alt="Imagen con efecto" class="imagen-hover">

<p>El concepto de zombies ha sido parte integral de la cultura popular durante más de un siglo, pero la interpretación y el tratamiento de estas criaturas ha evolucionado con el tiempo. Desde sus primeras representaciones en la literatura y el cine, los zombies han sido símbolos de miedo, represión y la amenaza de la deshumanización. Sin embargo, al trasladar a estos seres del contexto terrenal a un escenario cósmico, Zombies in Spaceland plantea una serie de preguntas sobre los límites de la existencia y la ciencia, y cómo los mitos pueden adaptarse a la tecnología avanzada y la exploración del espacio. En este sentido, la obra no solo amplía el alcance del subgénero zombie, sino que también introduce una nueva dimensión filosófica en la narrativa.</p>


</body>
</html>