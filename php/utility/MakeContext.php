<?php
declare(strict_types=1);

// GithubApi2 SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class GithubApi2MakeContext
{
    public static function call(array $ctxmap, ?GithubApi2Context $basectx): GithubApi2Context
    {
        return new GithubApi2Context($ctxmap, $basectx);
    }
}
