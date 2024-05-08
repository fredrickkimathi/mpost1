@extends('layouts.app')

@section('content')
   <div class="wrap">
        <div class="wrap2">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="reg-form" style="@error('name') border:2px solid red; @enderror  "    >
                    <label for="name" class="sr-only"> Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter Name" class="phn" value="{{ old('name') }}">

                    
                </div>
                @error('name')
                        <div class="error-txt">
                            {{ $message }}
                        </div>
                    @enderror

                <div class="reg-form" style="@error('name') border:2px solid red; @enderror">
                    <label for="username" class="sr-only"> Username: </label>
                    <input type="text" name="username" id="username" placeholder="Your Username" class="phn" value="{{ old('username') }}">
                </div>
                @error('username')
                        <div class="error-txt">
                            {{ $message }}
                        </div>
                    @enderror

                <div class="reg-form" style="@error('name') border:2px solid red; @enderror">
                    <label for="email" class="sr-only"> Email: </label>
                    <input type="text" name="email" id="email" placeholder="Your Email" style="width:100%; height:100%" value="{{ old('email') }}">
                </div>
                @error('email')
                        <div class="error-txt">
                            {{ $message }}
                        </div>
                    @enderror

                <div class="reg-form" style="@error('name') border:2px solid red; @enderror">
                    <label for="password" class="sr-only"> Password: </label>
                    <input type="password" name="password" id="password" placeholder="Enter a Password" class="phn">
                </div>
                @error('password')
                        <div class="error-txt">
                            {{ $message }}
                        </div>
                    @enderror

                <div class="reg-form" style="@error('name') border:2px solid red; @enderror">
                    <label for="password" class="sr-only"> Confirm Password: </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your Password" class="phn" >

                    
                </div>

                <button type="submit" class="sub-btn">Register</button>

                
           
            </form>
        </div>

   </div>
@endsection