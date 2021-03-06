<?php
namespace TRegx\CleanRegex\Internal\Expression\Predefinition;

use TRegx\CleanRegex\Internal\Definition;
use TRegx\CleanRegex\Internal\Delimiter\Delimiter;
use TRegx\CleanRegex\Internal\Flags;
use TRegx\CleanRegex\Internal\Prepared\Phrase\Phrase;

class DelimiterPredefinition implements Predefinition
{
    /** @var Definition */
    private $definition;

    public function __construct(Phrase $phrase, Delimiter $delimiter, Flags $flags, string $undeveloped)
    {
        $this->definition = new Definition($delimiter->delimited($phrase, $flags), $undeveloped);
    }

    public function definition(): Definition
    {
        return $this->definition;
    }

    public function valid(): bool
    {
        return $this->definition->valid();
    }
}
