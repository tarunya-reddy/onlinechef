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
        <link rel="stylesheet" href="styles/main.css">
        <style>
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
*{
    padding:0;
    margin:0;
    box-sizing: border-box;
    font-family: Outfit;
}
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
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-shrink: 0;
    text-decoration: none;
}
.text,.text1{
    text-decoration: none;
    color:white;
    font-size: 18px;
}
.text1:hover{
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
    bottom: 150px;
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
}
.bu2{
    background-color: peru;
    color: white;
    border-radius: 8px;
    border: none;
    height: 40px;
    width: 140px;
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
}  
.ser{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin-top: 25px;
    margin-left: 30px;
}  
.img1{
    height:150px; 
    width:250px;
    border-radius: 15px;
}
.div{
    margin-left: 50px;
    margin-top: 20px;
}
.food{
    font-size: 20px;
    margin-top: 15px;
    margin-left: 60px;
    color: grey;
}
.text:hover{
    color:gray;
}
.cont{
    margin-top: 20px;
    position: relative;
} 
#contact{
    margin-left: 500px;
} 
#c{
    position: absolute;
    left: 50px;
    top: 90px;
    font-size: 50px;
    color: black;
    font-weight: 1000;  
}    
        </style>
    </head>

    <body style="height: 1500px;">
        <div class="header">
            <div>
                <h1 class="title">ChefMart</h1>
            </div>
            <div class="right-sec">
                <p class="text"><a href="" class="text1">Reviews</a></p>
                <p class="text"><a href="" class="text1">Contact Us</a></p>
                <p class="text"><a href="" class="text1">About</a></p>
                <p class="text"><a href="login.php" class="text1">Login/Sign Up</a></p>
            </div>
        </div>
        <div class="container-fluid">   
            <img src="https://u-static.haozhaopian.net/uid_6d294db7ca8f40b4b089dbd71252ef33/aiImage/0eb4c520d4e840c1b957a7569b91a1a2.jpg" alt="Los Angeles" style="height:850px; width:100%;">
            <div class="s">
                <P class="p">
                Trusted By 10K+<br> Households<br>
               <P style="color: orange;font-size: 40px;"> To Hire a Cook</P>
                </P>
                <P class="p2">
                Professional & background verified cook for a month <br>for you to enjoy home-cooked food every day.
                </P>
                <button class="bu">Get Started</button>
            </div>
        </div>   
        <div class="container-fluid">
            <div><h1 class="ch">Choose Your Service</h></div>
            <div class="ser">
                <div class="div">
                    <img class="img1" src="images/thumbnail-10.jpg" alt="Los Angeles"  >
                    <p class="food">North Indian</p>
                </div>
                <div class="div">
                    <img class="img1" src="./images/thumbnail-10.jpg" alt="Los Angeles" >
                    <p class="food">South Indian</p>
                </div>
                <div class="div">
                    <img class="img1" src="s_files/thumbnail-10.jpg" alt="Los Angeles" >
                    <p class="food">Chinese</p>
                </div>
                <div class="div">
                    <img class="img1" src="s_files/thumbnail-10.jpg" alt="Los Angeles" >
                    <p class="food">Continental</p>
                </div>
                <div class="div">
                    <img class="img1" src="s_files/thumbnail-10.jpg" alt="Los Angeles" >
                    <p class="food">Thai & Mexican</p>
                </div>
                <div class="div">
                    <img class="img1" src="s_files/thumbnail-10.jpg" alt="Los Angeles" >
                    <p class="food">Italian & American</p>
                </div>
                <div class="div">
                    <img class="img1" src="s_files/thumbnail-10.jpg" alt="Los Angeles" >
                    <p class="food">Live Barbecue</p>
                </div>
                <div class="div">
                    <img class="img1" src="s_files/thumbnail-10.jpg" alt="Los Angeles" >
                    <p class="food">Vrat Ka Khana</p>
                </div>
            </div>
            <div style="margin-top: 20px;">
                <center><button class="bu2">View Full Menu</button></center>
            </div>
        </div>
        <div class="cont"> 
            <img src="https://st4.depositphotos.com/3051589/25590/i/450/depositphotos_255904538-stock-photo-contact-us-customer-support-hotline.jpg" alt="Los Angeles" style="height:500px; width:100%;">
            <div id="c">
                <P id="contact">
                    xyz<br>
                    6409171962<br>
                    xyz@gmail.com
                </P>
            </div>
        </div>
    </body>
</html>



