<div class="col-xs-6">
  <div class="panel panel-default">
<table class="table table-striped table-hover">
  <tr>
    <th>{{'Avatar'}}</th>
    <td><img src="{{ $playbook->getImage() }}"/></td>
  </tr>
  {{--PB name--}}
  <tr>
    <th>Play Book Name</th>
    <td>{{ $playbook->name }}</td>
  </tr>
  {{--PB sname--}}
  <tr>
    <th>Screen Name</th>
    <td>{{ $playbook->sname }}</td>
  </tr>
  @if (isset($playbook->about))
    {{--PB about--}}
    <tr>
      <th>Screen Name</th>
      <td>{{ $playbook->about }}</td>
    </tr>
  @endif
  @if (isset($playbook->physical))
    @if (!empty($playbook->physical->gender))
    <tr>
      <th>Gender</th>
      <td>{{$playbook->physical->gender}}</td>
    </tr>
    @endif
    @if (!empty($playbook->physical->height_ft))
    <tr>
      <th>Height</th>
      <td>{{$playbook->physical->height_ft}}.{{$playbook->physical->height_in}}ft</td>
    </tr>
    @endif
    @if (!empty($playbook->physical->weight))
    <tr>
      <th>Weight</th>
      <td>{{$playbook->physical->weight}}lbs</td>
    </tr>
    @endif
  @endif
  @if (isset($playbook->education))
    @if (!empty($playbook->education->town))
    <tr>
      <th>Home town</th>
      <td>{{ $playbook->education->town }}</td>
    </tr>
    @endif
    @if (!empty($playbook->education->school))
    <tr>
      <th>School name</th>
      <td>{{$playbook->education->school}}</td>
    </tr>
    @endif
    @if (!empty($playbook->education->gpa))
    <tr>
      <th>GPA</th>
      <td>{{$playbook->education->gpa }}</td>
    </tr>
    @endif
    @if (!empty($playbook->education->sat))
    <tr>
      <th>SAT score</th>
      <td>{{$playbook->education->sat}}</td>
    </tr>
    @endif
    @if (!empty($playbook->education->act))
    <tr>
      <th>ACT score</th>
      <td>{{$playbook->education->act}}</td>
    </tr>
    @endif
    @if (!empty($playbook->education->volunteer))
    <tr>
      <th>Volunteer hours</th>
      <td>{{$playbook->education->volunteer}}</td>
    </tr>
    @endif
  @endif
  @if (isset($playbook->player))
    @if (!empty($playbook->player->sport))
    <tr>
      <th>Current sport</th>
      <td>{{$playbook->player->sport}}</td>
    </tr>
    @endif
    @if (!empty($playbook->player->team))
    <tr>
      <th>Current team</th>
      <td>{{$playbook->player->team}}</td>
    </tr>
    @endif
    @if (!empty($playbook->player->position))
    <tr>
      <th>Position</th>
      <td>{{$playbook->player->position}}</td>
    </tr>
    @endif
    @if (!empty($playbook->player->coach))
    <tr>
      <th>Coach</th>
      <td>{{$playbook->player->coach}}</td>
    </tr>
    @endif
    @if (!empty($playbook->player->jersey))
    <tr>
      <th>Jersey Number</th>
      <td>{{$playbook->player->jersey}}</td>
    </tr>
    @endif
    @if (!empty($playbook->player->other))
    <tr>
      <th>Other sports</th>
      <td>{{$playbook->player->other}}</td>
    </tr>
    @endif
    @if (!empty($playbook->player->About))
    <tr>
      <th>About current sport</th>
      <td>{{$playbook->player->about}}</td>
    </tr>
    @endif
  @endif
</table>
</div>
</div>
