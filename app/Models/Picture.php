<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Picture extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'albumID',
        'location'
    ];

    /**
     * Get the Album that owns the Picture
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}
