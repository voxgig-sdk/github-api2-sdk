<?php
declare(strict_types=1);

// GithubApi2 SDK utility: result_body

class GithubApi2ResultBody
{
    public static function call(GithubApi2Context $ctx): ?GithubApi2Result
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
