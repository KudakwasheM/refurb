<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="typcn typcn-home-outline menu-icon"></i>
                <span class="menu-title">Dashboard</span>
                {{-- <div class="badge badge-danger">new</div> --}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-device-laptop menu-icon"></i>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/products/create">Add New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">All Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products/available">Available Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products/sold">Sold Products</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Transactions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">Add New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">All Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">Approved Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">Pending Transactions</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="typcn typcn-user-outline menu-icon"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/login.html">
                            Add New
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/register.html">
                            All Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/register.html">
                            Admin User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/register.html">
                            Customers
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="typcn typcn-cog-outline menu-icon"></i>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-404.html">
                            Rates
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-500.html">
                            Prices
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-500.html">
                            Years
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
