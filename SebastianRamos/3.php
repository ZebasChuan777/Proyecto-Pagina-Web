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
    $rutaImagen = "alien.jpg";
    ?>

    <!-- Imagen con efecto hover -->
    <img src="<?php echo $rutaImagen; ?>" alt="Imagen con efecto" class="imagen-hover">


	
													
													<p>Conclusión del desarrollo</p>
<p>En resumen, Zombies in Spaceland ofrece una reinterpretación audaz y provocadora del mito zombie, al trasladarlo a un contexto espacial. Este giro de perspectiva no solo revitaliza el subgénero zombie, sino que lo enriquece con capas filosóficas y tecnológicas que invitan al lector a reflexionar sobre el significado de la vida, la muerte y el progreso humano. Al hacerlo, la obra explora la contradicción entre la expansión infinita del espacio y la amenaza limitada pero persistente que los zombies representan, una amenaza que no se puede escapar simplemente viajando a nuevas fronteras. En última instancia, Zombies in Spaceland es un recordatorio de que, aunque la humanidad pueda conquistar el espacio, no puede escapar de sí misma ni de las preguntas existenciales que la han acompañado desde sus orígenes.</p>


</body>
</html>