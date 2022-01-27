<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\User;

class Reply extends Model
{
    use HasFactory;

    public function question(){
        return $this->belongsTo(Question::class , 'question_id' , 'id');
    } 

    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }

   public function likes(){
       return $this->hasMany('likes' , 'like_id' , 'id');
   }
}
