@extends('frontend.layouts.app')

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="mainbox panel panel-default">
        <div class="panel-heading">Play Book</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-4 col-md-push-8">
                <ul class="media-list">
                  <li class="media">
                    <div class="media-body"> <!--Acc Display-->
                      {{-- <h4 class="media-heading">
                        {{ $logged_in_user->name }}<br/>
                        <small>
                        {{ $logged_in_user->email }}<br/>
                          Joined {{ $logged_in_user->created_at->format('F jS, Y') }}
                        </small>
                      </h4> --}}
                      {{ link_to_route('frontend.user.account', trans('navs.frontend.user.account'), [], ['class' => 'btn btn-info btn-xs']) }}
                      @permission('view-backend')
                      {{ link_to_route('admin.dashboard', trans('navs.frontend.user.administration'), [], ['class' => 'btn btn-danger btn-xs']) }}
                      @endauth
                      @if (!isset($playbook))
                        {{ link_to_route('frontend.user.create', 'Create your play book',[], ['class' => 'btn btn-info btn-xs']) }}
                      @else
                        <a href="{{ route('frontend.user.playbook', $playbook)}}" class="btn btn-info btn-xs">Play Book</a>
                      @endif
                    </div><!--media-body-->
                  </li><!--media-->
                </ul><!--media-list-->
                <div class="mainbox02 panel panel-default"> <!--Top Vids-->
                  <div class="panel-heading">
                      <h4>Profile Video</h4>
                  </div><!--panel-heading-->
                  <div class="panel-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="http://tv.adobe.com/embed/1221/24197/"></iframe>
                    </div>
                  </div><!--panel-body-->
                </div><!--panel-->
                <div class="mainbox02 panel panel-default"> <!--Top Pics-->
                  <div class="panel-heading">
                      <h4>Upcoming Events</h4>
                  </div><!--panel-heading-->
                  <div class="panel-body">
                    <table class="table table-responsive" border="1" >
                      <tbody>
                        <tr>
                          <th scope="col">Date/Time</th>
                          <th scope="col">Where About</th>
                          <th scope="col">Teams</th>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!--panel-body-->
                </div><!--panel-->
              </div><!--col-md-4-->
              <div class="col-xs-8  col-md-pull-4">
              </div>
              <div class="col-md-8 col-md-pull-4"> <!--play book section-->
                <div class="row"> <!--play book-->
                  <div class="col-xs-12">
                    <div class="mainbox02 panel panel-default">
	                    <div  class="panel-heading">
                        <h4>{{$playbook->sname}}</h4>
                      </div><!--panel-heading-->
                      <div class="panel-body">
                        @if (!isset($playbook))
                          {{ link_to_route('frontend.user.create', 'Create your play book',[], ['class' => 'btn btn-info btn-xs']) }}
                        @else
                          <div class="media">
                            <div class="media-left"> <a href="#"> <img src="{{ $playbook->getImage() }}" class="user-profile-image" /></a> </div>
                            <div class="media-body">
                              <h1 class="media-heading">{{$playbook->name }}</h1>

                              @if (!empty($playbook->player->sport))
                                <h2 class="media-heading">{{$playbook->player->sport}} - {{$playbook->player->position}} # {{$playbook->player->jersey}}</h2>
                                <h3 class="media-heading">{{$playbook->player->team}}</h3>
                              @endif

                              @if (!empty($playbook->about))
                                <p>{{ $playbook->about }}</p>
                              @endif

                              @if (!empty($playbook->education->school))
                                <div class="col-sm-6">
                                  <h5><span class="glyphicon glyphicon-apple" aria-hidden="true"></span> : {{$playbook->education->school}}</h5>
                                </div>
                              @endif

                              @if (!empty($playbook->education->town))
                                <div class="col-sm-6">
                                  <h5><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> : {{ $playbook->education->town }}</h5>
                                </div>
                              @endif

                              @if (!empty($playbook->physical->dob))
                                <div class="col-sm-6">
                                  <h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span> : {{
                                    $_age = floor((time() - strtotime($playbook->physical->dob)) / 31556926),
                                    $_age }}</h5>
                                </div>
                              @endif

                              @if (!empty($playbook->physical->gender))
                                <div class="col-sm-6">
                                  <h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span> : {{ $playbook->physical->gender }}</h5>
                                </div>
                              @endif

                              @if (!empty($playbook->physical->height_ft))
                                <div class="col-sm-6">
                                  <h5><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> : {{ $playbook->physical->height_ft }} {{ $playbook->physical->height_in }}</h5>
                                </div>
                              @endif

                              @if (!empty($playbook->physical->weight))
                                <div class="col-sm-6">
                                  <h5><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> : {{ $playbook->physical->weight }} LB</h5>
                                </div>
                              @endif

                             </div>
                          </div>
                        @endif
                      </div><!--panel-body-->
                    </div><!--panel-->
                  </div><!--col-xs-12-->
                </div><!--row-->
                <div class="row">
                  <div class="col-md-6"> <!--up coming-->
                    <div class="mainbox02 panel panel-default">
                      <div class="panel-heading">
                        <h4>Latest Video</h4>
                      </div><!--panel-heading-->
                      <div class="panel-body">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="http://tv.adobe.com/embed/1221/24197/"></iframe>
                        </div>
                      </div><!--panel-body-->
                    </div><!--panel-->
                  </div><!--col-md-6-->

                <div class="col-md-6">
                    <div class="mainbox02 panel panel-default">
                      <div class="panel-heading">
                        <h4>Latest Pictures</h4>
                      </div><!--panel-heading-->

                      <div class="panel-body">
                        <div id="carousel1" class="carousel slide" data-ride="carousel">
             				<ol class="carousel-indicators">
           							    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
           							    <li data-target="#carousel1" data-slide-to="1"></li>
           							    <li data-target="#carousel1" data-slide-to="2"></li>
             						  </ol>
 							  <div class="carousel-inner" role="listbox">
 							    <div class="item active"><img src="file:///ssd/Users/pati_mb/Library/Application Support/Adobe/Dreamweaver CC 2017/en_US/Configuration/Temp/Assets/eam5d9f73e8.TMP/images/Carousel_Placeholder.png" alt="First slide image" class="center-block">
 							                <div class="carousel-caption">
 							                  <h3>First slide Heading</h3>
 							                  <p>First slide Caption</p>
 						                  </div>
 						                </div>
 							    <div class="item"><img src="file:///ssd/Users/pati_mb/Library/Application Support/Adobe/Dreamweaver CC 2017/en_US/Configuration/Temp/Assets/eam5d9f73e8.TMP/images/Carousel_Placeholder.png" alt="Second slide image" class="center-block">
 							                <div class="carousel-caption">
 							                  <h3>Second slide Heading</h3>
 							                  <p>Second slide Caption</p>
 						                  </div>
 						                </div>
 							    <div class="item"><img src="file:///ssd/Users/pati_mb/Library/Application Support/Adobe/Dreamweaver CC 2017/en_US/Configuration/Temp/Assets/eam5d9f73e8.TMP/images/Carousel_Placeholder.png" alt="Third slide image" class="center-block">
 							    <div class="carousel-caption">
				            <h3>Third slide Heading</h3>
				            <p>Third slide Caption</p>
 						      </div>
 						      </div>
 						    </div>
 							    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                </div>
                      </div><!--panel-body-->
                    </div><!--panel-->
                  </div><!--col-md-6-->

                  <div class="col-md-6">
                      <div class="mainbox02 panel panel-default">
                          <div class="panel-heading">
                              <h4>Item</h4>
                          </div><!--panel-heading-->

                          <div class="panel-body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.</p>
                          </div><!--panel-body-->
                      </div><!--panel-->
                  </div><!--col-md-6-->

                  <div class="col-md-6">
                      <div class="mainbox02 panel panel-default">
                          <div class="panel-heading">
                              <h4>Item</h4>
                          </div><!--panel-heading-->
                          <div class="panel-body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.</p>
                          </div><!--panel-body-->
                      </div><!--panel-->
                  </div><!--col-md-6-->
                </div><!--row-->
            </div><!--col-md-8-->
          </div><!--row-->
        </div><!--panel body-->
      </div><!-- panel -->
    </div><!-- col-md-10 -->
  </div><!-- row -->
@endsection
