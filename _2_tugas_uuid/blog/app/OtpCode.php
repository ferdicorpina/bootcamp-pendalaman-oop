<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OtpCode extends Model
{
    use SoftDeletes;

    protected $table = 'otp_codes';

    protected $fillable = [
        'code', 'valid_until', 'user_id'
    ];

    public $incrementing = false;

    // relasi dengan tabel user, dimana otp code sebagai foreign key nya
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
