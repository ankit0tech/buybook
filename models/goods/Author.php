<?php

spl_autoload_register(
  // @param $class
  function ($class){
    $arr=['goods','interfaces','orders','reviews','serve'];
    foreach ($arr as $val) {
        $path=__DIR__."/../$val/$class.php";
        if (file_exists($path))
            require_once $path;
    }
});


  // Class Author

class Author
{

    private $id;
    private $name;
    private $country;

    public function getName ()
    {
        return $this->name;
    }


      // @return mixed
    public function getCountry ()
    {
        return $this->country;
    }

    public function getId ()
    {
        return $this->id;
    }

     //  Author constructor $name $country

    public function __construct($name,$id=null, $country=null)
    {
        $this->name = $name;
        $this->country = $country;
        $this->id=$id;
    }


}
