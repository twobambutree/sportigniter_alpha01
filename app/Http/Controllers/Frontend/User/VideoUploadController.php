<?php

namespace App\Http\Controllers\Frontend\User;
use File;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoUploadController extends Controller
{
  public function index()
  {
    return view('frontend.user.video.upload');
  }

  public function store(Request $request)
    {
        $playbook = $request->user()->playbook()->first();

        $video = $playbook->video()->where('uid', $request->uid)->firstOrFail();

        $request->file('video')->move(storage_path() . '/uploads', $video->video_filename);

        $file = storage_path().'/uploads/' . $video->video_filename;

        Storage::disk('s3drop')->put($video->video_filename, fopen($file, 'r+'));

        // $this->dispatch(new UploadVideo(
        //     $video->video_filename
        // ));

        return response()->json(null, 200);
    }

}
