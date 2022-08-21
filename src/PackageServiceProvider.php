<?php


class PackageServiceProvider extends ServiceProvider{


	public function boot(){


		// loading views
		$this->loadViewsFrom(__DIR__.'/../resources/views','package-namespace');


		// publish blade views
		$this->publishes([__DIR__.'/../resources/views'=> resource_path('views/'),],'views');

		// publish javascript files
		$this->publishes([
            __DIR__ . '/../resources/js' => resource_path('/js/'),
        ], 'js');


        // loading routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
	}
}