@extends('layouts.app')

@section('title')Контакты@endsection

@section('content')
    <h1>Контакты</h1>


    <form action="{{ route('contact-form') }}" method="post">
        @csrf
    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="subject">Тема сообщения</label>
        <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Отправить</button>
    </form>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo mollitia ducimus aut rem officia. Facere perspiciatis maiores facilis commodi aperiam laboriosam eligendi? Sint earum error excepturi sit eos aspernatur cumque.</p>
@endsection
