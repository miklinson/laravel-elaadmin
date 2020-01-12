<li class="menu-title">Icons</li><!-- /.menu-title -->

<li class="menu-item-has-children dropdown {{(strpos(request()->route()->getName(), 'icons') !== false) ? 'active' : '' }}">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="menu-icon fa fa-tasks" style="color: teal"></i>Icons</a>
    <ul class="sub-menu children dropdown-menu">
        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('icons.font-awesome') }}">Font Awesome</a></li>
        <li><i class="menu-icon ti-themify-logo"></i><a href="{{ route('icons.themefy-icons') }}">Themefy Icons</a></li>
    </ul>
</li>
<li class="{{(strpos(request()->route()->getName(), 'widgets') !== false) ? 'active' : '' }}">
    <a href="{{route('widgets')}}"> <i class="menu-icon ti-email" style="color: lime"></i>Widgets </a>
</li>
<li class="menu-item-has-children dropdown {{(strpos(request()->route()->getName(), 'charts') !== false) ? 'active' : '' }}">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="menu-icon fa fa-bar-chart" style="color: aqua"></i>Charts</a>
    <ul class="sub-menu children dropdown-menu">
        <li><i class="menu-icon fa fa-line-chart"></i><a href="{{route('charts.chart-js')}}">Chart JS</a></li>
        <li><i class="menu-icon fa fa-area-chart"></i><a href="{{route('charts.flot')}}">Flot Chart</a></li>
        <li><i class="menu-icon fa fa-pie-chart"></i><a href="{{route('charts.peity')}}">Peity Chart</a></li>
    </ul>
</li>

<li class="menu-item-has-children dropdown {{(strpos(request()->route()->getName(), 'maps') !== false) ? 'active' : '' }}">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="menu-icon fa fa-area-chart" style="color: purple"></i>Maps</a>
    <ul class="sub-menu children dropdown-menu">
        <li><i class="menu-icon fa fa-map-o"></i><a href="{{route('maps.google-map')}}">Google Maps</a></li>
        <li><i class="menu-icon fa fa-street-view"></i><a href="{{route('maps.vector-map')}}">Vector Maps</a></li>
    </ul>
</li>
