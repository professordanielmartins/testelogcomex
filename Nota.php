// app/Models/Nota.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';
    protected $primaryKey = 'Codigo_materia';
    public $timestamps = false;
}

