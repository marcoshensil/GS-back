<?php

namespace App\Http\Controllers;

use App\Models\Investimento;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class cadastroController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $dados = $request->except('_token');

        $insumo = investimento::create($dados);

        return response()->json($investimento);
    }
}
