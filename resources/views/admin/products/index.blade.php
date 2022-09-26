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

        @include('partials.admin._sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Products</h4>
                                {{-- <p class="card-description">
                                    Add class <code>.table</code>
                                </p> --}}
                                <div class="table-responsive pt-3">
                                    <table class="table table users-table">
                                        <thead>
                                            <tr>
                                                <th class="ml-5">Folio</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Brand</th>
                                                <th>Processor</th>
                                                <th>Storage</th>
                                                <th>Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>#D1</td>
                                                    <td><img src="{{ asset('storage/' . $product->images) }}"
                                                            alt="">
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->brand }}</td>
                                                    <td>{{ $product->processor }}</td>
                                                    <td>{{ $product->storage }}</td>
                                                    <td>{{ $product->price }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a type="button" href="/products/show/{{ $product->id }}"
                                                                class="btn btn-primary btn-sm btn-icon-text mr-3">
                                                                Show
                                                                <i class="typcn typcn-edit btn-icon-append"></i>
                                                            </a>
                                                            <a type="button" href="/products/edit/{{ $product->id }}"
                                                                class="btn btn-success btn-sm btn-icon-text mr-3">
                                                                Edit
                                                                <i class="typcn typcn-edit btn-icon-append"></i>
                                                            </a>
                                                            {{-- <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                            Deactivate
                                                            <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                        </button> --}}
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
            </div>
        </div>
    </div>
    @include('partials.admin._footer')
@endsection
