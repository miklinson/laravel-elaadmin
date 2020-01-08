<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('home') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>

                @include('sidebar.ui-elements')

                @include('sidebar.icons')

                @include('sidebar.extras')

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
