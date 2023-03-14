<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $primaryKey = 'id_profil';

    protected $fillable = [
        'nama',
        'slug',
        'pendidikan',
        'kelas',
        'absen',
        'nim',
        'nohp'
    ];

    public static function getBySlug($slug) {
        return Profile::where([
            'slug' => $slug
        ])->first();
    }

    public static function getId($slug) {
        return Profile::where([
            'slug' => $slug
        ])->first()->id_profil;
    }
}
