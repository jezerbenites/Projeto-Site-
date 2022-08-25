<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="imagens/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="imagens/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="imagens/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="imagens/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="imagens/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="imagens/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="imagens/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="imagens/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="imagens/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="imagens/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="manifest" href="imagens/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="imagens/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Serviço Social</title>
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');


    :root {
        --cor1: #061A23;
        --cor2: #06373A;
        --cor3: #1F5F5B;
        --cor4: #159947;
        --cor5: #49B265;
    }


    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: Helvetica;
        color: #323232;
        border: none;
    }


    body{
        width:100%;
        height:100%;
        background-image: linear-gradient(45deg, var(--cor3) 30%, var(--cor4) 80%);
        background-attachment: fixed;
        background-size: cover;
    }


    body h1 {
        font-family: 'Josefin Sans', sans-serif;
        text-align: center;
        font-weight: bold;
        color: var(--cor1);
        padding-top: 40px;
        padding-bottom: 15px;
        font-size: 3rem;
    }


    .box{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        background-color: white;
        padding: 10px;
        border-radius: 10px;
        width: 200px;
        margin: auto;
        box-shadow: 1px 1px 5px 1px var(--cor1);
    }


    .imagem {
        display: flex;                    
        flex-direction: row;
        justify-content: center;
        height: 200px;
        margin: auto;
        background-color: white;
        width: 200px;
        border-radius: 20%;
        margin-top: 10px;
        margin-bottom: 10px;
        box-shadow: 1px 1px 5px 1px var(--cor1);
    }


    a {
        text-decoration: none;
        color: var(--cor2);
        font-family: Arial, Helvetica, sans-serif;
        border-radius: 10px;
        padding: 10px;
    }


    button {
        background-color: #b4f0c4;
        padding: 7.5px;
        margin: 5px;
        font-weight: bold;
        font-size: 0.8em;
        border-radius: 5px;
        cursor: pointer;
        outline: none;
        transition: all .4s ease-out;
        box-shadow: 1px 1px 5px 1px var(--cor1);
    }


    button:hover {
        background-color: var(--cor2);
        color: white;
    }

    a:hover {
        color: white;
    }


    .botao button {
        background-color: #d8d7b1;
        border: 1px solid #d8d7b1;
        padding: 7px;
        margin: 5px;
        width: 120px;
        font-weight: bold;
        font-size: 0.8em;
        border-radius: 5px;
        cursor: pointer;
        outline: none;
        transition: all .4s ease-out;
        box-shadow: 1px 1px 2px var(--cor1);
    }


    .botao:hover {
        background-color: var(--cor4);
        color: rgb(0, 0, 0);
    }


    </style>
</head>
<body>
    <button calss="botao"><a href="index.php">Voltar</a></button>
    <div class="container-geral">
        <h1>Serviço Social</h1>
        <div class="imagem">
            <img src="imagens/logo-serviço.png" alt="Logo Serviço Social">
        </div>
        <div class="box">
            <button><a href="acess.html">Entrar</a></button>
            <button><a href="formulario.php">Cadastre-se</a></button>
        </div>
    </div>
</body>
</html>