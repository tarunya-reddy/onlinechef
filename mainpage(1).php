<?
@session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Main Page
        </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          
        <!-- <!--<link rel="stylesheet" href="styles/chef.css"> -->
        <script src="./category_images/script.js"></script>

        <style>
        <?php
         include('all.css'); 
        ?> 
        </style>
        <script>
            function menubar(){
                menulist=document.getElementById("menu-list");
                menulist.classList.toggle("open")
            }
        </script>
    </head>

    <body style="align-items: center;height: 2000px;">
        
        <div class="header">
            
            <div>
               <a href="" class="text2"><h1 class="title">Chef4You</h1></a>
            </div>
            <div class="right-sec">
                <p class="text"><a href="#Review" class="text1">Reviews</a></p>
                <p class="text"><a href="./profilepage.php" class="text1">Profile</a></p>
                <p class="text"><a href="#About" class="text1">About</a></p>
                    <?php
     if(!isset($_SESSION['username'])){
       echo "
       <p class='text'><a href='./signup.php' class='text1'>Signup</a></p>
       <p class='text'><a  class='text1'  href='./login.php'>Login</a></p>";
     }
     else{
      echo "
      <p class='text' ><a  class='text1' href='./logout.php'>Logout</a></p>";
     }
    ?></a>
                
            </div>
            <div class="item" id="menu">
                <button id="menubar" onclick="menubar()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>
                  
                </button>
            </div>
            <div id="menu-list">
                <div class="align">
                    <p class="text2"><a href="login.html" class="text3">Sign Up / Login</a></p>
                    <p class="text2"><a href="./signup.php" class="text3">Signup</a></p>
                    <p class="text2"><a href="#About" class="text3">About</a></p>
                    <p class="text2"><a href="./profilepage.php" class="text3">Profile</a></p>
                    <p class="text2"><a href="#Review" class="text3">Reviews</a></p>
                </div>
            </div>
        </div>

        <div class="v">   
            <img src="chef.jpeg" alt="not found" style="height:600px; width:100%;">
            <div class="s">
                <P class="p">
                    Trusted By 10K+<br> Households<br>
                    <P style="color: orange;font-size: 40px;"> To Hire a Cook</P>
                </P>
                <P class="p2">
                    Professional & background verified cook for a month <br>for you to enjoy home-cooked food every day.
                </P>
                <button class="bu" onclick="window.open('logo.png')">Get Started</button>
            </div>
        </div>   
        
        
        <div><h1 class="ch">Worldwide Cuisines</h1></div>
        <div>
            <?php

              include('./connect.php');
              $select_category="select * from `insert_category`";
              $exec_category=mysqli_query($conn,$select_category);
              while($row=mysqli_fetch_assoc($exec_category)){
                 $category_image=$row['category_image'];
                 $category_title=$row['category_name'];
              echo "
              <div class='col-md-4'>
              <div class='card' style='width: 18rem;'>
                <a href='./chef.php?category=$category_title'>
                   <img src='./category_images/$category_image' class='card-img-top' alt='...'>
                </a>
              <div class='card-body'>
                <h5 class='card-title'>$category_title</h5>
              </div>
              </div>
              </div> </div>";}
           
             
          
            ?>
            </div>
            <div style="margin-top: 20px;text-align: center;">
                <button class="bu2">View Full Menu</button>
            </div>
        </div>




        <div id="Review" class="revs">
            <h1 class="ch">Chef4U Reviews</h1>
            <div class="carousel">
                <div class="carousel-container">
                    <div class="review active">
                        <div class="rev">
                            <div class="bord">
                                <div class="ali">
                                    <h3>Venky</h3>
                                    <div class="rating">⭐⭐⭐⭐⭐</div>
                                    <p class="comment">"Chef4u made our life easy. We had 30 guests at home and I didn't have to worry or even step inside the kitchen.Chef4u ensured all our needs were met well.</p>
                                    </div>
                                </div>
                            <div class="bord">
                                <div class="ali">
                                    <h3>Nithin</h3>
                                    <div class="rating">⭐⭐⭐⭐</div>
                                    <p class="comment">Great service. Chef was very cooperative. Did a decent job in cleaning up the kitchen in the end.</p>
                                </div>
                            </div>
                            <div class="bord">
                                <div class="ali">
                                    <h3>Yashwanth</h3>
                                    <div class="rating">⭐⭐⭐⭐⭐</div>
                                    <p class="comment">Chef was a very warm person. Awesome plating, garnishing and apt quantity of all dishes. I would highly recommend Chef4u to all who want to make their moments special at home.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="rev">
                            <div class="bord">
                                <div class="ali">
                                    <h3>Millie</h3>
                                    <div class="rating">⭐⭐⭐⭐⭐</div>
                                    <p class="comment">The food was amazing and curated perfectly to our taste. Chef4u ensured all our needs were met well. I would highly recommend Chef4u to all who want to make their moments special at home.</p>
                                    </div>
                                </div>
                            <div class="bord">
                                <div class="ali">
                                    <h3>Bobby</h3>
                                    <div class="rating">⭐⭐⭐⭐</div>
                                    <p class="comment">I can easily give 100% marks to the Cook. Chefs skills are just amazing.Everyone loved your food and very impressed with Chef4u for arranging such fantabulous chef.Thanks for making our event special ❤️</p>
                                </div>
                            </div>
                            <div class="bord">
                                <div class="ali">
                                    <h3>Brown</h3>
                                    <div class="rating">⭐⭐⭐⭐⭐</div>
                                    <p class="comment">Overall experience was great, food was very tasty, each and every dish was perfect and all guests liked the quality and taste of food. Thanks, team Chef4u.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="rev">
                            <div class="bord">
                                <div class="ali">
                                    <h3>Hermione</h3>
                                    <div class="rating">⭐⭐⭐⭐⭐</div>
                                    <p class="comment">Thank you so much, Mr. Pan. You just owned the night and did magic in my kitchen. The dishes were so finger licking good!  </p>
                                    </div>
                                </div>
                            <div class="bord">
                                <div class="ali">
                                    <h3>Vaishnavi</h3>
                                    <div class="rating">⭐⭐⭐⭐</div>
                                    <p class="comment">The food is amazing and prepared in a very hygienic way. The chef and his assistant behaviour is very polite. They cleaned the gas stove and kitchen platform which is highly appreciated 👍😀</p>
                                </div>
                            </div>
                            <div class="bord">
                                <div class="ali">
                                    <h3>Keerthi</h3>
                                    <div class="rating">⭐⭐⭐⭐⭐</div>
                                    <p class="comment">Had my very first wonderful experience. The chef was not only polite but also courteous and did the job excellently. Each and every dish was tasty and our guests were too happy to have food served by him.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="prev" onclick="changeSlide(-1)">❮</button>
                <button class="next" onclick="changeSlide(1)">❯</button>
            </div>
        
            <script src="script.js"></script>
            <div style="margin-top: 20px;text-align: center;">
                <button class="bu2">View More</button>
            </div>

        </div>








        <div id="About" style="background-color: black;">
            <div class="cont">
                <div class="co">
                    <h1>About Us</h1>
                    <p class="text4">
                        Chef4U is a culinary service dedicated to delivering personalized chef experiences right to your doorstep. Our skilled chefs create customized menus tailored to your tastes, using fresh, locally sourced ingredients to craft exquisite meals for any occasion. Whether it's a private dinner, family gathering, or special celebration, Chef4U brings the art of fine dining to the comfort of your home, making every meal memorable and hassle-free. Enjoy gourmet, chef-curated meals with a focus on flavor, quality, and convenience, designed just for you.
                    </p>
                </div>
            </div>
            <hr style="margin-left: 60px;margin-right: 60px;">
            <div class="cont">
                <div class="bott">
                    <h2>Services</h2><br>
                    <div class="botto">
                        <h6 class="text2">Cook And Chef Service</h6>
                        <h6 class="text2">Cuisines</h6>
                        <h6 class="text2">Customer Reviews</h6>
                        <h6 class="text2">Top Rated Chefs</h6>
                    </div>
                </div>
            </div>
            <hr style="margin-left: 60px;margin-right: 60px;">
            <div class="cont">  
                <div class="bott">
                    <h2>Serving In</h2><br>
                    <div class="botto">
                        <h6 class="text2">Ongole</h6>
                        <h6 class="text2">Vijayawada</h6>
                        <h6 class="text2">Guntur</h6>
                        <h6 class="text2">Hyderabad</h6>
                        <h6 class="text2">Warangal</h6>
                        <h6 class="text2">Khammam</h6>
                    </div>
                </div>
            </div>
            <hr style="margin-left: 60px;margin-right: 60px;">
            <div class="cont">  
                <div class="bott">
                    <h2>Connect With us</h2><br>
                    <div class="botto">
                        <h6 class="text2">6309071960</h6>
                        <h6 class="text2">Incredible@gmail.com</h6>
                        <h6 class="text2">Ongole,Prakasham</h6>
                        
                    </div>
                </div>
            </div>
            <div class="co">
                <div class="botto">
                <a href=""><img src="./category_images/fb.svg" class="logo"></a>
                <a href=""><img src="./category_images/insta.svg" class="logo"></a>
                <a href=""><img src="./category_images/in.svg" class="logo"></a>
                <a href=""><img src="./category_images/x.jpg" class="logo"></a>
                <a href=""><img src="./category_images/Utube.svg" class="logo"></a>
                </div>
            </div>
            <hr style="margin-left: 60px;margin-right: 60px;">
            <p class="text2" style="text-align: center;margin-bottom: 0px;">Copyright 2025 Chef4U.com-All Rights Reserved</p>
        </div> 
    </body>
</html>
























