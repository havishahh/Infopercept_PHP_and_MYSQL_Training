<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php - ajax - crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <!--Add MOdel -->
    <div class="modal fade" id="student_AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Data using jQuery Ajax in php without page load</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="error-message">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">First Name</label>
                        <input type="text" class="form-control fname">
                    </div>
                    <div class="col-md-6">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control lname">
                    </div>
                    <div class="col-md-6">
                        <label for="">Class</label>
                        <input type="text" class="form-control class">
                    </div>
                    <div class="col-md-6">
                        <label for="">Section</label>
                        <input type="text" class="form-control section">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary student_add_ajax">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!--View Model -->
    <div class="modal fade" id="studentviewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Student Detail View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="id_view"></h4>
                    <h4 class="fname_view"></h4>
                    <h4 class="lname_view"></h4>
                    <h4 class="class_view"></h4>
                    <h4 class="section_view"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Edit MOdel -->
    <div class="modal fade" id="studenteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">edit student data without page reload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="edit_id">
                        <div class="col-md-12">
                            <div class="error-message">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <input type="text" id="edit_fname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" id="edit_lname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Class</label>
                            <input type="text" id="edit_class" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Section</label>
                            <input type="text" id="edit_section" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary student_update_ajax">update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            PHP AJAX CRUD | How to store data without page reload using jQuery AJAX in PHP
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#student_AddModal">
                                Add
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="message-show">

                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>class</th>
                                    <th>section</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody id="studentdata">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            getdata();

            $(document).on("click", ".edit_btn", function() {

                var stud_id = $(this).closest('tr').find('#stud_id').text();
                //alert(stud_id);
                $.ajax({
                    type: "post",
                    url: "AJAX_CRUD/code.php",
                    data: {
                        "checking_edit": true,
                        "stud_id": stud_id,
                    },
                    success: function(response) {
                        //console.log(response);
                        $.each(response, function(key, studedit) {
                            //console.log(studview['fname']);
                            $("#edit_id").val(studedit['id']);
                            $("#edit_fname").val(studedit['fname']);
                            $("#edit_lname").val(studedit['lname']);
                            $("#edit_class").val(studedit['class']);
                            $("#edit_section").val(studedit['section']);
                        })
                        $("#studenteditModal").modal('show');
                    }
                });
            });

            $(document).on("click", ".viewbtn", function() {
                //alert("hello");
                var stud_id = $(this).closest('tr').find('#stud_id').text();
                //alert(stud_id);
                $.ajax({
                    type: "post",
                    url: "AJAX_CRUD/code.php",
                    data: {
                        "checking_view": true,
                        "stud_id": stud_id
                    },
                    success: function(response) {
                        //console.log(response);
                        $.each(response, function(key, studview) {
                            //console.log(studview['fname']);
                            $(".id_view").text(studview['id']);
                            $(".fname_view").text(studview['fname']);
                            $(".lname_view").text(studview['lname']);
                            $(".class_view").text(studview['class']);
                            $(".section_view").text(studview['section']);
                        })
                        $("#studentviewModal").modal('show');
                    }
                });
            });


            $(".student_add_ajax").click(function(e) {
                e.preventDefault();

                var fname = $(".fname").val();
                var lname = $(".lname").val();
                var stu_class = $(".class").val();
                var section = $(".section").val();

                if (fname != "" & lname != "" & stu_class != "" & section != "") {
                    $.ajax({
                        type: "post",
                        url: "AJAX_CRUD/code.php",
                        data: {
                            "checking_add": true,
                            "fname": fname,
                            "lname": lname,
                            "class": stu_class,
                            "section": section
                        },
                        success: function(response) {
                            $('#student_AddModal').modal('hide');
                            $(".message-show").append('\
                            <div class="alert alert-success alert-dismissible fade show" role="alert">\
                            <strong>Hey!</strong> ' + response + '\
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                            <span arial-hiddent="true">&times;</span></button>\
                            </div>');
                            $(".studentdata").html("");
                            getdata();

                            $(".fname").val("");
                            $(".lname").val("");
                            $(".class").val("");
                            $(".section").val("");
                        }
                    });
                } else {
                    //console.log("please enter all fields");
                    $(".error-message").append('\
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                    <strong>Hey!</strong> please enter all fields.\
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                    <span arial-hiddent="true">&times;</span></button>\
                    </div>');
                }
            })
        });

        function getdata() {
            $.ajax({
                type: "GET",
                url: "AJAX_CRUD/fetch.php",
                success: function(response) {
                    //    console.log(response);
                    $.each(response, function(key, value) {
                        //console.log(value['fname']);
                        $('#studentdata').append(`<tr>
                            <td id = "stud_id">${value['id']}</td>
                            <td>${value['fname']}</td>
                            <td>${value['lname']}</td>
                            <td>${value['class']}</td>
                            <td>${value['section']}</td>
                            <td>
                                <a href="#" class='badge btn-info viewbtn'>VIEW</a>
                                <a href="#" class='badge btn-primary edit_btn'>EDIT</a>
                                <a href="" class='badge btn-danger deletebtn'>DELETE</a>
                            </td>
                        </tr>`);
                    })
                }
            })
        }
    </script>
</body>

</html>
