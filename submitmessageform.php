<html>
<head>
  <title>Homepage</title>
  <style>
    nav{

      background-color: SlateBlue;
        overflow: hidden;
      align: center;
    }
    nav a {
      float: left;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
      font-family: sans-serif, Helvetica, Arial;
    }

    nav a:hover {
      background-color: MintCream;
      color: black;
    }
    h1{
      color:SlateBlue;
      text-align: center;
    }
    
  </style>
</head>
<body>

<nav>
  <a href="doctorHome.php">Home</a>
  <a href="clientlist.php">Listing</a> 
  <a href="submitmesage.php">Message</a>  
  <a href="messageindex.html">Message Send</a> 
  <a href="Doctormessage.php">My Message</a>
  <a href="submitmessageform.php">Contact Admin</a>
  <a href="doctorProfile.php">My Profile</a>
  <a href="doctorProfileEdit.php">Edit Profile</a>
  <a href="../Common/logout.php">Logout</a>
</nav>

<h1>Contact with Admin</h1>

</body>
</html> 

<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Multiple Image Upload</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <form id="submit_form">  
                     <label>Email</label>  
                     <input type="email" name="email" id="email" class="form-control" />  
                     <br />  
                     <label>Message</label>  
                     <textarea name="message" id="message" class="form-control"></textarea>  
                     <br />  
                     <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                     <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>  
                </form>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var email = $('#email').val();  
           var message = $('#message').val();  
           if(email == '' || message == '')  
           {  
                $('#error_message').html("All Fields are required");  
           }  
           else  
           {  
                $('#error_message').html("Message send!");
                $('#error_message').html('');  
                $.ajax({  
                     url:"messageinsert.php",  
                     method:"POST",  
                     data:{email:email, message:message},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 2000);  
                     }  
                });  
           }  
      });  
 });  
 </script>  