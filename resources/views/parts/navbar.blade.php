@section('navbar')
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('welcome') }}">Главная</a>
            <a class="p-2 text-dark" href="{{ route('about') }}">О нас</a>
            <a class="p-2 text-dark" href="{{ route('contact') }}">Контакты</a>
            <a class="p-2 text-dark" href="{{ route('contact-data') }}">Сообщения</a>
            @show
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>