<html>
<head>
    <title>Foro Emagister</title>
</head>
<body>
<h1 align="center">Foro Emagister<br></h1>

<button>
    <a href="comentarios.php"> Escribir un post </a>
</button>
<br>
<?php
$fp=fopen("opiniones.txt","r") or
die("No se pudo abrir el archivo");
while (!feof($fp))
{
    $linea=fgets($fp);
    $lineasalto=nl2br($linea);
    echo $lineasalto;
}
?>
<button>
<a href="comentarios.php"> Escribir un post</a>
</button>
</body>
</html>