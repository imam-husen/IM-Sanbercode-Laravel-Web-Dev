@extends('layouts.master')

@section('Judul','Form')

@section('content')
<form action="/signup" method="post">
    @csrf
  <label for="firstname">First name:</label><br /><br />
  <input type="text" name="firstname" id="firstname" /><br /><br />
  <label for="lastname">Last name:</label> <br /><br />
  <input type="text" name="lastname" id="lastname" /><br /><br />

  <button type="submit">Sign Up</button>
    
@endsection
    
