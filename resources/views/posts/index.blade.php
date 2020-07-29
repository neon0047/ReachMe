@extends('layouts.app')

@section('content')
<div class="container w-75" style="color: cadetblue" >
    @foreach($posts as $post)
        <div class="row pt-5" >
            <div class="col-8">
                <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->image}}"class="w-75"></a>
            </div>
            <div class="col-4" >
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 50px">
                        </div>

                        <div class="font-weight-bolder">
                            <a style="font-size: x-large;color: cadetblue" href="/profile/{{$post->user->id}}">
                                {{$post->user->username}}
                            </a><span style="font-size: 25px">|</span><a style="color: cadetblue" href="#"> Follow</a>

                        </div>

                    </div>
                    <hr style="border: 1px solid orangered">


                    <p><span><strong><a style="color: cadetblue" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></strong></span> {{$post->caption}}</p>
                </div>
            </div>
        </div>
        <hr style="border: 1px solid cadetblue">
    @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
</div>

@endsection
