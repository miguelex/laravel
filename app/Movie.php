<?php

namespace Libreria;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = ['name','path','cast','direction','duration','genre_id'];

    public function setPathAttribute($path){
        $name = Carbon::now()->second.$path->getClientOriginalName();
        $this->attributes['path'] = $name;
        \Storage::disk('local')->put($name, \File::get($path));
    }

    public static function Movies(){
        return DB::table('movies')
            ->join('genre','genre.id','=','movies.genre_id')
            ->select('movies.*', 'genre.genre')
            ->get();
    }

}
