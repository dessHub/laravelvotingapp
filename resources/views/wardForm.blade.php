@extends('layouts.app')

@section('content')

<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Ward</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addWard') }}">
                        {{ csrf_field() }}
                        @foreach($conts as $key)
                       <div class="col-md-2">
                        <div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}">
                            <label for="county" class="col-md-12 control-label">County</label>

                            <div class="col-md-12">
                                <input id="county" type="text" class="form-control" name="county" value="{{ $key->county }}">
                                <input id="id" type="hidden" class="form-control" name="id" value="{{ $key->id }}">

                                @if ($errors->has('county'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('county') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </div>
                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('constituency') ? ' has-error' : '' }}">
                          <label for="constituency" class="col-md-12 control-label">Constituency</label>

                          <div class="col-md-12">
                              <input id="constituency" type="text" class="form-control" name="constituency" value="{{ $key->name }}">

                              @if ($errors->has('constituency'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('constituency') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                    </div>
                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('conts') ? ' has-error' : '' }}">
                          <label for="conts" class="col-md-12 control-label">Wards</label>

                          <div class="col-md-12">
                              <input id="conts" type="text" class="form-control" name="conts" value="{{ $key->wards }}">


                              @if ($errors->has('conts'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('conts') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                    </div>
                      @endforeach

                       <div class="col-md-3">
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
                          <th>Name</th>
                          <th>Registered Voters</th>

                        </thead>
                        <tbody>
                          @foreach($wards as $key)
                            <tr>
                              <td>{{ $key->id}}</td>
                              <td>{{ $key->name }}</td>
                              <td>{{ $key->voters }}</td>

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
