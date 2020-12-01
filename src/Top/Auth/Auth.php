<?php

namespace Taobao\Top\Auth;

use Taobao\BaseClient;
use SDK\Kernel\Exceptions\InvalidArgumentException;

/**
 * @property \Taobao\Top\Auth\TokenClient $token
 */
class Auth extends BaseClient
{
    /**
     * @param $property
     *
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function __get($property)
    {
        if (isset($this->app["top.auth.{$property}"])) {
            return $this->app["top.auth.{$property}"];
        }

        throw new InvalidArgumentException(sprintf('No Taobao.Top.Auth service named "%s".', $property));
    }
}