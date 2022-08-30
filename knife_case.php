<?php
include __DIR__ . '/../form/db.php';

$id = $_SESSION['id'];

$balance = $db->query("SELECT `balance` FROM `users` WHERE `id` = '$id'");
$balance = $balance->fetch_array();
$balance = $balance['balance'];

if ((strlen($balance)) == 1) {
    $balance = $balance . '.00 ₽';
} elseif ((strlen($balance)) == 2) {
    $balance = $balance . '.00 ₽';
} elseif ((strlen($balance)) == 3) {
    $balance = $balance . '.0 ₽';
} elseif ((strlen($balance)) >= 4) {
    $balance = $balance . '₽';
} else {
    $balance = $balance . '0.00 ₽';
}

$list_skins = [
    $skins_1 = ['Butterfly/Legacy.webp', 'Butterfly', 'Legacy', 'gradient_gold'],
    $skins_2 = ['M9_Bayonet/Dragon_Glass.webp', 'M9 Bayonet', 'Dragon Glass', 'gradient_gold'],
    $skins_3 = ['Scorpion/Starfall.webp', 'Scorpion', 'Starfall', 'gradient_gold'],
    $skins_4 = ['Butterfly/Dragon_Glass.webp', 'Butterfly', 'Dragon Glass', 'gradient_gold'],
    $skins_5 = ['jKommando/Luxury.webp', 'jKommando', 'Luxury', 'gradient_gold'],
    $skins_6 = ['Butterfly/Black_Widow.webp', 'Butterfly', 'Black Widow', 'gradient_gold'],
    $skins_7 = ['M9_Bayonet/Scratch.webp', 'M9 Bayonet', 'Scratch', 'gradient_gold'],
    $skins_8 = ['Scorpion/Sea_Eye.webp', 'Scorpion', 'Sea Eye', 'gradient_gold'],
    $skins_9 = ['FlipKnife/Stone_Cold.webp', 'FlipKnife', 'Stone Cold', 'gradient_gold'],
    $skins_10 = ['Karambit/Universe.webp', 'Karambit', 'Universe', 'gradient_gold'],
    $skins_11 = ['Tanto/Yakudza.webp', 'Tanto', 'Yakudza', 'gradient_gold'],
    $skins_12 = ['M9_Bayonet/Blue_Blood.webp', 'M9 Bayonet', 'Blue Blood', 'gradient_gold'],
    $skins_13 = ['jKommando/Floral.webp', 'jKommando', 'Floral', 'gradient_gold'],
    $skins_14 = ['Butterfly/Starfall.webp', 'Butterfly', 'Starfall', 'gradient_gold'],
    $skins_15 = ['Tanto/Transistor.webp', 'Tanto', 'Transistor', 'gradient_gold'],
    $skins_16 = ['Tanto/Flow.webp', 'Tanto', 'Flow', 'gradient_gold'],
    $skins_17 = ['M9_Bayonet/Scratch.webp', 'M9 Bayonet', 'Scratch', 'gradient_gold'],
    $skins_18 = ['Tanto/Pearl_Abyss.webp', 'Tanto', 'Pearl Abyss', 'gradient_gold'],
    $skins_19 = ['FlipKnife/Vortex.webp', 'FlipKnife', 'Vortex', 'gradient_gold'],
    $skins_20 = ['jKommando/Ancient.webp', 'jKommando', 'Ancient', 'gradient_gold'],
    $skins_21 = ['Karambit/Gold.webp', 'Karambit', 'Gold', 'gradient_gold'],
    $skins_22 = ['jKommando/Reaper.webp', 'jKommando', 'Reaper', 'gradient_gold'],
    $skins_23 = ['FlipKnife/Frozen.webp', 'FlipKnife', 'Frozen', 'gradient_gold'],
    $skins_24 = ['Karambit/Claw.webp', 'Karambit', 'Claw', 'gradient_gold'],
    $skins_25 = ['Tanto/Dojo.webp', 'Tanto', 'Dojo', 'gradient_gold'],
    $skins_26 = ['Tanto/Malachite.webp', 'Tanto', 'Malachite', 'gradient_gold'],
    $skins_27 = ['FlipKnife/Arctic.webp', 'FlipKnife', 'Arctic', 'gradient_gold'],
    $skins_28 = ['Karambit/Scratch.webp', 'Karambit', 'Scratch', 'gradient_gold'],
    $skins_29 = ['Karambit/Dragon_Glass.webp', 'Karambit', 'Dragon Glass', 'gradient_gold'],
];

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_case.css">
    <link rel="shortcut icon" href="/images/logotip.svg" type="image/x-icon" />
    <script type="text/javascript" src="script.js" defer></script>
    <title>TopDrop | Knife case</title>
</head>

<body>


    <div class="box_main">
        <a href="/" class="back_button">‹ Назад</a>

        <?php
        if (isset($_SESSION['verify'])) {
            print '<button class="replenish_balance_box"><span class="replenish_balance">+</span></button>';
            print ('<a href="form/signup.php" class="balance" id="balance">' . $balance) . '</a>';
        } else {
            print '<a href="form/signup.php" class="balance" id="balance">Войти</a>';
        }
        ?>
    </div>

    <div class="case_box">
        <br>
        <img class="case_img" src="/cases_img/assemblies_cases/knife_case.png" alt="knife_case">
        <form action="/case/knife_case.php" method="get"  class="factor_case">
            <div class="factor_align">
                <input value="1" id="1x" name="factor" type="radio">
                <label style="--i:1s" class="factor_label" for="1x">1x</label>
                <input value="2" id="2x" name="factor" type="radio">
                <label style="--i:2s" class="factor_label" for="2x">2x</label>
                <input value="3" id="3x" name="factor" type="radio">
                <label style="--i:3s" class="factor_label" for="3x">3x</label>
                <input value="4" id="4x" name="factor" type="radio">
                <label style="--i:4s" class="factor_label" for="4x">4x</label>
                <input value="5" id="5x" name="factor" type="radio">
                <label style="--i:5s" class="factor_label" for="5x">5x</label>
                <input value="10" id="10x" name="factor" type="radio">
                <label style="--i:6s" class="factor_label" for="10x">10x</label>
            </div>
            <audio id="case_opening" src="/sound/case_opening.mp3" type="audio/mp3"></audio>
            <button type="button" class="btn_open" onclick="tapButton()">Открыть</button>
        </form>
    </div>


<?php
    $amount = $_GET['factor'];
    if (!isset($amount)) {
        $amount = 1;
    }
?>

    <div id="roulette_box" class="roulette_box">
    <?php

    for ($s = 0; $s < $amount; $s++) {
        print('<ul class="roulette_border">');
            $rand_animate = rand(-3940, -4190);
            for ($i = 0; $i < 40; $i++) {
                $rand_skins = ($list_skins[array_rand($list_skins)]);
                print('<li style="--r:' . $rand_animate . 'px" class="roulette_items">
                <img src="/skins_img/' . $rand_skins[0] . '" alt="none" class="roulette_img">
                        <h3 class="skins_title">' . $rand_skins[1] . '</h3>
                        <h3 class="skins_name">' . $rand_skins[2] . '</h3>
                        <span class="' . $rand_skins[3] . '"></span>
                    </li>'
                );
            }
        print('</ul>');
    }
    ?>
    </div>

    <h3 style="--i:8s" class="vertical_line">Cкины</h3>
    <div class="skins_box">
        <ul>
        <?php
            for ($i = 0; $i < 24; $i++) {
                $skins = ($list_skins[$i]);
                print(
                    '<li class="skins_item">
                        <img src="/skins_img/' . $skins[0] . '" alt="none" class="skins_img">
                        <h3 class="skins_title">'.$skins[1].'</h3>
                        <h3 class="skins_name">'.$skins[2].'</h3>
                        <span class="' . $skins[3] . '"></span>
                    </li>'
                );
            }
            ?>
        </ul>
    </div>
</body>

</html>