<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a>
            </li>

            <li>
                <strong>
                    <p class="mt-1">
                        Welcome - {{ Auth::guard('admin')->user()->name }}
                    </p>
                </strong>                
            </li>
            
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
       <li>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            
            <button type="submit" class="btn btn-danger logout">Admin Logout</button>
        </form>
       </li>
        
        
    </ul>
</nav>
