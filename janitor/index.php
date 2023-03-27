
<!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="why.css">
        
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="magnific-popup.css">
    <link rel="stylesheet" href="jquery-ui.css">
    <link rel="stylesheet"href="owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"  href="owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-datepicker.css">
    <link rel="stylesheet" type="text/css" href="flaticon.css">
    <link rel="stylesheet" type="text/css" href="aos.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="formbug.css">
        <link rel="stylesheet" type="text/css" href="loginn.css">
    </head>
    <body style="background-color: black;">
        
        <div id="form">
            <h1 style="text-align: center;">Login Form</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Voter ID </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="text" id="pass" name="pass" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,20}$" required></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>
    include("connection.php");
    include("login.php")
    ?>
    
