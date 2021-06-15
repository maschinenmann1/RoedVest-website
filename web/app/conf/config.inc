<?php
class configuracion
{ private $dbParams = [];

  public function __construct()
  { 
    $this->dbParams = ["driver"=>"pdo_sqlsrv", 
                       "server"=>"localhost", 
                       "port"=>"1433", 
                       "database"=>"u804940679_roedwebsite",
                       "charset"=>"utf-8",
                       "user"=>"u804940679_roedvest",
                       "pass"=>"L)74Wqgg{/n]y\[)"]; 


  }

  public function getDbParams(): Array
  { return $this->dbParams;
  }
}
