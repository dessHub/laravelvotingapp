@extends('layouts.app')

@section('content')

<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
          <div class="col-md-12 ">
           <div class="text-center"><h3><b>Apply As An Agent.</b></h3></div>
           <div><b>Reguirements:</b></div>
           <ul>
             <li>Above 18 years of age.</li>
             <li>Must be <em>Kenyan citizen.</em></li>
             <li>Must be a <em>verified voter</em>.</li>
           </ul>
          </div>
            <div class="panel panel-default">
                <div class="panel-heading">Verify Your Details Before Submitting.</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/appAgent') }}">
                      <div class="col-md-12">
                       <div class="col-md-3">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Name</label>

                            <div class="col-md-12">
                                 <input class="form-control" type="text" id="name" name="name" required="true" value="{{ Auth::user()->name}}">
                                 {{ csrf_field() }}
                                 <input class="form-control" type="hidden" id="id" name="id" required="true" value="{{Auth::user()->id }}">
                                 <input id="gender" type="hidden" class="form-control" name="gender" value="{{Auth::user()->gender }}">

                            </div>
                        </div>

                          </div>
                           <div class="col-md-3">
                            <div class="form-group{{ $errors->has('regNo') ? ' has-error' : '' }}">
                                <label for="regNo" class="col-md-12 control-label">ID / Passport No:</label>

                                <div class="col-md-12">
                                    <input id="regNo" type="text" class="form-control" name="regNo" value="{{ Auth::user()->regNo }}">


                                    @if ($errors->has('regNo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('regNo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                              </div>
                               <div class="col-md-3">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-12 control-label">Email</label>

                                    <div class="col-md-12">
                                        <input id="email" type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                  </div>
                                   <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('phoneno') ? ' has-error' : '' }}">
                                        <label for="phoneno" class="col-md-12 control-label">Mobile No:</label>

                                        <div class="col-md-12">
                                            <input id="phoneno" type="text" class="form-control" name="phoneno" value="{{ Auth::user()->phoneno }}">

                                            @if ($errors->has('phoneno'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phoneno') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                      </div>

                        </div>

                   <div class="col-md-12 text-center">
                    <div class="form-group">
                        <div class="col-md-12" style="padding-top : 23px;">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-plus"></i> Apply 
                            </button>
                        </div>
                    </div>
                  </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
