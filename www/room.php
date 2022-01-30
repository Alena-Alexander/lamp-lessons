<?php
/////////////////////////////////////////////////////////////////////
/**
 * create object class room 
 */
class room
{
  // THESE ARE CLASS ATTRIBUTES OR VARIABLES; 
  // define contents of object room OR [ $this->VARIABLE ]
  private $color,   // color of room
  $bed_type,       
  $door_type,      // make/material, color
  $tv,             // make/brand
  $number_of_fans, 
  $desk_kind, 
  $light,          // shape, type and color
  $dimension,      // length, width and height
  $closet,
  $carpet,
  $curtains,
  $window;         // number of windows


// a function that defines an objects properties //
  public function __construct($color=null, $bed_type=null, $door_type=null, $tv=null, $number_of_fans=null, $desk_kind=null, $light=null, $dimension=null, $closet=null, $carpet=null, $curtains=null, $window=null)
  {
      //If the variable equals null then add nothing if it doesn't then add the variable//
      $this->color = $color == null ? "" : $color;
      $this->bed_type = $bed_type == null ? "" : $bed_type;
      $this-> door_type = $door_type == null ? "" : $door_type;
      $this->tv = $tv == null ? "" : $tv;
      $this->number_of_fans = $number_of_fans == null ? "" : $number_of_fans;
      $this->desk_kind = $desk_kind == null ? "" : $desk_kind;
      $this->light = $light == null ? "" : $light;
      $this->dimension = $dimension == null ? "" : $dimension;
      $this-> closet = $closet == null ? "" : $closet;
      $this-> carpet = $carpet == null ? "" : $carpet;
      $this -> curtains = $curtains == null ? "" : $curtains;
      $this-> window = $window == null ? "" : $window;
  }
 /**
  * sets the room color
  * @param $clr
  */
   function setColor(string $clr)
   {
     $this->color = $clr;
   }
   /**
    * get room color
    */
   function getColor()
   {
     return $this->color;
   }
   /**
    * sets how many windows in the room
     * @param int $number_of_windows 
     * @return void 
     */
   function setwindow (int $number_of_windows)
   {
     $this->window = $number_of_windows;
   }
    /**
     * get the number of windows in the room
     * @return mixed 
     */
   function getwindow()
   {
     return $this->window;
   }
    /**
     * set the type of bed

     */
    function setbed(string $bed_type){
     $this->bed_type = $bed_type;
   }
    /**
     * gets the type of bed
     * @return mixed 
     */
    function getbed(){
     return $this->bed_type;
   }
    /**
     * sets the door type and color
     * @param string $door_make 
     * @param string $door_color 
     * @return void 
     */
    function setdoor(string $door_make, string $door_color){
     $this->door_type = array(
       'type' => $door_make,
       'color' => $door_color
     );
    }
    /**
     * gets the door type and color
     * @return mixed 
     */
   function getdoor(){
     return $this->door_type;
   }
    /**
     * sets the tv model/type
     * @param string $tv_make 
     * @return void 
     */
   function settv(string $tv_make){
     $this->tv = $tv_make;
   }
    /**
     * gets the tv model/type
     * @return mixed 
     */
   function gettv()
   {
     return $this->tv;
   }
    /**
     * sets the number of fans in the room
     * @param string $number_of_fans 
     * @return void 
     */
   function setfan(string $number_of_fans)
   {
      $this->number_of_fans = $number_of_fans;
   }
    /**
     * gets the number of fans in the room
    */
   function getfan()
   {
     return $this->number_of_fans;
   }
    /**
     * sets the type of desk
     * @param string $kind_of_desk 
     * @return void 
     */
   function setdesk(string $kind_of_desk)
   {
     $this->desk_kind = $kind_of_desk;
   }
    /**
     * gets the type of desk
     * @return mixed 
     */
   function getdesk()
   {
     return $this->desk_kind;
   }
    /**
     * sets the shape, type, and color of the light
     * @param string $shape 
     * @param string $type 
     * @param string $color 
     * @return void 
     */
   function setlight(string $shape, string $type, string $color, int $numberof)
   {
     $this->light =  array(
       'shape' => $shape,
       'type' => $type,
       'color' => $color,
       'numberof' => $numberof
     );
   }
    /**
     * gets the shape, type, and color of the light
     * @return mixed 
     */
   function getlight()
   {
     return $this->light;
   }
    /**
     * sets the width, height, and length of the room dimensions
     * @param int $length 
     * @param int $width 
     * @param int $height 
     * @return void 
     */
   function setDimension(int $length, int $width, int $height)
   {
     $this->dimension = array(
       'length' => $length,
       'width' => $width,
       'height' => $height
     );
   }
    /**
     * gets the width, height, and length of rooms dimensions
     * @return int[] 
     */
   function getDimension()
   {
     return $this->dimension;
   }
    /**
     * sets the numeber of closets and the type of closet in the room
     * @param int $numberof 
     * @param string $closettype 
     * @return void 
     */
   function setcloset(int $numberof, string $closettype)
   {
     $this->closet = array (
        'numberof' => $numberof,
        'type' => $closettype
     );
   }
    /**
     * gets the type and numbr of closets in the room
     * @return mixed 
     */
   function getcloset()
   {
     return $this->closet;
   }
   /**
    * sets the size, shape, color, and # of carpets
    * @param string $carpetsize 
    * @param string $carpetshape 
    * @param string $carpetcolor 
    * @param int $numberof 
    * @return void 
    */
   function setcarpet (string $carpetsize, string $carpetshape, string $carpetcolor, int $numberof)
   {
     $this-> carpet = array(
          'size' => $carpetsize,
          'shape' => $carpetshape,
          'color' => $carpetcolor,
          'numberof' => $numberof
     );
   }
  /**
   * gets the carpet size, shape, #, and color
   * @return mixed 
   */
   function getcarpet ()
   {
     return  $this->carpet;
   }
   /**
    * sets the size, number and materials of the curtains
    * @param string $curtainsize 
    * @param int $numberofcurtains 
    * @param string $curtainmaterials 
    * @return void 
    */
   function setcurtains(string $curtainsize, int $numberofcurtains, string $curtainmaterials)
   {
     $this -> curtains = array(
      'size' => $curtainsize,
      'numberof' => $numberofcurtains,
      'material' => $curtainmaterials
     );
   }
   /**
    * gets the material, size, and number of the curtains
    * @return mixed 
    */
   function getcurtains()
   {
     return $this -> curtains;
   }
}  


$room = new room();
$room->setColor('lightblue');
$room->setwindow(2);
$room->setbed('oneperson');
$room->setdoor('rectangular', 'white');
$room->settv('rectangle');
$room->setcloset(1, 'slidein');
$room->setcarpet('big', 'square', 'brownredgreenwhite', 1);
$room->setcurtains('big', 2, 'cotten');
$room->setdesk('woodendesk');
$room->setDimension(50, 20, 40);
$room->setfan(1);
$room->setlight('circular', 'bulb', 'white', 4);

print_r($room);