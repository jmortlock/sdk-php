<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Interceptor;

use Temporal\Interceptor\WorkflowInbound\QueryInput;
use Temporal\Interceptor\WorkflowInbound\SignalInput;
use Temporal\Interceptor\WorkflowInbound\WorkflowInput;
use Temporal\Internal\Interceptor\Interceptor;

interface WorkflowInboundInterceptor extends Interceptor
{
    /**
     * @param WorkflowInput $input
     * @param callable(WorkflowInput): void $next
     */
    public function execute(WorkflowInput $input, callable $next): void;

    /**
     * @param SignalInput $input
     * @param callable(SignalInput): void $next
     */
    public function handleSignal(SignalInput $input, callable $next): void;

    /**
     * @param QueryInput $input
     * @param callable(QueryInput): void $next
     */
    public function handleQuery(QueryInput $input, callable $next): mixed;
}
