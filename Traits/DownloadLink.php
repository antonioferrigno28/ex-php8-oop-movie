<?php 
trait DownloadLink { 

    //PROTECTED così può essere utilizzato all'interno della classe o dalle classi che derivano da essa
    //Ed evitiamo "magagne" del tipo $Movie->downloadLink ="a"
    protected $downloadLink;

    public function setDownloadLink($newDownloadLink){
        $this->downloadLink = $newDownloadLink;
    }

    public function getDownloadLink(){
        return $this->downloadLink;
    }
}
?>