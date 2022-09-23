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
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add New Product</h4>
                                <form class="form-sample" method="post" action="/products" enctype="multipart/form-data">
                                    @csrf
                                    <p class="card-description">
                                        Product Info
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Brand</label>
                                                <select class=" form-control js-example-basic-single w-100" name="brand">
                                                    <option value="HP">HP</option>
                                                    <option value="Lenovo">Lenovo</option>
                                                    <option value="Toshiba">Toshiba</option>
                                                    <option value="Gigabyte">Gigabyte</option>
                                                    <option value="DELL">DELL</option>
                                                    <option value="Windows">Windows</option>
                                                    <option value="Apple">Apple</option>
                                                </select>
                                                @error('brand')
                                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Product Name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="name" />
                                                    @error('name')
                                                        <p class="text-red-500 mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Drive Type</label>
                                                <select class=" form-control js-example-basic-single w-100" name="drive">
                                                    <option value="HDD">HDD</option>
                                                    <option value="SSD">SSD</option>
                                                </select>
                                                @error('drive')
                                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Processor</label>
                                                <select class=" form-control js-example-basic-single w-100"
                                                    name="processor">
                                                    <option value="Core i3">Core i3</option>
                                                    <option value="Core i5">Core i5</option>
                                                    <option value="Core i7">Core i7</option>
                                                    <option value="Core i9">Core i9</option>
                                                    <option value="Pentium">Pentium</option>
                                                </select>
                                                @error('processor')
                                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Storage</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="storage" />
                                                    @error('storage')
                                                        <p class="text-red-500 mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">RAM</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="ram" />
                                                    @error('ram')
                                                        <p class="mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Screen Size</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="screen" />
                                                    @error('screen')
                                                        <p class="text-red-500 mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Price (USD)</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="price" />
                                                    @error('price')
                                                        <p class="text-red-500 mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Color</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="color" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Quantity (Units)</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="quantity" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Weight</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="weight" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Year of Manufacture</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="y_o_m" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Image</label>
                                                <input type="file" name="images" class="file-upload-default" />
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled
                                                        placeholder="Upload Image" />
                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-primary" type="button">
                                                            Upload
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Additional Info</label>
                                                <select class="js-example-basic-multiple form-control" multiple="multiple"
                                                    name="additionals">
                                                    <option value="Laptop Bag">Laptop Bag</option>
                                                    <option value="Video Card">Video Card</option>
                                                    <option value="USB">USB</option>
                                                    <option value="External ROM">External ROM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="col-form-label">Textarea</label>
                                                <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">
                                        Submit
                                    </button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.admin._footer')
        </div>
    </div>
@endsection
