<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesDiscountConnector\Dependency\Facade;

use Generated\Shared\Transfer\ClauseTransfer;

interface SalesDiscountConnectorToDiscountFacadeInterface
{
    public function queryStringCompare(ClauseTransfer $clauseTransfer, mixed $compareWith): bool;
}
