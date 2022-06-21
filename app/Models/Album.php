<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Album extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'typeID',
    ];

    /**
     * Get the Type associated with the Album
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Type(): HasOne
    {
        return $this->hasOne(Type::class);
    }
}
