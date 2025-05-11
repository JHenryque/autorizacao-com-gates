<x-layouts.-main-layout>
    <div class="container">
        <div class="row">
            <div class="col">


                <ul class="display-6">
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                    @can('user_is_admin')
                        <li><a href="{{ route('only_admin') }}">So Admins</a></li>
                    @endcan
                    @can('user_is_user')
                        <li><a href="{{ route('only_user') }}">So Usuario</a></li>
                    @endcan
                @endguest
                </ul>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @can('user_is_admin')
                <p>ADMIN</p>
            @else
                <p>Olá Mundo</p>
            @endcan

            @cannot('user_is_admin')
                <p>OK....</p>
            @endcannot

            @can('user_is_user')
                <p class="alert-success text-center">Usuário</p>
            @endcan

            @canany(['user_is_admin', 'user_is_user'])
                <p>OK</p>
            @endcanany
        </div>
    </div>
</x-layouts.-main-layout>
