<!DOCTYPE html>
<head><title> Login

</title>
<link rel="stylesheet" type ="text/css" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"  >
<style type="text/css">

    body{
        padding-top:220px;
        background: linear-gradient(to bottom, #33ccff 0%, #c8e8f8 100%);

        
    }
    .form-signup{
    margin:0 auto;
    max-width: 400px;
    font-size: small;
    background-color: white;
    padding-right:25px;
    padding-left: 25px;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-bottom:240px;
    
}
.form-signup h2{
    text-align: center;
    color: #31c2f2;
    
}
.btn{

	background: linear-gradient(to bottom, #33ccff 0%, #c8e8f8 100%);
	border-radius: 30px;
	transition: .5s;
}


</style>
</head>
<body>
    <div class="container">
        <form class="form-signup">
            <h2> Login

            </h2>
            <p>login to your account.</p>
            
       

            <div class="form-group">
                <label for="email">Email:</label>
                <input type=" email" class="form-control" name="email" placeholder="eva@gmail.com">
            </div>
          
            <div class="form-group">
                <label for="email">Passwaord:</label>
                <input type=" password" class="form-control" name="password" placeholder="********">
            </div>
            <br>
        <div> 
                <input type ="submit" class="btn btn-success btn-block" name="" value="Login"> create an account <a href="registration.html">Register</a>

            </div>
        </form>


    </div>
</body>
</html>