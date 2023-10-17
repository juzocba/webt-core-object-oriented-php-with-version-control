<!DOCTYPE html>
<html lang="en">
    <style>
        .videoentry {
            width:100%;
            height: auto;
        }
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    </style>

<body>
    <header>
        <h1>Plain HTML</h1>
        <p>This is my updated plain html site</p>
    </header>
    <div class="videoentry">
       <?php
            include 'phpForVideo.php';
            $video = new Youtube('', 'YouTube', 'https://www.youtube.com/embed/RQkdB49hBTc?si=jwfaWJfC1gRrSNC8');
            for($i = 0; $i < 10; $i++) {
                echo $video->getName() . '\n';
                echo $video->getSource() . '\n';
                echo $video->getHTML() . '\n';
            }
       ?>
        
    </div>
</body>

</html>