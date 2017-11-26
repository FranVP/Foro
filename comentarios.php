<html>
<head>
    <title>Formulario</title>
</head>
<body>
<form action='opinar.php' method='post'>
    Titulo: <br/><input type='text' name='titulo' required="" /><br/>
    Autor: <br/><input type='text' name='autor' required="" /><br/>
    Cuerpo:<br/><textarea name='cuerpo' rows='10' cols='40' required=""></textarea><br/>
    Fecha: <localtime type='datetime' name='fecha'></localtime>
    <input type='submit' value='Enviar comentario'/></form>
</body>
</html>