
import { Context } from './Context'


class GithubApi2Error extends Error {

  isGithubApi2Error = true

  sdk = 'GithubApi2'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  GithubApi2Error
}

