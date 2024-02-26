@extends('header')
@section('title','Home')
@section('xyz')
<div class="container mt-2">
  <table style="margin-left: 65px;">
    <thead>
      <tr>
        <th scope="col">Sl no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created At</th>
        <th scope="col">Delete</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>
                <form action="{{ url('users/' . $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            <td>
                @csrf
                <button type="submit" id="editbtn" value="{{$user->id}}" class="btn btn-primary editbtn" data-toggle="modal" data-user-id="{{ $user->id }}" data-target="#exampleModal">Edit</button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<!-- modal start -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&#10006;</button>
      </div>
      <div class="modal-body">
        @if(session('Update'))
        <div class="alert alert-success">{{session('Update')}}</div>
        @endif
        <form action="{{url('update-user')}}" method="POST" class="ms-auto me-auto" style="width: 450px;">
        @csrf
        <input type="hidden" id="sdnt_id" name="sdnt_id"/>
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="Email" class="form-control" id="email" name="email" placeholder="enter a Email of your choice">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- modal end -->
@endsection
@section('scripts')
<script>
  $(document).ready(function(){
    $(document).on('click','.editbtn',function(){
      var userId = $(this).data('user-id');
      $('#exampleModal form').attr('action', '{{ url('update-user') }}/' + userId);
      $('#sdnt_id').val(userId);
      $('#exampleModal').modal('show');
    });
  });
</script>
@endsection
