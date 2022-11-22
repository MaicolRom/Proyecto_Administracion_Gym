<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Afiliado
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $fecha de nacimiento
 * @property $peso
 * @property $suscripcion
 * @property $objetivo
 * @property $email
 * @property $email_verified_at
 * @property $sede_id
 * @property $entrenador_id
 *
 * @property Entrenadore $entrenadore
 * @property Sede $sede
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Afiliado extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'suscripcion' => 'required',
		'objetivo' => 'required',
		'email' => 'required',
		'sede_id' => 'required',
		'entrenador_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','fecha de nacimiento','peso','suscripcion','objetivo','email','sede_id','entrenador_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function entrenadore()
    {
        return $this->hasOne('App\Models\Entrenadore', 'id', 'entrenador_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sede()
    {
        return $this->hasOne('App\Models\Sede', 'id', 'sede_id');
    }
    

}
