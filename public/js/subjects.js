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
        
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        id = data[5];

        console.log(id);

        $.ajax({
            type: "GET",
            url: "/subjects/"+id,
            data: id,
            success: function (response) {
                console.log(response);
            },
            error: function (error) {
                console.log(error);
            }
        });
  });
});