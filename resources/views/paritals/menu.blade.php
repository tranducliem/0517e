<!-- side-menu -->
<ul class="nav" id="side-menu">
    <li>
        <!-- user image section-->
        <div class="user-section">
            <div class="user-section-inner">
                <img src="{{ asset('img/user.jpg') }}" alt="">
            </div>
            <div class="user-info">
                <div>Jonny <strong>Deen</strong></div>
                <div class="user-text-online">
                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                </div>
            </div>
        </div>
        <!--end user image section-->
    </li>
    <li class="sidebar-search">
        <!-- search section-->
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
        <!--end search section-->
    </li>
    <li class="selected">
        <a href="{{ url('admin') }}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
    </li>
    <li>
        <a href="{{ url('admin/user') }}"><i class="fa fa-camera-retro fa-lg"></i>User Manager</a>
    </li>
    <li>
        <a href="tables.html"><i class="fa fa-table fa-fw"></i>Tables</a>
    </li>
    <li>
        <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Forms</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="panels-wells.html">Panels and Wells</a>
            </li>
            <li>
                <a href="buttons.html">Buttons</a>
            </li>
            <li>
                <a href="notifications.html">Notifications</a>
            </li>
            <li>
                <a href="typography.html">Typography</a>
            </li>
            <li>
                <a href="grid.html">Grid</a>
            </li>
        </ul>
        <!-- second-level-items -->
    </li>
    <li>
        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span
                    class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a href="#">Third Level <span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                </ul>
                <!-- third-level-items -->
            </li>
        </ul>
        <!-- second-level-items -->
    </li>
    <li>
        <a href="#"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="blank.html">Blank Page</a>
            </li>
            <li>
                <a href="login.html">Login Page</a>
            </li>
        </ul>
        <!-- second-level-items -->
    </li>
</ul>
<!-- end side-menu -->