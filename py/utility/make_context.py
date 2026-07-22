# GithubApi2 SDK utility: make_context

from core.context import GithubApi2Context


def make_context_util(ctxmap, basectx):
    return GithubApi2Context(ctxmap, basectx)
