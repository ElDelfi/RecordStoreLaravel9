<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Disco
 *
 * @property $id
 * @property $genero_id
 * @property $formato_id
 * @property $nombre
 * @property $artista
 * @property $album
 * @property $year
 * @property $created_at
 * @property $updated_at
 *
 * @property Formato $formato
 * @property Genero $genero
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Disco extends Model
{
    
    static $rules = [
		'genero_id' => 'required',
		'formato_id' => 'required',
		'nombre' => 'required',
		'artista' => 'required',
		'album' => 'required',
		'year' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['genero_id','formato_id','nombre','artista','album','year'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function formato()
    {
        return $this->hasOne('App\Models\Formato', 'id', 'formato_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'id', 'genero_id');
    }
    

}
