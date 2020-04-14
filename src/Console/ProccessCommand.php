<?php
namespace fania\Scammer\Console;
use illuminate\Console\Command;
use fania\Scammer\Scammer;
class ProccessCommand extends Command{
  protected $signature = "scammer:kill {type}";
  protected $description = "Kill The Scammer Website";

  public function handle(){
    $type = $this->argument('type');
    if(is_null(config('scammer'))){
      $this->warn("Please publish the scammer package first ! php artisan vendor:publish --tag scammer-config");
    }else{
      Scammer::kill($type);
      $this->info("The Website Has Been Killed :)");
    }

  }
}
