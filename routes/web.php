<?php

use App\Http\Controllers\BackendPrintController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

Route::get('/snappy', function () {

//    $pdf = App::make('snappy.pdf.wrapper');
//    $pdf->loadView('pdf.example');
//    $pdf->loadView('pdf.example');
//    $pdf->setOption('enable-javascript', true);
//    $pdf->setOption('javascript-delay', 5000);
//    $pdf->setOption('enable-smart-shrinking', true);
//    $pdf->setOption('no-stop-slow-scripts', true);
//
//    $pdf->setOptions([
//        'margin-top' => '10',
//        'page-size' => 'a4',
//        'margin-bottom' => '8',
//        'footer-center' => '[page]',
//        'footer-html' =>  view('pdf._header'),


//    ]);
//    return $pdf->stream();
   //  return view('pdf.layouyt');


    $json = "yellow";
    $text= "1
2
3
4";



    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('pdf._header',["color"=>$json]);
      //return $pdf->stream();
      return view('pdf._header');
});

Route::get('/', [BackendPrintController::class, 'index']);
Route::get('/html', [BackendPrintController::class, 'html']);
Route::get('/pdf', [BackendPrintController::class, 'pdf']);
