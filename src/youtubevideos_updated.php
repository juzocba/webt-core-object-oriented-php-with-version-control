<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
            height: 100%;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        header {
            text-align: center;
            margin-bottom: 10px;
        }

        .videoentry {
            background-color: #C7E4FF;
            border-radius: 5px;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-right: 100px;
            padding-left: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }
    </style>
</head>
<body>
    <header>
        <h1>Video.net</h1>
        <p>Have fun on our webpage, you can watch several YouTube and Vimeo videos</p>
    </header>
    <div class="videoentry">
        <?php
        include 'Youtube.php';
        $video = new Youtube('Test', 'YouTube', 'https://www.youtube.com/embed/RQkdB49hBTc?si=jwfaWJfC1gRrSNC8');
        for ($i = 0; $i < 10; $i++) {
            echo ($i+1) . ": " . $video->getName() . ", uploaded on ";
            echo $video->getSource() . "<br>";
            echo $video->getHTML() . "<br>";
            echo "<hr>";
        }
        ?>
    </div>
</body>
</html>
