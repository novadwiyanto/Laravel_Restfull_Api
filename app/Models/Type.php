<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    protected $table = 'type';

    /**
     * Get all of the room for the Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function room(): HasMany
    {
        return $this->hasMany(Room::class, 'room_id', 'id');
    }
}
