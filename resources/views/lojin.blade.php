@extends('layouts.header')
@section('content')

<div class="bg-[#E3F0FA]">
    <div class="pt-[150px] text-[36px] font-bold text-center">
        <h1>Welcome to LOGO</h1>
    </div>
    <div class="box">
        <h3>Login</h3>
        <label for="usn">Username</label>
        <input type="text" id="usn" class="outline-none">
        <label for="pw">Password</label>
        <input type="text" id="pw" class="outline-none">
        <button type="submit" class="bg-[#4641A7] text-white ">Log In</button>
        <p>Don't have Account? <a href="#">Sign Up Here</a></p>
    </div>
</div>

@endsection
