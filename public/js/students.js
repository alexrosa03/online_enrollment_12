$(document).ready(function () {
    // <------------------------------ ADDING A STUDENT RECORD --------------------------->
    $('#addStudentForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/students",
            data: $('#addStudentForm').serialize(), 
            success: function (response) {
                console.log(response)
                $('#addStudentModal').modal('hide')
                alert("Data Saved");
                // location.reload();
            },
            error: function(error){
                console.log(error)
                alert("Data Not Saved")
            }
        });
    });
    // <------------------------------ ADDING A STUDENT RECORD END --------------------------->


    // <------------------------------ DELETEING A STUDENT RECORD --------------------------->
    $('.delete_btn').on('click', function() {
            
        $('#deleteStudentModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#studentDeleteId').val(data[0]);
    });
  
    $('#deleteStudentForm').on('submit', function(e){
            e.preventDefault();

            var id = $('#studentDeleteId').val();

            $.ajax({
                type: "DELETE",
                url: "/students/delete/"+id,
                data: $('#deleteStudentForm').serialize(),
                success: function (response) {
                    console.log(response);
                        // $('#deleteStudentModal').modal('hide');
                        // alert("Data Deleted");
                        //location.reload();
                    },
                    error: function(error) {
                        console.log(error);
                    }
            });
    });
    // <------------------------------ DELETEING A STUDENT RECORD END --------------------------->

    // <------------------------------ EDITING AND UPDATING A STUDENT RECORD --------------------------->
    $('.edit_btn').on('click', function(){
        $('#editStudentModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#firstName').val(data[1]);
        $('#lastName').val(data[2]);
        $('#id').val(data[0]);
        $('#birthday').val(data[3]);
        $('#course').val(data[4]);
    });

    $('#editStudentForm').on('submit', function(e){
        e.preventDefault();

        var id = $('#id').val();
        $.ajax({
            type: "PUT",
            url: "/students/edit/"+id,
            data: $('#editStudentForm').serialize(),
            success: function (response) {
                console.log(response);
                $('#editStudentModal').modal('hide');
                alert("Data Updated");
                //location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
    // <------------------------------ EDITING AND UPDATING A STUDENT RECORD END --------------------------->

    // <------------------------------ VIEWING A STUDENT RECORD --------------------------->
    $('.view_btn').on('click', function(){
        $('#viewStudentModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('.showFirstName').text("First Name: "+data[1]);
        $('.showLastName').text("Last Name: "+data[2]);
        $('.showId').text("ID: "+data[0]);
        $('.showBirthday').text("Birthday: "+data[3]);
        $('.showCourse').text("Course: "+data[4]);
    });
    // <------------------------------ VIEWING A STUDENT RECORD END--------------------------->
});