<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeOfService extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}

