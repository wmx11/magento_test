<?php

namespace Popup\Sizechart\Block;

use \Magento\Framework\View\Element\Template\Context;
use \Magento\Catalog\Block\Product\View\AbstractView;

class Display extends \Magento\Framework\View\Element\Template
{
    protected $productInformation;

    const ATTRIBUTE_FIELD_SIZECHART = "sizechart";
    const VALUE_DISABLED = "0";

    public function __construct(Context $context, AbstractView $productInformation)
    {
        $this->productInformation = $productInformation;
        parent::__construct($context);
    }

    public function getProductAttributeSizechartValue(): ?int
    {
        return $this->productInformation->getProduct()
            ->getCustomAttribute(self::ATTRIBUTE_FIELD_SIZECHART)
            ->getValue();
    }

    public function ifEnabled(): bool
    {
        if ($this->getProductAttributeSizechartValue() !== self::VALUE_DISABLED) {
            return true;
        }
        return false;
    }
}
