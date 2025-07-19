@extends('back-end.index')

@section('title', 'Subcategory List')

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
                                <a href="{{ route('add-new-subcategories') }}"
                                    class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive category-table">
                            <div>
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Subcategory Image</th>
                                            <th>Subcategory Name</th>
                                            <th>Date</th>
                                            <th>Category Name</th>
                                            <th>Category Icon</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($data as $subcategory_data)
                                            @php
                                                $date = $subcategory_data->subcategory_date;
                                            @endphp
                                            <tr>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="/assets/subcategory_img/{{ $subcategory_data->subcategory_img }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>{{ $subcategory_data->subcategory_name }}</td>


                                                <td>{{$date}}</td>


                                                <td>
                                                    {{ $subcategory_data->category_name }}
                                                </td>

                                                <td>
                                                    <div class="category-icon">
                                                        <img src="/assets/svg/{{ $subcategory_data->category_icon }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#updateModal{{ $subcategory_data->category_id }}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#deleteModal{{ $subcategory_data->category_id }}">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <!-- Category Delete confirmation Modal Box Start -->
                                            <div class="modal fade theme-modal remove-coupon"
                                                id="deleteModal{{ $subcategory_data->category_id }}" aria-hidden="true"
                                                tabindex="-1">
                                                <form action="{{ route('deleteSubCategory') }}" method="post">
                                                    @csrf
                                                    {{ method_field('delete') }}
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header d-block text-center">
                                                                <h5 class="modal-title w-100" id="exampleModalLabel22">Are You
                                                                    Sure
                                                                    ?</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <i class="fas fa-times"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="remove-box">
                                                                    <input type="hidden" name="subcategory_id"
                                                                        value="{{ $subcategory_data->subcategory_id }}">
                                                                    <p>The permission for the use/group, preview is inherited
                                                                        from
                                                                        the object, object will create a
                                                                        new permission for this object</p>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-animation btn-md fw-bold"
                                                                    data-bs-dismiss="modal">No</button>
                                                                <button  type="submit"
                                                                    class="btn btn-animation btn-md fw-bold">Yes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                            <!-- Category Delete confirmation Modal Box End -->

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

    <!-- Toaster for success start-->
    @if (Session::has('success'))
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
    <!-- Toaster for success end-->

    <!-- Toaster for failure start-->
    @if (Session::has('failed'))
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div class="toast" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true"
                style="background-color: #da3837; color: white;">
                <div class="toast-header">
                    <small class="text-muted me-auto">Just Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <strong>{{ session('failed') }}</strong>
                </div>
            </div>
        </div>
    @endif
    <!-- Toaster for failure end-->

@endsection
<!-- Page Content End -->

<!-- Script Section Start -->
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            //    const dropdownItems = document.querySelectorAll('.dropdown-item');
            //     const dropdownButton = document.getElementById('dropdownMenuButton1');
            //     const dropdownMenu = document.querySelector('.dropdown-menu');
            //     const iconInput = document.getElementById('categoryIconInput');
            //     const iconName = document.getElementById('categoryIconName');

            const dropdownItems = document.querySelectorAll('.dropdown-item');
            const dropdownButtons = document.querySelector('#dropdownMenuButton1');
            const dropdownMenus = document.querySelectorAll('.dropdown-menu');
            const iconInputs = document.querySelectorAll('#categoryIconInput');
            const iconNames = document.querySelectorAll('#categoryIconName');


            dropdownItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();

                    const icon = this.getAttribute('data-icon');
                    const Name = this.getAttribute('data-name');
                    iconInputs.value = icon;
                    iconNames.value = Name;

                    // Update button text to show selection
                    dropdownButtons.textContent = Name;

                    // Close the dropdown
                    const dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(dropdownButtons);
                    dropdownInstance.hide();
                });
            });



            @if (session()->has('delete_success'))
                let deleteModalSuccess = new bootstrap.Modal(document.getElementById('deleteModalSuccess'));
                deleteModalSuccess.show();
            @endif
                });
    </script>
@endsection
<!-- Script Section End -->