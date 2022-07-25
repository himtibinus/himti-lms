<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EventDetail extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'eventID',
        'eventTypeID',
        'createdBy',
        'description',
        'location'
    ];

    /**
     * Get the event associated with the EventDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event(): HasOne
    {
        return $this->hasOne(Event::class, 'id', 'eventID');
    }

    /**
     * Get the eventType associated with the EventDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function eventType(): HasOne
    {
        return $this->hasOne(EventType::class, 'id', 'eventTypeID');
    }

    /**
     * Get the user associated with the EventDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'createdBy');
    }
}
