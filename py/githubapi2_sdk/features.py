# GithubApi2 SDK feature factory

from githubapi2_sdk.feature.base_feature import GithubApi2BaseFeature
from githubapi2_sdk.feature.test_feature import GithubApi2TestFeature


def _make_feature(name):
    features = {
        "base": lambda: GithubApi2BaseFeature(),
        "test": lambda: GithubApi2TestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
