@component('admin.layouts.content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Category</h4>
        <p class="card-description"> Enter the new name and description for this category. </p>
        <form class="forms-sample" method="POST" action="{{ route('update-category', $category->id) }}">
            @csrf
            @method('PUT')
          <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" class="form-control" name="categoryName" value="{{ old('categoryName', $category->categoryName) }}" style="color: white !important;">
          </div>
          <div class="form-group">
            <label for="categoryDescription">Description</label>
            <input type="text" class="form-control" name="categoryDescription" value="{{ old('categoryDescription', $category->categoryDescription) }}" style="color: white !important;">
          </div>
          
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div> 
@endcomponent