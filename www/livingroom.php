<?php
    /**
     * creates the living room class and tranfers the attributes from the room class to the living room class
     * @package 
     */
    include_once 'room.php';

    class livingroom
    /**
     * the attributes that are meant to define the objects of the living room
     */
{
       private $couch,
       $table,
       $windows,
       $shelve,
       $curtains,
       $plants;

       public function __construct($couch=null, $table=null, $windows=null, $shelve=null, $curtains=null, $plants=null)
    //If the variable equals null then add nothing if it doesn't then add the variable//
        {
            $this -> couch = $couch == null ? "" : $couch ;
            $this -> table = $table == null ? "" : $table ;
            $this -> windows = $windows == null ? "" : $windows ;
            $this -> shelve = $shelve == null ? "" : $shelve ;
            $this -> curtains = $curtains == null ? "" : $curtains ;
            $this -> $plants = $plants == null ? "" : $plants;
        }

        /**
         * sets the material and the color of the couch
         * @param string $couchmaterial 
         * @param string $couchcolor 
         * @return void 
         */
       function setcouch(string $couchmaterial, string $couchcolor)
       {
            $this->couche = array(
                'material' => $couchmaterial,
                'color' => $couchcolor 
            );
       }
       /**
        * gets the color and material of the couch
        * @return mixed 
        */
       function getcouch()
       {
           return $this->couch;
       }
       /**
        * sets the table size, material, and color
        * @param string $tablematerial 
        * @param string $tablesize 
        * @param string $tablecolor 
        * @return void 
        */
       function settable(string $tablematerial, string $tablesize, string $tablecolor)
       {
           $this->table = array(
               'material' => $tablematerial,
               'size' => $tablesize,
               'color' => $tablecolor
           );
       }
       /**
        * gets the table size, material, and color
        * @return mixed 
        */
        function gettable()
        {
            return $this->table;
        }
        /**
         * sets the windows color, size and shape
         * @param string $windowcolor 
         * @param string $windowshape 
         * @return void 
         */
        function setwindows(string $windowcolor, string $windowshape, string $windowsize)
        {
            $this->windows= array(
                'color' => $windowcolor, 
                'shape' => $windowshape,
                'size' => $windowsize
            );
        }
        /**
         * gets the windows color, shape, and size
         * @return mixed 
         */
        function getwindows()
        {
            return $this->windows;
        }
        /**
         * sets the material and the size of the shelves
         * @param string $shelvematerial 
         * @param string $shelvesize 
         * @return void 
         */
        function setshelve(string $shelvematerial, string $shelvesize)
        {
            $this->shelve= array(
                'material' => $shelvematerial,
                'size' => $shelvesize
            );
        }
        /**
         * gets the material and the size of the shelves
         * @return mixed 
         */
        function getshelve()
        {
            return $this -> shelve;
        }
        /**
         * sets the size, material, and the number of curtains
         * @param string $curtainsize 
         * @param int $numberofcurtains 
         * @param string $curtainmaterials 
         * @return void 
         */
        function setcurtains(string $curtainsize, int $numberofcurtains, string $curtainmaterials)
        {
            $this -> curtains= array(
                'size' => $curtainsize,
                'numberof' => $numberofcurtains,
                'material' => $curtainmaterials
            );
        }
        /**
         * gets the size, number, and the material of the curtains
         * @return mixed 
         */
        function getcurtains()
        {
            return $this->curtains;
        }
        /**
         * set the plants type and size
         * @param string $plantype 
         * @param string $plantsize 
         * @return void 
         */
        function setplants(string $plantype, string $plantsize)
        {
            $this->plants= array(
                'type' => $plantype,
                'size' => $plantsize
            );
        }
        /**
         * gets the plants type and size
         * @return mixed 
         */
        function getplants()
        {
        return $this->plants;
        }
}


$liv = new livingroom();
$liv->setcouch('leather', 'black');
$liv->setcurtains('big', 4, 'cloth');
$liv->setplants('draceana', 'big and tall');
$liv->setshelve('wood', 'big');
$liv->settable('woodandglass', 'big', 'brown');
$liv->setwindows('white', 'rectangle', 'big');
print_r($liv);