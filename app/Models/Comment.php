<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        "context"
    ];

    protected $table = "comments";
    
    public function users() {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function products() {
        return $this->belongsTo(Product::class, "product_id", "id");
    }
    use HasFactory;
}
