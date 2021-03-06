<?php
/**
 * Copyright 2015 Waleed Ahmad
 *
 * (c) Waleed Ahmad <waleedgplus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WaleedAhmad\Pinterest\Endpoints;

use WaleedAhmad\Pinterest\Transport\Request;
use WaleedAhmad\Pinterest\Pinterest;


class Endpoint {

    /**
     * Instance of the request class
     *
     * @var Request
     */
    protected $request;

    /**
     * Instance of the master class
     *
     * @var Pinterest
     */
    protected $master;

    /**
     * Create a new model instance
     *
     * @param  Request              $request
     * @param  Pinterest            $master
     */
    public function __construct(Request $request, Pinterest $master)
    {
        $this->request = $request;
        $this->master = $master;
    }

}