<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public  function create(){
        return view('posts.create');
    }
    public function store(){
        $data=request()->validate([
            'Caption'=>'required',
            'image'=>['required','image'],
        ]);

        //returning image path
        $imagepath = request('image')->store('upload','public');

        $image = Image::make(public_path("storage/{$imagepath}"))->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
            'Caption'=>$data['Caption'],
            'image'=>$imagepath,
        ]);


        return redirect('/profile/'.auth()->user()->id);

    }
    public function show(\App\Post $post){
       return view('posts.show', compact('post'));
    }
}
