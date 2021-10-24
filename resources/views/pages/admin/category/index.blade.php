@extends('layouts.admin')

@section('title')
    CATEGORY
@endsection

@section('content')
       <div class="page-content dashboard">
    <div class="container">
      <div class="text-center">
        <h1 class="mb-0 title"><u>Step by Step</u></h1>
        <h4 class="mb-3">
          ADMIN<br>LIST CATEGORIES
        </h4>
      </div>
    </div>
    <div class="dashboard-content">
        <div class="row">
        <div class="col-md-12">
          <div class="post">
            <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">
              + Add New Category
            </a>
            <div class="table-responsive">
              <table class="table table-hover scroll-horizontal-vertical w-100" id="myTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Slug</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($category as $category)
                  <tr>
                  <th>{{$category->id}}</th>
                  <th>{{$category->name}}</th>
                  <th>
                    <img src="{{Storage::url($category->photo)}}" style="max-height: 40px;" alt="">
                  </th>
                  <th>{{$category->slug}}</th>
                  <th>
                    <div class="btn-group">
                      <a class="btn btn-primary" href= "{{ route('category.edit', $category->id) }}">
                      Edit
                      </a>
                     <form action= "{{route('category.destroy', $category->id)}}" method="POST">
                      @method('delete') @csrf
                      <button type="submit" class="dropdown-item text-danger">
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