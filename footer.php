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
        <!--<link rel="stylesheet" href="styles/chef.css">-->
        
        <style>
            .header{  
                height: 70px;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                position: fixed;
                top: 0;
                left: 0;
                right:0;
                background-color: rgb(8, 8, 8);
                border-bottom-width:0px ;
                border-bottom-style: solid;
                z-index: 100;
                border-bottom-color: rgb(228, 228, 228);
            }
            .right-sec{
                width: 420px;
                margin-right: 10px;
                margin-left: 30px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-shrink: 0;
                text-decoration: none;     
            }
            .item{
                margin-right: 20px;
                margin-top: 15px;
            }
            .menubar{
                height: 20px;
                width: 30px;
            }
            .text,.text1{
                text-decoration: none;
                color:white;
                font-size: 18px;
            }
            .text3{
                text-decoration: none;
                color:black;
                font-size: 18px;
            }
            .text1:hover,.text2:hover,.text3:hover{
                text-decoration: none;
                color: gray;
            }
            .v{
                margin-top: 70px; 
                position: relative;
            }
            .s{
                position: absolute;
                left: 50px;
                top: 270px;
                font-size: 15px;
                color: black;
                font-weight: 1000;
            }       
            .title{
                margin-left: 50px;
                font-weight: 1000;
                font-size: 40px;
                color:white;
            }
            .bu{
                background-color: orange;
                color: white;
                border-radius: 8px;
                border: none;
                height: 50px;
                width: 160px;
                transition: 1s;
            }
            .bu:hover{
                transform: scale(1.1);
                transition: 1.5s;
            }
            .bu2{
                background-color: rgb(235, 121, 8);
                color: white;
                border-radius: 8px;
                border: none;
                height: 40px;
                width: 140px;
                font-size: 15px;
                transition: 1s;
            }
            .bu2:hover{
                transform: scale(1.1);
                transition: 1.5s;
            }
            .p{
                font-size: 40px;
                color: white;
            }
            .p2{
                font-size: 15px;
                color: white;
            }
            .ch{
                margin-top: 50px;
                margin-left: 80px;
                color: brown;
                font-weight: bolder;
            } 
            .ser{
                display: flex;
                flex-direction: row;
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr ;
                flex-wrap: wrap;
                margin-top: 25px;
                margin-left: 10px;
                margin-right: 30px;
            }  
            .card-img-top{
                height:150px; 
                width:250px;
                border-radius: 15px;
                transition: 1.5s;
            }
            .card{
                margin-left: 50px;
                margin-top: 20px;
                height: 210px;
                width: 260px;
                align-items: center;
                position: relative;
            }
            .card:hover{
                .card-img-top{
                    transform: scale(1.1);
                    transition: 1.5s;    
                }
            }
            .div2{
                transition: 1.5s;
                height: 180px;
                width: 250px;
                position: absolute;
                justify-content: center;    
            }
            .card-title{
                font-size: 20px;
                margin-top: 15px;
                margin-left: 0px;
                color: grey;
                text-decoration: none;
                transition: 1.5s;
                text-align: center;
            }
            .text:hover{
                color:gray;
            }
            .cont{
                background-color: black;
                margin-top: 20px;
                display: flex;
                flex-wrap: wrap;
                color: white;
            }
            .co{
                margin-top: 30px;
                margin-left: 100px;
            } 
            .bot{
                margin-bottom: 30px;
            }
            .bott{
               
                margin-top: 70px;
                margin-left: 100px;
                color: white;
            }
            .botto{
                display: flex;
                flex-wrap: wrap;
                margin-top: -10px;
            }
            .text2{
                text-decoration: none;
                font-size: 18px;
                color: white;
                margin-right: 28px;
            }
            .logo{
                border-radius: 20px;
                margin-bottom: 15px;
                margin-right: 20px;
                height: 40px;
                width: 40px;
                background-color: white;
            }
            #menubar{
                display: none;
                border-radius: 5px;
                border: none;
                background-color:transparent;
                padding: 10;
                margin: 0;
            }
            #menu{
                display: none;
            }
            
            #menu-list{
                z-index: 1200;
                display: none;
                background-color:white;
                margin-top: 0px;
                width: 50%;
                height: 100%;
                color:rgb(71, 15, 15);
                position: fixed;
                
            }  
            #menu-list.open p{
                display: none;
                
            }
            @media only screen and (max-width:1300px){
                div.ser{
                    display: none;
                }
            }
            @media only screen and (min-width:1400px){
                div.ser{
                    width: 1300px;
                }
            }
            @media only screen and (max-width:800px){
                div.right-sec{
                    display: none;
                }
                #menubar{
                    display: block;  
                }
                #menu{
                    display: block;
                }
                #menu-list.open{
                display: block;
                margin-bottom: -70px;
                border-right-width:2px ;
                border-right-style: solid;
                border-right-color: rgb(228, 228, 228);
                } 
                #menu-list.open p{
                display: block;
                padding: 5px;
                margin-left: 35px;
                }
            }
            .top{
                border-radius: 250px;
                height:500px;
                width:500px;
            }
            .align{
                margin-top: 60px;
            }
 
        </style>
        <script>
            function menubar(){
                menulist=document.getElementById("menu-list");
                menulist.classList.toggle("open")
            }
        </script>
    </head>

    <body style="height: 2000px;align-items: center;">
        <div style="background-color: black;">
            <div class="cont"> 
                <div class="co">
                    <h2 class="bot">Company</h2>
                    <h6><a href="" class="text1">About Us</a></h6>
                    <h6><a href="" class="text1">We are Hiring</a></h6>
                    <h6><a href="" class="text1">Blog</a></h6>
                    <h6><a href="" class="text1">Near Me</a></h6> 
                    <h6><a href="" class="text1">Cancellation Policy</a></h6>
                    <h6><a href="" class="text1">Privacy Policy</a></h6> 
                    <h6><a href="" class="text1">Terms & Conditions</a></h6>
                </div>
                <div class="co">
                    <h2 class="bot">Customers</h2>
                    <h6><a href="" class="text1">Sign Up/Login</a></h6>
                    <h6><a href="" class="text1">My Profile</a></h6>
                    <h6><a href="" class="text1">My Bookings</a></h6>
                    <h6><a href="" class="text1">My Wallet</a></h6> 
                    <h6><a href="" class="text1">Refer A Friend</a></h6>
                    <h6><a href="" class="text1">Contact Us</a></h6> 
                    <h6><a href="" class="text1">9004-044-234</a></h6>
                </div>
                <div class="co">
                    <h2 class="bot">For Chef</h2>
                    <h6><a href="" class="text1">Join As Chef</a></h6>
                    <h6><a href="" class="text1">Top Chefs</a></h6>
                    <h6><a href="" class="text1">Code Of Conduct</a></h6>
                    <h6><a href="" class="text1">Training Program</a></h6> 
                    <h6><a href="" class="text1">Chef's Gallery</a></h6>
                    <h6><a href="" class="text1">Contact Us</a></h6> 
                    <h6><a href="" class="text1">9004-044-234</a></h6>
                </div>
                <div class="co">
                    <h2 class="bot">Connect With Us</h2>
                    <P class="text">
                        6409171962
                    </p>
                    <p class="text">
                        xyz@gmail.com
                    </p>
                    <p class="text">
                        Ongole,Prakasham
                    </P>
                </div>
            </div>
            <div class="bott">
                <h2>Services</h2><br>
                <div class="botto">
                    <h6><a href="" class="text2">Cook And Chef Service</a></h6>
                    <h6><a href="" class="text2">Cuisines</a></h6>
                    <h6><a href="" class="text2">Menu</a></h6>
                    <h6><a href="" class="text2">Gallery</a></h6>
                    <h6><a href="" class="text2">Customer Reviews</a></h6>
                    <h6><a href="" class="text2">Top Rated Chefs</a></h6>
                </div>
            </div>
            <div class="bott">
                <h2>Serving In</h2><br>
                <div class="botto">
                    <h6><a href="" class="text2">Ongole</a></h6>
                    <h6><a href="" class="text2">Vijayawada</a></h6>
                    <h6><a href="" class="text2">Guntur</a></h6>
                    <h6><a href="" class="text2">Hyderabad</a></h6>
                    <h6><a href="" class="text2">Warangal</a></h6>
                    <h6><a href="" class="text2">Khammam</a></h6>
                </div>
            </div>
            <hr style="margin-left: 80px;margin-right: 80px;">
            <div class="co">
                <div class="botto">
                <a href=""><img src="facebook.png" class="logo"></a>
                <a href=""><img src="insta.svg" class="logo"></a>
                <a href=""><img src="linkdin.webp" class="logo"></a>
                <a href=""><img src="twitter.png" class="logo"></a>
                <a href=""><img src="Utube.svg" class="logo"></a>
                </div>
            </div>
        </div>

        
    </body>
</html>
























