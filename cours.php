<?php
class Employed
{
    private $id;
    private $name;
    private $nomb; // nombredecongepris

    function __construct($id, $name, $nomb)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nomb = $nomb;
    }
    public function getid()
    {
        return $this->id;
    }
    public function setid($id)
    {
        $this->id = $id;
    }
    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name = $name;
    }
    public function getnomb()
    {
        return $this->nomb;
    }
    public function setnomb($nomb)
    {
        $this->nomb = $nomb;
    }
    function affichage()
    {
        echo $this->getid() . $this->getname() . $this->getnomb();
    }
}

$employed = new Employed(1, "laurent", 15);
$employed->affichage();
