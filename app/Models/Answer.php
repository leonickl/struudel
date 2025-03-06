<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property Event $event
 * @property array $dates
 */
class Answer extends Model
{
    protected function casts(): array
    {
        return [
            'dates' => 'object',
        ];
    }

    protected function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
