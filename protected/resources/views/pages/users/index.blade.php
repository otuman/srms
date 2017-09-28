@extends('layouts.app')
@section('title')
Users
@endsection
@section('content')
          <!-- page content -->

    <div class="row tile_count push-margin-down" id="app">
          <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>List of All Users</h3>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                   <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#add-new-user">Add New</button>
                  <div class="x_content">
                     <div class="table-responsive">
                      <table class="table table-bordered hover" id="users-table" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                  <th>Type</th>
                                  <th>Status</th>
                                  <th>Last Login</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                  <th>Id</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                  <th>Type</th>
                                  <th>Status</th>
                                  <th>Last Login</th>
                                  <th>Action</th>
                              </tr>
                          </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
           </div>
           <!-- -->
           <!-- Modal -->
            <div id="add-new-user" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New User</h4>
                  </div>
                  <div class="modal-body">
                     <form class="" method="POST" action="{{ route('register') }}">
                         {{ csrf_field() }}
                         @include('pages.users.add_new_user_form')
                     </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
    </div><!-- /page content -->
     @include('layouts.footer');
@endsection
@section('page-script') <!-- Custom Theme Scripts -->
    <script>
       $(document).ready(function() {

         let usersTables = $('#users-table');
             usersTables.DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route("users-data") }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'last_name', name: 'last_name' },
                    { data: 'email', name: 'email' },
                    { data: 'type', name: 'type' },
                    { data: 'status', name: 'status' },
                    { data: 'last_login', name: 'last_login' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
</script>
@endsection
