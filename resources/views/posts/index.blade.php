@extends('layouts.app')

@section('content')
   <div class="wrap">
        <div class="wrap1">
            <form action="{{ route('posts') }}" method="post">
            @csrf

            <div class="mb-4">
                
                <label for="body" class="sr-only">Body</label>
                
                <textarea name="body" id="body" class="ta1" placeholder="Post something"></textarea>
                
            </div>
            @error('body')
                <div class="error-txt">
                    {{$message}}
                </div>
                @enderror
            <div>
                <button type="submit" class="sub-btn" style="width:15%;margin-left:1%" >Post</button>
            </div>
        
            </form>
        </div>

   </div>
@endsection