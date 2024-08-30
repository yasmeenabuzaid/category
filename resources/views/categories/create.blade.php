@extends("layouts.dashboard_master")
@section("headTitle", "One")
@section("content")

<div class="nav-profile-text d-flex flex-column">
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        {{-- <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p> --}}
        <form class="forms-sample" class="form" action="{{ route('categories.store') }}" method="POST">
            
            @csrf
          <div class="form-group">
            <label for="name">Category name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="insert your category name" required>
          </div>
          
          <div class="form-group">
            <label for="description">Category description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="description" required>
          </div>
          {{-- <div class="form-group">
            <label>create img</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
              </span>
            </div>
          </div> --}}
         
          <button type="submit" class="btn btn-gradient-primary me-2">Submit new category</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  @endsection
