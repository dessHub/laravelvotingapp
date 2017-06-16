@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                       <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Name</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneno') ? ' has-error' : '' }}">
                            <label for="phoneno" class="col-md-12 control-label">Mobile No:</label>

                            <div class="col-md-12">
                                <input id="phoneno" type="text" class="form-control" name="phoneno" value="{{ old('phoneno') }}">

                                @if ($errors->has('phoneno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                          <label for="gender" class="col-md-12 control-label">Gender:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="gender" name="gender" required="true" value="{{ old('gender') }}" style="background-color : inherit">
                                   <option  value="">Select Gender</option>
                                   <option  value="Male">Male</option>
                                    <option  value="Female">Female</option>

                               </select>
                          </div>
                      </div>

                    <div class="form-group{{ $errors->has('constituency') ? ' has-error' : '' }}">
                        <label for="constituency" class="col-md-12 control-label">Constituency:</label>

                        <div class="col-md-12">
                             <select class="form-control" id="constituency" name="constituency" required="true" value="{{ old('constituency') }}" style="background-color : inherit">
                                 <option  value="">Select Constituency</option>
                                 @foreach($conts as $key)
                                 <option  value="{{$key->name}}">{{$key->name}}</option>
                                  @endforeach
                             </select>
                        </div>
                    </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          </div>

                          <div class="col-md-6">

                          <div class="form-group{{ $errors->has('regNo') ? ' has-error' : '' }}">
                              <label for="regNo" class="col-md-12 control-label">National ID / Passport No:</label>

                              <div class="col-md-12">
                                  <input id="regNo" type="text" class="form-control" name="regNo" value="{{ old('regNo') }}">
                                  <input id="role" type="hidden" class="form-control" name="role" value="Student">

                                  @if ($errors->has('regNo'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('regNo') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                              <div class="col-md-12">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                        <div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}">
                            <label for="county" class="col-md-12 control-label">County:</label>

                            <div class="col-md-12">
                                 <select class="form-control" id="county" name="county" required="true" value="{{ old('county') }}" style="background-color : inherit">
                                     <option  value="">Select County</option>
                                     @foreach($counties as $key)
                                     <option  value="{{$key->name}}">{{$key->name}}</option>
                                      @endforeach


                                 </select>
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('ward') ? ' has-error' : '' }}">
                          <label for="ward" class="col-md-12 control-label">Ward:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="ward" name="ward" required="true" value="{{ old('ward') }}" style="background-color : inherit">
                                   <option  value="">Select Ward</option>
                                   @foreach($wards as $key)
                                   <option  value="{{$key->name}}">{{$key->name}}</option>
                                    @endforeach

                               </select>
                          </div>
                      </div>


                          <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                              <label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>

                              <div class="col-md-12">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                  @if ($errors->has('password_confirmation'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                        <div class="form-group">
                            <div class="col-md-6 " style="padding-top:30px;">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>

                          </div>
                    </form>
                </div>

</div>

</div>
</div>
</div>
</div> <!-- /#contents -->

@endsection
