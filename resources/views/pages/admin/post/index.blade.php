@extends('layouts.admin')

@section('title')
    POST
@endsection

@section('content')
       <div class="page-content dashboard">
    <div class="container">
      <div class="text-center">
        <h1 class="mb-0 title"><u>Step by Step</u></h1>
        <h4 class="mb-3">
          ADMIN<br>LIST of POSTS
        </h4>
      </div>
    </div>
    <div class="dashboard-content">
        <div class="row">
        <div class="col-md-12">
          <div class="card kartu">
            <a href="{{ route('post.create') }}" class="btn btn-primary mb-3 w-25">
              + Add New Post
            </a>
            <div class="table-responsive">
              <table class="table table-hover scroll-horizontal-vertical w-100" id="myTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Photo</th>
                    <th>User</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($post as $post)
                  <tr>
                  <th>{{$post->id}}</th>
                  <th>{{$post->title}}</th>
                  <th>
                    <img src="{{Storage::url($post->photo)}}" style="max-height: 40px;" alt="">
                  </th>
                  <th>{{$post->user->username}}</th>
                  <th>{{$post->category->name}}</th>
                  <th>
                    <div class="btn-group">
                      <a class="btn btn-primary" href= "{{ route('post.edit', $post->id) }}">
                      Edit
                      </a>
                     <form action= "{{route('post.destroy', $post->id)}}" method="POST">
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