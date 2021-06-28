<?php
    $curl = curl_init('http://dev.virtualbuilding.fr/api/app/immobel-aubervilliers');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cert.cer');
    $data = curl_exec($curl);
    if ($data === false) {
        var_dump(curl_error($curl));
    } else {
        $data = json_decode($data, true); 
    }
    curl_close($curl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/home.css">
    <script src="js/sidebar.js"></script>
    <title>Exercice 2</title>
</head>
<body>
    <div id='sidebar'>
        <div class="toggle-btn" onclick="show()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li>ACCUEIL</li>
            <li>APPARTEMENTS</li>
            <li>GALERIE</li>
        </ul>
    </div>
    <div class='header'>
        <div class='title'>
            <h1><?= $data['pages']['laResidence']['blocs'][0]["bloc_datas"]['title']?></h1>
            <div class='white-space'></div>
            <span></span>
            <div class='white-space2'></div>
        </div>
    </div>
    <div class="main">
        <img class="visual" src="https://clients.virtualbuilding.fr/src/media/programmes/immobel-aubervilliers/images/bloc/b657_01-immobel-aubervilliers-ilota-vue-rue-05.jpg" alt="Virtual Building" >
        <div class="description">
            <h2>Description</h2>
            <div class='white-space'></div>
            <span></span>
            <div class="white-space2"></div>
            <?= $data['pages']['laResidence']['blocs'][0]["bloc_datas"]['content']?>
            <div class='white-space2'></div>
            <div class='white-space2'></div>
            <div class="button">
                <a href="#" class=btn>En Savoir Plus</a>
            </div>
        </div>
        
    </div>
</body>
</html>