<?php

namespace App;

use JMS\Serializer\Annotation\Type;

class DTO
{
    /** @Type("string") */
    public $orderId;

    /** @Type("string") */
    public $referenceNumber;
}
