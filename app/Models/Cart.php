<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Cart extends Model implements HasMedia

{
    use HasFactory,Sluggable,InteractsWithMedia;


    protected $fillable = [
        'products_id',
        'quantity',
        'users_id',
    ];

    protected $append = ['gallery'];

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true,
            ]
        ];
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'products_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'users_id');
    }

}
