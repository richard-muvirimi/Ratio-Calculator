<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $lang['appname'] ?></title>

    <?php
    foreach ($css as $asset) {
        echo '<link rel="stylesheet" type="text/css" href="' . $asset . '">';
    }
    foreach ($js as $asset) {
        echo '<script src="' . $asset . '"></script>';
    }
    ?>

    <meta property="og:image" content="<?php echo base_url("assets/img/screenshot.png") ?>">
    <meta property="og:url" content="<?php echo base_url() ?>">

    <meta name="description" content="<?php echo $lang['description'] ?>" />
    <meta name="keywords" content="ratio, calculate, calculator, proportion">
    <meta name="author" content="Richard Muvirmi">

    <meta property="og:title" content="<?php echo $lang['appname'] ?>">
    <meta property="og:description" content="<?php echo $lang['description'] ?>">
</head>

<body>
    <div class="w3-container">
        <div class="w3-card-4">
            <div class="w3-container w3-padding-24">
                <h1 class="w3-center"><?php echo $lang['welcome'] ?></h1>
                <p class="w3-center"><?php echo $lang['description'] ?></p>
            </div>
            <div class="w3-container">
                <div class="w3-row-padding">
                    <div class="w3-half w3-padding-16 w3-container">
                        <input type="number" class="numinput w3-input" id="basevalue" value="" max="999999" />
                        <label for="basevalue"><?php echo $lang['basevalue'] ?></label>
                    </div>
                    <div class="w3-half w3-padding-16 w3-container">
                        <input type="number" class="numinput w3-input" id="othervalue" value="" max="999999" />
                        <label for="othervalue"><?php echo $lang['othervalue'] ?></label>
                    </div>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-half w3-padding-16 w3-container">
                        <input type="number" class="numinput w3-input" id="wantedvalue" value="" max="999999" />
                        <label for="wantedvalue"><?php echo $lang['wantedvalue'] ?></label>
                    </div>
                    <div class="w3-half w3-padding-16 w3-container">
                        <input class="w3-input" type="number" id="answer" value="" disabled="true" />
                        <label for="answer"><?php echo $lang['answer'] ?></label>
                    </div>
                </div>

                <div class="w3-container">
                    <p class="footer w3-padding-16 w3-right-align">
                        Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>