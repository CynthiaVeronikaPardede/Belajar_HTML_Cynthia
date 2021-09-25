<?php
    include_once 'db_connection.php';
    $result = mysqli_query($link, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Full</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="style1.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <style>
            /* table{
                font-family: arial, sans-serif;
                border-collapse: collapse;
                border: 1px solid black;
            }
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 5px;
                text-align: center;
            }

            tr:nth-child(even) {
                background-color: white;
            } */
        </style>
    </head>
    <body>
    <nav class="navbar-a urut hover font-navbar">
            <ul >
                <li><a class="active2" href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
                <li style="float: right; border-right: none"><a href="#">About</a></li>
            </ul>
        </nav>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/1.png" id="img-a" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/2.png" id="img-a" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/3.png" id="img-a" class="d-block w-100" alt="...">
				</div>
		  	</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


        <!-- Card -->
		<div class="container-card card-deck">
            <div class ="wrap d-flex flex-md-row">
                <?php
                    while($row = mysqli_fetch_array($result)){
                ?>
                    <div class=" card flex-column">
                        <img class="card-img-top img-fluid rounded" src="img/a.jpg" alt="food">
                            <h4 class="card-title"><b>STRAWBERRY SMOOTHIE <br/> WITH GREEK YOGURT</b></h4>
                            <hr class="bg-danger mb-0 mt-0 d-inline-block a">
                            <p class="card-body">Really scrumptious and filling, fresh, fresh fruit smoethies are great start to the day or a sweet treat</p>
                            <div class="card-footer">
                                <button href="#" class="btn center-block">READ MORE</button>
                            </div>
                    </div>
                <?php
                    }
                ?>
                <div class=" card">
                    <img class="card-img-top img-fluid rounded  thumb" height=100% src="img/b.jpg" alt="food">
                        <h4 class="card-title"><b>SPINACH & BEETROOT <br/> SALAD</b></h4>
                        <hr class="bg-danger mb-0 mt-0 d-inline-block a">
                        <p class="card-body">This is one of the simplest salads ever, tastes amazing and looks like you've made a real efford.</p>
                        <div class="card-footer">
                            <button href="#" class="btn center-block">READ MORE</button>
                        </div>
                </div>
                <div class=" card">
                    <img class="card-img-top img-fluid rounded" src="img/3.jpg" alt="food">
                        <h4 class="card-title"><b>GF GRANOLA & <br/> ALMOND PROTEIN SHAKE</b></h4>
                        <hr class="bg-danger mb-0 mt-0 d-inline-block a">
                        <p class="card-body">Make this taste homemade granolia recipe in bulk and enjoy a little sprinkle whanever you fancy</p>
                        <div class="card-footer">
                            <button href="#" class="btn center-block">READ MORE</button>
                        </div>
                </div>
            </div>
        </div>
        
        <?php
            if (mysqli_num_rows($result) > 0) { //menghit jumlah baris
        ?>
        <!-- <table class="table-responsive-sm table-md text-center table table-borderless table-dark table-striped">
            <thead>
                <tr>
                    <td scope="row"><b>Nomor</b></td> 
                    <td scope="row"><b>Name</b></td>
                    <td scope="row"><b>Quantity</b></td>
                    <td scope="row"><b>Price</b></td>
                    <td scope="row"><b>Description</b></td>
                </tr>
            </thead>    
        
            <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["Name"]; ?></td>
                    <td><?php echo $row["Quantity"]; ?></td>
                    <td><?php echo $row["Price"]; ?></td>
                    <td><?php echo $row["Description"]; ?></td>
                </tr>
            </tbody>
            
            <?php
            $i++;
            }
            ?>
        </table> -->
        <?php
            }
            else{
                echo "No result found";
            }
        ?>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <div class="col-sm-2 item text">
                        <h2 class="headin5_amrc text"><b>ENVOY</b></h2>
                        <p class="small space">We create possibilities for the connected world. <br> <b class="text">Be Bold.</b></p>
                    </div>
                    <div class="col-sm-2 item text">
                        <h6 class="headin5_amrc text small">Explore</h6>
                        <ul class=" small">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Capabilities</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2.5 item text">
                        <h6 class="headin5_amrc text ">Visit</h6>
                        <p class="small am">Envoy So. California <br/> 34 Tesla, Ste 100 <br/> Irvine, Ca, USA 92618</p>
                        
                        <h6 class="headin5_amrc text small space">New Business</h6>
                        <p class="small am ">engage@weareenvoy.com <br/> 949.333.3106</p>
                    </div>
                    <div class="col-sm-2 item text">
                        <h6 class="headin5_amrc text small">Follow</h6>
                        <ul class="small">
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twiter</a></li>
                            <li><a href="#">LinkedIn</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 item text">
                        <h6 class="headin5_amrc text small">Legal</h6>
                        <ul class="small">
                            <li><a href="#">Term</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-0 item text">
                        <h5 class="headin5_amrc text">Next: About</h5>
                        <hr class="bg-light mb-4 mt-0 d-inline-block garis">
                    </div>
                </div>
                <div>
                    <p class=" small copyright">© 2020 Envoy. All Rights Reserved</a></p>
                </div>  
            </div>
        </footer>
    </body>
</html>