<?php
require_once("chave.php");
function createToken(string $user, string $id): string
{
    $duracao = duracaoSessao();
    $secretkey = chave();
    $header = base64_encode(json_encode(['alg' => 'HS256', 'typ' => 'JWT']));
    $payload = base64_encode(json_encode(['exp' => (time() + $duracao), 'id' => "$id", 'user' => $user]));
    $signature = base64_encode(hash_hmac('sha256', "$header.$payload", $secretkey, true));
    $token = "$header.$payload.$signature";
    return $token;
}

function validToken(string $token)
{
    $secretkey = chave();
    $array = explode('.', $token);
    $signature = base64_encode(hash_hmac('sha256', "$array[0].$array[1]", $secretkey, true));
    $valid = json_decode(base64_decode($array[1]));
    $array[2] = str_replace(' ', '+', $array[2]);
    if ($signature == $array[2]) {
        return $valid;
    }
    return false;
}

function verificaToken($token)
{
    $validToken = validToken($token);
    if ($validToken !== false && $validToken->exp <= time()) {
        return false;
    }
    return $validToken;
}
