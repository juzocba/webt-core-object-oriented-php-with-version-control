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
            $video = new Vimeo('Vimeo Video', 'Vimeo', 'https://player.vimeo.com/video/851053438?h=8df14352d3&color=ffffff&title=0&byline=0&portrait=0');
            for($i = 0; $i < 10; $i++) {
                echo $video->getHTML();
            }
       ?>
        
    </div>
</body>

</html>