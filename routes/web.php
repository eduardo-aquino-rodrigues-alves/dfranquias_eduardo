<?php

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

Route::get('/', function () {
    return view('welcome');
});

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gado extends Model
{
    use HasFactory;

    protected $table = 'gado';

    protected $fillable = [
        'codigo',
        'leite',
        'racao',
        'peso',
        'nascimento',
        'abate',
    ];

    protected $casts = [
        'leite' => 'integer',
        'racao' => 'integer',
        'peso' => 'float',
        'nascimento' => 'date',
        'abate' => 'boolean',
    ];

    public function scopeId($query, $id)
    {
        return $query->where('id', $id);
    }

    public function scopeCodigo($query, $codigo)
    {
        return $query->where('codigo', $codigo);
    }

    public function scopeLeiteMaiorQue($query, $leite)
    {
        return $query->where('leite', '>', $leite);
    }

    public function scopeLeiteMenorQue($query, $leite)
    {
        return $query->where('leite', '<', $leite);
    }

    public function scopeRacaoMaiorQue($query, $racao)
    {
        return $query->where('racao', '>', $racao);
    }

    public function scopePesoMaiorQue($query, $peso)
    {
        return $query->where('peso', '>', $peso);
    }

    public function scopeNascimentoMenorQue($query, $nascimento)
    {
        return $query->where('nascimento', '<', $nascimento);
    }

    public function scopeNaoAbatidos($query)
    {
        return $query->where('abate', 0);
    }

    public function scopeAbatidos($query)
    {
        return $query->where('abate', 1);
    }
}
