<?php

class Admin
{
    private $id;
    private $name;
    private $pass;
    private static $admins=[];


   // Admin constructor  $id  $name $pass

    public function __construct ($id, $name, $pass)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pass = $pass;
        Admin::$admins;

    }


      // @return mixed

    public function getId ()
    {
        return $this->id;
    }
    public function getName ()
    {
        return $this->name;
    }
    public function getPass ()
    {
        return $this->pass;
    }

}
