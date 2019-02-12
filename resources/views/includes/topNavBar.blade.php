<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?=$activePage=="home"?"active":""?>">
                <a class="nav-link" href="{{ URL::to("/") }}">Home</a>
            </li>
            <li class="nav-item <?=$activePage=="about"?"active":""?>">
                <a class="nav-link" href="{{ URL::to("/about") }}">About</a>
            </li>
            <li class="nav-item <?=$activePage=="contact"?"active":""?>">
                <a class="nav-link" href="{{ URL::to("/contact") }}">Contact</a>
            </li>
            <li class="nav-item <?=$activePage=="shares"?"active":""?>">
                    <a class="nav-link" href="{{ URL::to("/shares") }}">Shares</a>
            </li>
        </ul>      
    </div>
</nav>