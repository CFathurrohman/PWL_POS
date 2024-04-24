<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = "m_user";
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'level_id',
        'username',
        'nama',
        'password',
    ];

    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    // Implementing required methods from Authenticatable interface

    public function getAuthIdentifierName()
    {
        return 'user_id';
    }

    public function getAuthIdentifier()
    {
        return $this->getAttribute('user_id');
    }

    public function getAuthPassword()
    {
        return $this->getAttribute('password');
    }

    public function getRememberToken()
    {
        return null; 
    }

    public function setRememberToken($value)
    {
        
    }

    public function getRememberTokenName()
    {
        return null; 
    }
}
