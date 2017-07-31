@extends('frontend.layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Create Your Play Book</div>
        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label for="name" class="col-md-4 control-label">Name</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
              </div>
            </div>

            <div class="form-group">
              <label for="sname" class="col-md-4 control-label">Screen name</label>
              <div class="col-md-6">
                <input id="sname" type="text" class="form-control" name="sname" value="{{ old('sname') }}">
              </div>
            </div>

            <div class="form-group">
              <label for="about" class="col-md-4 control-label">About me</label>
              <div class="col-md-6">
              <textarea name="about" id="about" type="text" class="form-control">{{ old('about') }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="image" class="col-md-4 control-label">Play book image</label>
              <div class="col-md-6">
              <input name="image" id="image" type="file" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
                {{ csrf_field() }}
            </div>

          </form>

        </div><!--panel body-->
      </div><!-- panel panel-default -->
    </div><!-- panel --><!-- col-md-8 -->
  </div><!-- row -->
@endsection
