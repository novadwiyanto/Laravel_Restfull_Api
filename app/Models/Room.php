<?php

namespace App\Models;

use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    public function User(): HasMany
    {
        return $this->hasMany(User::class, 'room_id', 'id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
}
