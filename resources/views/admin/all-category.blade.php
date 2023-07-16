@extends('admin.layouts')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages/</span>All Category</h4>

    <div class="card">
        <h5 class="card-header">Light Table head</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Sub Category</th>
                    <th>Sub Category Count</th>
                    <th>Product Count</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($category as $categorys)
                <tr>
                    <td>{{$categorys->id}}</td>
                    <td>{{$categorys->category_name}}</td>
                    <td>{{$categorys->slug}}</td>
                    <td>{{$categorys->subcategory_count}}</td>
                    <td>{{$categorys->product_count}}</td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-warning">Delete</a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

