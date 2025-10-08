<?php

namespace App\Models;

use Tests\Library\JobTagEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'name' => JobTagEnum::class,
    ];

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}
