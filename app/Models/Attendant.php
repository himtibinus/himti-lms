<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Attendant extends Model
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
        'roleID',
        'comissionID',
        'divisionID',
        'regionID'
    ];

    /**
     * Get the event associated with the Attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event(): HasOne
    {
        return $this->hasOne(Event::class, 'id', 'eventID');
    }

    /**
     * Get the role associated with the Attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role(): HasOne
    {
        return $this->hasOne(Role::class, 'id', 'roleID');
    }

    /**
     * Get the comission associated with the Attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comission(): HasOne
    {
        return $this->hasOne(Comission::class, 'id', 'comissionID');
    }

    /**
     * Get the division associated with the Attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function division(): HasOne
    {
        return $this->hasOne(Division::class, 'id', 'divisionID');
    }

    /**
     * Get the region associated with the Attendant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function region(): HasOne
    {
        return $this->hasOne(Region::class, 'id', 'regionID');
    }
}
