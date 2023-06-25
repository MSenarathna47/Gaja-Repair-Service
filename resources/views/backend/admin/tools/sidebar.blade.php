<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Appointments</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.view.appointment') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">New Appointments</span></a></li>
                        <li class="sidebar-item"><a href="{{ route('view.request.appointment') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Requested Appointment</span></a></li>
                        <li class="sidebar-item"><a href="{{ route('view.approved.appointment') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Approved Appointment</span></a></li>
                        <li class="sidebar-item"><a href="{{ route('view.mailed.appointment') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Mailed Appointment</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item "> <a class="sidebar-link has-arrow waves-effect waves-dark active" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Managers</span></a>
                    <ul aria-expanded="false" class="collapse first-level in">
                        <li class="sidebar-item"><a href="{{  route('add.manager')  }}" class="sidebar-link active"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Add Manager</span></a></li>
                        <li class="sidebar-item"><a href="{{  route('view.manager')  }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> View Manager </span></a></li>
                    </ul>
                </li>               
                <li class="sidebar-item "> <a class="sidebar-link has-arrow waves-effect waves-dark active" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Branches</span></a>
                    <ul aria-expanded="false" class="collapse first-level in">
                        <li class="sidebar-item active"><a href="{{  route('add.branch')  }}" class="sidebar-link active"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Add Branch</span></a></li>
                        <li class="sidebar-item"><a href="{{  route('view.branch')  }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> View Branch </span></a></li>
                    </ul>
                </li> 
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
