<?php
declare(strict_types=1);

// GithubApi2 SDK utility: feature_hook

class GithubApi2FeatureHook
{
    public static function call(GithubApi2Context $ctx, string $name): void
    {
        if (!$ctx->client) {
            return;
        }
        $features = $ctx->client->features ?? null;
        if (!$features) {
            return;
        }
        foreach ($features as $f) {
            if (method_exists($f, $name)) {
                $f->$name($ctx);
            }
        }
    }
}
