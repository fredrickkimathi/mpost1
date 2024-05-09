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
                <button type="submit" class="sub-btn1 mb-50" style="width:15%;margin-left:1%" >Post</button>
            </div>
        
            </form>
            @if($posts->count())
                @foreach ($posts as $post )
                    <x-post :post="$post" />
                 @endforeach
                 {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif

        </div>

   </div>
@endsection