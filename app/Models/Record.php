<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

        protected $table = 'records';


    protected $fillable = [
        'full_name',
        'registry',
        'gender',
        'purok',
        'grupo',
        'kapisanan',
        'date_of_baptism',
        'evangelist',
        'date_of_entry',
        'r2_10_eligibility',
        'status',
        'monthly_code',
        'birthday',
        'r2_10_endorsement',
        'user_notes',
        'notes'
    ];
}
