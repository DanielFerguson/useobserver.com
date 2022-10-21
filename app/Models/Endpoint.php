<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Endpoint extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'user_id',
        'protocol',
        'base_url',
        'query_string',
        'domain_expires_at',
        'certificate_expires_at',
    ];

    public function fullUrl(): string
    {
        return $this->protocol . '://' . $this->base_url . $this->query_string;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function speedReports(): HasMany
    {
        return $this->hasMany(SpeedReport::class);
    }
}
