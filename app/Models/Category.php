<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'comissionID',
        'divisionID',
    ];

    /**
     * Get the comission associated with the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comission(): HasOne
    {
        return $this->hasOne(Comission::class, 'id', 'comissionID');
    }

    /**
     * Get the division associated with the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function division(): HasOne
    {
        return $this->hasOne(Division::class, 'id', 'divisionID');
    }
}
