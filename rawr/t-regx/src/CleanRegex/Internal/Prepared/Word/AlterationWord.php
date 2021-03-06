<?php
namespace TRegx\CleanRegex\Internal\Prepared\Word;

use Generator;

class AlterationWord implements Word
{
    /** @var AlterationFigures */
    private $figures;

    public function __construct(array $figures)
    {
        $this->figures = new AlterationFigures($figures);
    }

    public function quoted(string $delimiter): string
    {
        return '(?:' . \implode('|', \iterator_to_array($this->quotedFigures($delimiter))) . ')';
    }

    private function quotedFigures(string $delimiter): Generator
    {
        foreach ($this->figures->figures() as $figure) {
            yield (new TextWord($figure))->quoted($delimiter);
        }
    }
}
