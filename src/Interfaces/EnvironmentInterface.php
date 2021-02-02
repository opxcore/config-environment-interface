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
     * Get value from environment.
     *
     * @param string $key
     * @param null|callable|mixed $default
     *
     * @return  array|bool|string|null|mixed
     */
    public function get(string $key, $default = null);

    /**
     * Set value to environment.
     *
     * @param string $key
     * @param mixed $value
     * @param bool $safe
     *
     * @return  bool
     */
    public function set(string $key, $value, bool $safe = false): bool;

    /**
     * Whether a offset exists.
     *
     * @param string $key
     *
     * @return  bool
     */
    public function has(string $key): bool;

    /**
     * Offset to unset.
     *
     * @param string $key
     *
     * @return  void
     */
    public function unset(string $key): void;
}