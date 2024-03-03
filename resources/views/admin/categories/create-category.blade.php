@component('admin.layouts.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Category</h4>
        <p class="card-description"> Enter the name and description for new category. </p>
        <form class="forms-sample" method="POST" action="{{ route('store-category') }}">
            @csrf
          <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" class="form-control" name="categoryName" placeholder="Name of your category" style="color: white !important;">
          </div>
          <div class="form-group">
            <label for="categoryDescription">Description</label>
            <input type="text" class="form-control" name="categoryDescription" placeholder="Description for category" style="color: white !important;">
          </div>
          
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div> 
@endcomponent