<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CSV Export</title>
  </head>
  <body>
    <h2 style="text-align: center;">CSV Export File</h2>
    <div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="export.php" class="btn btn-success pull-right">Export User List</a>
        </div>
        <div class="panel-body pt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Sr</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Created</th>
                      <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //include database configuration file
                    include 'db.php';
                    
                    //get records from database
                    $query = "SELECT * FROM users ORDER BY id DESC";
                    $runQuery = mysqli_query($conn, $query);
                    // $query = $db->query("SELECT * FROM users ORDER BY id DESC");
                    if(mysqli_num_rows($runQuery) > 0){
                      $sr = 1;
                        while ($row = mysqli_fetch_array($runQuery)){
                          
                      ?>            
                    <tr>
                      <td><?php echo $sr; ?></td>
                      <td><?php echo $row['full_name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td><?php echo $row['created_at']; ?></td>
                      <td><?php echo ($row['is_active'] == '1')?'Active':'Inactive'; ?></td>
                    </tr>
                    <?php
                    $sr++;

                    }



                  }

                  else{ ?>
                    <tr><td colspan="5">Users Data not found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



