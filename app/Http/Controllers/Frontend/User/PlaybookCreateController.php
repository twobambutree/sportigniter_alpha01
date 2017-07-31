<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Models\Access\User\User;
use App\Http\Models\Sport\Playbook;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Playbook\PlaybookCreateRequest;

class PlaybookCreateController extends Controller
{
  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function index()
  {
      return view('frontend.user.create');
  }

  public function store(PlaybookCreateRequest $request)
  {
    $user = $request->user()->first();

    $user->playbook()->create([
      'name' => $request->name,
      'sname' => $request->sname,
      'about' => $request->about,
    ]);

    return redirect()->to("/playbook/{$playbook->sname}");
    }

}
