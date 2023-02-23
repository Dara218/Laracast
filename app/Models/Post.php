<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
class Post
{
    use HasFactory;
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug){
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        $files = File::files(resource_path("posts"));

        return array_map(function($file){
            return $file->getContents();
        }, $files);
    }

    public static function find($slug){

        if(! file_exists($path = resource_path("posts/{$slug}.html")))
        {
            abort(404);
        }

        return cache()->remember("post.{$slug}", 5 , function() use ($path){
            return file_get_contents($path);
        });
    }
}
