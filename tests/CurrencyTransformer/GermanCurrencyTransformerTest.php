<?php

namespace NumberToWords\CurrencyTransformer;

class GermanCurrencyTransformerTest extends CurrencyTransformerTest
{
    protected function setUp(): void
    {
        $this->currencyTransformer = new GermanCurrencyTransformer();
    }

    public function providerItConvertsMoneyAmountToWords(): array
    {
        return [
            [600, 'EUR', 'sechs Euro'],
            [100, 'MXN', 'ein Mexikanischer Peso'],
            [600, 'MXN', 'sechs Mexikanische Pesos'],
            [150, 'MXN', 'ein Mexikanischer Peso und fünfzig Centavos'],
            [201, 'MXN', 'zwei Mexikanische Pesos und ein Centavo'],
        ];
    }
}
