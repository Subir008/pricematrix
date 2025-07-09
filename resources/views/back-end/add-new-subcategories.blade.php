@extends('back-end.index')

@section('title', 'Add New Sub Categories')

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
                                    <h5>Sub Category Information</h5>
                                </div>
                                <form action="{{ route('addNewCategory') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" name="category_name"
                                                    placeholder="Category Name" value="{{ old('category_name') ?? '' }}" >
                                                @error('category_name')
                                                    <label class="text-danger ">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Category
                                                Image</label>
                                            <div class="form-group col-sm-9">
                                                @php
                                                $file_allowed =  '.jpg,.JPG,.jpeg,.JPEG,.png,.PNG,.gif,.webp,.tiff,.tif';
                                                @endphp
                                                <input type="file" class="form-control form-choose" name="category_image"
                                                    value="{{ old('category_image') ?? '' }}" accept="{{ $file_allowed }}">
                                                @error('category_image')
                                                    <label class="text-danger ">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-3 form-label-title">Select Category Icon</div>
                                        <input type="hidden" name="category_icon" id="categoryIconInput"
                                            value="{{ old('category_icon') }}">
                                        <input type="hidden" name="category_icon_name" id="categoryIconName"
                                            value="">
                                        <div class="col-sm-9">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown" name="icon">
                                                    Select Icon
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
                                            @error('category_icon')
                                                <label for="" class="text-danger">
                                                    {{ $message }}
                                                </label>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <!-- <div class="col-12 "> -->
                                        <button class="btn btn-primary btn-m" type="submit">Submit</button>
                                        <!-- </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- New Product Category Add End -->

     <!-- Toaster for Category Added Success start-->
    @if (session('category_add_success'))
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div class="toast" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true"
                style="background-color: #0da487; color: white;">
                <div class="toast-header">
                    <small class="text-muted me-auto">Success</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <strong>{{ session('category_add_success') }}</strong>
                </div>
            </div>
        </div>
    @endif
    <!-- Toaster for Category Added Success end-->
     
     <!-- Toaster for Category Added Failure start-->
    @if (session('category_add_failed'))
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div class="toast" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true"
                style="background-color: #da3837; color: white;">
                <div class="toast-header">
                    <small class="text-muted me-auto">Failed</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <strong>{{ session('category_add_failed') }}</strong>
                </div>
            </div>
        </div>
    @endif
    <!-- Toaster for Category Added Failure end -->

@endsection


@section('script')
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            const dropdownButton = document.getElementById('dropdownMenuButton1');
            const dropdownMenu = document.querySelector('.dropdown-menu');
            const iconInput = document.getElementById('categoryIconInput');
            const iconName = document.getElementById('categoryIconName');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();

                    const icon = this.getAttribute('data-icon');
                    const Name = this.getAttribute('data-name');
                    iconInput.value = icon;
                    iconName.value = Name ;


                    // Update button text to show selection
                    dropdownButton.textContent = Name;

                    // Close the dropdown
                    const dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(dropdownButton);
                    dropdownInstance.hide();
                });
            });
        });

    </script>
@endsection
<!-- Page Content End -->