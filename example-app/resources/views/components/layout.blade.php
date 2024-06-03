<!doctype html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
</head>
<body>
    <header >
        <div id="menu" >
            <div id="logo">
                <p>ABE</p>
            </div>

            <div id="menu_links">
                <ul id="menu_nav" type="none">
                    <li class="menu_link">
                        <a>Proriedades</a>
                        <ul id="drop-down" type="none">
                            <li><a href="">Aluguer</a></li>
                            <li><a href="">Venda</a></li>
                        </ul>
                    </li>
                    <li class="menu_link"><a href="#about_us">Sobre-nos</a></li>
                    <li class="menu_link">
                        <a>Perfil</a>
                        <ul id="drop-down" type="none">
                            <li><a href="">Ver Perfil</a></li>
                            <li><a href="">Login</a></li>
                            <li><a href="">Cadastro</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    {{$slot}}

    <footer class="navbar navbar-dark bg-dark footer">
        <div class="initial_text">
            <p> Conheça mais sobre ABE , Junta-se a Nós</p>
            <form class="inputsEmail">
                <input type="email"  id="inputemail">
                <label for="inputemail">Deixe o seu email para receber Notificações</label>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="rodape">
            <div class="componentes">
                <p>Saiba Mais </p>
                <div class="text">
                    <p>
                        Nossos somos um grupo de Estudante que decidiu criar um site para facilitar
                        a procura e venda de casas em Angola.Facilitando quer o comprador , quer o vendedor.
                        Encontrando casas em qualquer lugar no país que deseja atendendo as suas necessidades.

                    </p>
                </div>
            </div>
            <div class="componentes">
                <p> Nossos Serviços </p>
                <div class="services">
                    <p>Venda</p>
                    <p>Arrendamento</p>
                </div>
            </div>
            <div class="componentes">
                <p>Seja um Colaborador</p>
                <div class="colabore">
                    <a  href="#">Vendendor</a>
                    <a href="#">Parceiro</a>
                    <a href="#">Investigador</a>
                    <a href="#">Propagador</a>
                </div>
            </div>
            <div class="componentes">
                <p>Redes Sociais</p>
                <div class="social_media">
                    <div>
                        <p>Telegram</p>
                        <img src="{{ asset('img/icones/icons8-telegram-app-48.png') }}" alt="">
                    </div>
                    <div>
                        <p>LinkedIn</p>
                        <img src="{{ asset('img/icones/icons8-linkedin-48.png') }}" alt="">
                    </div>
                    <div>
                        <p>Facebook</p>
                        <img src="{{ asset('img/icones/icons8-facebook-48.png') }}" alt="">
                    </div>
                    <div>
                        <p>WhatsApp</p>
                        <img src="{{ asset('img/icones/icons8-whatsapp-48.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <p> &copy 2024 Todos os direitos reservados a ABE </p>
        </div>
    </footer>

    <script src="{{asset('/js/index.js')}}"></script>
</body>
</html>
