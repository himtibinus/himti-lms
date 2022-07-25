<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ContentDetail extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'contentID',
        'typeID',
        'imageID',
        'field1',
        'field2',
        'field3',
        'field4'
    ];

    /**
     * Get the content associated with the ContentDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function content(): HasOne
    {
        return $this->hasOne(Content::class, 'id', 'contentID');
    }

    /**
     * Get the contentType associated with the ContentDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contentType(): HasOne
    {
        return $this->hasOne(ContentType::class, 'id', 'contentID');
    }

    /**
     * Get the image associated with the ContentDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function image(): HasOne
    {
        return $this->hasOne(Pictures::class, 'id', 'imageID');
    }
}
