<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CadastraController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $dados = $request->except('_token');

        $insumo = Insumo::create($dados);

        return response()->json($insumo);
    }
}
