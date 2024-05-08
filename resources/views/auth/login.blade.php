@extends('layouts.app')

@section('content')
   <div class="wrap">
        <div class="wrap2">
            <h1 style="text-align:center; font-size: 25px; font-weight:bold; margin-bottom:7%;">Login</h1>

            @if (session('status'))

            <div style="text-align:center; background-color:red; padding:2%; border-radius:12px;">
                {{session ('status')}}
            </div>

                
            
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf
                

                <div class="reg-form" style="@error('name') border:2px solid red; @enderror">
                    <label for="email" class="sr-only"> Email: </label>
                    <input type="text" name="email" id="email" placeholder="Your Email" class="phn"style="width:100%; height:100%" value="{{ old('email') }}">
                </div>
                @error('email')
                        <div class="error-txt">
                            {{ $message }}
                        </div>
                    @enderror

                <div class="reg-form" style="@error('name') border:2px solid red; @enderror">
                    <label for="password" class="sr-only"> Password: </label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" class="phn">
                </div>
                @error('password')
                        <div class="error-txt">
                            {{ $message }}
                        </div>
                    @enderror

               

                <button type="submit" class="sub-btn">Login</button>

                
           
            </form>
        </div>

   </div>
@endsection