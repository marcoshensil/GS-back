<?php

namespace App\Http\Controllers;

use App\Models\investimento;
use Illuminate\Http\JsonResponse;

class ListaController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(
            investimento::all()
        );
    }
}
