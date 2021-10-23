<?php

namespace Xepare;

use Illuminate\Support\ServiceProvider;

class ObservableProvider extends ServiceProvider
{

    protected array $observables = [];

    /**
     * Register the application's observables.
     *
     * @return void
     */
    public function register()
    {
        $this->booting(function () {
            $observables = array_unique($this->observables);

            foreach ($observables as $model => $observer) {
                call_user_func([$model, 'observe'], $observer);
            }
        });
    }

}
