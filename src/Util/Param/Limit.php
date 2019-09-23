<?php

namespace MoySklad\Util\Param;

class Limit extends Param
{
    /**
     * @var int
     */
    public $limit;

    /**
     * Pagination constructor.
     * @param int $limit
     */
    private function __construct(int $limit)
    {
        $this->limit = $limit;
        $this->type = self::LIMIT_PARAM;
    }

    /**
     * @param int $limit
     * @return Limit
     */
    public static function eq(int $limit): self
    {
        return new self($limit);
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return sprintf('%d', $this->limit);
    }
}