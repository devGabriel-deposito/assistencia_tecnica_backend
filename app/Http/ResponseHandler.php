<?php

namespace App\Http;

class ResponseHandler
{
    public static function json(string|array|null $content, int|null $code = null)
    {
        return response()->json($content ?? ['No response'], $code ?? 400);
    }
}
