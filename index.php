<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content= 
        "width=device-width, initial-scale=1.0"> 
  
    <!-- CSS file -->
    <link rel="stylesheet" href="style.css"> 
  
    <!-- Google reCAPTCHA CDN -->
    <script src= 
        "https://www.google.com/recaptcha/api.js" async defer> 
    </script> 
</head> 
  
<body> 
    <div class="container"> 
        <h1>Google reCAPTCHA</h1> 
  
        <!-- HTML Form -->
        <form action="action.php" method="post"> 
            <input type="text" name="email" id="email" 
                placeholder="Email" required> 
            <br> 
            <input type="text" name="contrasena" id="contrasena" 
                placeholder="Contraseña" required> 
            <br> 

            <!-- div to show reCAPTCHA -->
            <div class="g-recaptcha" 
                data-sitekey="6Lcc5YopAAAAAJaP83R2w0UdKzsUO61FDtzzxxmd"> 
            </div> 
            <br> 
  
            <button type="submit" name="submit_btn"> 
                Submit 
            </button> 
        </form> 
    </div> 
</body> 
  
</html>