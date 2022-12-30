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

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $value)
    {
        return $query->where('name', 'LIKE', '%' . $value . '%')
            ->orWhere('description', 'LIKE', '%' . $value . '%');
    }
}
