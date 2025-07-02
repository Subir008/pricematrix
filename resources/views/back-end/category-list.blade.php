@extends('back-end.index')

@section('title', 'Category List')

<!-- Page Content Start -->
@section('main')
    <!-- Toaster for wrong credentials start-->
    @if (session('success'))
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div class="toast" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true"
                style="background-color: #0da487; color: white;">
                <div class="toast-header">
                    <small class="text-muted me-auto">Just Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <strong>{{ session('success') }}</strong>
                </div>
            </div>
        </div>
    @endif
    <!-- Toaster for wrong credentials end-->
    <!-- All User Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Category</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('add-new-categories') }}" class="align-items-center btn btn-theme d-flex">
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
                                            <!-- <th>Slug</th> -->
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($data as $category_data)
                                            @php
                                                $date = $category_data->category_date;
                                            @endphp
                                            <tr>
                                                <td>{{ $category_data->category_name }}</td>


                                                <td>{{$date}}</td>

                                                <td>
                                                    <div class="table-image">
                                                        <img src="/assets/category_img/{{ $category_data->category_img }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="category-icon">
                                                        <img src="/assets/svg/{{ $category_data->category_icon }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <!-- <td>buscuit</td> -->

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
                                                                data-bs-target="#deleteModal{{ $category_data->category_id }}">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            
                                            <!-- Category Delete confirmation Modal Box Start -->
                                            <div class="modal fade theme-modal remove-coupon"
                                                id="deleteModal{{ $category_data->category_id }}" aria-hidden="true"
                                                tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header d-block text-center">
                                                            <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure
                                                                ?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="remove-box">
                                                                <p>The permission for the use/group, preview is inherited from
                                                                    the object, object will create a
                                                                    new permission for this object</p>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-animation btn-md fw-bold"
                                                                data-bs-dismiss="modal">No</button>
                                                            <a href="{{ route('deleteCategory', ['id' => $category_data->category_id]) }}"
                                                                type="button" class="btn btn-animation btn-md fw-bold">Yes</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Delete Modal Box End -->

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
    <!-- All User Table Ends-->
    
    <!-- Data deletion success modal start -->
    <div class="modal fade theme-modal remove-coupon" id="deleteModalSuccess" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <div class="wrapper">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                        </div>
                        <h4 class="text-content">{{session('delete_success')}}</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Data deletion success modal end -->

@endsection
<!-- Page Content End -->

<!-- Script Section Start -->
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if (session()->has('delete_success'))
        let deleteModalSuccess = new bootstrap.Modal(document.getElementById('deleteModalSuccess'));
        deleteModalSuccess.show();
        @endif
    });
    </script>
@endsection
<!-- Script Section End -->