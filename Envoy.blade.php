@servers(['web' => 'jenkins@angularauth.stagingarea.us'])

@task('rsync')
	rsync -ravl * jenkins@angularauth.stagingarea.us:/var/www/angularauth/site/
@endtask

@task('deploy')
	cd /var/www/angularauth/site/ 
	php artisan migrate
	php artisan db:seed
@endtask
