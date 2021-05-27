<header {{$attributes->merge(["class"=>"flex flex-row justify-between p-4"])}}>
    <img src="{{asset('images/laravel.png')}}" />

    <h1 class="text-cabecera text-6xl">Práctica de Laravel</h1>

    @auth
        <div>
            <h2 class="text-green-50">Registrado como {{auth()->user()->name}}</h2>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <input type="submit" value="Logout" />
            </form>
        </div>
    @endauth
    @guest
        <div>
            <x-form.a href="{{route('login')}}">
                Acceder
            </x-form.a>
            <x-form.a href="{{route('register')}}">
                Registrarme
            </x-form.a>
        </div>
    @endguest
</header>
