<nav class="navbar navbar-default navbar-highlight {{ $navbar or "" }}">
<div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a class="navtext-0" href="{{ route('app::index') }}">
                Home
            </a></li>
            <li><a class="navtext-1" href="{{ route('app::news') }}">
                News
            </a></li>
            <li><a class="navtext-2" href="{{ route('app::about') }}">
                About Us
            </a></li>
            <li><a class="navtext-3" href="{{ route('app::faq') }}">
                FAQ
            </a></li>
        </ul>
    </div>
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <i class="fa fa-bars fa-fw"></i>
        </button>
    </div>
</div>
</nav>
