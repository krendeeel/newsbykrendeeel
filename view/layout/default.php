<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title ?>
    </title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .wrapper {
            width: 100vw;
            height: 100vh;
        }

        .date {
            background-color: rgb(135, 14, 117);
            padding: 0 5px;
            color: white;
            margin-right: 5px;
        }

        h3 {
            margin: 10px 0;
        }

        article {
            margin-top: 20px;
        }

        p {
            padding-top: 10px;
            text-align: justify;
        }

        a {
            text-decoration: none;
            color: blue;
            border-bottom: 1px solid blue;
        }

        .content {
            margin: 0 auto;
            padding: 1rem 10px 0 10px;
            max-width: 1080px;
        }

        .pagination {
            display: flex;
            flex-wrap: wrap;
            gap: 3px;
            margin: 0 auto;
        }


        .page {
            display: flex; 
            align-items: center;
            justify-content: center;
            border: 1px solid rgb(176, 173, 173);
            background-color: rgb(200, 191, 191);
            border-radius: 2px;
            font-size: 14px;
            width: 30px;
            font-weight: 500;
            height: 17px;
            cursor: pointer;
            
        }

        .activepage {
            display: flex; 
            align-items: center;
            justify-content: center;
            border: 1px solid rgb(176, 173, 173);
            background-color: rgb(135, 14, 117);
            color: white;
            font-weight: 500;
            border-radius: 2px;
            font-size: 14px;
            width: 30px;
            height: 17px;
            cursor: pointer;
        }

        .exit {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <?php
                echo $content;
            ?>
        </div>
    </div>
</body>
</html>
