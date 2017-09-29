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
                  <form class="" method="POST" action="{{ route('register') }}">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New User</h4>
                  </div>
                  <div class="modal-body">
                         {{ csrf_field() }}
                         @include('pages.users.add-new-user-form')

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" id="edit-btn-submit" class="btn btn-success">Create</button>
                  </div>
                 </form>
                </div>

              </div>
            </div>
            <!-- Modal -->
             <div id="edit-user-modal" class="modal fade" role="dialog">
               <div class="modal-dialog">
                 <!-- Modal content-->
                 <div class="modal-content">
                   <form class="" method="POST" action="{{ url('users/edit') }}" id="edit-user-form">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Edit User</h4>
                   </div>
                   <div class="modal-body">
                          {{ csrf_field() }}
                          @include('pages.users.edit-user-form-modal')
                          <input type="hidden" class="form-control" name="edit_id" id="edit-id" value="" required autofocus>

                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                     <button type="submit" id="edit-btn-submit" class="btn btn-success">Save Changes</button>
                   </div>
                   </form>
                 </div>

               </div>
             </div>
    </div><!-- /page content -->
     @include('layouts.footer');
@endsection
@section('page-script') <!-- Custom Theme Scripts -->
    <script>
    var tableData ;

    $(document).ready(function() {
        let usersTables = $('#users-table');
        tableData = usersTables.DataTable({
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

        // Save edited row $(selector).post(URL,data,function(data,status,xhr),dataType)
			  $("#edit-user-form").on("submit", function(event) {
          let user_id = $('#edit-id').val();
          let postData = $('#edit-user-form').serializeArray();
           $.ajax({
            url : '{{url("users/edit")}}/' + user_id,
            type: 'POST',
            data: postData,
            dataType: 'json',
            success: function(data){
                      console.log(status);
          						$('#edit-user-modal').modal('hide');
                      tableData.ajax.reload();
                    },
            error:function() {
                   alert('Unable to save data, please try again later.');
                  }
          });


          event.preventDefault();
        });

    });

           // Edit row
        function editRow(id) {
            if ( 'undefined' != typeof id ) {
              $.getJSON(
                    '{{url("users/edit")}}/'+ id,
                     function(obj) {
                        //console.log(obj);
                        $('#edit-id').val(obj.id);
                        $('#edit-first_name').val(obj.first_name);
                        $('#edit-last_name').val(obj.last_name);
                        $('#edit-email').val(obj.email);
                        $('#edit-user-modal').modal('show');
                     })
                     .fail(function() {
                       alert('Unable to fetch data, please try again later.')
                     });
            }else{
               alert('Unknown row id.');
            }

          }
          // Remove row
          function removeRow(id) {
            if ( 'undefined' != typeof id ) {
              $.get('{{url("users/delete")}}/' + id, function() {
                $('a[data-id="row-' + id + '"]').parent().parent().remove();
                tableData.ajax.reload();
              }).fail(function() { alert('Unable to fetch data, please try again later.') });
            } else alert('Unknown row id.');
          }
</script>
@endsection
