<?php

namespace App\Models\Sport;

use App\Models\Sport;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  protected $fillable = [
    'sport',
    'team',
    'position',
    'jersey',
    'coach',
    'other',
    'about',
  ];

  public function playbook()
  {
    return $this->belongsTo(Playbook::class);
  }
}
