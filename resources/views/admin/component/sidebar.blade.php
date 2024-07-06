<aside class="sidebar navbar navbar-expand-lg bg-dark d-flex flex-column gap-4 rounded mx-2 my-2">
    <h5>NadyaStore</h5>
    <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
        <ul class="navbar-nav gap-3 d-flex flex-column px-2">
            <li class="nav-item">
                <a href="{{ route('admin') }}" class="nav-link ">
                    <div class="d-flex gap-3">
                        <i class="fa-solid fa-table-columns"></i>
                        <P class="m-0 p-0">Dashboard</P>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('product') }}" class="nav-link">
                    <div class="d-flex gap-3">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <P class="m-0 p-0">Iventory</P>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('userManagement') }}" class="nav-link">
                    <div class="d-flex gap-3">
                        <i class="fa-solid fa-user"></i>
                        <P class="m-0 p-0">User Management</P>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('report') }}" class="nav-link">
                    <div class="d-flex gap-3">
                        <i class="fa-solid fa-file-lines"></i>
                        <P class="m-0 p-0">Repport</P>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <div class="d-flex gap-3">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <P class="m-0 p-0">Logout</P>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</aside>
