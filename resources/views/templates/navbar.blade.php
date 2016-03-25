<nav class="navbar navbar-default navbar-fixed-top">
    <a class="navbar-brand" href="{{ URL::to('/') }}">
        <img class="navbar-logo" src="{{ asset('images/logo.png') }}"/>
    </a>
    <div class="navbar-right navbar-text pull-right" data-toggle="dropdown" data-target=".navbar-dropdown">
        <span class="fa fa-bars"></span>
    </div>         
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('/') }}">Borneo Reefer</a></li>
        </ul>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown navbar-dropdown">
            <ul class="dropdown-menu">
                <li><a href="{{ URL::to('/') }}">
                    Home
                </a></li>
                <li><a href="{{ URL::to('/news') }}">
                    News
                </a></li>
                <li><a href="{{ URL::to('/about') }}">
                    About Us
                </a></li>
                <li><a href="{{ URL::to('/faq') }}">
                    FAQ
                </a></li>
            </ul>
        </li>
    </ul>
</nav>
