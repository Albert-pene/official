<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV </title>
    <style>
        .shape1 {
            width: 90%;
            height: 1720px !important;
            background:linear-gradient(to top, rgb(20, 118, 175) , rgb(6, 65, 153));
            border-radius: 50%;
            border: none;
            margin-top: -50%;
            margin-left: -50%;
            color: transparent;
            box-shadow: 2px 2px 20px rgb(31, 77, 230)
            ;
            
            
        }
        .op {
    clip-path: polygon(67% 6%, 97% 45%, 82% 100%, 16% 89%, 0% 38%);
    border: whitesmoke 2px solid;
    margin-left: 1200px;
    width: 600px;
    height: 600px;
    transform: translate(100px,-100350px);
    background:transparent;
    animation: up 5s alternate infinite linear;
    opacity: .5;
    
}
@keyframes up {
    0% {clip-path: polygon(67% 6%, 97% 45%, 82% 100%, 16% 89%, 0% 38%);
        border: rgb(255, 179, 0) 2px solid;
        background-color: rgb(255, 179, 0);
        
    }
    12.5% {clip-path: polygon(33% 15%, 73% 32%, 84% 85%, 36% 100%, 0 55%);
        border: rgb(9, 169, 36) 2px solid;
        background-color:  rgb(9, 169, 36);
        box-shadow: 2px 2px 20px rgb(9, 169, 36);
        
    }
    25% {clip-path: polygon(41% 38%, 79% 65%, 58% 100%, 0 100%, 0 55%);
        border: #f00 2px solid;
        background-color: #f00;
        box-shadow: 2px 2px 20px 2pc #f00;
    }
    37.5% {clip-path: polygon(10% 29%, 63% 59%, 47% 92%, 0 100%, 0 55%);
        border: rgb(14, 219, 209) 2px solid;
        background-color:rgb(14, 219, 209) ;
        box-shadow: 2px 2px 20px rgb(14, 219, 209) ;
    }
    50% {clip-path: polygon(9% 17%, 35% 34%, 45% 84%, 21% 80%, 0 60%);
        border: rgb(255, 0, 242) 2px solid;
        background-color: rgb(255, 0, 242);
        box-shadow: 2px 2px 20px rgb(255, 0, 242);
    }
    62.5% {clip-path: polygon(9% 17%, 60% 25%, 52% 64%, 24% 83%, 0 40%);
        border: #f00 2px solid;
        background-color:#f00  ;
        box-shadow: 2px 2px 20px #f00  ;
    }
    75%{clip-path: polygon(40% 15%, 92% 27%, 99% 88%, 41% 95%, 2% 54%);
        border: rgb(17, 0, 255) 2px solid;
        background-color:rgb(17, 0, 255) ;
        box-shadow: 2px 2px 20px rgb(17, 0, 255) ;
    }
    82.5% {clip-path: polygon(10% 15%, 92% 87%, 99% 88%, 11% 95%, 2% 54%);
        border: rgb(255, 238, 0) 2px solid;
        background-color: rgb(255, 238, 0);
        box-shadow: 2px 2px 20px rgb(255, 238, 0);;
    }
    to {clip-path: polygon(60% 15%, 20% 7%, 99% 88%, 41% 93%, 2% 54%);
        border: rgb(0, 255, 0) 2px solid;
        background-color: rgb(0, 255, 0);
        box-shadow: 2px 2px 20px rgb(0, 255, 0);;
    }
    

}
        .shape2 {
            width: 400px;
            height:400px;
            border-radius: 50%;
            background: linear-gradient(to top , rgb(228, 97, 10) , rgb(211, 130, 8) );
            transform: translate(1000px,-400px);
            
        }
        .shape3 {
            width: 200px;
            height:200px;
            border-radius: 50%;
            background: linear-gradient(to top , rgb(6, 131, 153) , rgb(38, 8, 211) );
            transform: translate(1300px,-450px);
            animation: sd 5s;
            opacity: .8;
        }
        @keyframes sd {
            from { opacity:.2;}
            to { opacity:1;}
        }
        .shape4 {
            width: 150px;
            height:150px;
            border-radius: 50%;
            background: linear-gradient(to top , rgb(62, 3, 80) , rgb(184, 31, 231) );
            transform: translate(1500px,-490px) scale(.4);
            opacity: .8;
            animation: turnaroundsun 30s ;
        }
        @keyframes turnaroundsun {
            from {
                transform: translate(200px,-1390px)
                 scale(2.9);
            }
           
            to {
                transform: translate(1500px,-490px) scale(.4);
                
            }
            
            
           
            
        }
        @keyframes turnaroundsun1 {
            from {
                transform: translate(800px,-1390px);
                opacity: .1;
                transform: scale(1.9);
            }
           
            to {
                transform: translate(1000px,-400px);
                opacity: .99;
                transform: scale(.9);
            }
            
            
           
            
        }
        body {
            background-color: #111111;
            position: fixed;
        }
        .mainContainer {
            background: transparent;
            backdrop-filter: blur(50px);
            
            color: white;
            padding-top: 40px;
            
        }
        nav {
            display: flex;
            margin-top: 20px;
        }
        a {
            color: rgb(255, 255, 255);
            font-size: 22px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            margin-left: 25px;
            transition: 1s all;
            margin-top: 10px !important;
            text-decoration: none;
        }
      a:hover {
        color: rgb(106, 236, 149);
      } 
        @keyframes change {
            from {
                color: white;
                text-decoration:none;
            }
            to {
            color: rgb(106, 236, 149);
            text-decoration: underline 3px rgb(106, 236, 149);
            }
        }
        @keyframes changee {
            from {
                color: white
            }
            to {
            color: rgb(106, 236, 149);
            text-decoration: underline 3px rgb(106, 236, 149);
            }
        }

        li {
            color: transparent;
        }
        p {
        text-align: center;
        width: 400px;
        margin:-5px;
        font-size: 24px;
        letter-spacing: 3.5px;
        color: #ffffff;
        transition: all 2s;
        }
        p:hover {
            transform: scale(1.09);
        }
        header {
            text-align: start;
            padding-left: 45px;
        }
        h1 {
            color: rgb(52, 243, 99);
            font-weight: 750;
            font-family: cursive;
            font-size: 75px;
            margin-left: 50px;
            margin-top: 100px;
        }
        input {
            width: 250px;
            height: 30px;
            border-radius: 30px;
            outline: none;
            font-size: 20px;
            border:solid 1px white;
            color: rgb(199, 199, 199);
            padding-left: 20px;
            font-weight: 750px;
            margin-left: 40px;
            background: transparent;
            box-shadow: inset 2px 2px 10px black;
            font-family: cursive;

        }
        button {
            width: 150px;
            border: solid 1px white;
            height: 34px;
            color: white;
            font-family: cursive;
            background-color: #111111;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 750;
            transition: all 1s;
        }
        button:hover {
            transform: scale(1.1);
            animation: shake .5s;
            box-shadow: 2px 2px 10px rgb(5, 122, 218);
            border: rgb(30, 116, 214) solid 1px;
            
        }
        @keyframes shake {
            from {rotate: -2deg;}
            50% {rotate: 2deg;}
            to {
                rotate: 0deg;
            }
        }
        .start {
            background: linear-gradient(to top, rgb(20, 118, 175) , rgb(6, 65, 153));
            width: 150px;
            height: 100px;
            border-radius: 50%;
            box-shadow: 1px 1px 20pc rgb(1, 152, 179);
            border: none;
            animation: fall 20s infinite ;
            opacity: 2;
        }
        @keyframes fall {
            from {transform: translate(1300px,-2550px) scale(1.5) rotate(180deg);
            }
            40% {transform: -200px,850px scale(1)}
            to {transform: -800px,850px scale(1)}
        }
        h2 {
            font-family: cursive;
            font-size: 35px;
            font-weight: 750;
        }
        h3 {
            font-family: cursive;
            letter-spacing: 4px;
            font-size: 25px;
        }

@media screen and (max-width: 500px) {
    nav {
        width: 100%;
        padding-left: -100px;

    }
    a {
        margin: 0;
        font-size: 18px;
    
    }
    h1 {
        font-size: 35px;
    }
    p {
        font-size: 20px;
        margin-left: -00px;
        width: 250px;
    }
    .co {
        transform: translate(100px,-850px);
    }
    
} 
    

    </style>
</head>
<body>
    <div class="shape1">
        v
    </div>
    <div class="shape4"></div>
    <div class="shape3"></div>
    <div class="shape2"></div>
    <div class="op"></div>
    <div class="start"></div>
    <div class="mainContainer" style="margin-top: -2280px !important;">
        <header>
            <nav>
                <li><a href="index.php" ><span style="text-decoration: underline 3px rgb(106, 236, 149);">ser</span><span>vices</span></a></li>
                <li><a href="" ><span style="text-decoration: underline 3px rgb(106, 236, 149);">abo</span>ut</a></li>
                <li><a href="" ><span style="text-decoration: underline 3px rgb(106, 236, 149);">fea</span>tures</a></li>
                <li><a href="" ><span style="text-decoration: underline 3px rgb(106, 236, 149);">con</span>tact</a></li>
                <li><a href="" ><span style="text-decoration: underline 3px rgb(106, 236, 149);">opt</span>ions</a></li>
                <li><a href="" ><span style="text-decoration: underline 3px rgb(106, 236, 149);">fee</span>dback</a></li>
                <li><a href="" ><span style="text-decoration: underline 3px rgb(106, 236, 149);">cliens</span> section</a></li>
                <li><a href="" ><span style="text-decoration: underline 3px rgb(106, 236, 149);">sha</span>re</a></li>
                <li><a href="" ><span style="text-decoration: underline 3px rgb(106, 236, 149);">com</span>ment</a></li>
                <li><a href="" ><span style="text-decoration: underline 3px rgb(106, 236, 149);">mor</span>e</a></li>
                <li>
                    <input type="email" placeholder="Enter your E-mail :">
                </li>
                <li><button>Subscribe</button></li>
            </nav>
            <h1>welcome</h1>
            <p>My name is Nour Yahyaoui, and I am a web developer with experience in cybersecurity, web development, web applications, backend development, and more. I am passionate about creating secure and efficient solutions that meet the needs of modern digital environments.
 </p>
        </header>
        <div class="co" style="transform: translate(1000px,-150px);width: 600px;height: 400px;background: transparent;backdrop-filter: blur(5px);border-radius: 30px;border: solid 1px gray;padding: 20px;">
        <h2>services :</h2>
        <h3>Nour L'yahyaoui, kali linux expert . "all will be safe and at maximum level of security, with my skills on defending your projects from black-hats exeptionnaly you will master the  security !"</h3>
        </div>
        
        
        <hr style="margin-top: 900px;">
        
    </div>
    
   
</body>
</html>