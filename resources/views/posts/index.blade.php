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

                    <div class="mb-5">
                        <a href="" class="p-text">{{$post->user->username}}</a><span class="p-text1">{{$post->created_at->diffForHumans()}}</span>

                        <p class="mb-2">{{$post->body}}</p>

                        <div >
                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="text-blue-500">Delete</button>
                        </form>

                        </div>

                        <div class="flex items-center">
                            @auth
                                @if (!$post->likedBy(auth()->user()))
                                    <form action="{{ route('posts.likes', $post->id) }}" method="post" class="mr-1">
                                        @csrf
                                        <button type="submit" class="text-blue-500">Like</button>
                                    </form>
                                @else
                                    <form action="{{ route('posts.likes', $post->id) }}" method="post" class="mr-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-blue-500">Unlike</button>
                                    </form>
                                @endif
                                   
                            @endauth

                            <span class="pb-4">{{ $post->likes->count() }} {{Str::plural('like', $post->likes->count())}}</span>


                        </div>

                    </div>
                 @endforeach
                 {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif

        </div>

   </div>
@endsection