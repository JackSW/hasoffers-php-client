<?php

namespace DraperStudio\HasOffers\Api\FurtherMobi;

use DraperStudio\HasOffers\Base;

class Offers extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'FurtherMobi';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'Offers';
    /**
     * Returns a list of offers.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAll($parameters = [])
    {
        return $this->get('offers/offers', $parameters);
    }
}
