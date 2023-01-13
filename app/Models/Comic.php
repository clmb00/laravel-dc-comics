<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];

    public static function create_slug($string){

        $slug = Str::slug($string, '-');
        $original_slug = $slug;

        $c=0;
        // questo funziona
        $comic_exist = Comic::where('slug', $slug)->first();
        while ($comic_exist) {
            $c++;
            $slug = $original_slug . $c;
            $comic_exist = Comic::where('slug', $slug)->first();
        }

        return $slug;
    }
}
