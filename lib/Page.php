<?php
class Page{   
    public string $PageTitle;
    public string $PageContent;
    public string $PageJs;
    public string $PageLayout;

    public function __construct(string $pageContent, string $pageLayout, string $pageTitle){        
        $this->PageContent = $pageContent;
        $this->PageJs = substr($pageContent,0,strlen($pageContent)-3)."js";
        $this->PageLayout = $pageLayout;
        $this->PageTitle = $pageTitle;                
    }
}
?>