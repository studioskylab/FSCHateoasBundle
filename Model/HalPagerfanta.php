<?php

namespace FSC\HateoasBundle\Model;

use Pagerfanta\PagerfantaInterface;

class HalPagerfanta
{
    private $pager;
    private $rel;

    public function __construct(PagerfantaInterface $pager, $rel)
    {
        $this->pager = $pager;
        $this->rel = $rel;
    }

    public static function create(PagerfantaInterface $pager, $rel)
    {
        return new static($pager, $rel);
    }

    public function getPager()
    {
        return $this->pager;
    }

    public function getRel()
    {
        return $this->rel;
    }
}
