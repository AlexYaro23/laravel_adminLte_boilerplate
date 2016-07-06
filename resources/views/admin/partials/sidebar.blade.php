<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('admin_files/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('admin.layout.online') }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('admin.layout.aside.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>{{ trans('admin.layout.aside.pages') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>{{ trans('admin.layout.aside.galleries') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Photo 1</a></li>
                    <li><a href="#">Photo 2</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>