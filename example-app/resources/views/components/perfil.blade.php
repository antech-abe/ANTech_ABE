<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/perfil.css')}}">
    <link rel="stylesheet" href="{{asset('/css/perfilCasa.css')}}">
</head>
<body>
    <header >
        <div id="menu" >
            <div id="logo">
                <p>Abe</p>
            </div>

            <div id="menu_links">
                <ul id="menu_nav" type="none">
                    <li class="menu_link">
                        <a>Perfil</a>
                        <ul id="drop-down" type="none">
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="">Sair</a></li>
                        </ul>
                    </li>                    
                </ul>
            </div>
        </div>
    </header>
    {{$slot}}

    <script src="{{asset('/js/index.js')}}"></script>
</body>
</html>