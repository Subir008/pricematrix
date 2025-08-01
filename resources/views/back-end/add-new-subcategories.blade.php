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
                                    <h5>Subcategory Information</h5>
                                </div>
                                <form action="{{ route('addNewSubCategory') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Subcategory Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" name="subcategory_name"
                                                    placeholder="Subcategory Name"
                                                    value="{{ old('subcategory_name') ?? '' }}">
                                                @error('subcategory_name')
                                                    <label class="text-danger ">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Subcategory
                                                Image</label>
                                            <div class="form-group col-sm-9">
                                                @php
                                                    $file_allowed = '.jpg,.JPG,.jpeg,.JPEG,.png,.PNG,.gif,.webp,.tiff,.tif';
                                                @endphp
                                                <input type="file" class="form-control form-choose" name="subcategory_image"
                                                    value="{{ old('subcategory_image') ?? '' }}"
                                                    accept="{{ $file_allowed }}">
                                                @error('subcategory_image')
                                                    <label class="text-danger ">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Category Name
                                                </label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100" name="category_name">
                                                        <option disabled selected>Choose Category</option>
                                                        @foreach ($data as $product)
                                                        <option value="{{ $product['category_id'] }}_{{ $product['category_hidden_name'] }}" >
                                                            {{ $product['category_name']}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category_name')
                                                    <label for="" class="text-danger">
                                                        {{ $message }}
                                                    </label>
                                                @enderror
                                            </div>
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
    @if (session('subcategory_add_success'))
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div class="toast" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true"
                style="background-color: #0da487; color: white;">
                <div class="toast-header">
                    <small class="text-muted me-auto">Success</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <strong>{{ session('subcategory_add_success') }}</strong>
                </div>
            </div>
        </div>
    @endif
    <!-- Toaster for Category Added Success end-->

    <!-- Toaster for Category Added Failure start-->
    @if (session('subcategory_add_failed'))
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div class="toast" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true"
                style="background-color: #da3837; color: white;">
                <div class="toast-header">
                    <small class="text-muted me-auto">Failed</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <strong>{{ session('subcategory_add_failed') }}</strong>
                </div>
            </div>
        </div>
    @endif
    <!-- Toaster for Category Added Failure end -->

@endsection
<!-- Page Content End -->