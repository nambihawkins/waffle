<!--navigation bar-->
<nav class="navbar navbar-default transparent navbar-static-top" role="navigation" id="navbar-main">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><font color="#D87E1B">Waffle</font></a> <!-- onmouseover  = "this.style.color = '#F3D08F'" onmouseout  = "this.style.color = '#fff'" is not working!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        </div>
        <div class="collapse navbar-collapse" id="navCollapse">
            <ul class="nav navbar-nav navbar-right nav-pills">
                <li>{{ link_to_route('about', 'About Us') }}</li>
                <li>{{ link_to_route('support', 'Support') }}</li>
                @if(\Auth::check())
                <li>{{ link_to_route('home', 'My Profile') }}</li>
                <li>{{ link_to_route('logout', 'Logout') }}</li>
                @else
                <li>{{ link_to_route('login', 'Login') }}</li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!--end nav bar-->
