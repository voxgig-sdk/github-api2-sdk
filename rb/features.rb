# GithubApi2 SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module GithubApi2Features
  def self.make_feature(name)
    case name
    when "base"
      GithubApi2BaseFeature.new
    when "test"
      GithubApi2TestFeature.new
    else
      GithubApi2BaseFeature.new
    end
  end
end
