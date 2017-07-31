<?php

namespace App\Models\Sport;

use App\Models\Sport;
use Illuminate\Database\Eloquent\Model;

class Physical extends Model
{
  protected $fillable = [
    'dob',
    'height_ft',
    'height_in',
    'weight',
    'gender',
  ];

  public function playbook()
  {
    return $this->belongsTo(Playbook::class);
  }
}
