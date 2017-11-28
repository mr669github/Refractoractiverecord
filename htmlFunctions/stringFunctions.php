<?php
    namespace htmlFunctions;
    class stringFunctions
    {
        static function printThis($string)
        {
            echo '<h1 style="text-align:center;">'.$string.'</h1>';
        }
        static function printThisToo($string)
        {
            echo '<h3>'.$string.'</h3>';
        }
        static function horizontalRule() {
            echo '<hr>';
        }
    }
?>