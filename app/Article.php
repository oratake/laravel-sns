<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Article
 *
 * @package App
 */
class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
