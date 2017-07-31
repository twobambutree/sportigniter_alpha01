<?php

namespace App\Models\Video;

use App\Models\Access\User;
use App\Models\Sport\Playbook;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  use SoftDeletes;

  protected $fillable = [
      'title',
      'description',
      'uid',
      'video_filename',
      'stat_id',
      'video_id',
      'processed',
      'visibility',
      'allow_votes',
      'allow_comments',
      'processed_percentage',
  ];

  public function playbook()
  {
    return $this->belongsTo(Playbook::class);
  }

  public function getRouteKeyName()
  {
    return 'uid';
  }

}
