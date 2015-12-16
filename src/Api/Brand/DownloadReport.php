<?php

namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class DownloadReport extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'Brand';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'DownloadReport';
    /**
     * Get link to download report.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getDownloadReportLink($parameters = [])
    {
        return $this->get('getDownloadReportLink', $parameters);
    }
}
