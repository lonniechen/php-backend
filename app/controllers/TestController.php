<?php
class TestController
{
    public function testParam()
    {
        $var1 = $_GET['var1'];
        $var2 = $_GET['var2'];
        $var3 = $_GET['var3'];
        $var4 = $_GET['var4'];
        $var5 = $_GET['var5'];

        var_dump($var1);
        var_dump($var2);
        var_dump($var3);
        var_dump($var4);
        var_dump($var5);

        echo '<br><br>';
        
        echo (int) $var1;

        echo '<br><br>';
        
        echo (int) $var2;

        echo '<br><br>';

        if ($var1) {
            echo 'empty can do stuff <br><br>';
        } else {
            echo 'empty can NOT do stuff <br><br>';
        }

        if ($var2) {
            echo '0 can do stuff <br><br>';
        } else {
            echo '0 can NOT do stuff <br><br>';
        }

        if ($var3) {
            echo 'null can do stuff <br><br>';
        } else {
            echo 'null can NOT do stuff <br><br>';
        }

        if ($var4) {
            echo 'undefined can do stuff <br><br>';
        } else {
            echo 'undefined can NOT do stuff <br><br>';
        }

        if ($var5) {
            echo 'anything can do stuff <br><br>';
        } else {
            echo 'anything can NOT do stuff <br><br>';
        }
    }

}
