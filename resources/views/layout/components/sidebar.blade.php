<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="/dashboard"><h1>Movies</h1></a>
                </div>

                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item">
                    <a href="/" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/movies" class="sidebar-link">
                        <i class="bi bi-film"></i>
                        <span>Movies</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/logout" class='sidebar-link'
                        onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>
                    <form id='logout-form' action="{{ route('logout') }}" method="post" style="display:none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
