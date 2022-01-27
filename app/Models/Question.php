<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Reply;
use App\Models\Category;

class Question extends Model
{
    use HasFactory;

    public function user(){
      return $this->belongsTo(User::class , 'user_id' , 'id');
    }

    public function replies(){
      return $this->hasMany(Reply::class , 'replay_id' , 'id');
    }

    public function category(){
         return $this->belongsTo(Category::class , 'category_id' , 'id');
    } 
}
