@extends('back-end.index')

<!-- Page title -->
@section('title' , 'Add New Product')

<!-- Page Content Start -->
@section('main')

    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Product Name">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Product
                                            Type</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option disabled>Static Menu</option>
                                                <option>Simple</option>
                                                <option>Classified</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Category</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option disabled>Category Menu</option>
                                                <option>Electronics</option>
                                                <option>TV & Appliances</option>
                                                <option>Home & Furniture</option>
                                                <option>Another</option>
                                                <option>Baby & Kids</option>
                                                <option>Health, Beauty & Perfumes</option>
                                                <option>Uncategorized</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Subcategory</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option disabled>Subcategory Menu</option>
                                                <option>Ethnic Wear</option>
                                                <option>Ethnic Bottoms</option>
                                                <option>Women Western Wear</option>
                                                <option>Sandels</option>
                                                <option>Shoes</option>
                                                <option>Beauty & Grooming</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Brand</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100">
                                                <option disabled>Brand Menu</option>
                                                <option value="puma">Puma</option>
                                                <option value="hrx">HRX</option>
                                                <option value="roadster">Roadster</option>
                                                <option value="zara">Zara</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Unit</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100">
                                                <option disabled>Unit Menu</option>
                                                <option>Kilogram</option>
                                                <option>Pieces</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Tags</label>
                                        <div class="col-sm-9">
                                            <div class="bs-example">
                                                <input type="text" class="form-control" placeholder="Type tag & hit enter"
                                                    id="#inputTag" data-role="tagsinput">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Exchangeable</label>
                                        <div class="col-sm-9">
                                            <label class="switch">
                                                <input type="checkbox"><span class="switch-state"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Refundable</label>
                                        <div class="col-sm-9">
                                            <label class="switch">
                                                <input type="checkbox" checked=""><span class="switch-state"></span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Description</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <label class="form-label-title col-sm-3 mb-0">Product
                                                    Description</label>
                                                <div class="col-sm-9">
                                                    <div id="editor"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Images</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Images</label>
                                        <div class="col-sm-9">
                                            <input class="form-control form-choose" type="file" id="formFile" multiple>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Thumbnail
                                            Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control form-choose" type="file" id="formFileMultiple1"
                                                multiple>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product variations</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Option
                                            Name</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option>Color</option>
                                                <option>Size</option>
                                                <option>Material</option>
                                                <option>Style</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Option
                                            Value</label>
                                        <div class="col-sm-9">
                                            <div class="bs-example">
                                                <input type="text" class="form-control" placeholder="Type tag & hit enter"
                                                    id="#inputTag" data-role="tagsinput">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <a href="#" class="add-option"><i class="ri-add-line me-2"></i> Add Another
                                    Option</a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Price</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 form-label-title">price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 form-label-title">Compare at
                                            price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 form-label-title">Cost per item</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="number" placeholder="0">
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Margin:</label>
                                            <span>25%</span>
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Profit:</label>
                                            <span>$5</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

@endsection
<!-- Page Content End -->