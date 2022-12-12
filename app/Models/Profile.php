<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'birthdate',
        'address',
        'phone',
        'country_id',
        'avatar'
    ];

    /**
     * Método que obtiene el usuario asociado al perfil
     *
     * @author Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Profile
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
