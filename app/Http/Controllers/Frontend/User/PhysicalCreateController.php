<?php

namespace App\Http\Controllers\Frontend\User;

use App\Models\Sport\Playbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Playbook\PhysicalCreateRequest;

class PhysicalCreateController extends Controller
{
  public function store(PhysicalCreateRequest $request)
  {
    $playbook = $request->playbook()->first();

    $playbook->physical()->create([

      'dob' => $request->dob,
      'height_ft' => $request->height_ft,
      'height_in' => $request->height_in,
      'weight' => $request->weight,
      'gender' => $request->gender,

    ]);

     return view('frontend.user.playbook');
  }
}
