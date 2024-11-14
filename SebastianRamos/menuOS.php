<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitio Web</title>
    <style>
         {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url("space.jpg");
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

        /* Estilos para el header */
        header {
            width: 100%;
            background-color: skyblue;
            margin-top: -800px;
        }

        /* Menú de navegación */
        .navegacion .menu {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 1rem 0;
        }

        .menu > li {
            position: relative;
            margin: 0 20px;
        }

        .menu > li > a {
            text-decoration: none;
            color: #f4f4f9;
            font-weight: bold;
            font-size: 1.2rem;
            transition: color 0.3s;
            font-family: sans-serif;
        }

        .menu > li > a:hover {
            color: #e67e22;
        }

        /* Submenú */
        .sub-menu {
            list-style: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #444;
            padding: 0.5rem 0;
            display: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .sub-menu li {
            padding: 0.5rem 1rem;
        }

        .sub-menu li a {
            color: #f4f4f9;
            font-size: 1rem;
            text-decoration: none;
            display: block;
        }

        .sub-menu li a:hover {
            color: #e67e22;
        }

        .menu > li:hover .sub-menu {
            display: block;
        }

        /* Contenido */
        .content {
            padding: 30px;
            text-align: center;
            width: 80%;
        }

        .content img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 10px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navegacion .menu {
                flex-direction: column;
                align-items: center;
            }
            .menu > li {
                margin: 10px 0;
            }.gallery {
                display: grid;
                grid-template-columns: repeat(auto-fill, min(200px, 1fr));
                gap: 15px;
                justify-items: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="galery">
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="inicio.php">Imagenes del Tema</a></li>
                <li>
    <a href="introduccion.php">Introduccion</a>
<li>
    <a href="#">Desarrollo</a>
    <ul class="sub-menu">
        <li><a href="desarrollo.php">Desarrollo</a></li>
        <li><a href="2.php">La deshumanización en el espacio: ¿es posible escapar de nosotros mismos?</a></li>
        <li><a href="3.php">Conclusion del desarrollo</a></li>
    </ul>
</li>
<li>
    <a>Conclusion y Bibliografia</a>
    <ul class="sub-menu">
        <li><a href="conclusion.php">Conclusion</a></li>
        <li><a href="bibliografia.php">Bibliografia</a></li>
    </ul>
</li>
</div
</body>
</html>