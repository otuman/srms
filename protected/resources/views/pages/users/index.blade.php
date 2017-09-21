@extends('layouts.app')

@section('title')

Posts

@endsection

@section('content')

          <!-- page content -->

    <div class="row tile_count push-margin-down" id="app">
          <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Tables <small>Some examples to get you started</small></h3>
                </div>
                <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table design <small>Custom design</small></h2>
                  </div>
                  <div class="x_content">
                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>
                    <div class="table-responsive">
                      <table class="table table-bordered" id="users-table">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Last Login</th>
                              </tr>
                          </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
           </div>
    </div><!-- /page content -->
     @include('layouts.footer');
@endsection
@section('page-script') <!-- Custom Theme Scripts -->
    <script>
        $(document)ready(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route("users-data") }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'last_name', name: 'last_name' },
                    { data: 'email', name: 'email' },
                    { data: 'status', name: 'status' },
                    { data: 'last_login', name: 'last_login' }
                ]
            });
        });
</script>
@endsection
