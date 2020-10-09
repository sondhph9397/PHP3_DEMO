<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'phone',
        'age',
        'gender',
        'address',
        'is_active'
    ];

    //fucntion posts thể hiện 1 student có nhiều bài viết
    public function posts(){
        return $this->hasMany(Post::class,'student_id','id');
    }
}
