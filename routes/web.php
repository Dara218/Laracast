<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

Route::get('/', function () {

    $files = File::files(resource_path("posts"));
    $posts = [];

    foreach($files as $file)
    {
        $document = YamlFrontMatter::parseFile($file);

        $posts[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }

    // dd($posts);

    return view('posts', ['posts' => $posts]);

    // dd($posts[0]->title);

});

Route::get('/posts/{post}', function ($slug) {

    return view('post', ['post' => $post = Post::find($slug)]);

})->where('post', '[A-z_\-]+');


Route::get('/post', function(){
    return view('post');
});
