@extends('layouts.app')

@section('content')
   <div class="wrap">
        <div class="wrap1">
        <p style="margin-top:20px;">Post something</p>
            <form action="{{ route('posts') }}" method="post">

            <div class="mb-4">
                
                <label for="body" class="sr-only">Body</label>
                
                <textarea name="body" id="body" class="ta1" placeholder="Post something">

                </textarea>
                @error('body')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="sub-btn" style="width:15%;margin-left:1%" >Post</button>
            </div>
        
            </form>
        </div>

   </div>
@endsection