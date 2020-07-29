@extends('layouts.app')

@section('content')
<div class="container" style="color: cadetblue; height:430px">
    <form action="/p" enctype="multipart/form-data" method=post>
        @csrf
        <div class="col-8 offset-2">
            <div class="row"><h2>ADD NEW POST</h2></div>
            <div class="form-group row">
                <label for="Caption" class="col-md-4 col-form-label "><strong>Post Caption</strong></label>

                <input id="Caption"
                       type="text"
                       class="form-control {{$errors->has('Caption') ? 'is-invalid' : ""}}"

                       name="Caption"
                       value="{{ old('Caption') }}"
                       autocomplete="Caption" autofocus>

                @error('Caption')

                    <strong>{{ $message }}</strong>

                @enderror

            </div>

            <div class="row">
                <label for="Image" class="col-md-4 col-form-label "><strong>Post Image</strong></label>
                <input type="file" class="form-control-file" id="image" name="image">

                @error('image')

                            <strong>{{ $message }}</strong>

             @enderror
            </div>
            <div class="row pt-5">
                <button class="btn btn-primary ">Add New Post</button>
            </div>
        </div>
    </form>

</div>
@endsection
