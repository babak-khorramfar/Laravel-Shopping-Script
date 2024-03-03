@component('admin.layouts.content')

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
{{-- <script>
    $(document).ready(function () {
        $('.deletebtn').click(function(e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            })

            var delete_id = $(this).closest('tr').find('.delete_val_id').val();
            
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this category!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                    var data = {
                        "_token": $('input[name="_token"]').val(),
                        "id": delete_id
                    }

                    $.ajax({
                        type: 'DELETE',
                        url: '/delete-category/' + delete_id,
                        data: data,
                        success: function(response) {
                            swal(response.status, {
                            icon: "success",
                        })
                .then((result)=> {
                    location.reload();
                     })
                    }
                 });
                    } else {
                    swal("Your category is safe!");
                    }
                    });

                 });
                });
</script>    --}}
@endsection


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="card-title">Users List</h4>
            </div>
            <div>
                <a class="nav-link btn btn-success btn-sm" href="{{ route('create-user') }}">+ Add New User</a>
            </div>
        </div>
        <p class="card-description"> You can add users.</p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th><b> # </b></th>
                <th><b> Name </b></th>
                <th><b> Email </b></th>
                <th><b> Phone No. </b></th>
                <th><b> Email Status </b></th>
                <th><b> Action </b></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user )
              <tr>
                {{-- <input type="hidden" class="delete_val_id" value="{{ $user->id }}"> --}}
                <td> {{ $user -> id }} </td>
                <td> {{ $user -> name }} </td>
                <td> {{ $user -> email }} </td>
                <td> {{ $user -> phone }} </td>
                <td>
                    @if ($user->email_verified_at)
                        Active
                    @else
                        Disactivate
                    @endif
                </td>
                <td>
                    <a class='btn btn-inverse-warning btn-icon-text' href="#">
                        <i class="mdi mdi-pen btn-icon-prepend"></i>
                        Edit</a>
                    <button class='btn btn-inverse-danger ml-3' type="submit">
                        <i class="mdi mdi-delete btn-icon-prepend deletebtn"></i>
                        Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endcomponent
