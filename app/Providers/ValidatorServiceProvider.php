<?php
	
	namespace App\Providers;

	use Illuminate\Support\ServiceProvider;
	use Illuminate\Support\Facades\Validator;

	class ValidatorServiceProvider extends ServiceProvider{

		public function boot(){
			/* Règle de validation nommée aaaa : Verifie que le champs = aaaa.
			Validator::extend('aaaa', function($attributes, $value, $parameters){
				return $value == "aaaa";
			}); */
		}

		public function register(){

		}
	}

?>