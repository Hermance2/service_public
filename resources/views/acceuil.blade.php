<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueille</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>CSS Template</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            header {
                background-color: linear-gradient(Blue, skyblue);
                background-image: linear-gradient(Blue, skyblue);
                padding: 30px;
                text-align: center;
                font-size: 35px;
                color: white;
                height: 150px;
            }
            nav {
                float: left;
                width: 30%;
                height: 450px;
                background: #ccc;
                padding: 20px;
            }
            nav {
                background-color: rgb(236, 221, 221);
                padding: 0;
            }

            article {
                float: left;
                padding: 20px;
                width: 70%;
                background-color: rgb(250,250,250);
                height: 450px;
            }
            section::after {
                content: "";
                display: table;
                clear: both;
            }
            footer {
                background-color: #777;
                padding: 10px;
                text-align: center;
                color: white;
                height: 100px;
            }
            @media (max-width: 600px) {

                nav,
                article {
                    width: 100%;
                    height: auto;
                }
            }

        </style>
    </head>
    <body>
        <header>
            <h3>CitizenConnect</h3>
        </header>

        <section>
            <nav>
                
            </nav>

            <article>
                
            </article>
        </section>

        <footer>
            {{-- <p>Copyright 2024</p> --}}
        </footer>

    </body>
    </html>


</body>
</html>
