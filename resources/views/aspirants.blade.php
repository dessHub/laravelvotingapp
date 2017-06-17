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
                          <th>Party</th>
                          <th>Docket</th>
                          <th>County</th>
                          <th>Constituency</th>
                          <th>Ward</th>

                        </thead>
                        <tbody>
                           @foreach($aspirants as $key)
                            <tr>
                              <td>{{ $key->id }}</td>
                              <td>{{ $key->name }}</td>
                              <td>{{ $key->regNo }}</td>
                              <td>{{ $key->party }}</td>
                              <td>{{ $key->docket }}</td>
                              <td>{{ $key->county }}</td>
                              <td>{{ $key->constituency }}</td>
                              <td>{{ $key->ward }}</td>

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
