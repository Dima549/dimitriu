<?php

namespace dimitriu;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface 
{
    public function _write()
    {
        $log = '';        
        foreach($this->log as $el){
            $log .= $el."\n";
        }
        echo $log;
        $d = new \DateTime();
        $file = "./log/". $d->format('d-m-Y\TH_i_s.u').".log";
        if (!is_dir('./log/')) {
            mkdir("./log/");
        }
        file_put_contents($file,$log);
    }
    public static function log($str):void
    {
        array_push(LogAbstract::Instance()->log, $str);
    }

    public static function write():void
    {
        LogAbstract::Instance()->_write();
    }
}