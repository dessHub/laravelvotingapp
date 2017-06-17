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
                              <td>{{ $key->status }}</td>
                              @if($key->status === "open")
                              <td><button class="btn btn-default"><a href="{{ url('/apply'.$key->id)}}">
                                  <i class="fa fa-btn fa-remove"></i> Apply</a>
                              </button></td>
                              @elseif($key->status === "active")
                              <td><button class="btn btn-default"><a href="{{ url('/load'.$key->id)}}">
                                  <i class="fa fa-btn fa-arrow"></i> Vote</a>
                              </button></td>
                              @endif

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
