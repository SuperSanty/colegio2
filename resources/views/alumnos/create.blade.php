<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('alumnos.store')}}" method= 'post'>
        @csrf
        <input type="text" name="Nombre">
        <input type="text" name="Apellido">
        <input type="number" name="Edad">
        <input type="email" name="mail">
        <input type="number" name="curso_id">
        <button type="submit">Cargar</button>
    </form>
</body>
</html>