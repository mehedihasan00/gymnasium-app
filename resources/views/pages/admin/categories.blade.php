@extends('layouts.admin-master', ['pageName'=> 'category', 'title' => 'Add Category'])

{{-- @section('title') Add Category @endsection --}}

@section('admin-content')

<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card my-3">
                    <div class="card-header">
                        @if(@isset($categoryData))
                        <i class="fas fa-edit mr-1"></i>Update Category
                        
                        @else
                        <i class="fas fa-plus mr-1"></i>Add Category
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ (@$categoryData) ? route('admin.category.update', $categoryData->id) : route('admin.category.store') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label for="name"> Name <span class="text-danger">*</span> </label>
                                    <input type="text" name="name" value="{{ @$categoryData->name }}" class="form-control form-control-sm" id="name" placeholder="Enter Category name">
                                    @error('name') <span style="color: red">{{$message}}</span> @enderror
                                </div>
                            </div>
                            
                            <div class="clearfix border-top">
                                <div class="float-md-right mt-2">
                                    <button type="reset" class="btn btn-dark btn-sm">Reset</button>
                                    <button type="submit" class="btn btn-info btn-sm">{{(@$categoryData)?'Update':'Create'}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="card my-3">
                    <div class="card-header">
                        <i class="fas fa-list mr-1"></i>
                        Category List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.category.edit', $item->id) }}" class="btn btn-info btn-mod-info btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('admin.category.delete', $item->id) }}" onclick="confirm('Are you sure to Delete?')" class="btn btn-danger btn-mod-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</main>
@endsection
