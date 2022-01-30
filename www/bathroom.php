<?php
/**
 * creats the object bath room and transfers the attributes from the room
 * class to the bathroom class.
 * @package 
 */
include_once 'room.php';

class bathroom
/**
 * the class attributes that are menat to define the object of the room.
 */
{
    private $sink, // make of the sink.
            $bathtub, // make of the bath tub.
            $shower, // make of the shower.
            $toilet, // make of the toilet.
            $carpet; // texture, shape, and color of the carpet.

    public function __construct($sink=null, $bathtub=null, $shower=null, $toilet=null, $carpet=null)
    //If the variable equals null then add nothing if it doesn't then add the variable//
    {
        $this -> sink = $sink == null ? "" : $sink ;
        $this -> bathtub = $bathtub == null ? "" : $bathtub ;
        $this -> shower = $shower == null ? "" : $shower ;
        $this -> toilet = $toilet == null ? "" : $toilet ;
        $this -> carpet = $carpet == null ? "" : $carpet ;
    }
    /**
     * set the make of the sink.
     * @param string $sink_make 
     * @return void 
     */
        function setsink(string $sinkshape, string $sinkmaterials)
        {
        $this->sink= array(
            'shape' => $sinkshape,
            'material' => $sinkmaterials
            );
        }
    /**
     * gets the make of the sink.
     * @return mixed 
     */
        function getsink()
        {
            return $this->sink;
        }
    /**
    * sets the make of the bathtub.
    * @param string $bathtub_make 
    * @return void 
    */
        function setbathtub(string $tubmaterial, string $tubshape)
        {
            $this->bathtub = array(
                'material' => $tubmaterial,
                'shape' => $tubshape
            );
        }
    /**
     * gets the make of the bathtub.
     * @return mixed 
     */
        function getbathtub()
        {
            return $this->bathtub;
        }
    /**
     * sets the make of the shower.
     * @param string $shower_make 
     * @return void 
     */
        function setshower(string $showermaterial, string $showershape)
        {
            $this-> shower = array(
                'material' => $showermaterial,
                'shape' => $showershape
            );
        }
            /**
             * gets the make of the shower.
             * @return mixed 
             */
                function getshower()
            {
                return $this->shower;
            }
            /**
             * set the make of the toilet.
             * @param string $toilet_make 
             * @return void 
             */
            function settoilet(string $toilettype, string $toiletmaterial)
            {
                $this->toilet = array(
                    'type' => $toilettype,
                    'material' => $toiletmaterial
                );
            }
            /**
             * gets the make of the toilet.
             * @return mixed 
             */
                function gettoilet()
                {
                    return $this->toilet;
                }
            /**
             * sets the carpet texture, shape, color, and # of carpets.
             * @param string $carpettexture 
             * @param string $carpetshape 
             * @param string $carpetcolor 
             * @return void 
             */
                function setcarpet(string $carpettexture, string $carpetshape, string $carpetcolor, int $numberof )
                {
                $this->carpet= array(
                    'texture' => $carpettexture,
                    'shape' => $carpetshape,
                    'color' => $carpetcolor,
                    'numberof' => $numberof
                );
                }
            /**
             * gets the  carpet texture, shape, and color.
             * @return mixed 
             */
                function getcarpet()
                {
                    return $this-> carpet;
                }
}

$bath = new bathroom();
$bath->setsink('oval', 'steel');
$bath->setbathtub('steel', 'beegoval');
$bath->setshower('steelandmoresteel', 'rectangle');
$bath->settoilet('kohler', 'steel');
$bath->setcarpet('soft', 'rectangle', 'teal', 3);
print_r($bath);
