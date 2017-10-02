@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
          <!-- page content -->
    <div class="row tile_count push-margin-down" id="app">
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New User</div>
                <div class="panel-body">
                  <form class="" method="POST" action="{{ route('users/create') }}">
                      {{ csrf_field() }}
                       @include('pages.users.add-new-user-form')
                      <button type="submit" class="btn btn-success">Create</button>
                  </form>
                </div>
            </div>
        </div>
      </div>
@endsection
