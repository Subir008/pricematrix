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
                                            <th>Category Name</th>
                                            <th>Date</th>
                                            <th>Category Image</th>
                                            <th>Category Icon</th>
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
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#updateModal{{ $category_data->category_id }}">
                                                                <i class="ri-pencil-line" ></i>
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
                                            <!-- Category Delete confirmation Modal Box End -->

                                            <!-- Category Update Modal Box Start -->
                                            <div class="modal fade theme-modal remove-coupon"
                                                id="updateModal{{ $category_data->category_id }}" aria-hidden="true"
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
                                                        <form action="{{ route('updateCategory') }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                             <div class="modal-body">
                                                                <div class="remove-box">
                                                                    <input type="hidden" name="category_id" value="{{ $category_data->category_id }}">
                                                                    <div class="theme-form theme-form-2 mega-form">
                                                                        <div class="mb-3 row align-items-center">
                                                                            <label class="form-label-title col-sm-12 mb-2">Category Name</label>
                                                                            <div class="col-sm-12">
                                                                                <input class="form-control" type="text" name="category_name"
                                                                                    placeholder="Category Name" value="{{ $category_data->category_name }}" >
                                                                                @error('category_name')
                                                                                    <label class="text-danger ">
                                                                                        {{ $message }}
                                                                                    </label>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-4 row align-items-center">
                                                                            <label class="col-sm-12 col-form-label form-label-title mb-0"><u>
                                                                                Category Image
                                                                            </u></label>
                                                                                <label for="" class="col-sm-12 col-form-label form-label-title">Old Image</label>
                                                                                <img src="/assets/category_img/{{ $category_data->category_img }}" class="img-fluid mb-3" alt="">
                                                                                <label for="" class="col-sm-12 col-form-label form-label-title">Select New Image</label>
                                                                                <div class="form-group col-sm-12">
                                                                                @php
                                                                                $file_allowed =  '.jpg,.JPG,.jpeg,.JPEG,.png,.PNG,.gif,.webp,.tiff,.tif';
                                                                                @endphp
                                                                                <input type="file" class="form-control form-choose" name="category_image"
                                                                                    value="{{ old('category_image') ?? '' }}" accept="{{ $file_allowed }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-4 row align-items-center">
                                                                        <div class="col-sm-12 form-label-title">Select Category Icon</div>
                                                                        <input type="hidden" name="category_icon" id="categoryIconInput"
                                                                            value="{{ $category_data->category_icon }}">
                                                                        <input type="hidden" name="category_icon_name" id="categoryIconName"
                                                                            value="{{ $category_data->category_icon_name }}">
                                                                        
                                                                        <div class="col-sm-12">
                                                                            <div class="dropdown icon-dropdown">
                                                                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                                                    data-bs-toggle="dropdown" name="icon">
                                                                                    {{ $category_data->category_icon_name }}
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="vegetable.svg"
                                                                                            data-name="Vegetables">
                                                                                            <img src="../assets/svg/vegetable.svg" class="img-fluid" alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="cup.svg"
                                                                                            data-name="Refreshment">
                                                                                            <img src="../assets/svg/cup.svg" class="blur-up lazyload"
                                                                                                alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="meats.svg"
                                                                                            data-name="Meats">
                                                                                            <img src="../assets/svg/meats.svg" class="img-fluid" alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="breakfast.svg"
                                                                                            data-name="Breakfast">
                                                                                            <img src="../assets/svg/breakfast.svg" class="img-fluid" alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="frozen.svg"
                                                                                            data-name="Frozen">
                                                                                            <img src="../assets/svg/frozen.svg" class="img-fluid" alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="biscuit.svg"
                                                                                            data-name="Biscuit">
                                                                                            <img src="../assets/svg/biscuit.svg" class="img-fluid" alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="grocery.svg"
                                                                                            data-name="Grocery">
                                                                                            <img src="../assets/svg/grocery.svg" class="img-fluid" alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="drink.svg"
                                                                                            data-name="Drink">
                                                                                            <img src="../assets/svg/drink.svg" class="img-fluid" alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="milk.svg"
                                                                                            data-name="Milk">
                                                                                            <img src="../assets/svg/milk.svg" class="img-fluid" alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="pet.svg"
                                                                                            data-name="Pet">
                                                                                            <img src="../assets/svg/pet.svg" class="img-fluid" alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="#" data-icon="others.svg"
                                                                                            data-name="Others">
                                                                                            <img src="../assets/svg/others.svg" class="img-fluid" alt="">
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-animation btn-md fw-bold"
                                                                data-bs-dismiss="modal">No</button>
                                                                <button 
                                                                type="submit" class="btn btn-animation btn-md fw-bold">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Category Update Modal Box End -->

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
                    iconNames.value = Name ;

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