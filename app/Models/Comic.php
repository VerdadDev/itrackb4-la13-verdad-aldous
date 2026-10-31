<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'author',
        'genre_id',
        'rate',
        'chapter',
        'is_completed'
    ];
    
    protected function casts(): array
    {
        return [
            'rate' => 'float',
            'chapter' => 'integer',
            'is_completed' => 'boolean'
        ];
    }

    public function genre(): BelongsTo        // singular
    {
        return $this->belongsTo(Genre::class);
    }
}
