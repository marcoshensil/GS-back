<?php

namespace App\Http\Controllers;

use App\Models\investimento;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CadastraController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $dados = $request->except('_token');

        $investimento = investimento::create($dados);

        return response()->json($investimento);
    }
}
