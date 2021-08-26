<?php
class Logger{   
    private bool $DebugMode;
    public array $List;
    
    public function __construct($debugMode){
        $this->DebugMode = $debugMode;
        $this->List = array();
    }

    public function Log($msg)
    {
        if(!$this->DebugMode)
        {
            return;
        }

        $this->List[] = $msg;
    }

    public function Count()
    {
        return sizeof($this->List);
    }

    public function Item($idx)
    {
        return $this->List[$idx];
    }
}
?>