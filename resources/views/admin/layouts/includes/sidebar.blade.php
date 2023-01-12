<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="{{ asset('assets') }}/img/logo.png" class="header-logo" />
                <span class="logo-name">Hello Task</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Company & Employee</li>
            <li class="dropdown ">
                <a href="{{ route('company.index') }}" class="nav-link "><i
                        data-feather="monitor"></i><span>Company</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('employee.index') }}" class="nav-link"><i data-feather="user"></i><span>Employee</span></a>
            </li>

            
        </ul>
    </aside>
</div>
