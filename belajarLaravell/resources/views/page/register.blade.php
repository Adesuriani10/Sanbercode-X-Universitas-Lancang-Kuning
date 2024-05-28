@extends('layouts.master')

@section('title')
<h1>Buat Account Baru!</h1>
@endsection

@section('content')
    <h3>Sign Up Form</h3>
    <form action="/welcome" method= "post">
        @csrf
        <label>First name:</label> <br/>
        <input type="text" name="full_name"/> <br/>
        <br/>

        <label>Last name:</label> <br/>
        <input type="text" name="last_name"/> <br/>
        <br/>

        <label>Gender:</label><br/>
        <input type="radio" value="1" name="gender" />Male <br/>
        <input type="radio" value="2" name="gender" />Female <br/>
        <input type="radio" value="3" name="gender" />Other <br/>
        <br/>

        <label>Nationality:</label> <br>
        <select name="nationality">
            <option value="1">Indonesia</option>
            <option value="2">Amerika Serikat</option>
            <option value="3">Jepang </option>
            <option value="4">Jerman</option>
            <option value="5">Prancis</option>
        </select>
        <br/><br/>

        <label> Language Spoken:</label> <br>
        <input type="checkbox" value="1" name="language Spoken" /> Bahasa Indonesia <br/>
        <input type="checkbox" value="1" name="language Spoken" /> English <br/>
        <input type="checkbox" value="1" name="language Spoken" /> Other <br/>
        <br/>
        <label>Bio:</label> <br/>
        <textarea name="bio" cols="30" rows="10"></textarea><br/>
        <br/>

        <input type="submit" value="Sign Up" />
    </form>
@endsection