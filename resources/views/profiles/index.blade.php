@extends('layouts.app')

@section('content')
<div class="container w-75" style="color:cadetblue; " >
    <div class="row">
        <div class="col-3  ">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100" alt="dp" >
        </div>
        <div class="col-9 pl-5 pt-2">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <h1>{{$user->username}}</h1>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>
                <div> @can('update', $user->profile)
                        <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                    @endcan</div>
                <div class="d-flex" >
                    <div class="pr-5"><strong>Post</strong> {{ $postCount}}</div>
                    <div class="pr-5"><strong>Followers</strong> {{$followersCount}}</div>
                    <div class="pr-5"><strong>Following</strong> {{ $followingCount}}</div>
                </div>
            <div class="pt-2"><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div><a href="{{$user->profile->url}}">{{$user->profile->url}}</a></div>

        </div>
    </div>
    <hr style="border: 1px solid cadetblue">
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pt-3 pb-4 ">

                <a href="/p/{{$post->id}}"><img id="images" src="/storage/{{$post->image}}" class="w-100"></a>
            </div>

        @endforeach


    </div>
</div>

@endsection
