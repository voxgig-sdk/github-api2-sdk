<?php
declare(strict_types=1);

// GithubApi2 SDK utility: result_headers

class GithubApi2ResultHeaders
{
    public static function call(GithubApi2Context $ctx): ?GithubApi2Result
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
