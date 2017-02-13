<?php namespace Libreria;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

    protected $table = 'generos';

    protected $fillable = ['nombre'];
}
