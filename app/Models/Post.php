<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'post';

    protected $fillable = [
        'title',
        'photo', 
        'description',
        'material',
        'stepbystep',
        'user_id',
        'comment_id',
        'like_id',
        'categories_id',
        'slug',
    ];

    protected $hidden = [
        
    ];
    
    public function material()
    {
        return $this->hasMany(Material::class, 'id','materials_id');
    }

    public function stepbystep()
    {
        return $this->hasMany(Stepbystep::class, 'id','stepbysteps_id');
    }

     public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'id','comments_id');
    }

    public function like()
    {
        return $this->hasMany(Material::class, 'id','likes_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'categories_id');
    }

    // use HasFactory;
    // protected $table = 'post';
}
