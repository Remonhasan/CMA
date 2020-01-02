@extends('layouts.app')

@section('title','Students')

@push('css')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('student.create') }}" class="btn btn-primary">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                         <h4 class="card-title ">All Students</h4>
                        </div>
                        
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Course Name</th>
                                <th>Registration ID</th>
                                <th>Instructor</th>
                                <th>Semester</th>
                                <th>Section</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($students as $key=>$student)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/student/'.$student->image) }}" style="height: 100px; width: 100px" alt=""></td>
                                            <td>{{ $student->course->name }}</td>
                                            <td>{{ $student->registration_id }}</td>
                                            <td>{{ $student->instructor }}</td>
                                            <td>{{ $student->semester }}</td>
                                            <td>{{ $student->section }}</td>
                                            <td>{{ $student->created_at }}</td>
                                            <td>{{ $student->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('student.edit',$student->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $student->id }}" action="{{ route('student.destroy',$student->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $student->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
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

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
</script>
@endpush