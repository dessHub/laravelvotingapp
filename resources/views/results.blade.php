@extends('layouts.app')

@section('content')



<div class="container"style="">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Presidentials Results</div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">

                        <thead>
                            <th>ID</th>
                          <th>name</th>
                          <th>Party</th>
                          <th>Votes</th>

                        </thead>
                        <tbody>
                           @foreach($aspirants as $key)
                            <tr>
                              <td>{{ $key->id }}</td>
                              <td>{{ $key->name }}</td>
                              <td>{{ $key->party }}</td>
                              <td>{{ $key->votes }}</td>

                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">View County Results</div>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">

                            <thead>

                            </thead>
                            <tbody>
                               @foreach($counties as $key)
                                <tr>
                                  <td><a href="{{url('cresults'.$key->name)}}">{{ $key->name }}</a></td>

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
