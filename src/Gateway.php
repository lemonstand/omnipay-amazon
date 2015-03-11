<?php
namespace Omnipay\AmazonPayments;

use Omnipay\Common\AbstractGateway;

/**
 * Amazon Gateway
 *
 * @link https://payments.amazon.com/developer
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Amazon';
    }
}
