<ul class="nav navbar-nav">
    <li class="@if(Route::currentRouteName() == 'browse.top.newest')active @endif"><a href="{{ route('browse.top.newest') }}">Newest</a></li>
    <li class="@if(Route::currentRouteName() == 'browse.top.downloads')active @endif"><a href="{{ route('browse.top.downloads') }}">Top Downloads</a></li>
    <li class="@if(Route::currentRouteName() == 'browse.top.played')active @endif"><a href="{{ route('browse.top.played') }}">Top Played</a></li>
    <li class="@if(Route::currentRouteName() == 'search' || Route::currentRouteName() == 'browse.user' || Route::currentRouteName() == 'browse.detail' )active @endif"><a href="{{ route('search') }}">Search</a></li>
    <li class="navbar-text">|</li>
    <li><a href="https://scoresaber.com/">ScoreSaber</a></li>
    <li><a href="https://bsaber.com/">BeastSaber</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modding<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="https://github.com/lolPants/modsaber-installer/releases">ModSaber Installer</a></li>
            <li><a href="https://discord.gg/beatsabermods">Modding Discord</a></li>
            <li role="separator" class="divider"></li>
        </ul>
    </li>
</ul>
<ul class="nav navbar-nav navbar-right">
    @auth
        <li class="@if(Route::currentRouteName() == 'upload.form')active @endif"><a href="{{ route('upload.form') }}">Upload</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->name }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('browse.user',['id' => auth()->id()]) }}">My Songs</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('profile') }}">Profile</a></li>
                <li><a href="{{ route('profile.token') }}">Access Tokens</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </li>

    @else
        <li class="@if(Route::currentRouteName() == 'login.form' || Route::currentRouteName() == 'register.form'
        || Route::currentRouteName() == 'password.reset.request.form' || Route::currentRouteName() == 'password.reset.complete.form')active @endif"><a
                    href="{{ route('login.form') }}">Login / Register</a></li>
    @endauth

</ul>
