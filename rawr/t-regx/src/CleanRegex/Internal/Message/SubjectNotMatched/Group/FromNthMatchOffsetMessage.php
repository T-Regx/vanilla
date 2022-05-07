<?php
namespace TRegx\CleanRegex\Internal\Message\SubjectNotMatched\Group;

use TRegx\CleanRegex\Internal\GroupKey\GroupKey;
use TRegx\CleanRegex\Internal\Message\Message;

class FromNthMatchOffsetMessage implements Message
{
    /** @var GroupKey */
    private $group;
    /** @var int */
    private $index;

    public function __construct(GroupKey $group, int $index)
    {
        $this->group = $group;
        $this->index = $index;
    }

    public function getMessage(): string
    {
        return "Expected to get group $this->group offset from the $this->index-nth match, but the subject was not matched at all";
    }
}
