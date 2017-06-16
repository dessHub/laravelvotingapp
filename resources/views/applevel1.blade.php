@extends('layouts.app')

@section('content')

<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Verify Your Details Before Submitting.</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/voterapp') }}">
                        {{ csrf_field() }}
                      <div class="col-md-12">
                       <div class="col-md-3">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Name</label>

                            <div class="col-md-12">
                                 <input class="form-control" type="text" id="name" name="name" required="true" value="{{ Auth::user()->name}}">
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
                        <hr>

                      <div class="col-md-12">
                        @foreach($elections as $key)
                       <div class="col-md-4">
                        <div class="form-group{{ $errors->has('election') ? ' has-error' : '' }}">
                            <label for="election" class="col-md-12 control-label">Election</label>

                            <div class="col-md-12">
                                 <input class="form-control" type="text" id="election" name="election" required="true" value="{{ $key->type}}">
                                 <input class="form-control" type="hidden" id="election_id" name="election_id" required="true" value="{{ $key->id}}">

                            </div>
                        </div>

                          </div>
                           <div class="col-md-4">
                            <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                                <label for="year" class="col-md-12 control-label">Year</label>

                                <div class="col-md-12">
                                    <input id="year" type="text" class="form-control" name="year" value="{{ $key->year }}">

                                    @if ($errors->has('year'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                              </div>
                               <div class="col-md-4">
                                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                    <label for="date" class="col-md-12 control-label">Date</label>

                                    <div class="col-md-12">
                                        <input id="date" type="text" class="form-control" name="date" value="{{ $key->date }}">

                                        @if ($errors->has('date'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('date') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                  </div>
                                  @endforeach

                        </div><hr>

                        <div class="col-md-12">
                     <div class="col-md-4">
                      <div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}">
                          <label for="county" class="col-md-12 control-label">County</label>

                          <div class="col-md-12">
                               <select class="form-control" id="county" name="county" required="true" value="{{ old('county') }}" style="background-color : inherit">
                                   <option  value="">Select County</option>
                                   @foreach($counties as $key)
                                   <option  value="{{$key->name}}">{{$key->name}}</option>
                                    @endforeach
                               </select>
                          </div>
                      </div>

                        </div>
                         <div class="col-md-4">
                          <div class="form-group{{ $errors->has('constituency') ? ' has-error' : '' }}">
                              <label for="constituency" class="col-md-12 control-label">Constituency</label>

                              <div class="col-md-12">
                                   <select class="form-control" id="constituency" name="constituency" required="true" value="{{ old('county') }}" style="background-color : inherit">
                                       <option  value="">Select Constituency</option>
                                       @foreach($constituencies as $key)
                                       <option  value="{{$key->name}}">{{$key->name}}</option>
                                        @endforeach
                                   </select>
                              </div>
                          </div>

                            </div>
                         <div class="col-md-4">
                          <div class="form-group{{ $errors->has('ward') ? ' has-error' : '' }}">
                              <label for="ward" class="col-md-12 control-label">Ward</label>

                              <div class="col-md-12">
                                   <select class="form-control" id="ward" name="ward" required="true" value="{{ old('ward') }}" style="background-color : inherit">
                                       <option  value="">Select Ward</option>
                                       @foreach($wards as $key)
                                       <option  value="{{$key->name}}">{{$key->name}}</option>
                                        @endforeach
                                   </select>
                              </div>
                          </div>

                            </div>
                          </div>

                       <div class="col-md-2">
                        <div class="form-group">
                            <div class="col-md-12" style="padding-top : 23px;">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-plus"></i> Save
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
@endsection
