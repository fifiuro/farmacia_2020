<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ROUTE DE PRODUCTOS */
Route::get('producto/', function() {
    return 'Principal de Producto';
});

Route::get('producto/buscar/{nombre}/{id}', function($nombre, $id){
    return "Buscar Producto, nombre: {$nombre} y id: {$id}";
});

Route::get('producto/nuevo', function(){
    return "Nuevo prodcuto";
});

Route::get('producto/modificar/{id}', function(){
    return "Producto a modificar";
});

Route::get("producto/eliminar/{id}", function(){
    return "Producto a eliminar";
});

/* ROUTE DE VENTAS */
Route::get('venta/', function(){
    return "Principal de Venta";
});

Route::get('venta/buscar/{nombre}/{id}', function($nombre, $id){
    return "Buscar Venta, nombre: {$nombre} y id: {$id}";
});

Route::get('venta/nuevo', function(){
    return "Nuevo Venta";
});

Route::get('venta/modificar/{id}', function(){
    return "Producto a Venta";
});

Route::get("venta/eliminar/{id}", function(){
    return "Venta a eliminar";
});

/* REPORTES*/
Route::get('reporte/ventas_mes/{mes}', function($mes){
    return "Reporte del mes: {$mes}";
});

Route::get('reporte/ventas_anio/{anio}', function($anio){
    return "Reporte del anio: {$anio}";
});