// app/Http/Controllers/NotasController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotasController extends Controller
{
    public function consultarNotas()
    {
        $notas = DB::table('notas')
            ->select('Materia', 'Media', 'Primeiro_Bimestre', 'Segundo_Bimestre', 'Terceiro_Bimestre', 'Quarto_Bimestre', 'Nome_Aluno', 'Codigo_Aluno')
            ->get();

        return view('notas', ['notas' => $notas]);
    }
}

