package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewArtistEntityFunc func(client *GithubApi2SDK, entopts map[string]any) GithubApi2Entity

var NewImageEntityFunc func(client *GithubApi2SDK, entopts map[string]any) GithubApi2Entity

