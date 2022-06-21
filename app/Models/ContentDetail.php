<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ContentDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'contentID',
        'field1',
        'field2',
        'field3',
        'field4',
        'imageID',
    ];

    /**
     * Get the Content that owns the ContentDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }

    /**
     * Get the Picture associated with the ContentDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Picture(): HasOne
    {
        return $this->hasOne(Picture::class);
    }
}
