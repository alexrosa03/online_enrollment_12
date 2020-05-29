@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-center">
        <h1>Offered Subjects</h1>
    </div>
    <table class="table text-center">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Subject</th>
        <th scope="col">Enrollees</th>
        <th scope="col">options</th>
        <th scope="col"><button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#addSubjectModal">
          Add subject
        </button>
          
          </th>
        </tr>
    </thead>
    <tbody>
      @foreach($subjects as $subject)
        <tr>
        <td>{{ $subject->name }}</td>
        <td>{{ $subject->enrollees }}</td>
        <td style="display:none;">{{ $subject->capacity }}</td>
        <td style="display:none;">{{ $subject->room }}</td>
        <td style="display:none;">{{ $subject->schedule }}</td>
        <td style="display:none;" id="subId">{{ $subject->id }}</td>
        <td>
          <a href="#" class="btn btn-outline-primary view_btn">View</a>
          <a href="#" class="btn btn-outline-success edit_btn">Edit</a>
          <a href="#" class="btn btn-outline-danger delete_btn">Delete</a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  </div>         
</div>

<div>
  <!----------------------------------------------- ADD SUBJECT MODAL START ----------------------------------------------->
  <div class="modal fade" id="addSubjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark text-center" style="width:100%;">Add subject</h5>
        </div>
        <div class="modal-body">
        <form id="addSubjectForm" class="text-left text-dark" style="font-weight:400;">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputEmail1">Subject Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Capacity:</label>
            <input type="text" class="form-control" name="capacity" placeholder="Enter capacity">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Room:</label>
            <input type="text" class="form-control" name="room" placeholder="Enter room">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Schedule:</label>
            <input type="text" class="form-control" name="schedule" placeholder="Enter Schedule">
          </div>
          <input type="submit" class="btn btn-outline-secondary" style="width:100%;" value="Add">
        </form>
        </div>
      </div>
    </div>
  <!----------------------------------------------- ADD SUBJECT MODAL END ----------------------------------------------->
</div>
<div>
  <!----------------------------------------------- EDIT MODAL START ----------------------------------------------->
  <div class="modal fade" id="editSubjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" style="width:100%">Edit subject</h5>
        </div>
        <div class="modal-body">
          <form class="text-left" id="editSubjectForm">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
            <input type="hidden" id="subjectId" name="subjectId">
            <div class="form-group">
              <label for="exampleInputEmail1">Subject Name:</label>
              <input type="text" class="form-control" id="subjectName" name="subjectName" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Capacity:</label>
              <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Enter capacity">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Room:</label>
              <input type="text" class="form-control" id="room" name="room" placeholder="Enter room">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Schedule:</label>
              <input type="text" class="form-control" id="schedule" name="schedule" placeholder="Enter schedule">
            </div>
            <input type="submit" class="btn btn-outline-secondary" style="width:100%;" value="Save">
          </form>
        </div>
      </div>
    </div>
<!----------------------------------------------- EDIT MODAL END ----------------------------------------------->
</div>
<div> 
<!----------------------------------------------- VIEW MODAL START ----------------------------------------------->
<div class="modal fade" id="viewEnrollesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Current Enrollees</h5>
          </div>
          <div class="modal-body">
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Id Number</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Option</a></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>18132751</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>BSCS</td>
                        <td>
                            <a href="" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
      </div>
<!----------------------------------------------- VIEW MODAL END ----------------------------------------------->
</div>
<div> 
<!----------------------------------------------- DELETE MODAL START ----------------------------------------------->
<div class="modal fade" id="deleteSubjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title text-center" style="width:100%">Are you sure you want to delete this subject?</h5>
      </div>
      <div class="modal-body">
      <form class="text-center" id="deleteSubjectForm">
          {{ csrf_field() }}
          {{ method_field('delete') }}
            <input type="hidden" id="subjectDeleteId" name="subjectDeleteId">
            <button type="submit" class="btn btn-outline-success" style="width:40%;">Yes</button>
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal" style="width:40%;">No</button>
          </form>
      </div>
    </div>
  </div>
</div>
<!----------------------------------------------- DELETE MODAL END ----------------------------------------------->
</div>
<script src="{{asset('js/subjects.js')}}"></script>
@endsection