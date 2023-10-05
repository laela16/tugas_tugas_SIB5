<?php
include_once 'top.php';
include_once 'menu.php';

$email = "nurlaela.nl1616@gmail.com";
    $no_tlp = "085779284161";
    $telegram = "0831667281";
    $github = "laela16";
?>
<center>
<dl text-align="center">
        <dt>
            Contact <br><br>
        </dt>
            <dt>
                Whatsapp
            </dt>
                <dd>
                    <?= $no_tlp ?> <br><br>
                </dd>
            <dt>
                Email
            </dt>
                <dd>
                     <?= $email ?><br><br>
                </dd>
            <dt>
                Telegram
            </dt>
                 <dd>
                    <?= $telegram ?><br><br>
                 </dd>
            <dt>
                Github
            </dt>
                <dd>
                    <?= $github ?><br><br>
                </dd>
    </dl>
</center>
<?php
include_once 'bottom.php';

?>