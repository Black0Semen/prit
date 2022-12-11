@extends('layouts')
@section('content')
<form method="get">
<div class = "search_main">
<h2>Введите название тайтла/команды</h2>
<input type="text" name="title"><br>
<input type="submit">
@foreach($answer as $value)
    {{$value['title']}} 
    {{$value['opisanie']}}
@endforeach
</div>
</form>