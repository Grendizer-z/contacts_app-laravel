<?php

namespace App\Models;
use App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'email',
        'clave', 
        'fecha_creacion', 
    ];

    protected $hidden = [
        'clave', 
    ];

    public function getAuthPassword()
    {
        return $this->clave;
    }

    public function contactos()
    {
        return $this->hasMany(Contact::class, 'user_id');
    }
}