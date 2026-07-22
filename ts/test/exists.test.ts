
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { GithubApi2SDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await GithubApi2SDK.test()
    equal(null !== testsdk, true)
  })

})
