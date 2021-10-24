@extends('layouts.admin')

@section('title')
    USER
@endsection

@section('content')
       <div class="page-content dashboard">
    <div class="container">
      <div class="text-center">
        <h1 class="mb-0 title"><u>Step by Step</u></h1>
        <h4 class="mb-3">
          ADMIN<br>LIST of USERS
        </h4>
      </div>
    </div>
    <div class="dashboard-content">
        <div class="row">
        <div class="col-md-12">
          <div class="card kartu">
            <a href="{{ route('user.create') }}" class="btn btn-primary mb-3 w-25">
              + Add New User
            </a>
            <div class="table-responsive">
              <table class="table table-hover scroll-horizontal-vertical w-100" id="myTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Userame</th>
                    <th>Email</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Roles</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($user as $user)
                  <tr>
                  <th>{{$user->id}}</th>
                  <th>{{$user->username}}</th>
                  <th>{{$user->email}}</th>
                  <th>{{$user->firstname}}</th>
                  <th>{{$user->lastname}}</th>
                  <th>{{$user->roles}}</th>
                  <th>
                    <div class="btn-group">
                      <a class="btn btn-primary" href= "{{ route('user.edit', $user->id) }}">
                      Edit
                      </a>
                     <form action= "{{route('user.destroy', $user->id)}}" method="POST">
                      @method('delete') @csrf
                      <button type="submit" class="btn btn-danger">
                        Delete
                      </button>

                    </form>      
                    </div>
                  </th>
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

    
@endsection


@push('addon-script')
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>
  {{-- <script>
    var datatable = $('#crudTable').DataTable({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax: {
          url: '{!! url()->current() !!}',
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'photo', name: 'photo' },
            { data: 'slug', name: 'slug' },
            {
              data: 'action',
              name: 'action',
              orderable: false,
              searcable: false,
              width: '15%'
            },
        ]
    })
  </script> --}}
    
@endpush