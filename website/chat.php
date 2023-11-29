<?php include('server.php') ?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900|Ubuntu" rel="stylesheet">
  <link href="css/chat.css" rel="stylesheet" >

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

  <div class="cont">
    <?php if(isset($_SESSION['full_name'])): ?>
      <button class="btn btn-light btn-lg" type="button" name="button"><a href="index.php?logout='1'" style="color:black;text-decoration: none;padding:1rem;">Logout</a></button>
      <button id="formButton" class="btn btn-light btn-lg" type="button" name="button"><a href="chat.php#form1" style="color:black;text-decoration: none;">Update Info</a></button>
      <h1>Welcome <?php echo (string)$_SESSION['full_name'];?></h1>
    <div class="wrapper">
        <div class="title">Eris healthcare chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>I am a Eris chatbot created by Sharon to help you with  general health information. </p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
             

                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                  
                  var input = document.getElementById("data");

// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("send-btn").click();
  }
});
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);

                    }
                });
            });
        });
   
    </script>

    <?php endif ?>

  </div>
  
<div class="formDiv">
  <form id="form1" name="form1" action="chat.php" method="post" style="display:none;">
    <!-- Display Validation errors over here -->
    <?php include('errors.php'); ?>
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
      </div>
      <input class="form-control" placeholder="Full name" type="text" name="name" value="<?php echo (string)$_SESSION['full_name'];?>">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
      </div>
      <input class="form-control" placeholder="Email address" type="text" name="email1" value=<?php echo (string)$_SESSION['email_id']; ?> readonly>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
      </div>

      </select>
      <input class="form-control" placeholder="Mobile Number" type="text" name="phone" value=<?php echo (string)$_SESSION['mobile_no']; ?>>
    </div>
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
      </div>
      <input class="form-control" placeholder="Create password" type="password" name="pwd1" value=<?php echo (string)$_SESSION['password'] ?>>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
      </div>
      <input class="form-control" placeholder="Repeat password" type="password" name="pwd2" value=<?php echo (string)$_SESSION['password'] ?>>
    </div> <!-- form-group// -->
    <div class="form-group">
      <button type="submit" class="btn btn-light btn-block" name="update"> Update </button>
    </div> <!-- form-group// -->
  </form>
  <script src="scripts/chat.js"></script>
</body>
</div>


</html>
