<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'create_at', 'update_at'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
