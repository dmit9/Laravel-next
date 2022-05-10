@extends('layouts.app')

@section('title')Все сообщения@endsection

@section('content')
<h1>Все сообщения</h1>

@foreach ($data as $item)
    <div class="alert alert-info">
        <h4>ID - {{ $item->id }} , {{ $item->name }}</h4>
        <p>{{ $item->email }}</p>
        <p><small>{{ $item->created_at }}</small></p>
        <a href="{{route('contact-data-one', $item->id)}}"><button class="btn btn-warning">Детальнее</button></a>
    </div>
@endforeach
@endsection
