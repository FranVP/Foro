<html>
<body>
<head>
    <?php
    $comentario=$_REQUEST['respuesta'];
    $archivo=fopen ("respuestas.txt","a+") or die ("No se pudo guardar su respuesta");

    fputs ($archivo,"Autor: $_REQUEST[autor]");
    fputs ($archivo,"\n");
    fputs ($archivo,"Respuesta:");
    fputs ($archivo,"\n");
    fputs ($archivo,"<b>$comentario</b>");
    fputs ($archivo,"\n");
    fputs ($archivo,"<hr>");
    fputs ($archivo,"\n");
    fclose ($archivo);

    echo "<h1><b>Gracias!</b> por la respuesta $_POST[autor] </h1><br>";
    echo "<a href='index.php'>Regresar a la pagina principal</a>";
    //header('Location: index.php');
    ?>
</head>
</body>
</html>