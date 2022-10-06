function validate(){
   
    var password = document.getElementById("pass").value;
    var myemail = document.getElementById("myemail").value;
    
    if(myemail=="vedang0405@gmail.com"&&password=="Vedang"){
        alert("login successful");
        // window.location.replace("admin.php");
        <?php
        require "admin.php" ;
        ?>
        return false;

    } 
    else{
          alert("login failed");
    }
    
}