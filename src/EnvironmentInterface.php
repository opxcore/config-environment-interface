<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Config\Interfaces;

interface EnvironmentInterface
{
    /**
     * Gets value from environment.
     *
     * @param string $key
     * @param null|callable|mixed $default
     *
     * @return  array|bool|string|null|mixed
     */
    public static function get(string $key, $default = null);
}