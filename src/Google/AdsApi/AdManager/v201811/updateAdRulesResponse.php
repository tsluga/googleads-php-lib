<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateAdRulesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201811\AdRule[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201811\AdRule[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201811\AdRule[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201811\AdRule[] $rval
     * @return \Google\AdsApi\AdManager\v201811\updateAdRulesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
