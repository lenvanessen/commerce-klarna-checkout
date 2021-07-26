<?php


namespace ellera\commerce\klarna\gateways;

use ellera\commerce\klarna\gateways\Base;

/**
 * Class Payments
 *
 * Payments gateway for Klarna
 * https://developers.klarna.com/documentation/hpp/
 *
 * @author Len van Essen
 * @package ellera\commerce\klarna\gateways
 */
class Payments extends Base
{
    /**
     * Setting: Acquiring Channel
     *
     * @var string
     */
    public $acquiring_channel = 'Ecommerce';

    /**
     * Setting: Description
     *
     * @var string|null
     */
    public $description;

    /**
     * Gateway handle
     *
     * @var string
     */
    public $gateway_handle = 'klarna-payments';

    public function supportsWebhooks(): bool
    {
        return false;
    }
}