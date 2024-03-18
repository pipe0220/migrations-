<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Numeros factoriales </title>
</head>
<body>
    <h2>Numeros Factoriales</h2>

    <from action="{{route('factorial.store')}}"method="post">
        @csrf
        <label for="numero">Ingrese un numero:</label><br/>
        <input type="number" name="numero"required>
        <br>
        <button type="submit">Verificar factorial</button>
        </form>

@if('numero' && isset($factorial))
<p> El factorial de {{'numero'}} es :{{isset($factorial)}}</p>
@endif
</body>
</html>


