@extends('layouts.app')

@section('content')


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
                          <th>Docket</th>

                        </thead>
                        <tbody>
                          @foreach($dockets as $key)
                            <tr>
                              <td>{{ $key->id}}</td>
                              <td>{{ $key->name }}</td>
                              <td><button class="btn btn-default"><a href="{{ url('/appDock'.$key->id)}}">
                                  <i class="fa fa-btn fa-apply"></i> Apply For This Docket.</a>
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
