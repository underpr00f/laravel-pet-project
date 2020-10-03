@extends('layouts.layout')
@section('title-block')Контакты@endsection
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1>Contact</h1>
        </div>
        <div class="mt-8 pt-4 py-3 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="container">
                <form action="{{ route('contact-form') }}" method="POST" class="row">
                    @csrf
                    <div class="col-12">
                        <label for="staticEmail2">Email</label>
                        <input type="text" name="email" class="form-control" id="staticEmail2" placeholder="Your email">
                    </div>
                    <div class="col-12">
                        <label for="inputMessage">Message</label>
                        <input type="text" name="message" class="form-control" id="inputMessage" placeholder="Your message">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3 mb-3">Confirm identity</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection