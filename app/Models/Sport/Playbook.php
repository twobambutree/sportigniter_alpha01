<?php

namespace App\Models\Sport;

use App\Models\Access\User;
use App\Models\Video\Video;
use Illuminate\Database\Eloquent\Model;

class Playbook extends Model
{
  protected $fillable = [
    'name',
    'sname',
    'about',
    'filename',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function getImage()
  {
        if (!$this->filename) {
            return config('sportigniter.buckets.images') . '/profile/default.png';
            //return storage_path() . '/uploads/profile/default.png';
        }

        //return storage_path() . '/uploads/profile/' . $this->filename ;
        return config('sportigniter.buckets.images') . '/profile/' . $this->filename;
  }
  public function education()
  {
    return $this->hasOne(Education::class);
  }

  public function physical()
  {
    return $this->hasOne(Physical::class);
  }

  public function player()
  {
    return $this->hasOne(Player::class);
  }

  public function video()
  {
    return $this->hasMany(Video::class);
  }

  public function getRouteKeyName()
  {
    return 'sname';
  }
}
