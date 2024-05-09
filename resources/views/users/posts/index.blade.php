@extends('layouts.app')

@section('content')
   <div class="wrap">
        <div class="wrap1">
            
        @if($posts->count())
                @foreach ($posts as $post )
                    <x-post :post="$post" />
                 @endforeach
                 {{ $posts->links() }}
            @else
                <p>{{$user->name}} does not have any posts</p>
            @endif
        </div>

   </div>
@endsection