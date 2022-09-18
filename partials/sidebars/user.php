<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Task Management</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item <?= $_SERVER['REQUEST_URI'] == '/tm-app/user/' ? 'active' : '' ?>">
                <a class="sidebar-link" href="/tm-app/user/">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header">
                Task
            </li>

            <li class="sidebar-item <?= $_SERVER['REQUEST_URI'] == '/tm-app/user/my-open-tasks.php' ? 'active' : '' ?>">
                <a class="sidebar-link" href="/tm-app/user/my-open-tasks.php">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">My Open Tasks</span>
                </a>
            </li>

            <li class="sidebar-item <?= $_SERVER['REQUEST_URI'] == '/tm-app/user/new-task.php' ? 'active' : '' ?>">
                <a class="sidebar-link" href="/tm-app/manager/new-task.php">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">New Task</span>
                </a>
            </li>

           
        </ul>
    </div>
</nav>