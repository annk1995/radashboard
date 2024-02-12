@extends ('admin.admin_dashboard')
@section('admin')
<div class="page-content">

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Listing Details</h6>
          <form method="POST" action="{{ route('admin.listing.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Name Of Listing</label>
              <input type="text" class="form-control" name="name"  placeholder="Enter Name">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail3" class="form-label">Location</label>
              <input type="text" class="form-control" name="location" placeholder="Enter Email">
            </div>

            <div class="mb-3">
                <label class="form-label" for="formFile">Image</label>
                <input class="form-control" type="file" name="image" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Rentals</label>
                <select class="form-select" name="type">

                  <option>House</option>
                  <option>apartment</option>

                </select>
              </div>

             <div class="row">
                <div class="col">
                    <label for="exampleInputPlaceholder" class="form-label">Beds</label>
                    <input type="number" class="form-control" name="beds" placeholder="Number Of Bedsrooms" min="1" max="15">
                  </div>

                  <div class="col">
                    <label for="exampleInputPlaceholder" class="form-label">Baths</label>
                    <input type="number" class="form-control" name="bathroom" placeholder="Number Of Bathrooms" min="1" max="5">
                  </div>
                  <div class="col">
                    <label for="exampleInputPlaceholder" class="form-label">Rooms</label>
                    <input type="number" class="form-control" name="rooms" placeholder="Number Of Rooms" min="1" max="5" >
                  </div>
                  <div class="col">
                    <label for="exampleInputPlaceholder" class="form-label">Area sqft</label>
                    <input type="number" class="form-control" name="area" placeholder="Area Sqft" min="400" max="10000">
                  </div>


             </div>












            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
