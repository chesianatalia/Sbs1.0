@extends('layouts.app')

@section('title')
    POST
@endsection

@section('content')
    <div class="page-content dashboard">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-0 title"><u>Step by Step</u></h1>
                <h4 class="mb-3">
                    Create New Post
                </h4>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card kartu">
                        <form action="{{ route('userpost.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Post Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Final Photo</label>
                                        <input type="file" name="photo" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="editor1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>User</label>
                                        <select name="user_id" class="form-control">
                                            <option value="{{ Auth::user()->id }}">{{ Auth::user()->username }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="categories_id" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Materials</label>
                                        <textarea name="material" id="editor"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Step By Steps</label>
                                        <textarea name="stepbystep" id="editor2"></textarea>
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                <div class="form-group">
                                    <label>Material</label>
                                    <select name="materials_id" class="form-control">
                                        @foreach ($materials as $material)
                                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Step by Step</label>
                                    <select name="stepbysteps_id" class="form-control">
                                        @foreach ($stepbysteps as $stepbystep)
                                            <option value="{{ $stepbystep->id }}">{{ $stepbystep->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group">
                                    <label>Comments</label>
                                    <select name="comments_id" class="form-control">
                                        @foreach ($comments as $comment)
                                            <option value="{{ $comment->id }}">{{ $comment->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="form-group">
                                    <label>Likes</label>
                                    <select name="like_id" class="form-control">
                                        @foreach ($likes as $like)
                                            <option value="{{ $like->id }}">{{ $like->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}

                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5">Save Now</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection



@push('addon-script')
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
    </script>
@endpush
{{-- @push('addon-script')
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

{{-- @endpush --}}
