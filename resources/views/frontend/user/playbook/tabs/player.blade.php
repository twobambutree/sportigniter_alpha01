@if(isset($playbook->player))
  {{ Form::model($playbook->player, ['route' => ['frontend.user.playbook.player.update', $playbook->sname], 'class' => 'form-horizontal', 'method' => 'PUT']) }}

  <div class="col-sm-8 col-sm-offset-2">
      <div class="panel-body">
          <div class="form-group"> <!--sport-->
            {{ Form::label('sport','Current sport',array('id'=>'sport','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-4">
              {{ Form::text('sport',$playbook->player->sport,array('id'=>'sport','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--team-->
            {{ Form::label('team','Current team',array('id'=>'team','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-4">
              {{ Form::text('team',$playbook->player->team,array('id'=>'team','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--position-->
            {{ Form::label('position','Current position',array('id'=>'position','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-4">
              {{ Form::text('position',$playbook->player->position,array('id'=>'position','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--GPA-->
            {{ Form::label('jersey','Jersey #',array('id'=>'jersey','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-4">
              {{ Form::text('jersey',$playbook->player->jersey,array('id'=>'jersey','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--SAT-->
            {{ Form::label('other','Other sport(s)',array('id'=>'other','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-4">
              {{ Form::text('other',$playbook->player->other,array('id'=>'other','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--ACT-->
            {{ Form::label('about','About sport',array('id'=>'about','class'=>'col-sm-4 control-label')) }}
            <div class="col-md-6">
              {{ Form::text('about',$playbook->player->about,array('id'=>'about','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--Button-->
            <button type="submit" class="btn btn-primary">Update</button>
          </div>

      </div><!--panel body-->
  </div><!-- panel --><!-- col-md-8 -->

  {{ csrf_field() }}
  {{ Form::close() }}
@else
  {{ Form::model($playbook->player, ['route' => ['frontend.user.playbook.player', $playbook->sname], 'class' => 'form-horizontal', 'method' => 'POST']) }}

  <div class="col-sm-8 col-sm-offset-2">
      <div class="panel-body">
          <div class="form-group"> <!--sport-->
            {{ Form::label('sport','Current sport',array('id'=>'sport','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-4">
              {{ Form::text('sport',null,array('id'=>'sport','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--team-->
            {{ Form::label('team','Current team',array('id'=>'team','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-4">
              {{ Form::text('team',null,array('id'=>'team','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--position-->
            {{ Form::label('position','Current position',array('id'=>'position','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-4">
              {{ Form::text('position',null,array('id'=>'position','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--GPA-->
            {{ Form::label('jersey','Jersey #',array('id'=>'jersey','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-4">
              {{ Form::text('jersey',null,array('id'=>'jersey','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--SAT-->
            {{ Form::label('other','Other sport(s)',array('id'=>'other','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-4">
              {{ Form::text('other',null,array('id'=>'other','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--ACT-->
            {{ Form::label('about','About sport',array('id'=>'about','class'=>'col-sm-4 control-label')) }}
            <div class="col-sm-6">
              {{ Form::textarea('about',null,array('id'=>'about','class'=>'form-control')) }}
            </div>
          </div>

          <div class="form-group"> <!--Button-->
            <button type="submit" class="btn btn-primary">Update</button>
          </div>

      </div><!--panel body-->
  </div><!-- panel --><!-- col-md-8 -->

  {{ csrf_field() }}
  {{ Form::close() }}
@endif
