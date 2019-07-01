<?php
use Illuminate\Support\Facades\App;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('pdf', function () use ($router) {
    $pdf = App::make('dompdf.wrapper');
    $html = '<table><tr><td>Luis</td><td>Azu</td></tr><tr><td>Luis</td><td>Azu</td></tr></table>';
    $pdf->loadHTML($html);
    return $pdf->stream();
});