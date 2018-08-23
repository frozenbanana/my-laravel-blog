@extends('layouts.app')

@section('content')
<h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $p)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{$p->cover_image}}" style="width:100%">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$p->id}}">{{$p->title}}</a></h3>
                        <small>Written on {{$p->created_at}} by {{$p->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif

@endsection