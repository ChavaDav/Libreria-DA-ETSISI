<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <img src="https://etsisi.da.upm.es/wp-content/uploads/2020/03/cropped-Logo-web-2.png" alt="">
    </header>
    <main>

        <form action="" method="post"></form>
        <a href="/conexion/comprobacion.php">
            <input type="button" value="Mostrar elementos de la bbdd">
        </a>
    
        <?php
    session_start();
    
        if (isset($_SESSION['usuarios'])) {
            echo "<div>";
            for ($i=0; $i < count($_SESSION['usuarios']) ; $i++) { 
                echo "<p class='contenidos'>NOMBRE:   " .$_SESSION['usuarios'][$i] . "  ASIGNATURA: ". $_SESSION['asignatura'][$i] . "  LIBRO: " . $_SESSION['libro'][$i] .   "</p>";
            }
            echo "</div>";    
        }else
        {
            echo " <p>La conexión no funciona o aun no ha sido establecida </p>";

        }

        session_unset();

        ?>
    
    </main>
    
</body>
</html>