<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Announcement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'eventID',
    ];

    /**
     * Get the Event that owns the Announcement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
