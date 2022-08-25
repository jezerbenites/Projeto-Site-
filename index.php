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
    <title>Bem-Vindo</title>
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

    body {
        background-color: white;
    }

    header {
        display: flex;
        flex-direction: column;
        background-color: var(--cor2);
        width: 100%;
        height: 55px;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
    }

    nav .logo {
        margin-left: 20px;
        text-decoration: none;
        font-size: 24px;
        text-transform: uppercase;
        color: var(--cor4);
        font-family: 'Josefin Sans', sans-serif;
        text-shadow: 0.1rem 0.1rem 0.2rem var(--cor2);
    }

    nav .nav-list {
        display: inline-flex;
        align-items: center;
        margin-right: 20px;
    }

    nav .nav-list li {
        display: flex;
        align-items: center;
        position: relative;
        list-style: none;
        padding: 0 20px;
        height: 55px;
        color: #323232;
        text-decoration: none;
    }

    a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    }

    p {
        color: black;
    }
    

    a:hover {
        color: var(--cor5);
    }

    
    nav .nav-list li::after {
        content: "";
        position: absolute;
        background-color: var(--cor5);
        color: var(--cor5);
        height: 3px;
        width: 0%;
        top: 0;
        left: 0;
        transition: 1.2s ease-in-out;
    }

    nav .nav-list li:hover::after {
        width: 100%;
        color: var(--cor5);
    }

    .mobile-menu div {
        background-color: var(--cor4);
        height: 2px;
        width: 32px;
        margin: 8px;
    }

    /*Mobile menu*/
    .mobile-menu {
        display: none;
    }

    .mobile-menu.active .line1 {
        transform: rotate(-45deg) translate(-8px, 8px);
    }
    
    .mobile-menu.active .line2 {
        opacity: 0;
    }
    
    .mobile-menu.active .line3 {
        transform: rotate(45deg) translate(-6px, -6px);
    }

    @media (max-width: 950px) {
    body {
        overflow-x: hidden;
    }

    nav {
        height: 100%;
    }
    
    .mobile-menu {
        display: block;
        margin-right: 10px;
        cursor: pointer;
    }

    .nav-list {
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        width: 0;
        padding: 20px 0;
        top: 55px;
        right: -20px;
        background-color: var(--cor3);
        z-index: 1000;
        transition: 0.6s;
        visibility: hidden;
    }

    .nav-list.active {
        width: 100%;
        visibility: visible;
        padding: 0;
    }

    .nav-list a {
        color: var(--cor4);
        text-shadow: 0.1rem 0.1rem 0.2rem black;
    }

    .nav-list a:hover {
        color: var(cor3);
    }

    .nav-list li {
        width: 100%;
        justify-content: center;
        color: var(--cor3)
    }
}

    section.cards {
        background-image: url(imagens/imagem2.jpg);  
        background-size: cover;     
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        box-shadow: inset 1px 1px 15px 1px rgba(0, 0, 0, 0.473);
    }

    .secao1 {
        background-color: #061A23;
    }

    img {
        max-width: 600px;
        margin: 20px;
    }

    .artigo {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-evenly;
        align-content: space-evenly;
    }
    
    .body-center {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: space-evenly;
        justify-content: space-evenly;
        justify-items: space-evenly;
    }

    .secao1 h1 {
        color: var(--cor5);
        font-weight: bold;
        text-align: center;
        flex-wrap: nowrap;
        margin-bottom: 15px;
        padding-top: 10px;
    }

    .body-text1 {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        align-content: center;
        justify-items: center;
        justify-content: center;
    }
    
    .body-text1 p {
        background-color: var(--cor3);
        border-radius: 10px;
        margin: 10px;
        padding: 8px;
        color: white;
    }

    div.quadrado {
        margin-top: 50px;
        margin-bottom: 50px;
        border-radius: 10px;
        padding: 5px;
        box-shadow: 1px 1px 6px 1px rgb(48, 48, 48);
        width: 300px;
        height: 300px;
    }

    div#q1 {
        background-image: url(imagens/formula.jpg);
        background-position: center center;
        background-repeat: repeat;
        text-align: center;
    }

    div#q2 {
        background-image: url(imagens/ibge.png);
        background-position: left center;
        background-repeat: repeat;
        text-align: center;
    }

    div#q3 {
        background-image: url(imagens/about.png);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        text-align: center;
    }

    .rodape {
        text-align: center;
        background-color: transparent;
        font-size: 0.5rem;
        background-color: #aaa8a8;
    }

    .rodape h1 {
        text-decoration: none;
        color: var(--cor1);
        padding: 5px;
    }

    .artigo h1 {
        color: #06411c;
        text-shadow: 1px 1px 3px var(--cor5);
        margin-top: 18px;
    }

    .artigo p {
        color: white;
        text-shadow: 1px 2px 3px black;
        margin-top: 200px;
        font-weight: bold;
    }



    </style>
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="login.php">Serviço social</a>
            
            <ul class="nav-list">
                <li><a href="login.php">Login</a></li>
                <li><a href="formulario.php">Crie sua conta</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Fale Conosco</a></li>
            </ul>

            <div class="mobile-menu">
                <div class="lines line1"></div>
                <div class="lines line2"></div>
                <div class="lines line3"></div>
            </div>
        </nav>
    </header>
    <main>
        <section class="cards">
            <div class="artigo">
                <article>
                    <a href="form.php">
                        <div class="quadrado" id="q1">
                            <h1>Formulário</h1>
                            <p>Clique aqui para fazer a entrada dos dados</p>
                        </div>
                    </a>
                </article>
                <article>
                    <a href="#">
                        <div class="quadrado" id="q2">
                            <h1>Gráficos</h1>
                            <p>Clique aqui para fazer as comparações com os dados do IBGE</p>
                        </div>
                    </a>
                </article>
                <article>
                    <a href="#">
                        <div class="quadrado" id="q3">
                            <h1>Sobre</h1>
                            <p>Clique aqui para mais informações sobre nós</p>
                        </div>
                    </a>
                </article>
            </div>
        </section>
        <section class="secao1">
            <h1>Um pouco mais sobre o nosso trabalho</h1>
            <div class="body-center">
                <article>
                    <div class="body-text1">
                        <p>O intuito do nosso projeto é a saída nas regiões mais desfavorecidas de Salto, para efetuar a coleta de dados, para assim fazermos uma comparação dos nossos dados coletados pelos alunos do Ceunsp de Itu com os dados oficiais do IBGE. Com base na coleta dos dados, iremos poder tomar as iniciativas e decisões necessárias.</p>
                            <div class="imagem">
                                <picture>
                                    <source media="(max-width: 500px)" srcset="imagens/simbolo-tocha2.png">
                                    <img src="imagens/simbolo-tocha.png" alt="Significado da Logo Serviço Social">
                                </picture>
                            </div>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <footer class="rodape">
        <div>
            <h1>Desenvolvido por WolfPack | Todos os direitos reservados. &copy2022 </h1>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="mobile.js"></script>
</body>
</html>