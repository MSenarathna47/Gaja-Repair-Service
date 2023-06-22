<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('view.appointment') }}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">appointment</span></a></li>
                {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Manager</span></a></li> --}}
                <li class="sidebar-item selected"> <a class="sidebar-link has-arrow waves-effect waves-dark active" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Managers </span></a>
                    <ul aria-expanded="false" class="collapse first-level in">
                        <li class="sidebar-item active"><a href="{{  route('add.manager')  }}" class="sidebar-link active"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Add Manager</span></a></li>
                        <li class="sidebar-item"><a href="{{  route('view.manager')  }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> View Manager </span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
