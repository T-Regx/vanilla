<?php
namespace TRegx\CleanRegex\Internal\Replace;

class ReplaceReferences
{
    public static function quote(string $replacement): string
    {
        return \str_replace(['\\', '$'], ['\\\\', '\\$'], $replacement);
    }
}
