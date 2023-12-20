<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Asets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container mt-3">
    <h3>All Users..</h3>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
      Add Users
    </button>
  </div>
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Users.</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form id="frmid" method="post" enctype="multipart/form-data" action="#">
            <div class="mb-3 mt-3">
              <label for="firstname">Firstname:</label>
              <input type="text" class="form-control" id="firstname" placeholder="Enter Lirst Name" name="fname" required>
            </div>
            <div class="mb-3 mt-3">
              <label for="firstname">Lastname:</label>
              <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" required>
            </div>
            <div class="mb-3 mt-3">
              <label for="email">Email:</label>
              <input type="text" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
            </div>
            <div class="mb-3 mt-3">
              <label for="email">Image:</label>
              <input type="file" class="form-control" id="image" placeholder="Select Your Image" name="image" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <a href="index.php"><button type="submit" name="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
          </a>
        </div>
        </form>
      </div>
</div>
  </div>

  <!-- code for dispaly table on page -->
  <div class="container mt-3">
  <table class="table table-striped">
    <thead>
      <tr>
        <th style="width:100px;">Id</th>
        <th style="margin: 10px; text-align: center;">Image</th>
        <th style="margin: 10px; text-align: center;">Firstname</th>
        <th style="margin: 10px; text-align: center;">Lastname</th>
        <th style="margin: 10px; text-align: center;">Email</th>
      </tr>
    </thead>
    <tbody>
    <?php
                include("backend.php");
                $data = "SELECT * FROM `imguplode`";
                $result = mysqli_query($conn, $data);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo '<td style="width:70px;">' . $row['id'] . '</td>';


                        // echo "<td> <img src ='". $row['imgsource'] ."'></td>";


// echo ' <div style="height:100px; width:100px;" class="container mt-3">
// <div style="height:100px; width:100px; overflow:hidden; padding:0; text-align:center" class="card">
// <div style="height:100px; padding:0; width:100px;"  class="card-body"><img style="height:100px; padding:0; width:100px;" src= '". $row['imgsource'] ."' ></div>
// </div>
// </div>';


echo ' <td style="height:100px; width:100px;"><div style="height:100px; width:100px;" class="container mt-3">
        <div style="height:100px; width:100px; overflow:hidden; padding:0; text-align:center" class="card">
            <div style="height:100px; padding:0; width:100px;" class="card-body">
                <img style="height:100px; padding:0; width:100px;" src="' . $row['imgsource'] . '" alt="">
            </div>
        </div>
      </div> </td>';






      // echo '<td style=" margin: 10px;">' . $row['firstname'] . '</td>';
      echo '<td style="margin: 10px; text-align: center;">' . $row['firstname'] . '</td>';

      echo '<td style="margin: 10px; text-align: center;">' . $row['lastname'] . '</td>';
                        echo '<td style="margin: 10px; text-align: center;">' . $row['email'] . '</td>' ;
                      
                    }
                } else {
                    echo "<tr><td colspan='7'>No records found</td></tr>";
                }
                ?>
    </tbody>
  </table>
</div>
</body>

</html>