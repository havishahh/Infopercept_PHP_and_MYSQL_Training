<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php - ajax - crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>PHP AJAX CRUD | How to fetch data from database using jQuery AJAX</h4>
                    </div>
                    <div class="card-body">
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
        $(document).ready(function(){
            getdata();
        });
        function getdata(){
            $.ajax({
                type: "GET",
                url: "AJAX_CRUD/fetch.php",
                success: function(response){
                //    console.log(response);
                    $.each(response,function(key,value){
                        //console.log(value['fname']);
                        $('#studentdata').append(`<tr>
                            <td>${value['id']}</td>
                            <td>${value['fname']}</td>
                            <td>${value['lname']}</td>
                            <td>${value['class']}</td>
                            <td>${value['section']}</td>
                            <td>
                                <button class='btn btn-info view' data-id='${value['id']}'>VIEW</button>
                                <button class='btn btn-primary edit' data-id='${value['id']}'>EDIT</button>
                                <button class='btn btn-danger delete' data-id='${value['id']}'>DELETE</button>
                            </td>
                        </tr>`);
                    })
                }
            })
        }
    </script>
</body>
</html>
