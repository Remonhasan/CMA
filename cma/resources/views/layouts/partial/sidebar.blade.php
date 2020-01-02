 <div class="sidebar" data-color="purple" data-background-color="white" src="{{ asset('backend/img/sidebar-1.jpg') }}">
     
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          CMA
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{Request::is('admin/dashboard*') ? 'active': ''}} ">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
         
           <li class="{{Request::is('admin/category*') ? 'active': ''}}">
            <a class="nav-link" href="{{route('course.index')}}">
              <i class="material-icons">content_paste</i>
              <p>Courses</p>
            </a>
          </li>
          <li class="{{Request::is('admin/student*') ? 'active': ''}}">
            <a class="nav-link" href="{{route('student.index')}}">
              <i class="material-icons">library_books</i>
              <p>Registered Students</p>
            </a>
          </li>
           <li class="{{Request::is('admin/registration*') ? 'active': ''}}">
            <a class="nav-link" href="{{route('registration.index')}}">
              <i class="material-icons">chrome_reader_mode</i>
              <p>Registration Request</p>
            </a>
          </li>
        
          
        </ul>
      </div>
    </div>