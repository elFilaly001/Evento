<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3"> 
        {{-- @if (session('user_role') == "Admin")
            Admin
        @else
            Organisateur
        @endif     --}}
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Statistic</span>
    </a>
    
    <!-- Divider -->
    
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('Admin_index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Events</span></a>
</li>
{{-- 
@if (session('user_role') == "Admin") --}}
    
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Categories</span>
    </a>
</li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" >
            <i class="fas fa-fw fa-folder"></i>
            <span>Users</span>
        </a>
    </li>
    {{-- @endif --}}

</ul>
<!-- End of Sidebar -->
