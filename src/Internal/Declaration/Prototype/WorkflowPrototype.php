<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Internal\Declaration\Prototype;

use Temporal\Common\CronSchedule;
use Temporal\Common\MethodRetry;
use Temporal\Workflow\ReturnType;

final class WorkflowPrototype extends Prototype
{
    /**
     * @var array<non-empty-string, QueryDefinition>
     */
    private array $queryHandlers = [];

    /**
     * @var array<non-empty-string, SignalDefinition>
     */
    private array $signalHandlers = [];

    /**
     * @var array<non-empty-string, UpdateDefinition>
     */
    private array $updateHandlers = [];

    /**
     * @var array<non-empty-string, \ReflectionFunctionAbstract>
     */
    private array $updateValidators = [];

    /**
     * @var CronSchedule|null
     */
    private ?CronSchedule $cronSchedule = null;

    /**
     * @var MethodRetry|null
     */
    private ?MethodRetry $methodRetry = null;

    /**
     * @var ReturnType|null
     */
    private ?ReturnType $returnType = null;

    /**
     * @return CronSchedule|null
     */
    public function getCronSchedule(): ?CronSchedule
    {
        return $this->cronSchedule;
    }

    /**
     * @param CronSchedule|null $attribute
     */
    public function setCronSchedule(?CronSchedule $attribute): void
    {
        $this->cronSchedule = $attribute;
    }

    /**
     * @return MethodRetry|null
     */
    public function getMethodRetry(): ?MethodRetry
    {
        return $this->methodRetry;
    }

    /**
     * @param MethodRetry|null $attribute
     */
    public function setMethodRetry(?MethodRetry $attribute): void
    {
        $this->methodRetry = $attribute;
    }

    /**
     * @return ReturnType|null
     */
    public function getReturnType(): ?ReturnType
    {
        return $this->returnType;
    }

    /**
     * @param ReturnType|null $attribute
     */
    public function setReturnType(?ReturnType $attribute): void
    {
        $this->returnType = $attribute;
    }

    public function addQueryHandler(QueryDefinition $definition): void
    {
        $this->queryHandlers[$definition->name] = $definition;
    }

    /**
     * @return array<non-empty-string, QueryDefinition>
     */
    public function getQueryHandlers(): array
    {
        return $this->queryHandlers;
    }

    public function addSignalHandler(SignalDefinition $definition): void
    {
        $this->signalHandlers[$definition->name] = $definition;
    }

    /**
     * @return array<non-empty-string, SignalDefinition>
     */
    public function getSignalHandlers(): array
    {
        return $this->signalHandlers;
    }

    public function addUpdateHandler(UpdateDefinition $definition): void
    {
        $this->updateHandlers[$definition->name] = $definition;
    }

    /**
     * @param non-empty-string $name
     * @param \ReflectionFunctionAbstract $fun
     */
    public function addValidateUpdateHandler(string $name, \ReflectionFunctionAbstract $fun): void
    {
        $this->updateValidators[$name] = $fun;
    }

    /**
     * @return array<non-empty-string, UpdateDefinition>
     */
    public function getUpdateHandlers(): array
    {
        return $this->updateHandlers;
    }

    /**
     * @return array<non-empty-string, \ReflectionFunctionAbstract>
     */
    public function getValidateUpdateHandlers(): array
    {
        return $this->updateValidators;
    }
}
