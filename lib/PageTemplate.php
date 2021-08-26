<?php
require_once("lib/Page.php");

class PageTemplate {
    public Logger $Logger;
    public Page $Page;
    public bool $DebugMode;

    public function __construct()
    {
        $this->DebugMode = file_exists('_debug_mode');
        $this->Logger = new Logger($this->DebugMode);
    }

}