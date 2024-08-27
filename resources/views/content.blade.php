<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Raleway&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: "Raleway", sans-serif;
            font-weight: 400;
            list-style: none;
        }

        html, body {
            height: 100%; 
        }

        body {
            padding-top: 50px;
            background-color: mintcream;
        }

        a {
            text-decoration: none;
            color: #444; 
        }

        a:hover {
            color: #835c5c; 
        }

        header {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            background-color: #FFF;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 999;
        }

        header ul li {
            padding: 20px 23px 30px 23px; 
        } 

        .text-center {
            font-weight: bolder;
            text-transform: uppercase;
            color: #f89500;
        }

        .container {
            margin-bottom: 150px;
        }

        .heading p {
            text-align: center;
        }

        #heading-text {
            padding: 0px 100px 0px 100px;
        }

        @media screen and (max-width: 940px) {
            .container {
                padding: 30px 10px; 
            } 
        }

        .heading h1 {
            font-size: 50px;
            color: #f89500;
            margin-bottom: 0px;
            position: relative;
            text-align: center;
            font-weight: bolder;
        }

        .heading h2 {
            font-size: 30px;
            color: #f89500;
            margin-bottom: 25px;
            position: relative;
            text-align: center;
            font-weight: bolder;
        }

        .heading p {
            font-size: 18px;
            color: #9b6d32;
            margin-bottom: 35px;
            text-align: center;
            padding: 0px 20px 0px 20px;
        }

        .wrapper h1 {
            font-size: 50px;
            color: #f89500;
            margin-bottom: 25px;
            position: relative;
            text-align: center;
            font-weight: bolder;
        }

        .wrapper p {
            font-size: 18px;
            color: #9b6d32;
            margin-bottom: 35px;
            text-align: center;
            padding: 0px 20px 0px 20px;
        }

        .cat-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .cat-card {
            flex: 1;
            max-width: 300px;
            margin-top:20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.6s ease;
        }

        .cat-card:hover {
            transform: translate(-12px);
        }

        .cat-container {
            width: 250px;
            height: 250px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
        }

        .cat-image img {
            width: 100%;
            height: 100%;
        }

        .cat-detail p {
            color: #633a05;
            font-size: 15px;
            margin-left: 5px;
        }


        @media screen and (max-width: 768px) {
            .cat-cards {
                flex-direction: column;
                align-items: center;
            }

            .cat-card {
                width: 85%;
                margin: 25px auto;
            }
        }
    </style>
</head>
<body>
                        <nav style="position: absolute; top: 0; right: 0; margin: 20px;">
                            <ul style="list-style-type: none; margin: 0; padding: 0;">
                                <li style="display: inline; margin-left: 20px;">
                                    <a href="{{ route('welcome') }}" style="text-decoration: none; color: #000; font-weight: bold;">Welcome</a>
                                </li>
                                <li style="display: inline; margin-left: 20px;">
                                    <a href="{{ route('home') }}" style="text-decoration: none; color: #000; font-weight: bold;">Homepage</a>
                                </li>
                                <li style="display: inline; margin-left: 20px;">
                                    <a href="{{ route('about') }}" style="text-decoration: none; color: #000; font-weight: bold;">About</a>
                                </li>
                                <li style="display: inline; margin-left: 20px;">
                                    <a href="{{ route('content') }}" style="text-decoration: none; color: #000; font-weight: bold;">Content</a>
                                </li>
                            </ul>
                        </nav>
           
    <main class="container">
        <div class="heading">
            <h1 class="text-center">CONTENT</h1><br>
            <h2 class="text-center">Me if I'm a Cat</h2>


        <div class="cat-cards">
            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="https://i.pinimg.com/564x/fc/3b/a7/fc3ba705dd2d98af62d708c1216fb12f.jpg" alt="James Anthony O. Rosales">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*me when starting to study*</b></p>
                </div>
            </div>
          
            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="https://i.pinimg.com/564x/ee/7b/dd/ee7bdd1c5e0a34a557d02f0653d33260.jpg" alt="Mae Anne B. Bongat">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*after 5 minutes* <br> (get distracted easily)</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="https://i.pinimg.com/564x/05/a9/f1/05a9f1e0b9367e693b4b3f86795c681f.jpg" alt="Mae Anne B. Bongat">
                    </div> 
                </div>
                <div class="cat-detail">
                    <p><b>*staying up late to study*</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="https://i.pinimg.com/736x/8b/b8/ec/8bb8ecf60d0f200b08c86a2b77ec9bfa.jpg" alt="Mae Anne B. Bongat">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*always sleepy*</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="https://i.pinimg.com/564x/7c/e6/2d/7ce62dc8c7c06be3c643df966962bea0.jpg" alt="Mae Anne B. Bongat">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*sleeping peacefully*</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="https://i.pinimg.com/736x/1d/3d/d3/1d3dd3336cf084f6bfba2118153f2ef0.jpg" alt="Mae Anne B. Bongat">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*baby girl coded*</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="https://i.pinimg.com/564x/73/ce/64/73ce64d41c3e920bcdc5006deaa509e0.jpg" alt="Mae Anne B. Bongat">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*likes to go anywhere (sometimes)*</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="https://i.pinimg.com/564x/a7/d0/0e/a7d00ec8d6cb34c2cd6da39107f9a6bd.jpg" alt="Mae Anne B. Bongat">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*clingy ._. *</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="https://i.pinimg.com/564x/1e/eb/ff/1eebffe0430373855875965b90ee1951.jpg" alt="Mae Anne B. Bongat">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*even the cat have a boyfriend, can't relate*</b></p>
                </div>
            </div>

            <div class="cat-card">
                <div class="cat-container">
                    <div class="cat-image">
                        <img src="https://i.pinimg.com/564x/a2/0a/6c/a20a6c197c92c066daca9ec36e6ec722.jpg" alt="Mae Anne B. Bongat">
                    </div>
                </div>
                <div class="cat-detail">
                    <p><b>*get bored easily and social battery gets drain easily*</b></p>
                </div>
            </div>

        </div>
    </main>
</body>
</html>
