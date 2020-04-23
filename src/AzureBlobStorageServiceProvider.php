<?php

namespace Plug2Team\Plug2AzureBlobStorage;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

final class AzureBlobStorageServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   */
  public function __construct()
  {
    Storage::extend('azure', function(){});
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }
}
