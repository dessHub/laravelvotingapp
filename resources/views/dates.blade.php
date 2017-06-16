@extends('layouts.app')

@section('content')

<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Set Elections Dates</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/setdates') }}">
                        {{ csrf_field() }}
                       <div class="col-md-4">
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-12 control-label">Type</label>

                            <div class="col-md-12">
                                <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}">

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          </div>
                         <div class="col-md-3">
                          <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                              <label for="code" class="col-md-6 control-label">Year</label>

                              <div class="col-md-12">
                                <select class="form-control" id="year" required="true" name="year">
                                      @for ($year = date('Y'); $year > date('Y') - 100; $year--)
                                      <option value="{{$year}}">
                                              {{$year}}
                                      </option>
                                      @endfor
                                </select>
                               </div>
                          </div>

                            </div>
                           <div class="col-md-3">
                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="date" class="col-md-12 control-label">Select Date</label>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="date" id="datepicker">

                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @endif
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

<div class="container"style="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">

                        <thead>
                            <th>ID</th>
                          <th>Type</th>
                          <th>Year</th>
                          <th>Date</th>
                          <th>Action</th>

                        </thead>
                        <tbody>
                           @foreach($elections as $key)
                            <tr>
                              <td>{{ $key->id }}</td>
                              <td>{{ $key->type }}</td>
                              <td>{{ $key->year }}</td>
                              <td>{{ $key->date }}</td>
                              <td><button class="btn btn-danger"><a href="{{ url('/deletedate'.$key->id)}}">
                                  <i class="fa fa-btn fa-remove"></i> Delete</a>
                              </button></td>

                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
