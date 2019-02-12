<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">    
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {!! !empty($currentPage) && $currentPage=='home_page' ? 'active' : '' !!}">
          <a class="nav-link" href="{{ URL::to("/") }}">Home </a>
        </li>
        <li class="nav-item {!! !empty($currentPage) && $currentPage=='about_page' ? 'active' : '' !!}">
          <a class="nav-link" href="{{ URL::to("/about") }}">About</a>
        </li>
        <li class="nav-item {!! !empty($currentPage) && $currentPage=='contact_page' ? 'active' : '' !!}">
            <a class="nav-link" href="{{ URL::to("/contact") }}">Contact</a>
        </li>
        <li class="nav-item {!! !empty($currentPage) && $currentPage=='share_page' ? 'active' : '' !!}">
            <a class="nav-link" href="{{ URL::to("/share") }}">Share</a>
        </li>
      </ul>      
    </div>
</nav>