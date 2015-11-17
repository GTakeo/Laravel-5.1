<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Producto extends Model 
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion', 'precio','imagen','categoria'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    
}
