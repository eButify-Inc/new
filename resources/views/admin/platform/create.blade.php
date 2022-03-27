@extends('layouts.backend.admin.app')
@section('title','Create Platform')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
            
    <div class="row">
        <!-- FormValidation -->
        <div class="col-12">
            <div class="card">
            <h5 class="card-header">Add New Platform</h5>
            <div class="card-body">

                <form method="POST" action="{{ route('admin.platform.store') }}" id="formValidationExamples" class="row g-3">
                @csrf
                    <div class="col-md-6">
                        <label class="form-label" for="formValidationName">Platform Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Make Platform" name="name" />
                    </div>

                    <div class="col-12">
                        <a href="{{ route('admin.platform.index') }}" class="btn btn-danger">Back</a>
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