@extends('back-end.index')

@section('title' , 'Category List')

<!-- Page Content Start -->
@section('main')
    <!-- All User Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Category</h5>
                            <form class="d-inline-flex">
                                <a href="add-new-category.html" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive category-table">
                            <div>
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Date</th>
                                            <th>Product Image</th>
                                            <th>Icon</th>
                                            <th>Slug</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Aata Buscuit</td>

                                            <td>26-12-2021</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="assets/images/product/1.png" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>buscuit</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Cold Brew Coffee</td>

                                            <td>21-05-2022</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="assets/images/product/2.png" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/cup.svg"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>coffee</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All User Table Ends-->
@endsection
<!-- Page Content End -->