<?php
    namespace htmlFunctions;
    class htmlTags {
        static public function formatTable() {
             echo "<table cellpadding='10px' border='2px' style='border-collapse:collapse' text-align :'center' width ='100%'white-space : nowrap'font-''weight:bold'>";
        }
        static public function headerTable($text) {
            echo '<th>'.$text.'</th>';
        }
        static public function valuesTable($text) {
            echo '<td>'.$text.'</td>';
        }
        static public function breakTableRow() {
            echo '</tr>';
        }
        static public function endTable() {
            echo '</table>';
        }
    }
?>