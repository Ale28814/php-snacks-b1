<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $post = [
        '10-01-2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10-02-2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15-05-2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $keyPost = array_keys($post);

    for ($i = 0; $i < count($keyPost); $i++) {
        echo "Data: " .$keyPost[$i] ."<br><br>";

        $postData = $post[$keyPost[$i]];
        for ($j = 0; $j < count($postData); $j++) {
            echo "Title: ".$postData[$j]['title']. "<br>"
            ."author: ".$postData[$j]['author']. "<br>"
            ."text: ".$postData[$j]['text']."<br><br>";
        }
    }
    ?>
</body>
</html>