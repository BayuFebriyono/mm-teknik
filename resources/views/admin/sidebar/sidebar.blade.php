<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Admin</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="/category" wire:navigate>
                    <i class="fa-solid fa-layer-group"></i> <span class="align-middle">Kategori</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="/product" wire:navigate>
                    <i class="fa-solid fa-boxes-stacked"></i> <span class="align-middle">Product</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-in.html">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Offers</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Review</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" wire:click="logout">
                    <i class="fa-solid fa-door-open"></i> <span class="align-middle">Logout</span>
                </a>
            </li>



        </ul>

    </div>
</nav>
