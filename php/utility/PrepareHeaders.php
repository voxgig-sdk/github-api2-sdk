<?php
declare(strict_types=1);

// GithubApi2 SDK utility: prepare_headers

class GithubApi2PrepareHeaders
{
    public static function call(GithubApi2Context $ctx): array
    {
        $options = $ctx->client->options_map();
        $headers = \Voxgig\Struct\Struct::getprop($options, 'headers');
        if (!$headers) {
            return [];
        }
        $out = \Voxgig\Struct\Struct::clone($headers);
        return is_array($out) ? $out : [];
    }
}
