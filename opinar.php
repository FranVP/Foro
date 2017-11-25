<html>
<body>
<head>
    <?php
    $comentario=$_REQUEST['comentario'];
    // Escribo en el archivo de opiniones lo que el usuario dijo:
    $archivo=fopen ("opiniones.txt","a") or die ("No se pudo guardar su opinion"); // Abro el archivo
    fputs ($archivo,"Nombre del visitante: $_REQUEST[nombre]"); // Escribo el nombre del visitante
    fputs ($archivo,"\n"); // Dejo una linea de salto
    fputs ($archivo,"E-Mail del visitante: $_REQUEST[mail]"); // Escribo el email del visitante
    fputs ($archivo,"\n"); // Dejo una linea de salto
    fputs ($archivo,"Comentario:"); // Pongo de titulo la palabra "opinion:" antes de lo que dijo el visitante.
    fputs ($archivo,"\n"); // Linea de salto
    fputs ($archivo,"<b>$comentario</b>"); // Escribo la opinion
    fputs ($archivo,"\n"); // Linea de salto
    fputs ($archivo,"<hr>"); // Separo una opinion de otra
    fputs ($archivo,"\n"); // Y dejo otra linea de salto.
    fclose ($archivo); // Cierro el archivo

    echo "<h1><b>Gracias!</b> por el comentario
$_POST[nombre] </h1><br>"; // Damos el mensaje de exito y despedimos al visitante
    echo "<a href='index.php'>Regresar a la pagina principal</a>"; // Finalizamos la consulta php.
    ?>
    <a href="pagina.php">aqui para ver tu comentario</a>
    </head>
    </body>
</html>