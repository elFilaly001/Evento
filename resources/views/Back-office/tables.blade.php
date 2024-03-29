<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    @include('Componants.links')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Componants.sideBarOrg')
        <!-- Content Wrapper -->
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

                <!-- Begin Page Content -->
                @if(session("user_role") == "Orgnizer")
                <div class="container-fluid">   

                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Event
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
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Desctiption</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>validation</th>
                                            <th>status</th>
                                            <th>Action</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $event)
                                        <tr>
                                            <th><img src="upload/events/imgs/{{$event->image}}" alt="" style="width: 50px;border-radius: 50%;height:50px"></th>
                                            <th>{{$event->title}}</th>
                                            <th>{{$event->description}}</th>
                                            <th>{{$event->category->name}}</th>
                                            <th>{{$event->date}}</th>
                                            <th>{{$event->validation}}</th>
                                            <th>{{$event->status}}</th>
                                            <th class="d-flex gap-2 pb-4">
                                                <a href="{{route('editEvent' , $event->id)}}" class="btn btn-primary">Edit</a>
                                                <form action="{{route('DeleteEvent' , $event->id)}}" method="post">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" class="btn btn-danger">Delete</a>
                                                </form>
                                            </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Desctiption</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>validation</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    @foreach($PendingEvents as $PE)
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{$PE->title}}</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>User name</th>
                                            <th>Action</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($reservation as $reserv)
                                            @if($PE->id == $reserv->event_id)
                                            <tr>
                                                <th>{{$reserv->id}}</th>
                                                <th>{{$reserv->user->name}}</th>
                                                <th class="d-flex gap-2 pb-4">
                                                    <form action="{{route("reserve_approve")}}" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" value="{{$reserv->id}}" name="id">
                                                        <button type="submit" class="btn btn-primary">Approve</a>
                                                    </form>
                                                    <form action="{{route("reserve_reject")}}" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" value="{{$reserv->id}}" name="id">
                                                        <button type="submit" class="btn btn-danger">Reject</a>
                                                    </form>
                                                </th>
                                            </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>User name</th>
                                            <th>Action</th>   
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
                @endif
                    <!-- Button trigger modal -->
                @if(session("user_role") == "Admin")
                <div class="container-fluid">   
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
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Desctiption</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>validation</th>
                                            <th>status</th>
                                            <th>Action</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $event)
                                        <tr>
                                            <th><img src="upload/events/imgs/{{$event->image}}" alt="" style="width: 50px;border-radius: 50%;height:50px"></th>
                                            <th>{{$event->title}}</th>
                                            <th>{{$event->description}}</th>
                                            <th>{{$event->category->name}}</th>
                                            <th>{{$event->date}}</th>
                                            <th>{{$event->validation}}</th>
                                            <th>{{$event->status}}</th>
                                            <th class="d-flex gap-2 pb-4">
                                                <form action="{{route("Approve_Event")}}" method="post">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" value="{{$event->id}}" name="id">
                                                    <button type="submit" class="btn btn-primary">Approve</a>
                                                </form>
                                                <form action="{{route("Reject_Event")}}" method="post">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" value="{{$event->id}}" name="id">
                                                    <button type="submit" class="btn btn-danger">Reject</a>
                                                </form>
                                            </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Desctiption</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>validation</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- Button trigger modal -->

  
  <!-- Modal -->
  @if(session("user_role") == "Orgnizer")
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('AddEvent')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Image</label>
                  <input type="file" class="form-control" name="image">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Title</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="title">
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea2">Description</label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="description" style="height: 100px"></textarea>
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea2">category</label>
                    <select class="form-select" name="category_id" aria-label="Default select example">
                        <option value="">categories...</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">location</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="location">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">date</label>
                    <input type="datetime-local"  class="form-control" id="exampleInputPassword1" name="date">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Places</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" name="num_places">
                </div>
                <div class="d-flex gap-3 justify-content-center">
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="validation" id="flexRadioDefault1" value="Manuel">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Manuel
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="validation" id="flexRadioDefault2" value="automatic" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Automatique
                       </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>
</div>               <!-- /.container-fluid -->
@endif
                

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include('Componants.scripts')

</body>

</html>