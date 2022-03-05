<?php
    session_start();

    if(!isset($_SESSION['username'])){
        echo "you are logged out";
        header('location:http://localhost/MVCFramework/accountController/login');

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Change Bootstrap Modal Content Based on Trigger Button Using jQuery</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function() {
    $("#myModal").on("show.bs.modal", function(event) {
        // Get the button that triggered the modal
        var button = $(event.relatedTarget);

        // Extract value from the custom data-* attribute
        var titleData = button.data("title");

        // Change modal title
        $(this).find(".modal-title").text(titleData);
    });
});
</script>
</head>
<body>
   

    <div class="center_content">
    <h1>Hello service provider:<?php echo $_SESSION['username']; ?></h1>
</div>

<div class="btn btn-dark">
    <a style="color:white;"href="http://localhost/MVCFramework/accountController/logout">logout</a>
</div>


 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content " style="max-width: 300px;margin-top: 10rem;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Login to your account</h4>
        </div>
        <div class="modal-body">
<form>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-success" style="width:150px;color: white;text-align: center;
  border-radius: 27px;  background-color: #006072;margin-top: 0rem;">Login</button>
</form>
  

  <a href="" >Forgot Password?</a>

  <h5>Don't have an account?<a href="" >Create and account</a></h5>

      </div>
        </div>
      </div>
      
    </div>
</body>
</html>