<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Database operations using PDO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class = "container">
        <h2>CRUD Database operations using PDO in php</h2>
        <div class = "row">
            <div class="col-md-3">
                <form class="form-horizontal" action="action.php" method="post">
                    <fieldset>
                        <!--form name-->
                        <legend>Book Details</legend>

                        <!--Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="bname">Book Name</label>
                            <div class="col-md-12">
                                <input id="bname" name="bname" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!--select basic-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="btype">Book Type</label>
                            <div class="col-md-12">
                                <select id="btype" name="btype" class="form-control">
                                    <option value="science fiction">Science Fiction</option>
                                    <option value="satire">Educational</option>
                                    <option value="drama">Drama</option>
                                    <option value="action and advanture">Action and Advanture</option>
                                    <option value="romance">Romance</option>
                                    <option value="mystery">Mystery</option>
                                    <option value="horror">Horror</option>
                                    <option value="self help.">Self help</option>
                                </select>
                            </div>
                        </div>

                        <!--Text input -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="pages">Number of pages</label>
                            <div class="col-md-12">
                                <input id="pages" name="pages" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!--Text input -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="price">Book Price</label>
                            <div class="col-md-12">
                                <input id="price" name="price" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!--Text input -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="author">Author</label>
                            <div class="col-md-12">
                                <input id="author" name="author" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="submit"></label>
                            <div class="col-md-12">
                                <button id="submit" name="submit" value="insert" class="btn btn-primary">Insert</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Pages</th>
                            <th scope="col">Price</th>
                            <th scope="col">Author</th>
                            <th scope="col">Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($_GET['insert']) && $_GET['insert']==1){
                                echo "inserted successfully";
                            }else{
                                echo "something went wrong";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>