<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Attendant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'eventID',
        'roleID',
        'comissionID',
        'divisionID',
        'regionID'
    ];

    /**
     * Get the Event that owns the Attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Get the Role associated with the Attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Role(): HasOne
    {
        return $this->hasOne(Role::class);
    }

    /**
     * Get the Comission associated with the Attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Comission(): HasOne
    {
        return $this->hasOne(Comission::class);
    }

    /**
     * Get the Division associated with the Attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Division(): HasOne
    {
        return $this->hasOne(Division::class);
    }

    /**
     * Get the Region associated with the Attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Region(): HasOne
    {
        return $this->hasOne(Region::class);
    }
}
