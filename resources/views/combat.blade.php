<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Combate</title>
    <link rel="stylesheet" href="{{ asset('css/combat.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&family=Ultra&display=swap" rel="stylesheet">
</head>
<body>
    <div id="nome-jogador">ㅤJogador
        <div>
            <img id="Pekka" src="{{ asset('Pekka.png') }}" alt="Pekka">
            <button id="attack">Atacar</button>
            <button id="defence">Defesa</button>
            <p class="vida_jogador">ㅤHPㅤㅤㅤㅤ100/100</p>
        </div>
    </div>
    <div id="nome-vilao">ㅤGolem de Pedra
        <div>
            <p class="vida_golem">ㅤHPㅤㅤㅤㅤㅤ100/100</p>
            <img id="Golem" src="{{ asset('Golem.png') }}" alt="Golem">
        </div>
    </div>
    <img id="Fundo" src="{{ asset('fundo_vilao.jpg') }}" alt="Fundo">
    <img id="Fundo-Jogador" src="{{ asset('fundo-personagem.jpg') }}" alt="Fundo-Personagem">
</body>
</html>