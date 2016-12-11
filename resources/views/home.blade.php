@extends('layouts.app')

@section('htmlheader_title')
    Títol de la pàgina
@endsection

@section('main-content')
    Hola

    <p>
        <button type="button" class="btn btn-primary" onclick="event.preventDefault(); + document.getElementById('logout-form').submit();">Logout!</button>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        <input type="submit" value="logout" style="display: none;">
    </form>
    </p>
@endsection