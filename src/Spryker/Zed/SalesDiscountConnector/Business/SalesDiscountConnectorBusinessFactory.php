<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesDiscountConnector\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Spryker\Zed\SalesDiscountConnector\Business\Checker\CustomerOrderCountDecisionRuleChecker;
use Spryker\Zed\SalesDiscountConnector\Business\Checker\CustomerOrderCountDecisionRuleCheckerInterface;
use Spryker\Zed\SalesDiscountConnector\Dependency\Facade\SalesDiscountConnectorToDiscountFacadeInterface;
use Spryker\Zed\SalesDiscountConnector\Dependency\Facade\SalesDiscountConnectorToSalesFacadeInterface;
use Spryker\Zed\SalesDiscountConnector\SalesDiscountConnectorDependencyProvider;

/**
 * @method \Spryker\Zed\SalesDiscountConnector\SalesDiscountConnectorConfig getConfig()
 */
class SalesDiscountConnectorBusinessFactory extends AbstractBusinessFactory
{
    public function createCustomerOrderCountDecisionRuleChecker(): CustomerOrderCountDecisionRuleCheckerInterface
    {
        return new CustomerOrderCountDecisionRuleChecker(
            $this->getDiscountFacade(),
            $this->getSalesFacade(),
            $this->getConfig(),
        );
    }

    public function getDiscountFacade(): SalesDiscountConnectorToDiscountFacadeInterface
    {
        return $this->getProvidedDependency(SalesDiscountConnectorDependencyProvider::FACADE_DISCOUNT);
    }

    public function getSalesFacade(): SalesDiscountConnectorToSalesFacadeInterface
    {
        return $this->getProvidedDependency(SalesDiscountConnectorDependencyProvider::FACADE_SALES);
    }
}
