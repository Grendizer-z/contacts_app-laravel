<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}