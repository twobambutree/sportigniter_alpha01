<?php

namespace App\Models\Sport;

use App\Models\Sport;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  protected $fillable = [
    'school',
    'graduation',
    'town',
    'gpa',
    'sat',
    'act',
    'volunteer',
  ];

  public function playbook()
  {
    return $this->belongsTo(Playbook::class);
  }
}
