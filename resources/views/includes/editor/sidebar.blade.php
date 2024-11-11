<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-fw fa-tachometer-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DASHBOARD</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{Request::is('editor') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('editor.home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    {{-- divider --}}
    <hr class="sidebar-divider">
    <li class="nav-item {{Request::is('editor/users') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('editor.users')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item {{Request::is('editor/master-head') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('editor.master-head')}}">
            <i class="fas fa-fw fa-pen"></i>
            <span>Master Head</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{Request::is('editor/master-carousel') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('editor.master-carousel')}}">
            <i class="fas fa-fw fa-layer-group"></i>
            <span>Master Carousel</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{Request::is('editor/contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('editor.contact')}}">
            <i class="fas fa-fw fa-phone"></i>
            <span>Contact</span></a>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider d-none d-md-block">

    {{-- Sidebar Toggler --}}
    <div class="text-center d-none d-md-inline">
        <button class="rounded-cirlce border-0" id="sidebarToggle"></button>
    </div>
</ul>
