@extends('layouts.app')

@section('content')
   <div class="wrap">
        <div class="wrap2">
            <form action="{{ route('register') }}" method="post">
                <div class="reg-form">
                    <label for="name" class="sr-only"> Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter Name">
                </div>

                <div class="reg-form">
                    <label for="username" class="sr-only"> Username: </label>
                    <input type="text" name="username" id="username" placeholder="Your Username">
                </div>

                <div class="reg-form">
                    <label for="email" class="sr-only"> Email: </label>
                    <input type="text" name="email" id="email" placeholder="Your Email">
                </div>

                <div class="reg-form">
                    <label for="password" class="sr-only"> Password: </label>
                    <input type="password" name="password" id="password" placeholder="Enter a Password">
                </div>

                <div class="reg-form">
                    <label for="password" class="sr-only"> Confirm Password: </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your Password">
                </div>

                
           
            </form>
        </div>

   </div>
@endsection