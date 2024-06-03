<x-dashboard title="DashBoard">

<div class="container_center">
    <div class="bottonscontroller">

        <p class="title">
            Perfil Admin
        </p>

        <div class="botoes">
            <button class="buttons">
                Casas
            </button>
            <button class="buttons">
                Usuarios
            </button>
            <button class="buttons">
                Proprietarios
            </button>
            <button class="buttons">
                Pedidos
            </button>
            <button class="buttons">
                Clientes
            </button>
        </div>

    </div>
    <div class="usability">
        <div class="searchs">
            <input type="search" name="search" placeholder="Busque" id="">
            <div class="admin_image">
                <img src="{{ asset('/img/icones/icons8-usuário-48.png') }}" alt="">
                <section>
                    <p>Nome</p>
                    <p>Prevelegio</p>
                </section>
            </div>
        </div>
        <div class="statistics">
            <div class="information">
                <div>
                    <span>54</span> <img src="{{ asset('img/icones/icons8-casa-60.png') }}" alt="">
                </div>
                <div>
                    <p>Clientes</p>
                </div>
            </div>
            <div class="information">
                <div>
                    <span>54</span> <img src="{{ asset('img/icones/icons8-casa-60.png') }}" alt="">
                </div>
                <div>
                    <p>Usuários</p>
                </div>
            </div>
            <div class="information">
                <div>
                    <span>54</span> <img src="{{ asset('img/icones/icons8-casa-60.png') }}" alt="">
                </div>
                <div>
                    <p>Proprietários</p>
                </div>
            </div>
            <div class="information">
                <div>
                    <span>54</span> <img src="{{ asset('img/icones/icons8-casa-60.png') }}" alt="">
                </div>
                <div>
                    <p>Casas</p>
                </div>
            </div>
        </div>
        <div class="system_data">
            <div class="container1">
                <div class="title_inform">
                    <p>Casas recém-adicionadas</p>
                    <button> Save </button>
                </div>

            </div>
            <div class="container2">
                <div class="title_inform">
                    <p>Novos Usuários</p>
                    <button> Save </button>
                </div>

            </div>
        </div>

    </div>
</div>

</x-dashboard>
