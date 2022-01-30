<?php
include_once 'room.php';

class kitchen
{
    private $counters,
            $sink,
            $fridge,
            $diningtable,
            $cabinets,
            $drawers,
            $windows;

    public function __construct($counters=null, $sink=null, $fridge=null, $diningtable=null, $cabinets=null, $drawers=null, $windows=null)
    {
        //If the variable equals null then add nothing if it doesn't then add the variable//
        $this->counters = $counters == null ? "" : $counters;
        $this->sink = $sink == null ? "" : $sink;
        $this->fridge = $fridge == null ? "" : $fridge;
        $this->diningtable = $diningtable == null ? "" : $diningtable;
        $this->cabinets = $cabinets == null ? "" : $cabinets;
        $this->drawers = $drawers == null ? "" : $drawers;
        $this->windows = $windows == null ? "" : $windows;
    }

    function setcounters(string $countermaterial, string $counterclr)
    {
        $this->counters=array(
            'material' => $countermaterial,
            'color' => $counterclr,
        );
    }

    function getcounters()
    {
        return $this->counters;
    }

    function setsink(string $sinkmaterial, int $numberofsinks)
    {
        $this->sink=array(
            'material' => $sinkmaterial,
            'numberof' => $numberofsinks
        );
    }

    function getsinks()
    {
        return $this->sink;
    }

    function setfridge(string $fridgesize, int $fridgenumber, string $fridgecolor)
    {
        $this->fridge=array(
            'size' => $fridgesize,
            'numberof' => $fridgenumber,
            'clr' => $fridgecolor
        );
    }

    function getfridge()
    {
        return $this->fridge;
    }

    function setdiningtable(string $tablematerial, int $numoftablechairs, string $tablecolor)
    {
        $this->diningtable=array(
            'material'=>$tablematerial,
            'numofchairs'=> $numoftablechairs,
            'clr' => $tablecolor
        );
    }

    function getdiningtable()
    {
        return $this->diningtable;
    }

    function setcabinets(int $numberofcabinets, string $cabinetclr, string $cabinetsize)
    {
        $this->cabinets=array(
            'numberof' => $numberofcabinets,
            'cabinetclr' => $cabinetclr,
            'size' => $cabinetsize
        );
    }

    function getcabinets()
    {
        return $this->cabinets;
    }

    function setdrawers(int $numberof, string $drawersclr, string $drawersize)
    {
        $this->drawers=array(
            'numberof' => $numberof,
            'drawercolor' => $drawersclr,
            'drawersize' => $drawersize
        );
    }

    function getdrawers()
    {
        return $this->drawers;
    }

    function setwindows(int $numberof, string $shape, string $windowclr)
    {
        $this->windows=array(
            'number' => $numberof,
            'windowsshape' => $shape,
            'windowclrtint' => $windowclr
        );
    }

    function getwindows()
    {
        return $this->windows;
    }

    function getdiningchairs()
    {
        return $this -> diningchairs;
    }

    public function __toString()
    {
        return $this;
    }

    
}

$kit = new kitchen();
$kit->setcounters('stone','blue');
$kit->setfridge('big', 1, 'white');
$kit->setsink('marbel', 2);
$kit->setdiningtable('wood', 6, 'reddishbrown');
$kit->setcabinets(16, 'orange', 'medium');
$kit->setdrawers(10, 'orange', 'small');
$kit->setwindows(8, 'square', 'n/a');
print_r($kit);