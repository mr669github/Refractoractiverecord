<?php
    namespace tableDisplay;
    use htmlFunctions\htmlTags as htmlTags;
    class htmlTable {
        static function designTable($record) {
            {
            htmlTags::formatTable();
            foreach($record[0] as $key=>$value) {
                htmlTags::headerTable($key);
            }
            htmlTags::breakTableRow();
            foreach($record as $key=>$value) {
                foreach($value as $key2=>$value2) {
                    htmlTags::valuesTable($value2);
                }
                htmlTags::breakTableRow();
            }
            htmlTags::endTable();
        }
    }
}
?>