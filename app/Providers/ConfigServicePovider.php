<?php

public function register()
    {
        config([
                'laravellocalization.supportedLocales' => [
                'en'  => [ 'name' => 'English', 'script' => 'Latn', 'native' => 'English' ],
                'it'  => ['name' => 'Italian',  'script' => 'Latn', 'native' => 'italiano']               
        ],
                'laravellocalization.useAcceptLanguageHeader' => true,

                'laravellocalization.hideDefaultLocaleInURL' => false

        ]);
    }