@extends('layouts.app')

@section('title','Registration')

@push('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                         <div class="card-header card-header-primary">
                         <h4 class="card-title ">All Registation</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Course Name</th>
                                <th>Name</th>
                                <th>Registration ID</th>
                                <th>Instructor</th>
                                <th>Semester</th>
                                <th>Section</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($registrations as $key=>$registration)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $registration->course_name }}</td>
                                            <td>{{ $registration->name}}</td>
                                            <td>{{ $registration->registration_id }}</td>
                                            <td>{{ $registration->instructor }}</td>
                                            <th>{{ $registration->semester }}</th>
                                             <th>{{ $registration->section }}</th>
                                            <th>
                                                @if($registration->status == true)
                                                    <span class="badge badge-success">Confirmed</span>
                                                @else
                                                    <span class="badge badge-danger">not Confirmed yet</span>
                                                @endif

                                            </th>
                                            <td>{{ $registration->created_at }}</td>
                                            <td>
                                                @if($registration->status == false)
                                                    <form id="status-form-{{ $registration->id }}" action="{{ route('registration.status',$registration->id) }}" style="display: none;" method="POST">
                                                        @csrf
                                                    </form>
                                                    <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you verify this request by phone?')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{ $registration->id }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="material-icons">done</i></button>
                                                @endif
                                                <form id="delete-form-{{ $registration->id }}" action="{{ route('registration.destory',$registration->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $registration->id }}').submit();
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