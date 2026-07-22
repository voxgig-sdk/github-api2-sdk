-- GithubApi2 SDK error

local GithubApi2Error = {}
GithubApi2Error.__index = GithubApi2Error


function GithubApi2Error.new(code, msg, ctx)
  local self = setmetatable({}, GithubApi2Error)
  self.is_sdk_error = true
  self.sdk = "GithubApi2"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function GithubApi2Error:error()
  return self.msg
end


function GithubApi2Error:__tostring()
  return self.msg
end


return GithubApi2Error
