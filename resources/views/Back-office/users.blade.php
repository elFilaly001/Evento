
{{-- @dd($users) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('Componants.links')
</head>
<body id="page-top">
    <div id="wrapper">

        @include("Componants.sideBarOrg")
        <div id="content-wrapper" class="d-flex flex-column">
            
            <!-- Main Content -->
            <div id="content">
                
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    
                    <!-- Sidebar Toggle (Topbar) -->
                <form class="form-inline">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </form>
                
                <!-- Topbar Search -->
                <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                
                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>   
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                        <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            
            <div class="container-fluid">   
                
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add User
                </button>
                
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>role</th>
                                        <th>Action</th>   
                                    </tr>
                                </thead>
                                <tbody>
                                    @forEach($users as $user)
                                    <tr>
                                        <th>
                                            {{$user->id}}
                                        </th>
                                        <th>
                                            {{$user->name}}
                                        </th>
                                        <th>
                                            {{$user->email}}
                                        </th>
                                        <th>
                                            {{$user->role}}
                                        </th>
                                        <th class="d-flex gap-2 pb-4">
                                            <button type="button" onclick="editUser(event)" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalUpdate">
                                                Edit
                                            </button>
                                            <form action="{{route("delete_User")}}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <input type="hidden" name="id" value="{{$user->id}}">
                                                <button type="submit" class="btn btn-danger">Delete</a>
                                            </form>
                                        </th>
                                    </tr>
                                    @endforeach                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>role</th>
                                        <th>Action</th>  
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('Add_User')}}" method="POST" >
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Fullname">
                        </div>
                        <div class="mb-3">
                            <label for="floatingTextarea2">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="email"  placeholder="Example@gmail.com">    
                        </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="password"  placeholder="Password" >
                    </div>  
                    <div class="d-flex gap-3 justify-content-center">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="User"checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                User
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="Orgnizer" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Orgnizer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="Admin" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Admin
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>  
<div class="modal fade" id="exampleModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{route('Update_User')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <input type="hidden" id="id_inp" name="id">
              <label for="exampleInputPassword1" class="form-label" >name</label>
              <input type="text" class="form-control" id="name_inp" name="name">
              <label for="exampleInputPassword1" class="form-label" >Email</label>
              <input type="text" class="form-control" id="email_inp" name="email">
              <label for="exampleInputPassword1" class="form-label" >Password</label>
              <input type="text" class="form-control" id="password_inp" name="password">
              <div class="d-flex gap-3 justify-content-center">
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="role" id="RadioUser" value="User"checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        User
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="RadioOrg" value="Orgnizer" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Orgnizer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="RadioAdmin" value="Admin" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        Admin
                    </label>
                </div>
            </div>              

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
</div>
</div>
    @include("Componants.scripts")
    <script>
        function editUser(e){
            let tr  = e.target.closest("tr");
            let th_id = tr.querySelectorAll("th")[0];
            let th_name = tr.querySelectorAll("th")[1];
            let th_email = tr.querySelectorAll("th")[2];
            let th_role = tr.querySelectorAll("th")[3];

            let inp_id= document.getElementById("id_inp")
            let inp_name= document.getElementById("name_inp")
            let inp_email= document.getElementById("email_inp")
            let inp_password= document.getElementById("password_inp")
            let inp_radio1= document.getElementById("RadioUser")
            let inp_radio2= document.getElementById("RadioOrg")
            let inp_radio3= document.getElementById("RadioAdmin")
            
            inp_id.value = th_id.innerText
            inp_name.value = th_name.innerText
            inp_email.value = th_email.innerText
            
            console.log(th_role.innerText); 
            if(th_role.innerText == 'User'){
                inp_radio1.checked = true ;
            }
            if(th_role.innerText == 'Orgnizer'){
                inp_radio2.checked = true ;
            }
            if(th_role.innerText == 'Admin'){
                inp_radio3.checked = true ;
            }

        }
    </script>
</body>
</html>