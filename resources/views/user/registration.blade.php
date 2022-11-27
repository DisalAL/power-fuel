<!DOCTYPE html>
<head><title> Registration

</title>
<link rel="stylesheet" type ="text/css" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"  >
<style type="text/css">

    body{
        padding-top:120px;
        background: linear-gradient(to bottom, #33ccff 0%,#c8e8f8 100%);
        
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
    margin-bottom:110px;
    
    
}
.form-signup h2{
    text-align: center;
    color: #31c2f2;
}
.btn{

background: linear-gradient(to bottom, #33ccff 0%,#c8e8f8 100%);
border-radius: 30px;
transition: .5s;

}

</style>
</head>
<body>
    <div class="container">
        <form class="form-signup">
            <h2> Register

            </h2>
            <p>Create your account.</p>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="fname">First Name:</label>
                        <input type=" text" class="form-control" name=" fistname" placeholder="Eva">

                    </div>
                    <div class="col-md-6">
                        <label for="lname">Last Name:</label>
                        <input type=" text" class="form-control" name=" lastname" placeholder="John">
                        
                    </div>

                </div>
            </div>
            <div class="form-group">
                <label for="email">Fuel Station Address:</label>
                <input type=" text" class="form-control" name="address" placeholder="123, awa lane col-5">
            </div>
          
            <div class="form-group">
                <label for="email">Contact No:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="011235456">
            </div>
            
            <div class="form-group">
                <label for="email">Vehice No:</label>
                <input type="number" class="form-control" id="vehicle number" name="vehicle number" placeholder="ABC2356">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type=" email" class="form-control" name="email" placeholder="Eva@gmail.com">
            </div>
          
            <div class="form-group">
                <label for="email">Passwaord:</label>
                <input type=" password" class="form-control" name="password" placeholder="*******">
            </div>
            <br>


            <div> 
                <input type ="submit" class="btn btn-success btn-block" name="" value="Register"> Already have an account? <a href="login.html">Login</a>

            </div>
        
        </form>


    </div>
</body>
</html>