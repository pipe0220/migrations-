<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Formulario Registro Cuerpo

</h1>

<form action="{{route('body.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el nombre del Cuerpo:
    <br>
    <input type="text" name="name">
</label>
<br>
<br>
<button type="submit">Enviar Formulario:</button>

</form>

</body>
</html>
