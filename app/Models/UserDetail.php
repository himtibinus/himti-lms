<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserDetail extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userID',
        'avatarID',
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
        return $this->hasOne(User::class, 'id', 'userID');
    }

    /**
     * Get the avatar associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function avatar(): HasOne
    {
        return $this->hasOne(Picture::class, 'id', 'avatarID');
    }

    /**
     * Get the category associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'categoryID');
    }

    /**
     * Get the role associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role(): HasOne
    {
        return $this->hasOne(Role::class, 'id', 'roleID');
    }

    /**
     * Get the region associated with the UserDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function region(): HasOne
    {
        return $this->hasOne(Region::class, 'id', 'regionID');
    }
}
