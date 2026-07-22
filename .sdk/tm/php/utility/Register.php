<?php
declare(strict_types=1);

// GithubApi2 SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

GithubApi2Utility::setRegistrar(function (GithubApi2Utility $u): void {
    $u->clean = [GithubApi2Clean::class, 'call'];
    $u->done = [GithubApi2Done::class, 'call'];
    $u->make_error = [GithubApi2MakeError::class, 'call'];
    $u->feature_add = [GithubApi2FeatureAdd::class, 'call'];
    $u->feature_hook = [GithubApi2FeatureHook::class, 'call'];
    $u->feature_init = [GithubApi2FeatureInit::class, 'call'];
    $u->fetcher = [GithubApi2Fetcher::class, 'call'];
    $u->make_fetch_def = [GithubApi2MakeFetchDef::class, 'call'];
    $u->make_context = [GithubApi2MakeContext::class, 'call'];
    $u->make_options = [GithubApi2MakeOptions::class, 'call'];
    $u->make_request = [GithubApi2MakeRequest::class, 'call'];
    $u->make_response = [GithubApi2MakeResponse::class, 'call'];
    $u->make_result = [GithubApi2MakeResult::class, 'call'];
    $u->make_point = [GithubApi2MakePoint::class, 'call'];
    $u->make_spec = [GithubApi2MakeSpec::class, 'call'];
    $u->make_url = [GithubApi2MakeUrl::class, 'call'];
    $u->param = [GithubApi2Param::class, 'call'];
    $u->prepare_auth = [GithubApi2PrepareAuth::class, 'call'];
    $u->prepare_body = [GithubApi2PrepareBody::class, 'call'];
    $u->prepare_headers = [GithubApi2PrepareHeaders::class, 'call'];
    $u->prepare_method = [GithubApi2PrepareMethod::class, 'call'];
    $u->prepare_params = [GithubApi2PrepareParams::class, 'call'];
    $u->prepare_path = [GithubApi2PreparePath::class, 'call'];
    $u->prepare_query = [GithubApi2PrepareQuery::class, 'call'];
    $u->result_basic = [GithubApi2ResultBasic::class, 'call'];
    $u->result_body = [GithubApi2ResultBody::class, 'call'];
    $u->result_headers = [GithubApi2ResultHeaders::class, 'call'];
    $u->transform_request = [GithubApi2TransformRequest::class, 'call'];
    $u->transform_response = [GithubApi2TransformResponse::class, 'call'];
});
