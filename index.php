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
      <form id="frmid" method="post" enctype="multipart/form-data" action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="firstname">Firstname:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter Lirst Name" name="fname">
    </div>
    <div class="mb-3 mt-3">
      <label for="firstname">Lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="name">
     </div>
     <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Your Email" name="email">
   </div>
   <div class="mb-3 mt-3">
      <label for="email">Image:</label>
      <input type="file" class="form-control" id="img" placeholder="Select Your Image" name="image">
   </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>

      </div>
  </form>
      

    </div>
  </div>
</div>

</body> 
</html>