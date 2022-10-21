<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SpeedReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'endpoint_id',
        'speed_ms',
        'status_code',
    ];

    public function speedReport(): BelongsTo
    {
        return $this->belongsTo(Endpoint::class);
    }
}
