@extends('layouts.backend.freelancer.app')
@section('title','Create Aliexpress Product')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container-xxl">
    <a href="{{ route('freelancer.aliexpress.index') }}" class="btn btn-danger">Back</a>
    </div>
    <div class="row">
        <!-- FormValidation -->
        <div class="col-12">
            <div class="card">
            <h5 class="card-header">Add New Aliexpress</h5>
            <div class="card-body">

                <form method="POST" action="{{ route('freelancer.aliexpress.store') }}" id="formValidationExamples" class="row g-3">
                @csrf
                    <div class="col-md-4">
                        <label class="form-label" for="formValidationName">Title</label>
                        <input type="text" id="title" class="form-control" placeholder="Title" name="title" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="formValidationName">Image Link</label>
                        <input type="text" id="ali_image" class="form-control" placeholder="Image link" name="ali_image" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="formValidationName">Aliexpress Link</label>
                        <input type="text" id="ali_link" class="form-control" placeholder="Aliexpress link" name="ali_link" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="formValidationName">Aliexpress Price</label>
                        <input type="text" id="price" class="form-control" placeholder="Price" name="price" />
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="formValidationName">Total Order</label>
                        <input type="text" id="order" class="form-control" placeholder="Order" name="order" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="formValidationName">Rating</label>
                        <input type="text" id="rating" class="form-control" placeholder="Rating" name="rating" />
                    </div>
                    
                    <div class="col-12">
                        <a href="{{ route('freelancer.aliexpress.index') }}" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <!-- /FormValidation -->
    </div>

</div>
@endsection