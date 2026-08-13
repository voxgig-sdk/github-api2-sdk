# GithubApi2 SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'graphql'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

GithubApi2Utility.registrar = ->(u) {
  u.clean = GithubApi2Utilities::Clean
  u.done = GithubApi2Utilities::Done
  u.make_error = GithubApi2Utilities::MakeError
  u.feature_add = GithubApi2Utilities::FeatureAdd
  u.feature_hook = GithubApi2Utilities::FeatureHook
  u.feature_init = GithubApi2Utilities::FeatureInit
  u.fetcher = GithubApi2Utilities::Fetcher
  u.make_fetch_def = GithubApi2Utilities::MakeFetchDef
  u.make_context = GithubApi2Utilities::MakeContext
  u.make_options = GithubApi2Utilities::MakeOptions
  u.make_request = GithubApi2Utilities::MakeRequest
  u.make_response = GithubApi2Utilities::MakeResponse
  u.make_result = GithubApi2Utilities::MakeResult
  u.make_point = GithubApi2Utilities::MakePoint
  u.make_spec = GithubApi2Utilities::MakeSpec
  u.make_url = GithubApi2Utilities::MakeUrl
  u.param = GithubApi2Utilities::Param
  u.prepare_auth = GithubApi2Utilities::PrepareAuth
  u.prepare_body = GithubApi2Utilities::PrepareBody
  u.prepare_headers = GithubApi2Utilities::PrepareHeaders
  u.prepare_method = GithubApi2Utilities::PrepareMethod
  u.prepare_params = GithubApi2Utilities::PrepareParams
  u.prepare_path = GithubApi2Utilities::PreparePath
  u.prepare_query = GithubApi2Utilities::PrepareQuery
  u.graphql_body = GithubApi2Utilities::GraphqlBody
  u.graphql_errors = GithubApi2Utilities::GraphqlErrors
  u.result_basic = GithubApi2Utilities::ResultBasic
  u.result_body = GithubApi2Utilities::ResultBody
  u.result_headers = GithubApi2Utilities::ResultHeaders
  u.transform_request = GithubApi2Utilities::TransformRequest
  u.transform_response = GithubApi2Utilities::TransformResponse
}
