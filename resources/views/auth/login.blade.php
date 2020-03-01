@extends('layouts.withoutInc')

@section('title', 'Login')
@section('body')
@include('inc.header')
<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Vul hier uw email in" name="email" required>
        @if(\Illuminate\Support\Facades\Session::has('email'))
            <span style="color: red;">{{ \Illuminate\Support\Facades\Session::get('email') }}</span>
        @endif

        <label for="psw"><b>Wachtwoord</b></label>
        <input type="password" placeholder="Vul hier uw wachtwoord in" name="password" required>
        @if(\Illuminate\Support\Facades\Session::has('password'))
            <span style="color: red;">{{ \Illuminate\Support\Facades\Session::get('password') }}</span>
        @endif

        <button type="submit">Log hier in</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Onthoud mij
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <span class="psw"><a href="wachtwoordvergeten.php">Wachtwoord vergeten?</a></span>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        <span class="psw">Nog geen account? <a href="registeren.php">Registreer je hier!</a></span>
    </div>
</form>
@endsection
