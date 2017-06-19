@extends('layouts.app')

@section('content')

<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Verify Your Details Before Submitting.</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/cast') }}">
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
                       @foreach($elections as $elections)
                       <div class="col-md-4">
                        <div class="form-group{{ $errors->has('election') ? ' has-error' : '' }}">
                            <label for="election" class="col-md-12 control-label">Election</label>

                            <div class="col-md-12">
                                 <input class="form-control" type="text" id="type" name="type" required="true" value="{{ $elections->type}}">
                                 <input class="form-control" type="hidden" id="election_id" name="election_id" required="true" value="{{ $elections->id}}">

                            </div>
                        </div>

                          </div>
                           <div class="col-md-4">
                            <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                                <label for="year" class="col-md-12 control-label">Year</label>

                                <div class="col-md-12">
                                    <input id="year" type="text" class="form-control" name="year" value="{{ $elections->year }}">

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
                                        <input id="date" type="text" class="form-control" name="date" value="{{ $elections->date }}">

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
                       <div class="form-group{{ $errors->has('president') ? ' has-error' : '' }}">
                           <label for="president" class="col-md-12 control-label">President</label>

                           <div class="col-md-12">
                                <select class="form-control" id="president" name="president" required="true" value="{{ old('president') }}" style="background-color : inherit">
                                    <option  value="">Select president</option>
                                    @foreach($pres as $key)
                                    <option  value="{{$key->id}}">{{$key->name}}-{{$key->party}}</option>
                                     @endforeach
                                </select>
                           </div>
                       </div>

                         </div>
                      <div class="col-md-4">
                       <div class="form-group{{ $errors->has('governor') ? ' has-error' : '' }}">
                           <label for="governor" class="col-md-12 control-label">Governor</label>

                           <div class="col-md-12">
                                <select class="form-control" id="governor" name="governor" required="true" value="{{ old('governor') }}" style="background-color : inherit">
                                    <option  value="">Select governor</option>
                                    @foreach($gov as $key)
                                    <option  value="{{$key->id}}">{{$key->name}}-{{$key->party}}</option>
                                     @endforeach
                                </select>
                           </div>
                       </div>

                         </div>
                      <div class="col-md-4">
                       <div class="form-group{{ $errors->has('senator') ? ' has-error' : '' }}">
                           <label for="senator" class="col-md-12 control-label">Senator</label>

                           <div class="col-md-12">
                                <select class="form-control" id="senator" name="senator" required="true" value="{{ old('senator') }}" style="background-color : inherit">
                                    <option  value="">Select senator</option>
                                    @foreach($senator as $key)
                                    <option  value="{{$key->id}}">{{$key->name}}-{{$key->party}}</option>
                                     @endforeach
                                </select>
                           </div>
                       </div>

                         </div>


                         </div>

                          <div class="col-md-12">
                       <div class="col-md-4">
                        <div class="form-group{{ $errors->has('women') ? ' has-error' : '' }}">
                            <label for="women" class="col-md-12 control-label">Women Rep</label>

                            <div class="col-md-12">
                                 <select class="form-control" id="women" name="women" required="true" value="{{ old('women') }}" style="background-color : inherit">
                                     <option  value="">Select Women Rep</option>
                                     @foreach($women as $key)
                                     <option  value="{{$key->id}}">{{$key->name}}-{{$key->party}}</option>
                                      @endforeach
                                 </select>
                            </div>
                        </div>

                          </div>
                       <div class="col-md-4">
                        <div class="form-group{{ $errors->has('mp') ? ' has-error' : '' }}">
                            <label for="mp" class="col-md-12 control-label">Memper Of Parliament</label>

                            <div class="col-md-12">
                                 <select class="form-control" id="mp" name="mp" required="true" value="{{ old('mp') }}" style="background-color : inherit">
                                     <option  value="">Select Mp</option>
                                     @foreach($mp as $key)
                                     <option  value="{{$key->id}}">{{$key->name}}-{{$key->party}}</option>
                                      @endforeach
                                 </select>
                            </div>
                        </div>

                          </div>
                       <div class="col-md-4">
                        <div class="form-group{{ $errors->has('mca') ? ' has-error' : '' }}">
                            <label for="mca" class="col-md-12 control-label">Mca</label>

                            <div class="col-md-12">
                                 <select class="form-control" id="mca" name="mca" required="true" value="{{ old('mca') }}" style="background-color : inherit">
                                     <option  value="">Select Mca</option>
                                     @foreach($mca as $key)
                                     <option  value="{{$key->id}}">{{$key->name}}-{{$key->party}}</option>
                                      @endforeach
                                 </select>
                            </div>
                        </div>

                          </div>

                     <div class="col-md-2">
                      <div class="form-group">
                          <div class="col-md-12" style="padding-top : 23px;">
                              <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-btn fa-plus"></i> vote
                              </button>
                          </div>
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
