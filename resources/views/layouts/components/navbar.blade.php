<nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
            <img src="/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-middle">
            <span class="fs-6">Jambi University</span>
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active align-middle fw-bold fs-5" aria-current="page">{{$current}}</a>
            </li>
        </ul>
        <form class="d-flex my-auto" role="search">
            <input class="form-control me-2 nav-search" type="search" placeholder="Type to search" aria-label="Search">
        </form>
        <div class="flex-shrink-0 dropdown border p-1 rounded">
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                <span class="align-middle fs-6 ps-2">USERNAME</span>
            </a>
            <ul class="dropdown-menu text-small shadow dropdown-menu-end">
                <li><a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-gear" aria-hidden="true"></i> Settings</a></li>
                <li><a class="dropdown-item" href="/reported"><i class="fa fa-flag" aria-hidden="true"></i> Manage posts</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item text-danger" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</a></li>
            </ul>
        </div>
    </div>
</nav>