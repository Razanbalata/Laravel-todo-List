<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'priority_id',
        'due_date',
        'is_completed',
        'user_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }
}
