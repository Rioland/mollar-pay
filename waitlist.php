<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Moola Pay</title>
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="shortcut icon" href="images/logo_logo icon blue copy.png" type="image/x-icon">
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="css/waitlist.css" />
    <script src="./jquery-3.5.1.js"></script>
  </head>
  <body>
    <div class="waitlist-contain">
      <div class="waitlist">
        <div class="navbar3">
          <div class="logo1">
            <a href="/" > 
            <img class="img-logo1" src="images/logo_logo icon blue copy.png" style=" width: 4rem; height: auto"  alt="">
              <img class="img-logo2" src="images/logo_text blue only copy.png" style=" width: 10rem; height: auto;" alt="">
            </a>
          </div>
          <div class="waitlist-btn">
            <a href="#">Join Waitlist</a>
          </div>
        </div>
        <div class="waitlist-background">
          <div class="wait-text">
            <div class="head">
              <h1>
                Get<br />
                Notified<br />
                when we<br />
                Launch
              </h1>
            </div>

            <div class="wait-img">
              <img src="images/New message-bro 1.png" alt="" />
            </div>
            <div class="form-waitlist">
              <div class="text-box text-box1">
                <input style="padding: 10px;"
                  type="text"
                  name="fname"
                  id="fname"
                  placeholder="Full Name"
                />
              </div>
              <div class="text-box text-box2">
                <input style="padding: 10px;"
                  type="email"
                  name="email"
                  id="email"
                  placeholder="Email Address"
                />
              </div>
              <a id="submit" href="notify" class="form-btn"
                ><p>Get Notified</p></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php  
  require("./footer.php")
    ?>
    <script>
      $(document).ready(function () {
        $("#submit").click(function (e) {
            e.preventDefault();
        const name= $("#fname").val()
        const email=$("#email").val()
        if(name && email){
         $.ajax({
             type: "POST",
             url: "handler",
             data: {
                 fullname:name,
                 email:email
             },
             dataType: "text",
             success: function (response) {
                 if(response==true){
                     window.location.href="./notify";
                 }else{
                    alert(response)
                 }
             }
         });
        }else{
        alert("All fields are required")
        }
        });
      });
    </script>
  </body>
</html>
