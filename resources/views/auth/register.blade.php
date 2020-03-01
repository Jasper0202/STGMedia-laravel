@extends('layouts.withoutInc')

@section('title', 'Registreren')
@section('body')
    <header>
        <div class="header-logo"><img src="{{ asset('img/STG-media-logo-concept.png') }}"></div>
        <div class="header-links">
            <a href="/">Home</a>
            <a href="../Pages/Galerij.php">Galerij</a>
            <a href="{{ route('login') }}">Inloggen</a>
        </div>
    </header>
    <span class="white-space">##</span>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="container">
            <div class='form'>
                <label for="uname"><b>Voornaam</b></label>
                <input type="text" placeholder="Vul hier uw voornaam in" name="first_name" required>

                <label for="uname"><b>Achternaam</b></label>
                <input type="text" placeholder="Vul hier uw achternaam in" name="last_name" required>

                <label for="uname"><b>Avatarnaam</b></label>
                <input type="text" placeholder="Vul hier uw avatarnaam in" name="avatar_name" required>

                <label for="uname"><b>Birthday</b></label> <br>
                <input type="date" id="birthday" name="birth_date" required>
                <br>
                <label for="uname"><b>E-mail adres</b></label>
                <input type="text" placeholder="Vul hier uw e-mail adres in" name="email" required>

                <label for="psw"><b>Wachtwoord</b></label>
                <input type="password" placeholder="Vul hier uw wachtwoord in" name="password" required>

                <label for="psw"><b>Wachtwoord herhalen</b></label>
                <input type="password" placeholder="Vul hier uw wachtwoord in" name="password_confirmation" required>

                <button type="submit">Registreer je hier</button>
            </div>
        </div>

    </form>
@endsection
