<?php
class EmployeeDataStore {
    private $fp;
    private $buffer;
    private $rec;

    function __construct($fname){
        $this->fp = fopen($fname, "r");
    }

    function getnext(){
        if(!feof($this->fp)){
          $this->buffer = fgets($this->fp);
          $this->rec = explode(",",$this->buffer);
        }
        else{
          $this->rec = NULL;
        }
        return $this->rec; 
      }

      function __destruct(){
        fclose($this->fp);
      }

}

?>