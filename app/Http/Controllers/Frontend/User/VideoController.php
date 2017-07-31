<?php

namespace App\Http\Controllers\Frontend\User;

//use Auth;
use App\Http\Requests;
use App\Models\Access\User\User;
use App\Models\Video\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Video\VideoUpdateRequest;

class VideoController extends Controller
{

  public function show(Video $video)
  {
      //  return view('video.show', [
      //      'video' => $video,
      //  ]);
  }

  public function index(Request $request)
  {
      //  $videos = $request->user()->videos()->latestFirst()->paginate(10);
       //
      //  return view('video.index', [
      //      'videos' => $videos,
      //  ]);
   }

  public function edit(Video $video)
  {
      //  $this->authorize('edit', $video);
      //
      //  return view('video.edit', [
      //      'video' => $video,
      //  ]);
  }

  public function update(VideoUpdateRequest $request, Videos $video)
  {
     dd($video);
  //   $this->authorize('update', $video);
  //
  //       //$playbook->video = $request->user()->playbook()->video->find($video);
  //
  //   $video->update([
  //           'title' => $request->title,
  //           'description' => $request->description,
  //           'visibility' => $request->visibility,
  //           'allow_votes' => $request->has('allow_votes'),
  //           'allow_comments' => $request->has('allow_comments'),
  //       ]);
  //
  //       if ($request->ajax()) {
  //           return response()->json(null, 200);
  //       }
  //
  //       return redirect()->back();
  }

  public function store(Request $request)
  {
      $uid = uniqid(true);

      $playbook = $request->user()->playbook()->first();

      $video = $playbook->video()->create([
          'uid' => $uid,
          'title' => $request->title,
          'description' => $request->description,
          'visibility' => $request->visibility,
          'video_filename' => "{$uid}.{$request->extension}",
      ]);

      return response()->json([
          'data' => [
              'uid' => $uid,
          ]
      ]);
  }

  public function delete(Video $video)
  {
        // $this->authorize('delete', $video);
        //
        // $video->delete();
        //
        // return redirect()->back();
  }

}
