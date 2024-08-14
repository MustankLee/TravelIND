<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function post_belongsTo_user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function post_belongsTo_Tourist() {
        return $this->belongsTo(TouristAttraction::class, 'tourist_attraction_id', 'id');
    }
    
}