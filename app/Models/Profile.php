<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Profile extends Model
{
    use HasFactory,InteractsWithMedia;

    protected $table = 'profiles';

    protected $append = ['gallery'];

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'phoneNumber',
        'Address'
    ];

    public function getGalleryAttribute()
    {
        return $this->getMedia('gallery');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
