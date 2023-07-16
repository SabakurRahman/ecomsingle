@extends('admin.layouts')
@section('page_title')
    Add Category Ecom
@endsection
@section('content')


    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages/</span>Add Sub Category</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add New Sub Category</h5>
                        <small class="text-muted float-end">SUB CATEGORY NAME</small>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Sub Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                           class="form-control"
                                           id="category_name"
                                           name="sub_category_name"
                                           placeholder="Category Name" />
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Select Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="category">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                            </div>




                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Add Sub Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Basic with Icons -->

        </div>
    </div>

@endsection

