<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenantDomain extends Model
{
    protected $table = 'domains';

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
