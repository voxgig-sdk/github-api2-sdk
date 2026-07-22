<?php
declare(strict_types=1);

// GithubApi2 SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class GithubApi2Features
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new GithubApi2BaseFeature();
            case "test":
                return new GithubApi2TestFeature();
            default:
                return new GithubApi2BaseFeature();
        }
    }
}
