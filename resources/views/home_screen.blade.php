<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>A Lenda de Orion</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&family=Ultra&display=swap" rel="stylesheet">

</head>
<body>
    <h1>A Lenda de Orion</h1>
    <h2>Está pronto para se aventurar?</h2><br><br>
    <p class="description">Seja bem-vindo ao Jogo RPG!</p><br><br>
        <a class="button1" href="{{ route('Combate') }}">Jogar</a>
        <a class="button2" href="{{ route('Creditos') }}">Créditos</a>
</body>
</html>