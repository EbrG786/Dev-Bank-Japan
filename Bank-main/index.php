<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Online digital Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-4">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>DBJ BANK</h1>
                  
                </div>
                </div>
                
              </div>
            </div>
            
            

      <!-- Activity section -->
      <section>
            <div class="row activity text-center">
                  <div class="col-md act">
                  
                    <span class="user-icon"><i class="fas fa-user fa-10x"></i></span>
                    <br>
                    <a href="createuser.php"><button style="background-color :#2db7fc;" class="mt-2">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                  <span class="user-icon"><i class="fas fa-landmark fa-10x"></i></i></span>
                    <br>
                    <a href="transfermoney.php"><button style="background-color :#2db7fc;" class="mt-2">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                  <span class="user-icon"><i class="fas fa-money-check fa-10x"></i></span>
                    <br>
                    <a href="transactionhistory.php"><button style="background-color :#2db7fc;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      </section>
      <br>
      <section>
      <div class="ebrahim">
        <p class="sectionTag text-big" >DBJ Bank</p>
        <p class="sectionSubTag text-small" > Development Bank of Japan Inc. is a Japanese development bank incorporated on 1 October 2008 under the Development Bank of Japan Inc. Law. Current ownership structure of DBJ is solely owned by the Government of Japan through the Minister of Finance. 
            </p>
        </div>
        </section>
        
        <footer class="text-center mt-5">
      <p><a href="https://github.com/EbrG786"><span class="git"><i class="fab fa-github"></i></span></a> <b>Ebrahim Ghantiwala</b> <br> The Sparks Foundation</p>
      <p>
        Copyright &copy;2021 www.dbj.jp/en - All Rights Reserved
    </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');

body {
  background-image:url('https://images.unsplash.com/photo-1500316124030-4cffa46f10f0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80');
  background-size:cover ;
  
  }

*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
}

.container-f{
  background:rgba(0,0,0,0.5);
}
.intro{
	background: rgba(0,0,0,0);
  text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
}
.ebrahim{
    width: 80%;
    margin-top: 150px;
    padding: 0 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color:  white;
    font: size 50px;
    
}
.user-icon{
  color:  #F4D58D;

}
.logo{
    width: 40%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin:20px;
    padding:10px;
}
.logo img{
    width: 33%;
    border: 3px solid white;
    margin-left: 300px;
    margin-top: -150px;

}
.row activity text-center{
  margin:150px;
  
}

.col-md act{
  margin:100px;
}
h1{
  font-size:7vh;
	color: #F4D58D;
	font-weight: bold;
	
}
h3{
	color:#F4D58D;
  text-shadow:0 0 0 0;
}
button{
	border:none;
	border-radius: 8px;
	padding: 10px;
	background:#0447b3; 
	color:white;
	letter-spacing: 1.5px;
	font-size: 15px;
	transition: 0.5s;
  font-family: 'Roboto', sans-serif;
}
button:hover{
  background-color:red;
  border:1px solid #78efff;
  color:#0208c2;
	transform: scale(1.1);
}
button:hover{
	background-color:#0e0eed;
}
footer{
	color:#EAF0F1;
	background-color:rgba(0,0,0,0.99);
	letter-spacing: 0.5px;
  padding: 30px;
}
footer p{
	margin: 0;
	font-size: 15px;

.git i{
  color: #fff;
  font-size: 18px;
}
span i{
  color: #	FFEBCD;
  font-size: 240px;
  text-shadow: 2px 5px 5px rgba(0,0,0,0.8);
}

@media only screen and (orientation:portrait){
	.intro{
		display:flex;
		flex-direction: column-reverse;
	}
	h1{
		font-size: 30px;
	}
	.act{
		padding-bottom: 100px;
	}
} 
</style>
</html>