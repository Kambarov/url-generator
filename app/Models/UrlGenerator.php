<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UrlGenerator extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->token = self::generateUniqueToken();
        });
    }

    protected $fillable = [
        'url',
        'token'
    ];

    public static function generateUniqueToken()
    {
        do {
            $token = Str::random(6);
        } while(UrlGenerator::where('token', $token)->first());

        return $token;
    }
}
