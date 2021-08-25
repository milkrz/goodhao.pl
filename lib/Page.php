<?php
class Page{   
    public string $PageContent;
    public string $PageJs;
    public string $PageLayout;

    public string $HeaderBackground;
    public string $Title;

    public function __construct(string $pageContent, string $pageLayout){        
        $this->PageContent = $pageContent;
        $this->PageJs = substr($pageContent,0,strlen($pageContent)-3)."js";
        $this->PageLayout = $pageLayout;
    }
}
?>