<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
            background-image: url(https://i.pinimg.com/564x/8c/8c/df/8c8cdfb6eac2b3bf67ced046616b47ed.jpg);
            background-size: cover; 
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-position: center;
        }

        a {
            text-decoration: none;
            color: #444; 
        }

        a:hover {
            color: #835c5c; 
        }

        .text-center {
            font-weight: bolder;
            text-transform: uppercase;
            color: #f89500;
        }

        .container {
            margin-bottom: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about-box {
            border: 2px solid #f89500;
            padding: 20px;
            max-width: 800px;
            background-color: #fff;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .heading h1 {
            font-size: 50px;
            color: #f89500;
            margin-bottom: 25px;
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
        <div class="about-box">
            <div class="heading">
                <h1 class="text-center">About</h1>
                <p>
                    I chose a cat as my animal to present myself because except for having a cat, I think I’m a lot like a cat in many ways. 
                    Just as cats are known for their independence, I value my own space and enjoy spending time alone, finding comfort in my own company 
                    since I’m actually a shy person, and if we are not close, you’ll think that I’m a cold person(I get that a lot) 
                    because I don’t really like socializing to people, I don’t know. I’m also naturally curious, like exploring new ideas and places, and observing the world around me. 
                    And also, to incorporate my name in this art, I draw my name as one of the tabby markings of the cat, which I find very cute. 
                <br>
                <br>
                    A cat’s personality and my personality can be closely related to one of the pillars of Bicol University which is CHARACTER. 
                    Cats embody resilience and loyalty, often forming deeps bond with their owners while maintaining a strong sense of independence. 
                    Just like me, who have a relationship with people especially to those who I’m close to like my family and friends, and also, I’m fun to be with too, that’s why. 
                    I also draw a pillow since cats are known for their love of napping, I also love sleeping because I find comfort in it, and I value rest a lot.
                </p>
            </div>
        </div>
    </main>
</body>
</html>
