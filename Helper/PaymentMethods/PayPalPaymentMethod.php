<?php
/**
 *
 * Adyen Payment Module
 *
 * Copyright (c) 2022 Adyen N.V.
 * This file is open source and available under the MIT license.
 * See the LICENSE file for more info.
 *
 * Author: Adyen <magento@adyen.com>
 */
namespace Adyen\Payment\Helper\PaymentMethods;

class PayPalPaymentMethod implements PaymentMethodInterface
{
    const TX_VARIANT = 'paypal';
    const NAME = 'PayPal';

    public function getTxVariant(): string
    {
        return self::TX_VARIANT;
    }

    public function getPaymentMethodName(): string
    {
        return self::NAME;
    }

    public function supportsManualCapture(): bool
    {
        return true;
    }

    public function supportsAutoCapture(): bool
    {
        return true;
    }

    public function getLabel(): string
    {
        return self::NAME;
    }

    public function getRequiredAdditionalData(): array
    {
        return [];
    }

    public function supportsCardOnFile(): bool
    {
        return false;
    }

    public function supportsSubscription(): bool
    {
        return true;
    }
}