<?php

namespace App\Http\Controllers\Frontend\User;

use Auth;
use Image;
use File;
use Storage;
use App\Models\Access\User\User;
use App\Http\Requests\Frontend\Playbook\PhysicalCreateRequest;
use App\Http\Requests\Frontend\Playbook\PlayerCreateRequest;
use App\Http\Requests\Frontend\Playbook\EducationCreateRequest;
use App\Http\Requests\Frontend\Playbook\PlaybookCreateRequest;
use App\Http\Requests\Frontend\Playbook\PlaybookUpdateRequest;
use App\Http\Requests\Frontend\Playbook\PhysicalUpdateRequest;
use App\Http\Requests\Frontend\Playbook\EducationUpdateRequest;
use App\Http\Requests\Frontend\Playbook\PlayerUpdateRequest;
use App\Models\Sport\Playbook;
use App\Models\Sport\Physical;
use App\Models\Sport\Education;
use App\Models\Sport\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaybookController extends Controller
{
  /**
  * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
  */
  //public function index()
  //{
    //return view('frontend.user.playbook');
  //}

  public function show(Playbook $playbook)
  {
    //return view('playbook.show', [
      //'playbook' => $playbook,
    //]);
  }

  public function indexCreate()
  {
    return view('frontend.user.create');
  }

  public function store(PlaybookCreateRequest $request)
  {

    $fileId = null;
    $fileName = null;

    if ($request->file('image')) {
      $request->file('image')->move(storage_path().'/uploads', $fileId = uniqid(true));

      $path = storage_path() . '/uploads/' . $fileId;
      $fileName = $fileId . '.png';


      Image::make($path)->encode('png')->fit(200, 300, function ($c) {
        $c->upsize();
      })->save();

      //Storage::disk('localimage')->put($fileName, fopen($path, 'r+'));
      if (Storage::disk('s3images')->put('profile/' . $fileName, fopen($path, 'r+'),'public')){
        File::delete($path);
      }

    }

    $request->user()->playbook()->create([
      'name'      => $request->name,
      'sname'     => $request->sname,
      'about'     => $request->about,
      'filename'  => $fileName,
    ]);

      // $playbook->update([
      //   'filename' => $fileName,
      // ]);

    return redirect()->to("/playbook/{$request->sname}");
    //return redirect()-> route('playbook.playbook',[$request]);
  }

  public function index(Playbook $playbook)
  {
    //$playbook = $request->user()->playbook()->first();
    //return redirect()->to("/playbook/{$playbook->sname}");
    //dd('playbook');
    return view('frontend.user.playbook', $playbook);
  }

  public function edit(Playbook $playbook)
  {
    //dd($playbook);
    // $this->authorize('edit', $playbook);
    //
    //     return view('frontend.user.playbook.update', [
    //         'playbook' => $playbook
    //     ]);
  }

  public function update(PlaybookUpdateRequest $request, Playbook $playbook)
  {
    //$playbookID = $request->user()->playbook->user_id;
    //$playbook = $request->user()->playbook()->get($playbookID);
    //$user_id = $request->user()->id;
    // $playbook = $request->user()->playbook()->first(function ($playbook, $user_id){
    //   return $playbook->user_id === $user_id;
    // });
    //$playbookID = $request->user_id;
    //dd($playbook);
    //$playbookC = $request->user()->playbook()->get($playbookID);
    //$playbook = $playbookC->toArray();
    //dd($playbook);
    $this->authorize('update', $playbook);

    $playbook->update([
      'name' => $request->name,
      'sname' => $request->sname,
      'about' => $request->about,
    ]);

    $fileId = null;
    if ($request->file('image')) {
      $request->file('image')->move(storage_path().'/uploads', $fileId = uniqid(true));

      $path = storage_path() . '/uploads/' . $fileId;
      $fileName = $fileId . '.png';

      Image::make($path)->encode('png')->fit(200, 300, function ($c) {
        $c->upsize();
      })->save();

      //Storage::disk('localimage')->put($fileName, fopen($path, 'r+'));
      if (Storage::disk('s3images')->put('profile/' . $fileName, fopen($path, 'r+'),'public')){
        File::delete($path);
      }

      $playbook->update([
        'filename' => $fileName,
      ]);
    }

    //return view('frontend.user.dashboard');
    return redirect()->route('frontend.user.playbook', [$playbook]);
  }

  public function createPhysical(PhysicalCreateRequest $request)
  {
    $playbook = $request->user()->playbook()->first();

    $physical = $playbook->physical()->create([
      'dob' => $request->dob,
      'height_ft' => $request->height_ft,
      'height_in' => $request->height_in,
      'weight' => $request->weight,
      'gender' => $request->gender,
    ]);

    //return redirect()->to("/playbook/{$playbook->sname}");
    //return view('frontend.user.dashboard');
    return redirect()->route('frontend.user.playbook', [$playbook]);
  }

  public function updatePhysical(PhysicalUpdateRequest $request, Playbook $playbook)
  {
    $playbook = $request->user()->playbook()->first();

    $playbook->physical()->update([
      'dob' => $request->dob,
      'height_ft' => $request->height_ft,
      'height_in' => $request->height_in,
      'weight' => $request->weight,
      'gender' => $request->gender,
    ]);

    //return redirect()->to("/playbook/{$playbook->sname}");
    //return view('frontend.user.dashboard');
    return redirect()->route('frontend.user.playbook', [$playbook]);
  }

  public function createEducation(EducationCreateRequest $request)
  {
    $playbook = $request->user()->playbook()->first();

    $education = $playbook->education()->create([
      'school' => $request->school,
      'graduation' => $request->graduataion,
      'town' => $request->town,
      'gpa' => $request->gpa,
      'sat' => $request->sat,
      'volunteer' => $request->volunteer,
    ]);
    //return redirect()->to("/playbook/{$playbook->sname}");
    //return view('frontend.user.dashboard');
    return redirect()->route('frontend.user.playbook', [$playbook]);
  }

  public function updateEducation(EducationUpdateRequest $request)
  {
    $playbook = $request->user()->playbook()->first();

    $playbook->education()->update([
      'school' => $request->school,
      'graduation' => $request->graduation,
      'town' => $request->town,
      'gpa' => $request->gpa,
      'sat' => $request->sat,
      'act' => $request->act,
      'volunteer' => $request->volunteer,
    ]);
    //return redirect()->to("/playbook/{$playbook->sname}");
    //return view('frontend.user.dashboard');
    return redirect()->route('frontend.user.playbook', [$playbook]);
  }

  public function createPlayer(PlayerCreateRequest $request)
  {
    $playbook = $request->user()->playbook()->first();

    $profile = $playbook->player()->create([
      'sport' => $request->sport,
      'team' => $request->team,
      'position' => $request->position,
      'coach' => $request->coach,
      'jersey' => $request->jeysey,
      'other' => $request->other,
      'about' => $request->about,
    ]);

    //return redirect()->to("/playbook/{$playbook->sname}");
    //return view('frontend.user.dashboard');
    return redirect()->route('frontend.user.playbook', [$playbook]);
  }

  public function updatePlayer(PlayerUpdateRequest $request)
  {
    $playbook = $request->user()->playbook()->first();

    $playbook->player()->update([
      'sport' => $request->sport,
      'team' => $request->team,
      'position' => $request->position,
      'coach' => $request->coach,
      'jersey' => $request->jeysey,
      'other' => $request->other,
      'about' => $request->about,
    ]);

    //return redirect()->to("/playbook/{$playbook->sname}");
    //return view('frontend.user.dashboard');
    return redirect()->route('frontend.user.playbook', [$playbook]);
  }

  public function delete(Playbook $playbook)
  {
    //
  }


}
