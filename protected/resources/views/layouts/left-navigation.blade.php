  <div class="left_col scroll-view">
    <div class="navbar nav_title navbar-fixed-top" style="border: 0;">
      <a href="{{url('/')}}" class="site_title">
         <img src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="..." class="img-circle profile-logo">
         <span>{{config('app.name', 'SRMS')}}</span>
      </a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix" style="margin-top:50px;">
      <div class="profile_pic">
        <img src="{{asset('protected/storage/uploads/images/img.jpg')}}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('home')}}">Home</a></li>
              <li><a href="{{route('home/update-core')}}">update</a></li>
              <li><a href="{{route('home/documentation')}}">Documentation</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-users" aria-hidden="true"></i> Users <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{url('users')}}">All users</a></li>
              <li><a href="{{route('users/create')}}">Add new</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-bar-chart-o"></i> Courses <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{url('courses')}}">All Courses</a></li>
              <li><a href="{{url('courses/create')}}">Add New</a></li>
              <li><a href="{{url('courses/enroll')}}">Enroll</a></li>
              <li><a href="{{url('courses/enroll')}}">Enroll</a></li>
              <li><a href="{{url('courses/enroll')}}">Enroll</a></li>
              <li><a href="{{url('courses/enroll')}}">Enroll</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Students <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{url('students')}}">All Students</a></li>
              <li><a href="form_advanced.html">Add new</a></li>
              <li><a href="form_validation.html">Students by Class</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Employees <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{url('students')}}">All Employees</a></li>
              <li><a href="form_advanced.html">Add new</a></li>
            </ul>
          </li>
           <li><a><i class="fa fa-edit"></i> Classes <span class="fa fa-chevron-down"></span></a>
             <ul class="nav child_menu">
               <li><a href="{{url('classes')}}">All Classes</a></li>
               <li><a href="{{url('classes/create')}}">Add new</a></li>
             </ul>
           </li>
          <li><a><i class="fa fa-table"></i> Media <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="tables.html">All Media</a></li>
              <li><a href="tables_dynamic.html">Add new</a></li>
            </ul>
          </li>
         </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
