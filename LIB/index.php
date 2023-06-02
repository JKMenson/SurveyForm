<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICE LIBERIAN COMMUNITY REGISTRATION FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form_wrapper">
        <header>
            <div id="logo">
                <img src="download.png" alt="">
            </div>
            <div>
                <h1>ICE LIBERIAN COMMUNITY REGISTRATION FORM</h1>
                <h1 style="text-align: center;">RWANDA CHAPTER</h1>
            </div>
           
        </header>
    
        <form action="connect.php" method="post">
            <fieldset>
                <legend class="legend" id="title">STUDENT REGISTRATION FORM</legend> <br>
                <fieldset class="legend2">
                    <legend class="legend">PERSONAL INFORMATION</legend>
                    <label for="firstname">First Name</label> <br>
                    <input type="text" id="myinput" name="firstname" required> <br> <br>
    
                    <label for="lastname">Last Name</label> <br>
                    <input type="text" id="myinput" name="lastname" required> <br> <br>
                    
                    <label for="gender">Gender:</label><br>
                    <label for="gender">Male</label>
                    <input type="radio" name="gender" required>
                    <label for="gender">Female</label>
                    <input type="radio" name="gender" required>
                    <label for="gender">Other</label>
                    <input type="radio" name="gender" required> <br> <br>
    
                    <label for="date">Date of Birth</label> <br>
                    <input type="date" id="myinput" name="dob" required> <br> <br>
    
                    <label for="email">Email</label> <br>
                    <input type="email" id="myinput" name="email" required> <br> <br>
    
                    <label for="phoneNumber">Contact</label> <br>
                    <input type="number" id="myinput" name="phone" required> <br> <br>
    
                    <label for="identification">Passport/Working/Student ID</label> <br>
                    <input type="text" id="myinput" name="passport" required> <br> <br>
                    
                </fieldset> <br>
    
                <fieldset class="legend2">
                    <legend class="legend">YOUR ADDRESS</legend>
                    <label for="address">Place of Residence</label> <br>
                    <input type="text" id="myinput" name="address" required> <br> <br>
    
                    <label for="address">School/Work Address</label> <br>
                    <input type="text" id="myinput" name="school/work" required> <br> <br>
    
                    <label for="address">Name of Registered Center</label> <br>
                    <input type="text" id="myinput" name="center" required> <br> <br>
    
                </fieldset> <br>
            </fieldset>
            <button type="submit">Submit</button>
        </form>

    </div>
    
</body>
</html>