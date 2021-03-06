<?php namespace Libreria;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Libro extends Model {

    protected $table = 'libros';

    protected $fillable = ['nombre','path','autor','paginas','genero_id'];
    public function setPathAttribute($path){
        $name = Carbon::now()->second.$path->getClientOriginalName();
        $this->attributes['path'] = $name;
        \Storage::disk('local')->put($name, \File::get($path));
    }
}
