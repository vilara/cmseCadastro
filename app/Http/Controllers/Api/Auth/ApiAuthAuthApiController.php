<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiAuthAuthApiController extends Controller
{
    public function gerarToken()
    {
        // Cria token header
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

        // Codifica o Header para Base64Url
        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

        // Cria o token payload
        $payload = json_encode([
            "iss" => "codeblog.com.br",
            "exp" => 1300819380,
            "name" => "Whallysson Estevam",
            "admin" => true
        ]);

        // Codifica Payload para Base64Url
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

        // Criando a Assinatura Hash
        $secret = 'minha-chave'; //sua chave secreta
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $secret, true);

        // Codifica a Assinatura para Base64Url
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

        // Criando o JWT
        $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

        // Nosso JWT
        echo $jwt;
    }
}
