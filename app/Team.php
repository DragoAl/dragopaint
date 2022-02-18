<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'team_name',
        'stat_championship_year',
        'end_championship_year',
        'jersey',
        'championship',
        'competition',
        'production_date',
        'team_image',
        'jersey_image'
    ];
}
