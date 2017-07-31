
{{ Form::model($playbook, ['route' => ['frontend.user.playbook.update', $playbook->sname], 'files' => true, 'class' => 'form-horizontal', 'method' => 'post']) }}
<div class="col-sm-10 col-sm-offset-2">
    <div class="panel-body">

      <div class="form-group"> <!--Name-->
        {{ Form::label('name','Play book name',array('id'=>'name','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
          {{ Form::text('name',$playbook->name,array('id'=>'name','class'=>'form-control')) }}
        </div>
      </div>

      <div class="form-group"> <!--Sname-->
        {{ Form::label('sname','Play book screen name',array('id'=>'sname','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
          {{ Form::text('sname',$playbook->sname,array('id'=>'sname','class'=>'form-control')) }}
        </div>
      </div>

      <div class="form-group"> <!--About-->
        {{ Form::label('about','About me',array('id'=>'about','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
                {{ Form::textarea('about',$playbook->about,array('id'=>'about','class'=>'form-control')) }}
        </div>
      </div>

      <div class="form-group"> <!--image-->
        {{ Form::label('image','Play book image',array('id'=>'image','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
                {{ Form::file('image',array('id'=>'image','class'=>'form-control')) }}
        </div>
      </div>
      {{-- <div class="form-group">
        <label for="image" class="col-md-4 control-label">Play book image</label>
        <div class="col-sm-4">
        <input name="image" id="image" type="file" class="form-control">
        </div>
      </div> --}}



      <div class="form-group"> <!--Button-->
        <div class="col-sm-6 col-sm-offset-4">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>

    </div><!--panel body-->
</div><!-- panel --><!-- col-md-8 -->
{{ csrf_field() }}
{{ method_field('PUT') }}
{{ Form::close() }}
