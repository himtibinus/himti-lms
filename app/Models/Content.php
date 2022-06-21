<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'typeID',
        'created_by'
    ];

    /**
     * Get the Type associated with the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Type(): HasOne
    {
        return $this->hasOne(Type::class);
    }

    /**
     * Get the user associated with the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function User(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
