<?php
namespace fania\Scammer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
class ScammerServiceProvider extends ServiceProvider{
  public function boot(){
    $this->registerPublishing();
    $this->loadViewsFrom(__DIR__.'/../resources/views' , 'scammer');
    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
  }

  public function register(){
    $this->commands([
      Console\ProccessCommand::class,
    ]);
  }

  protected function registerPublishing(){
    $this->publishes([
      __DIR__.'/../config/scammer.php' => config_path('scammer.php')
    ] , 'scammer-config');
  }
}
