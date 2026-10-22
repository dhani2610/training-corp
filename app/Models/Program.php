<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    protected $fillable = [
        'title',
        'code',
        'slug',
        'level_name',
        'level_code',
        'badge',
        'method',
        'certification',
        'price_note',
        'short_description',
        'full_description',
        'curriculum',
        'requirements',
        'facilities',
        'target_audience',
        'certification_body',
        'duration',
        'icon',
        'image',
        'topic_key',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'curriculum' => 'array',
        'requirements' => 'array',
        'facilities' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function getCurriculumAttribute($value)
    {
        if (is_array($value)) {
            return $value;
        }
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            if (is_array($decoded)) {
                return $decoded;
            }
            if (!empty($value)) {
                return array_filter(array_map('trim', explode("\n", $value)));
            }
        }
        return [];
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
