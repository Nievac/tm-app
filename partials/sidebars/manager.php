<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Task Management</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item <?= $_SERVER['REQUEST_URI'] == '/tm-app/manager/' ? 'active' : '' ?>">
                <a class="sidebar-link" href="/tm-app/manager/">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header">
                Task
            </li>

            <li class="sidebar-item <?= $_SERVER['REQUEST_URI'] == '/tm-app/manager/tasks' ? 'active' : '' ?>">
                <a class="sidebar-link" href="/tm-app/manager/tasks">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Manage Tasks</span>
                </a>
            </li>

            <li class="sidebar-item <?= $_SERVER['REQUEST_URI'] == '/tm-app/manager/tasks/create.php' ? 'active' : '' ?>">
                <a class="sidebar-link" href="/tm-app/manager/tasks/create.php">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create Task</span>
                </a>
            </li>

            <li class="sidebar-header">
                User
            </li>

            <li class="sidebar-item <?= $_SERVER['REQUEST_URI'] == '/tm-app/manager/users' ? 'active' : '' ?>">
                <a class="sidebar-link" href="/tm-app/manager/users">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Manage Users</span>
                </a>
            </li>

            <li class="sidebar-item <?= $_SERVER['REQUEST_URI'] == '/tm-app/manager/users/create.php' ? 'active' : '' ?>">
                <a class="sidebar-link" href="/tm-app/manager/users/create.php">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create User</span>
                </a>
            </li>
        </ul>
    </div>
</nav>