<?php
class PageTemplate {
    public string $PageTitle;    
    public string $PageContent;
    public string $PageJs;
    public bool $DebugMode;

    public function __construct()
    {
        $this->DebugMode = file_exists('_debug_mode');
    }
}