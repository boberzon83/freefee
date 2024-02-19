<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @can('dashboard1')
                <li>
                    <a href="/dashboard1" key="t-default">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                @endcan
                @can('dashboard2')
                <li>
                    <a href="/dashboard2" key="t-default">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                @endcan
                @can('admin')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-lock-alt'></i>
                        <span key="t-admin">SuperAdmin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('company.index') }}" key="t-users">Empresas</a></li>
                        <li><a href="{{ route('user.index') }}" key="t-users">Usuarios</a></li>
                    </ul>
                </li>
                @endcan
                @can('company')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-lock-alt'></i>
                        <span key="t-admin">Administración</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('user.index') }}" key="t-users">Usuarios</a></li>
                    </ul>
                </li>
                @endcan
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-folder'></i>
                        <span key="t-global">General</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-catalogs">Inmuebles</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
