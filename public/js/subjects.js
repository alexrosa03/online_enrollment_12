$(document).ready(function () {
    $('#addSubjectForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/subjects",
            data: $('#addSubjectForm').serialize(), 
            success: function (response) {
                console.log(response)
                $('#addSubjectModal').modal('hide')
                alert("Data Saved");
                // location.reload();
            },
            error: function(error){
                console.log(error)
                alert("Data Not Saved")
            }
        });
    });




    $('.edit_btn').on('click', function(){
        $('#editSubjectModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#subjectName').val(data[0]);
        $('#capacity').val(data[2]);
        $('#room').val(data[3]);
        $('#schedule').val(data[4]);
        $('#subjectId').val(data[5]);
  });

    $('#editSubjectForm').on('submit', function(e){
        e.preventDefault();

        var id = $('#subjectId').val();
        $.ajax({
            type: "PUT",
            url: "/subjects/edit/"+id,
            data: $('#editSubjectForm').serialize(),
            success: function (response) {
                console.log(response);
                $('#editSubjectModal').modal('hide');
                alert("Data Updated");
                //location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
      });



      $('.delete_btn').on('click', function() {
            
            $('#deleteSubjectModal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#subjectDeleteId').val(data[5]);
      });
      
      $('#deleteSubjectForm').on('submit', function(e){
            e.preventDefault();

            var id = $('#subjectDeleteId').val();

            $.ajax({
                type: "DELETE",
                url: "/subjects/delete/"+id,
                data: $('#deleteSubjectForm').serialize(),
                success: function (response) {
                    console.log(response);
                        $('#deleteSubjectModal').modal('hide');
                        alert("Data Deleted");
                        //location.reload();
                    },
                    error: function(error) {
                        console.log(error);
                    }
            });
      });



      $('.view_btn').on('click', function() {
        $('#viewEnrollesModal').modal('show');
        $tr = $(this).closest('tr');

        var subjectId = $tr.children('.subId').text();

        $.ajax({
            type: "GET",
            url: "/subjects/"+subjectId,
            success: function (response) {
                console.log(response);
                var showtable = document.getElementById('tb');
                var table = document.getElementById('table');
                var subjects = '';

                for(var i = 0; i < response.length; i++){
                        subjects += '<tr> <td class="studentId">'+ response[i]['id'] + '</td> <td>'+ response[i]['first_name'] + '</td> <td>'+ response[i]['last_name'] + '</td> <td>' + response[i]['course'] + '</td> <td> <a href="#" class="deleteStudent_btn btn btn-outline-danger">Delete</a> </td></tr>'
                }

                table.innerHTML = subjects;
                showtable.style.display = "table";

                $('.deleteStudent_btn').on('click', {subId : subjectId}, function(e) {
                    $('#viewEnrollesModal').modal('hide');
                
                    $tr = $(this).closest('tr');
        
                    var studentId = $tr.children('.studentId').text();

                    $('#subId').val(e.data.subId);
                    $('#studentId').val(studentId);

                    $('#deleteStudentModal').modal('show');
              });

              $('#deleteStudentForm').on('submit', function(e){
                e.preventDefault();
    
                var studId = $('#studentId').val();

                $.ajax({
                    type: "DELETE",
                    url: "/subjects/unenroll/"+studId,
                    data: $('#deleteStudentForm').serialize(),
                    success: function (response) {
                        console.log('record deleted');
                        $('#deleteStudentModal').modal('hide');
                        },
                        error: function(error) {
                            console.log(error);
                        }
                });
          });
            },
            error: function (error) {
                console.log(error);
            }
        });
  });
});