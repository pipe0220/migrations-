<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Formulario Registro Soldado

</h1>

<form action="{{route('soldier.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el  primer nombre :
    <br>
    <input type="text" name="name">
</label>
<br>
<br>
<br>
<label>
    Ingrese el apellido:
    <br>
    <input type="text" name="lastname">
</label>
<br>
<br>
<label>
    Ingrese el grado:
    <br>
    <input type="text" name="grade">
</label>


<button type="submit">Enviar Formulario:</button>

</form>

</body>
</html>
