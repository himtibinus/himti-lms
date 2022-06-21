<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EventDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'eventID',
        'description',
        'location',
        'created_by',
    ];

    /**
     * Get the Event that owns the EventDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Get the User associated with the EventDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function User(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
