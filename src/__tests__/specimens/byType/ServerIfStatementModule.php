<?php
/* NOTICE: Generated file; Do not edit by hand */
use VK\Elephize\Builtins\Stdlib;
use VK\Elephize\Builtins\CJSModule;

class ServerIfStatementModule extends CJSModule {
    /**
     * @var ServerIfStatementModule $_mod
     */
    private static $_mod;
    public static function getInstance(): ServerIfStatementModule {
        if (!self::$_mod) {
            self::$_mod = new ServerIfStatementModule();
        }
        return self::$_mod;
    }

   /**
    * @var string $sis_aa
    */
   public $sis_aa;
   /**
    * @var string $sis_ab
    */
   public $sis_ab;
   /**
    * @var string $sis_ac
    */
   public $sis_ac;

   private function __construct() {
       $this->sis_aa = "test1";
       $this->sis_ab = "test2";
       $this->sis_ac = $this->sis_aa;
       \VK\Elephize\Builtins\Console::log($this->sis_ab, $this->sis_aa, $this->sis_ac);
   }
}
