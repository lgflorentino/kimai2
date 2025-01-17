<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Widget\Type;

use App\Widget\WidgetInterface;

final class AmountTotal extends AbstractAmountPeriod
{
    /**
     * @param array<string, string|bool|int|null> $options
     * @return array<string, string|bool|int|null>
     */
    public function getOptions(array $options = []): array
    {
        return array_merge(['color' => WidgetInterface::COLOR_TOTAL], parent::getOptions($options));
    }

    public function getId(): string
    {
        return 'amountTotal';
    }

    public function getPermissions(): array
    {
        return ['view_all_data'];
    }

    /**
     * @param array<string, string|bool|int|null> $options
     */
    public function getData(array $options = []): mixed
    {
        return $this->getRevenue(null, null, $options);
    }
}
