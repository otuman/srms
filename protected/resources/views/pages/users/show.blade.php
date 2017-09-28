@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
          <!-- page content -->
    <div class="row tile_count push-margin-down" id="app">
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User's Details</div>
                <div class="panel-body">
                         <div class="table-responsive">
                          <table class="table">
                                <tr>
                                  <td>Full Name</td>
                                  <td>{{$user->first_name}} {{$user->last_name}}</td>
                                </tr>
                                <tr>
                                  <td>Email Address</td>
                                  <td>{{$user->email}} </td>
                                </tr>
                                <tr>
                                  <td>Status</td>
                                  <td>{{$user->status}} </td>
                                </tr>
                                <tr>
                                  <td>Last Login</td>
                                  <td>{{$user->last_login}} </td>
                                </tr>
                          </table>
                        </div>
                </div>
            </div>
        </div>
      </div>
@endsection
