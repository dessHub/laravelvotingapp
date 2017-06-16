@extends('layouts.app')

@section('content')

<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register County</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/counties') }}">
                        {{ csrf_field() }}
                       <div class="col-md-4">
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

                          </div>
                         <div class="col-md-3">
                          <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                              <label for="code" class="col-md-12 control-label">Code</label>

                              <div class="col-md-12">
                                  <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}">

                                  @if ($errors->has('code'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('code') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                            </div>
                           <div class="col-md-3">
                            <div class="form-group{{ $errors->has('constituencies') ? ' has-error' : '' }}">
                                <label for="constituencies" class="col-md-12 control-label">No Of Constituencies</label>

                                <div class="col-md-12">
                                    <input id="constituencies" type="text" class="form-control" name="constituencies" value="{{ old('constituencies') }}">

                                    @if ($errors->has('constituencies'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('constituencies') }}</strong>
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
                          <th>Code</th>
                          <th>Name</th>
                          <th>Constituencies</th>
                          <th>Registered Voters</th>

                        </thead>
                        <tbody>
                          @foreach($counties as $key)
                            <tr>
                              <td>{{ $key->id}}</td>
                              <td>{{ $key->code }}</td>
                              <td>{{ $key->name }}</td>
                              <td>{{ $key->constituencies }}</td>
                              <td>{{ $key->voters }}</td>
                              <td><button class="btn btn-default"><a href="{{ url('/addCont'.$key->id)}}">
                                  <i class="fa fa-btn fa-plus"></i> Constituency</a>
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
