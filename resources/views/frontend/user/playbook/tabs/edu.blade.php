@if (isset($playbook->education))
{{Form::model($playbook->education, ['route' => ['frontend.user.playbook.education.update', $playbook->sname],  'class' => 'form-horizontal', 'method' => 'put'])}}

<div class="col-sm-8 col-sm-offset-2">
    <div class="panel-body">
        <div class="form-group"> <!--Scool-->
          {{ Form::label('school','School',array('id'=>'school','class'=>'col-sm-4 control-label')) }}
          <div class="col-sm-4">
            {{ Form::text('school',$playbook->education->school,array('id'=>'school','class'=>'form-control')) }}
          </div>
        </div>

        <div class="form-group"> <!--Graduation-->
          {{ Form::label('graduation','Graduation year',array('id'=>'graduation','class'=>'col-sm-4 control-label')) }}
          <div class="col-sm-4">
            {{ Form::text('graduation',$playbook->education->graduation,array('id'=>'graduation','class'=>'form-control')) }}
          </div>
        </div>

        <div class="form-group"> <!--Town-->
          {{ Form::label('town','Home town',array('id'=>'town','class'=>'col-sm-4 control-label')) }}
          <div class="col-sm-4">
            {{ Form::text('town',$playbook->education->town,array('id'=>'town','class'=>'form-control')) }}
          </div>
        </div>

        <div class="form-group"> <!--GPA-->
          {{ Form::label('gpa','GPA',array('id'=>'gpa','class'=>'col-sm-4 control-label')) }}
          <div class="col-sm-4">
            {{ Form::text('gpa',$playbook->education->gpa,array('id'=>'gpa','class'=>'form-control')) }}
          </div>
        </div>

        <div class="form-group"> <!--SAT-->
          {{ Form::label('sat','SAT',array('id'=>'sat','class'=>'col-sm-4 control-label')) }}
          <div class="col-sm-4">
            {{ Form::text('sat',$playbook->education->sat,array('id'=>'sat','class'=>'form-control')) }}
          </div>
        </div>

        <div class="form-group"> <!--ACT-->
          {{ Form::label('act','ACT',array('id'=>'act','class'=>'col-sm-4 control-label')) }}
          <div class="col-md-6">
            {{ Form::text('act',$playbook->education->act,array('id'=>'act','class'=>'form-control')) }}
          </div>
        </div>

        <div class="form-group"> <!--Volunteer-->
          {{ Form::label('volunteer','Volunteer hours',array('id'=>'volunteer','class'=>'col-sm-4 control-label')) }}
          <div class="col-sm-4">
            {{ Form::text('volunteer',$playbook->education->volunteer,array('id'=>'volunteer','class'=>'form-control')) }}
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
{{Form::model($playbook->education, ['route' => ['frontend.user.playbook.education', $playbook->sname], 'class' => 'form-horizontal', 'method' => 'POST'])}}

<div class="col-sm-8 col-sm-offset-2">
    <div class="panel-body">

      <div class="form-group"> <!--Scool-->
        {{ Form::label('school','School',array('id'=>'school','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
          {{ Form::text('school',null,array('id'=>'school','class'=>'form-control')) }}
        </div>
      </div>

      <div class="form-group"> <!--Graduation-->
        {{ Form::label('graduation','Graduation year',array('id'=>'graduation','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
          {{ Form::text('graduation',null,array('id'=>'graduation','class'=>'form-control')) }}
        </div>
      </div>

      <div class="form-group"> <!--Town-->
        {{ Form::label('town','Home town',array('id'=>'town','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
          {{ Form::text('town',null,array('id'=>'town','class'=>'form-control')) }}
        </div>
      </div>

      <div class="form-group"> <!--GPA-->
        {{ Form::label('gpa','GPA',array('id'=>'gpa','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
          {{ Form::text('gpa',null,array('id'=>'gpa','class'=>'form-control')) }}
        </div>
      </div>

      <div class="form-group"> <!--SAT-->
        {{ Form::label('sat','SAT',array('id'=>'sat','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
          {{ Form::text('sat',null,array('id'=>'sat','class'=>'form-control')) }}
        </div>
      </div>

      <div class="form-group"> <!--ACT-->
        {{ Form::label('act','ACT',array('id'=>'act','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
          {{ Form::text('act',null,array('id'=>'act','class'=>'form-control')) }}
        </div>
      </div>

      <div class="form-group"> <!--Volunteer-->
        {{ Form::label('volunteer','Volunteer hours',array('id'=>'volunteer','class'=>'col-sm-4 control-label')) }}
        <div class="col-sm-4">
          {{ Form::text('volunteer',null,array('id'=>'volunteer','class'=>'form-control')) }}
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
