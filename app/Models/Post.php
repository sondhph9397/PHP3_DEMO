<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'desc',
        'content',
        'image_url',
        'status',
        'student_id',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    //function student thể hiện mối quan hệ 1 post sẽ thuộc 1 sinh viên
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    // function categories thể hiện nhiều post, mỗi post có nhiều categories
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_post', 'post_id', 'category_id');
    }
}
