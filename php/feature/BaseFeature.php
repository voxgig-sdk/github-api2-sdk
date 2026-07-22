<?php
declare(strict_types=1);

// GithubApi2 SDK base feature

class GithubApi2BaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(GithubApi2Context $ctx, array $options): void {}
    public function PostConstruct(GithubApi2Context $ctx): void {}
    public function PostConstructEntity(GithubApi2Context $ctx): void {}
    public function SetData(GithubApi2Context $ctx): void {}
    public function GetData(GithubApi2Context $ctx): void {}
    public function GetMatch(GithubApi2Context $ctx): void {}
    public function SetMatch(GithubApi2Context $ctx): void {}
    public function PrePoint(GithubApi2Context $ctx): void {}
    public function PreSpec(GithubApi2Context $ctx): void {}
    public function PreRequest(GithubApi2Context $ctx): void {}
    public function PreResponse(GithubApi2Context $ctx): void {}
    public function PreResult(GithubApi2Context $ctx): void {}
    public function PreDone(GithubApi2Context $ctx): void {}
    public function PreUnexpected(GithubApi2Context $ctx): void {}
}
