@extends('layouts.app')


@section('content')



    <ul>
        
            @foreach($posts as $post)

            <div class="image-container">
                
                <img height="100" src="{{$post->path}}" alt="">

                <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</li>

            @endforeach
  
    </ul>


@endsection