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
                          <th>name</th>
                          <th>ID/Passport</th>
                          <th>County</th>
                          <th>Constituency</th>
                          <th>Ward</th>
                          <th>Action</th>

                        </thead>
                        <tbody>
                           @foreach($voters as $key)
                            <tr>
                              <td>{{ $key->id }}</td>
                              <td>{{ $key->name }}</td>
                              <td>{{ $key->regNo }}</td>
                              <td>{{ $key->county }}</td>
                              <td>{{ $key->constituency }}</td>
                              <td>{{ $key->ward }}</td>
                              <td><button class="btn btn-default"><a href="{{ url('/verify'.$key->id)}}">
                                  <i class="fa fa-btn fa-default"></i> Verify</a>
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
