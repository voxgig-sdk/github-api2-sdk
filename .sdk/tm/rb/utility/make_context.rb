# GithubApi2 SDK utility: make_context
require_relative '../core/context'
module GithubApi2Utilities
  MakeContext = ->(ctxmap, basectx) {
    GithubApi2Context.new(ctxmap, basectx)
  }
end
