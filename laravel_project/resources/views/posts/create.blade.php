@extends('layout.app')

@section('content')

<form method="POST" action="/posts">
    <input type="text" name="title" placeholder="Enter title">
    {{csrf_field()}}
    <input type="submit" name="submit">
</form>

@yield('footer')