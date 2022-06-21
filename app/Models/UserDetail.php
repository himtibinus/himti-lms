<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'categoryID',
        'roleID',
        'regionID',
    ];

    /**
     * Get the user associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    /**
     * Get the Category associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

    /**
     * Get the Role associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Role(): HasOne
    {
        return $this->hasOne(Role::class);
    }

    /**
     * Get the Region associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Region(): HasOne
    {
        return $this->hasOne(Region::class);
    }
}
