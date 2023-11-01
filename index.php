<?php

function divideArray4($files)
{
    $counter = 0;
    $divided = [];
    foreach ($files as $img_source) {
        $divided[$counter][] = $img_source;
        $counter += 1;
        if ($counter == 4) {
            $counter = 0;
        }
    }
    return $divided;
}

$path = "images/";
$files = array_diff(scandir($path), array('.', '..'));
$divided = divideArray4($files);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="John Spice">
    <meta name="description" content="description of the website.">
    <title>Image Gallery</title>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.ico">
</head>
<body>

<main>
    <section class="content">
        <div class="gallery">
            <?php
            foreach ($divided as $images) { ?>
                <div class="column">
                    <?php foreach ($images as $image) {
                        $img_source = $path . $image ?>
                        <div class="image_container">
                            <span><i class="fa-solid fa-copy"></i></span>
                            <a style="display: none"><?php echo "https://www.brunobouwman.nl/" . $img_source ?></a>
                            <img src="<?php echo $img_source ?>" alt="cool image">
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

    </section>
</main>

<script src="https://kit.fontawesome.com/947c4c8fa0.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
