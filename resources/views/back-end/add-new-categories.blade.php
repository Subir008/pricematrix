@extends('back-end.index')

@section('title', 'Add New Categories')

<!-- Page Content Start -->
@section('main')
    <!-- New Product Category Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Category Information</h5>
                                </div>

                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Category Name">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Category
                                            Image</label>
                                        <div class="form-group col-sm-9">
                                                <div class="dropzone-wrapper">
                                                    <div class="dz-message needsclick">
                                                        <div>
                                                        <img src="../assets/svg/upload-cloud.svg"
                                                        class="img-fluid" alt="">
                                                            <!-- <i class="icon-cloud-up"></i> -->
                                                            <!-- <i class="fa-solid fa-cloud-arrow-up"></i> -->
                                                            <h6>Drop files here or click to upload.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-3 form-label-title">Select Category Icon</div>
                                        <div class="col-sm-9">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown">
                                                    Select Icon
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <img src="../assets/svg/vegetable.svg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <img src="../assets/svg/cup.svg"
                                                                class="blur-up lazyload" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <img src="../assets/svg/meats.svg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <img src="../assets/svg/breakfast.svg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <img src="../assets/svg/frozen.svg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <img src="../assets/svg/biscuit.svg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <img src="../assets/svg/grocery.svg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <img src="../assets/svg/drink.svg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <img src="../assets/svg/milk.svg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <img src="../assets/svg/pet.svg"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Category Add End -->
@endsection
<!-- Page Content End -->