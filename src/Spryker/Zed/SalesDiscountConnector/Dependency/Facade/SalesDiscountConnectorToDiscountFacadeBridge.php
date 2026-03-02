<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesDiscountConnector\Dependency\Facade;

use Generated\Shared\Transfer\ClauseTransfer;

class SalesDiscountConnectorToDiscountFacadeBridge implements SalesDiscountConnectorToDiscountFacadeInterface
{
    /**
     * @var \Spryker\Zed\Discount\Business\DiscountFacadeInterface
     */
    protected $discountFacade;

    /**
     * @param \Spryker\Zed\Discount\Business\DiscountFacadeInterface $discountFacade
     */
    public function __construct($discountFacade)
    {
        $this->discountFacade = $discountFacade;
    }

    public function queryStringCompare(ClauseTransfer $clauseTransfer, mixed $compareWith): bool
    {
        return $this->discountFacade->queryStringCompare($clauseTransfer, $compareWith);
    }
}
