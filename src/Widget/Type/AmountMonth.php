<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Widget\Type;

use App\Widget\WidgetInterface;

final class AmountMonth extends AbstractAmountPeriod
{
    /**
     * @param array<string, string|bool|int|null> $options
     * @return array<string, string|bool|int|null>
     */
    public function getOptions(array $options = []): array
    {
        return array_merge(['color' => WidgetInterface::COLOR_MONTH], parent::getOptions($options));
    }

    public function getId(): string
    {
        return 'AmountMonth';
    }

    /**
     * @param array<string, string|bool|int|null> $options
     */
    public function getData(array $options = []): mixed
    {
        return $this->getRevenue($this->createMonthStartDate(), $this->createMonthEndDate(), $options);
    }

    public function getPermissions(): array
    {
        return ['view_all_data'];
    }
}
