<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'slug',
    //     'description'
    // ];

    // public $timestamps = false;

    // protected static function boot(){
    //     parent::boot();
    //     static::created(function ($post){
    //         $post->slug = $post->generateSlug($post->name);
    //         $post->save();
    //     });
    // }

    // private function generateSlug($name)
    // {
    //     if (static::whereSlug($slug = Str::slug($name))->exists()) {
    //         $max = static::whereName($name)->latest('id')->skip(1)->value('slug');
    //         if (isset($max[-1]) && is_numeric($max[-1])) {
    //             return preg_replace_callback('/(\d+)$/', function($mathces) {
    //                 return $mathces[1] + 1;
    //             }, $max);
    //         }
    //         return "{$slug}-2";
    //     }
    //     return $slug;
    // }

    use \Conner\Tagging\Taggable;

    protected $fillable = [
        'title_name',
        'content'
    ];
}
