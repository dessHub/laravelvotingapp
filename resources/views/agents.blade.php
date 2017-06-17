@extends('layouts.app')

@section('content')

<div class="container"style="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Applicants</div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">

                        <thead>
                            <th>ID</th>
                          <th>name</th>
                          <th>ID/Passport</th>
                          <th>Email</th>
                          <th>Mobile No</th>
                          <th>Gender</th>
                          <th>Status</th>
                          <th>Action</th>

                        </thead>
                        <tbody>
                           @foreach($applicants as $key)
                            <tr>
                              <td>{{ $key->id }}</td>
                              <td>{{ $key->name }}</td>
                              <td>{{ $key->regNo }}</td>
                              <td>{{ $key->email }}</td>
                              <td>{{ $key->phoneno}}</td>
                              <td>{{ $key->gender }}</td>
                              <td>{{ $key->status }}</td>
                              <td><a href="{{ url('/agverify'.$key->id)}}">
                                  <i class="fa fa-btn fa-default"></i> Verify</a>
                              </td>

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

<div class="container"style="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Verified Agents</div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">

                        <thead>
                            <th>ID</th>
                          <th>name</th>
                          <th>ID/Passport</th>
                          <th>Email</th>
                          <th>Mobile No</th>
                          <th>Gender</th>
                          <th>Status</th>

                        </thead>
                        <tbody>
                           @foreach($agents as $key)
                            <tr>
                              <td>{{ $key->id }}</td>
                              <td>{{ $key->name }}</td>
                              <td>{{ $key->regNo }}</td>
                              <td>{{ $key->email }}</td>
                              <td>{{ $key->phoneno}}</td>
                              <td>{{ $key->gender }}</td>
                              <td>{{ $key->status }}</td>

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
