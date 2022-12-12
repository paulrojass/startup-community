<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'category_id',
        'description',
        'url',
        'financial_need',
        'logo',
        'country'
    ];

    /**
     * Método que obtiene el usuario asociado al Startup
     *
     * @author Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Startup
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
