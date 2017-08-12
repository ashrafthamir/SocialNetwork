<?php

namespace social_network;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   public function user()
   {
      return $this->belongsTo(User::Class);
   }

   public function post()
   {
      return $this->belongsTo(Post::Class);
   }
}
