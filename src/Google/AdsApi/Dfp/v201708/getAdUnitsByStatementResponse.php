<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getAdUnitsByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\AdUnitPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\AdUnitPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\AdUnitPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\AdUnitPage $rval
     * @return \Google\AdsApi\Dfp\v201708\getAdUnitsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
