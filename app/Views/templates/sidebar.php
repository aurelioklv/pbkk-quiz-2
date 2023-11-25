<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-book-reader"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ToBu</div>
    </a>


    <!-- If an Admin -->
    <?php if (in_groups('admin')): ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User Management
            Management
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin') ?>">
                <a class="nav-link" href="<?= base_url('admin/user') ?>">
                    <i class="fas fa-users"></i>
                    <span>User List</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Book Management
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/buku') ?>">

                <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/book') ?>">
                <i class="fas fa-book"></i>
                <span>Book List</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Transaction Management
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/transaction') ?>">
                <i class="far fa-credit-card"></i>
                <span>Transaction List</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Profile
    </div>

    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user') ?>">
            <i class="fas fa-user"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - Edit Profile -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-user-edit"></i>
            <span>Edit Profile</span></a>
    </li>

    <?php if (in_groups('user')): ?> <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Book
        </div>

        <!-- Nav Item - Book Catalogue -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/catalogue') ?>">
                <i class="fas fa-book"></i>
                <span>Catalogue</span></a>
        </li>

        <!-- Nav Item - Shopping Cart -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/cart') ?>">
                <i class="fas fa-shopping-cart"></i>
                <span>Shopping Cart</span></a>
        </li>

        <!-- Nav Item - Users Transactions -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/transaction') ?>">
                <i class="fas fa-credit-card"></i>
                <span>Transaction</span></a>
        </li>
    <?php endif ?>

    ~ <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout') ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>