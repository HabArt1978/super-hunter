<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public const SALARY_RANGES = [
        '50 000 ₽',
        '55 000 ₽',
        '60 000 ₽',
        '65 000 ₽',
        '70 000 ₽',
        '75 000 ₽',
        '80 000 ₽',
        '85 000 ₽',
        '90 000 ₽',
        '95 000 ₽',
        '100 000 ₽',
        '110 000 ₽',
        '120 000 ₽',
        '130 000 ₽',
        '140 000 ₽',
    ];

    public const SCHEDULE = [
        '5/2, полная занятость',
        '2/2, смена 12 часов',
        '6/1, смена 7 часов',
        'не указано',
    ];

    protected $fillable = [
        'title',
        'salary',
        'location',
        'schedule',
        'url',
        'featured',
    ];
}
