<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'user_id'
    ];

    public $incrementing = false;

    // relasi dengan tabel user, dimana otp code sebagai foreign key nya
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
