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
                                  <input id="role" type="hidden" class="form-control" name="role" value="normal">

                                  @if ($errors->has('regNo'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('regNo') }}</strong>
                                      </span>
                                  @endif
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
