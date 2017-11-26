<html>
<body>
<head>
    <?php
    $comentario=$_REQUEST['cuerpo'];
    // Escribo en el archivo de opiniones lo que el usuario dijo:
    $archivo=fopen ("opiniones.txt","a+") or die ("No se pudo guardar su opinion"); // Abro el archivo
    fputs ($archivo,"Titulo: $_REQUEST[titulo]"); // Escribo el titulo
    fputs ($archivo,"\n"); // salto de linea
    fputs ($archivo,"Autor: $_REQUEST[autor]"); //
    fputs ($archivo,"\n");
    fputs ($archivo,"Comentario:"); // Pongo de titulo la palabra "opinion:" antes de lo que dijo el visitante.
    fputs ($archivo,"\n");
    fputs ($archivo,"<b>$comentario</b>"); // Escribo la opinion
    fputs ($archivo,"\n");
    fputs ($archivo,"<hr>"); // Separo una opinion de otra
    fputs ($archivo,"\n");
    fclose ($archivo); // Cierro el archivo

    echo "<h1><b>Gracias!</b> por el comentario $_POST[autor] </h1><br>";
    echo "<a href='index.php'>Regresar a la pagina principal</a>";
    ?>
    <a href="index.php">aqui para ver tu comentario</a>
    </head>
    </body>
</html>