<?php

$routes->group('admin', function ($routes) {

    $routes->resource('settings', [
        'filter'     => 'permission:settings-permission',
        'namespace'  => 'julio101290\boilerplate-settings\Controllers\SettingsController',
        'controller' => 'SettingsController',
    ]);

    /**
     * Save Settings Route
     */
    $routes->post('settings/save', 'SettingsController::save');
});
