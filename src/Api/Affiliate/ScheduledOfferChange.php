<?php

namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

class ScheduledOfferChange extends Base
{
    /**
     * Description.
     *
     * @var object
     */
    protected $endpointType = 'Affiliate';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'ScheduledOfferChange';
    /**
     * Find Scheduled Offer Changes.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findSchedules($parameters = [])
    {
        return $this->get('findSchedules', $parameters);
    }
}
