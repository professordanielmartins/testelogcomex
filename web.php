// routes/web.php

use App\Http\Controllers\NotasController;

Route::get('/consultar-notas', [NotasController::class, 'consultarNotas']);

