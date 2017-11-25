<html>
<head>
    <title>5</title>
</head>
<body>
<h1><center><b>LOS COMENTARIOS:</b></center><br></h1>
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
PARA ESCRIBIR UNO: <a href="comentarios.php">aqui!</a>
</body>
</html>