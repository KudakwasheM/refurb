@extends('layout.app-admin')

@section('content')
    <!-- partial -->
    @include('partials.admin._navbar')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger">
                <i class="typcn typcn-cog-outline"></i>
            </div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close typcn typcn-times"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>
                    Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                    Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('partials.admin._sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">
                                            Total Expenses
                                        </p>
                                        <h1 class="mb-0">8742</h1>
                                    </div>
                                    <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                                </div>
                                <canvas id="expense-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">
                                            Total Budget
                                        </p>
                                        <h1 class="mb-0">47,840</h1>
                                    </div>
                                    <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                                </div>
                                <canvas id="budget-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">
                                            Total Balance
                                        </p>
                                        <h1 class="mb-0">$7,243</h1>
                                    </div>
                                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                                </div>
                                <canvas id="balance-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 grid-margin stretch-card flex-column">
                        <h5 class="mb-2 text-titlecase mb-4">Status statistics</h5>
                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="mb-0 text-muted">Transactions</p>
                                            <p class="mb-0 text-muted">+1.37%</p>
                                        </div>
                                        <h4>1352</h4>
                                        <canvas id="transactions-chart" class="mt-auto" height="65"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <p class="mb-2 text-muted">Sales</p>
                                                <h6 class="mb-0">563</h6>
                                            </div>
                                            <div>
                                                <p class="mb-2 text-muted">Orders</p>
                                                <h6 class="mb-0">720</h6>
                                            </div>
                                            <div>
                                                <p class="mb-2 text-muted">Revenue</p>
                                                <h6 class="mb-0">5900</h6>
                                            </div>
                                        </div>
                                        <canvas id="sales-chart-a" class="mt-auto" height="65"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row h-100">
                            <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <p class="text-muted">Sales Analytics</p>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h3 class="mb-">27632</h3>
                                            <h3 class="mb-">78%</h3>
                                        </div>
                                        <canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-6 d-flex flex-column justify-content-between">
                                                <p class="text-muted">CPU</p>
                                                <h4>55%</h4>
                                                <canvas id="cpu-chart" class="mt-auto"></canvas>
                                            </div>
                                            <div class="col-6 d-flex flex-column justify-content-between">
                                                <p class="text-muted">Memory</p>
                                                <h4>123,65</h4>
                                                <canvas id="memory-chart" class="mt-auto"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 grid-margin stretch-card flex-column">
                        <h5 class="mb-2 text-titlecase mb-4">Income statistics</h5>
                        <div class="row h-100">
                            <div class="col-md-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                            <div>
                                                <p class="mb-3">Monthly Increase</p>
                                                <h3>67842</h3>
                                            </div>
                                            <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                                        </div>
                                        <canvas id="income-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <table class="table table users-table">
                                    <thead>
                                        <tr>
                                            <th class="ml-5">Folio</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>#D1</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role->name }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a type="button" href="/users/show/{{ $user->id }}"
                                                            class="btn btn-primary btn-sm btn-icon-text mr-3">
                                                            Show
                                                            <i class="typcn typcn-edit btn-icon-append"></i>
                                                        </a>
                                                        <a type="button" href="/users/edit/{{ $user->id }}"
                                                            class="btn btn-success btn-sm btn-icon-text mr-3">
                                                            Edit
                                                            <i class="typcn typcn-edit btn-icon-append"></i>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm btn-icon-text">
                                                            Deactivate
                                                            <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial -->
            @include('partials.admin._footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
@endsection
