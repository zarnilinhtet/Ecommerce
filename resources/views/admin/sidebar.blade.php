<nav class="sidebar sidebar-offcanvas">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html" style="text-decoration: none;color:White;">
            Admin Dashboard</a>
        <a class="sidebar-brand brand-logo-mini text-white" href="index.html" style="font-size: 14px;">Admin</a>
    </div>
    <ul class="nav">

        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/view_product') }}">Add Products</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/show_product') }}">Show Product</a>
                    </li>

        </li>

    </ul>
    <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('view_category') }}">
            <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Category</span>
        </a>
    </li>
</nav>
