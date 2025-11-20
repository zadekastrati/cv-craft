<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'template',
        'summary',
        'experience',
        'skills',
        'education',
    ];

    protected $casts = [
        'summary' => 'string',
        'experience' => 'string',
        'skills' => 'string',
        'education' => 'string',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function templateDefinition(): ?array
    {
        return config('cv.templates.' . $this->template) ?? null;
    }
}

