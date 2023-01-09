@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
<h1>Ваш отзыв</h1>

@if($errors->any())

<div>
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach      
    </ul>
</div>

@endif

<form method="post" action="/reviews/check">
@csrf
<input type="email" name="email" id="email" placeholder="Введите email" class="input_style"><br>
<input type="text" name="subject" id="subject" placeholder="Введите заголовок" class="input_style"><br>
<textarea name="message" id="message" placeholder="Введите сообщение" class="message_style"></textarea><br>
<button type="submit" class="button_style">Отправить</button><br>
</form>
<br>
<h1>Все отзывы</h1>
@foreach($review as $el)
<div>
<h3>{{ $el->subject }}</h3>
<b>{{ $el->email }}</b>
<p>{{ $el->message }}</p>
</div>
@endforeach
            @endsection