<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristAttraction extends Model
{
    use HasFactory;

    public function tourist_attraction_has_many_post() {
        return $this->hasMany(Post::class, 'tourist_attraction_id', 'id');
    }
}
