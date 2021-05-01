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

        <meta name="description" content="Quickly calculate simple proportion by providing the base ratio and the one that you require." />
        <meta name="keywords" content="ratio, calculate, calculator, proportion">
        <meta name="author" content="Richard Muvirmi">

        <meta property="og:title" content="<?php echo $lang['appname'] ?>">
        <meta property="og:description" content="Quickly calculate simple proportion by providing the base ratio and the one that you require.">
    </head>
    <body>
        <div id="container">
            <h1><?php echo $lang['welcome'] ?></h1>
            <div id="body">
                <table cellspacing="0" border="0" >
                    <colgroup span="4" width="107"></colgroup>
                    <tr>
                        <td class="left"><strong><?php echo $lang['basevalue'] ?></strong></td>
                        <td class="right">
                            <input type="number"  class="numinput" id="basevalue" value="" max="999999" />
                        </td>
                        <td class="left"><strong><?php echo $lang['othervalue'] ?></strong></td>
                        <td class="">
                            <input type="number" class="numinput right" id="othervalue" value="" max="999999" />
                        </td>
                    </tr>
                    <tr>
                        <td class="left"><strong><?php echo $lang['wantedvalue'] ?></strong></td>
                        <td class="right">
                            <input type="number" class="numinput" id="wantedvalue" value="" max="999999" />
                        </td>
                        <td class="left"><strong><?php echo $lang['answer'] ?></strong></td>
                        <td class="right">
                            <input type="number"  id="answer" value="" disabled="true"/>
                        </td>
                    </tr>
                </table>
            </div>
            <p class="footer">
                Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </div>
    </body>
</html>
