<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrenadore
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $fechaDeNacimiento
 * @property $sueldo
 * @property $email
 * @property $email_verified_at
 *
 * @property Afiliado[] $afiliados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entrenadore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','fechaDeNacimiento','sueldo','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function afiliados()
    {
        return $this->hasMany('App\Models\Afiliado', 'entrenador_id', 'id');
    }
    

}
