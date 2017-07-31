@extends('frontend.layouts.app')

@section('content')
  <div class="row">

  <div class="col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading">{{$playbook->sname}}</div>
          <div class="panel-body">
            <div role="tabpanel">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#playbook" aria-controls="playbook" role="tab" data-toggle="tab">{{'Play Book'}}</a>
                </li>
                <li role="presentation">
                    <a href="#update" aria-controls="update" role="tab" data-toggle="tab">{{'Update play book info'}}</a>
                </li>
                <li role="presentation">
                    @if (!isset($playbook->physical))
                      <a href="#physical" aria-controls="physical" role="tab" data-toggle="tab">{{ 'Add physical Attributes' }}</a>
                    @else
                      <a href="#physical" aria-controls="physical" role="tab" data-toggle="tab">{{ 'Update physical Attributes' }}</a>
                    @endif
                </li>
                <li role="presentation">
                  @if (!isset($playbook->education))
                    <a href="#education" aria-controls="education" role="tab" data-toggle="tab">{{ 'Add education info' }}</a>
                  @else
                    <a href="#education" aria-controls="education" role="tab" data-toggle="tab">{{ 'Update education info' }}</a>
                  @endif
                </li>
                <li role="presentation">
                  @if (!isset($playbook->player))
                    <a href="#player" aria-controls="player" role="tab" data-toggle="tab">{{ 'Add current sport info' }}</a>
                  @else
                    <a href="#player" aria-controls="player" role="tab" data-toggle="tab">{{ 'Update current sport info' }}</a>
                  @endif
                </li>
              </ul>

              <div class="tab-content">

                  <div role="tabpanel" class="tab-pane mt-20 active" id="playbook">
                      @include('frontend.user.playbook.tabs.playbook')
                  </div><!--tab panel player-->

                  <div role="tabpanel" class="tab-pane mt-20" id="update">
                      @include('frontend.user.playbook.tabs.update', ['playbook' => $playbook])
                  </div><!--tab panel profile-->

                  <div role="tabpanel" class="tab-pane mt-20" id="physical">
                      @include('frontend.user.playbook.tabs.physical')
                  </div><!--tab panel profile-->

                  <div role="tabpanel" class="tab-pane mt-20" id="education">
                      @include('frontend.user.playbook.tabs.edu')
                  </div><!--tab panel profile-->
                  <div role="tabpanel" class="tab-pane mt-20" id="player">
                      @include('frontend.user.playbook.tabs.player')
                  </div><!--tab panel profile-->

              </div><!--tab content-->

            </div><!--tab panel-->

          </div><!--panel body-->
      </div><!-- panel -->
    </div><!-- col-xs-12 -->

  </div><!-- row -->
@endsection
