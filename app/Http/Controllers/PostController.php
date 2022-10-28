<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $post = Post::create([
            "name" => "Back to future",
            "slug" => "laravel-generate-multi-slug-on-load",
            "description" => "This is just the laravel slug example"
        ]);
        dd($post);
    }
}
