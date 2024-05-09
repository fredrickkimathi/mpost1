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
            @if($posts->count())
                @foreach ($posts as $post )

                    <div class="mb-5">
                        <a href="" class="p-text">{{$post->user->username}}</a><span class="p-text1">date</span>

                        <p>{{$post->body}}</p>
                    </div>
                 @endforeach
            @else
                <p>There are no posts</p>
            @endif

        </div>

   </div>
@endsection