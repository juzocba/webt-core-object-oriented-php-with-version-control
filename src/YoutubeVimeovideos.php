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
        include 'Vimeo.php';

        $videos = [
            new YouTube('Chickn Nuggets', 'YouTube', 'https://www.youtube.com/embed/6FX_kkYNgJM?si=Hxoa2FKt1Us8fOUL'),
            new YouTube('Podcast', 'YouTube', 'https://www.youtube.com/embed/PK_6qpRrMFg?si=pzjLCpI-BfCV8LhP'),
            new YouTube('Seitanic', 'YouTube', 'https://www.youtube.com/embed/OqFvV61zkyw?si=w1QmtIbdKWISyiSo'),
            new YouTube('Interview', 'YouTube', 'https://www.youtube.com/embed/U_Kr_saH8ss?si=el3loGEk5hAn0Eva'),
            new YouTube(' Frostbitten Foods', 'YouTube', 'https://www.youtube.com/embed/lDcbNk2eiI8?si=TVKHSg75NeC78-Qy'),
            new Vimeo('Vimeo Video', 'Vimeo', 'https://player.vimeo.com/video/851053438?h=8df14352d3&color=ffffff&title=0&byline=0&portrait=0'),
            new Vimeo('Vimeo Video', 'Vimeo', 'https://player.vimeo.com/video/441381487?h=a21101da4b&color=ffffff&title=0&byline=0&portrait=0'),
            new Vimeo('Vimeo Video', 'Vimeo', 'https://player.vimeo.com/video/66250700?h=922b401507&color=e31b23&title=0&byline=0&portrait=0'),
            new Vimeo('Vimeo Video', 'Vimeo', 'https://player.vimeo.com/video/439314702?h=d36b73aca3&title=0&byline=0&portrait=0'),
            new Vimeo('Vimeo Video', 'Vimeo', 'https://player.vimeo.com/video/851053438?h=8df14352d3&color=ffffff&title=0&byline=0&portrait=0')
        ];



        foreach ($videos as $video) {
            echo $video->getName() . ", uploaded on ";
            echo $video->getSource() . "<br>";
            echo $video->getHTML() . "<br>";
            echo "<hr>";
        }
        ?>
    </div>
</body>
</html>
