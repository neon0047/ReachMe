@extends('layouts.app')

@section('content')
<div class="container" style="color: #12d7e6">
    <div class="row">
        <div class="col-3 pl-5">
            <img src="/images/hacker.jpg" class="rounded-circle " style="max-height: 150px">
        </div>
        <div class="col-9 pt-2">
            <div><h1>ReachMe</h1></div>
                <div class="d-flex" >
                    <div class="pr-5"><strong>Post</strong> 24</div>
                    <div class="pr-5"><strong>Following</strong> 135</div>
                    <div class="pr-5"><strong>Followers</strong> 80M</div>
                </div>
            <div class="pt-2"><strong>reachme.com</strong></div>
            <div>This is social media web app based on php laravel framework</div>
            <div><a href="#">www.reachme.com</a></div>

        </div>
    </div>
    <div class="row pt-5">
    <div class="col-3"><img src="/images/bikki.jpg" class="w-100"></div>
    <div class="col-3"><img src="/images/space.jpg" class="w-100"></div>
    <div class="col-3"><img src="/images/me.jpg" class="w-100"></div>
    <div class="col-3"><img src="/images/us.jpg" class="w-100"></div>
    </div>

</div>
@endsection
