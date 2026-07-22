# ProjectName SDK exists test

import pytest
from githubapi2_sdk import GithubApi2SDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = GithubApi2SDK.test(None, None)
        assert testsdk is not None
