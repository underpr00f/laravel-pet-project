@extends('layouts.layout')
@section('title-block')Сообщение@endsection
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:pt-0">
    <div class="container">
        <h1>Сообщение</h1>
        <div class="row">
            <div class="col-8">
                <ul>
                    @foreach($data as $item)
                        <li>
                            <a href="{{ route('contact-single', $item->id) }}">
                                <h3>{{ $item->email }}</h3>
                                <p>{{ $item->message }}</p>
                                <p><small>{{ $item->created_at }}</small></p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection