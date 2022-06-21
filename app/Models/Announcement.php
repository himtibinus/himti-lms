<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Announcement extends Model
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
        'fields'
    ];

    /**
     * Get the event associated with the Announcement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event(): HasOne
    {
        return $this->hasOne(Event::class, 'id', 'eventID');
    }
}
