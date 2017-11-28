<?php
    use tableDisplay\htmlTable as htmlTable;
    use collections\accounts as accounts;
    use collections\todos as todos;
    use models\account as account;
    use models\todo as todo;
    use htmlFunctions\stringFunctions as stringFunctions;
    //turn on debugging messages
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    //Defining autoload function to load undefined class
    function autoloader_class($class) {  
        $class = str_replace ('\\', '/', $class) . '.php';
        include ($class);
    }
    spl_autoload_register('autoloader_class');
    $obj=new main();
    class main {
        public function __construct() {
        //1.Accounts Table
            //Select one record 
            stringFunctions::printThis('Select One Record - Accounts Table');            
            stringFunctions::printThisToo('Record with id = 1 is selected');
            $record = accounts::findOne(1);
            htmlTable::designTable($record);
            stringFunctions::horizontalRule();
            //Select all records
            stringFunctions::printThis('Select All Records - Accounts Table');           
            $record = accounts::findAll();
            htmlTable::designTable($record);
            stringFunctions::horizontalRule();
            //Insert one record
            stringFunctions::printThis('Insert New Record - Accounts Table');              //Insert One Record
            $obj = new account();
            $obj->email = "mr669@njit.edu";
            $obj->fname = "Mona";
            $obj->lname = "Rams";
            $obj->phone = "00000000";
            $obj->birthday = "1993-09-05";
            $obj->gender = "F";
            $obj->password = "77777";
            $newID = $obj->save();
            $record = accounts::findAll();
            htmlTable::designTable($record);
            stringFunctions::horizontalRule();
            //Update one record
            stringFunctions::printThis('Update New Record - Accounts Table');              
            stringFunctions::printThisToo('Updated lname = Ramesh where id = ' .$newID);
            $obj = new account();
            $obj->id = $newID;
            $obj->lname = "Ramesh";
            $obj->save();
            $record = accounts::findAll();
            htmlTable::designTable($record);
            stringFunctions::horizontalRule();
            //Delete one record
            stringFunctions::printThis('Delete Record - Accounts Table');                //Delete One record
            $obj = new account();
            $obj->id = $newID;
            $obj->delete();
            stringFunctions::printThisToo('Record with id = '. $newID .'  is deleted');
            $record = accounts::findAll();
            htmlTable::designTable($record);
            stringFunctions::horizontalRule();
        //2.Todos Table
            //Select one record
            stringFunctions::printThis('Select One Record - Todos Table');               //Select One Record
            stringFunctions::printThisToo('Record with id = 1 is selected');
            $record = todos::findOne(1);
            htmlTable::designTable($record);
            stringFunctions::horizontalRule();
            //Select all records
            stringFunctions::printThis('Select All Records - Todos Table');              //Select All Records
            $record = todos::findAll();
            htmlTable::designTable($record);
            stringFunctions::horizontalRule();
            //Insert one record
            stringFunctions::printThis('Insert New Record - Todos Table');                 //Insert One Record
            $obj = new todo();
            $obj->owneremail = "mr669@njit.edu";
            $obj->ownerid = "070";
            $obj->createddate = "2017-11-20 00:00:00";
            $obj->duedate = "2017-11-20 00:00:00";
            $obj->message = "Namespaces is fun!";
            $obj->isdone = "1";
            $newID = $obj->save();
            $record = todos::findAll();
            htmlTable::designTable($record);
            stringFunctions::horizontalRule();
            stringFunctions::printThis('Update New Record in Todos Table');
            //Update one record
            stringFunctions::printThisToo('Updated owneremail = mr77@njit.edu where id = ' .$newID);
            $obj = new todo();
            $obj->id = $newID;
            $obj->owneremail = "mr77@njit.edu";
            $obj->save();
            $record = todos::findAll();
            htmlTable::designTable($record);
            stringFunctions::horizontalRule();
            //Delete one record
            stringFunctions::printThis('Delete Record From Todos Table');                  
            $obj = new todo();
            $obj->id = $newID;
            $obj->delete();
            stringFunctions::printThisToo('Record with id = '. $newID .'  is deleted');
            $record = todos::findAll();
            htmlTable::designTable($record);
            stringFunctions::horizontalRule();
        }
    }
?>