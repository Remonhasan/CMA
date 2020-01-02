@extends('layouts.app')

@section('title','Course')

@push('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

@endpush

@section('content')

 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{route('course.create')}}" class="btn btn-primary">Add New</a>
             @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Course</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Slug
                        </th>
                       
                        <th>
                          Created At
                        </th>
                        <th>
                          Updated At
                        </th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                       @foreach($courses as $key=>$course)
                         <tr>
                         	
                           <td> {{ $key+1 }}</td>
                           <td> {{ $course->name }}</td>
                           <td> {{ $course->slug }}</td>
                           <td> {{ $course->created_at }}</td>
                           <td> {{ $course->updated_at }}</td>
                           
                           <td><a href="{{ route('course.edit',$course->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                            <form id="delete-form-{{ $course->id }}" action="{{ route('course.destroy',$course->id) }}" style="display: none;" method="POST">
                                   @csrf
                                 @method('DELETE')
                           </form>
                       <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                             event.preventDefault();
                            document.getElementById('delete-form-{{ $course->id }}').submit();
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