<?php

$routes->group('admin', function ($routes) {

    $routes->resource('settings', [
        'filter' => 'permission:settings-permissions',
        'controller' => 'SettingsController',
    ]);

    /**
     * Save Settings Route
     */
    $routes->post('settings/save', 'SettingsController::save');
});
