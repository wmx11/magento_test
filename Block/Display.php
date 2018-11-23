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

    public function getProductAttributeSizechartValue()
    {
        if ($this->validateCustomAttribute() !== false) {
            return $this->getProductInformation()
                ->getCustomAttribute(self::ATTRIBUTE_FIELD_SIZECHART)
                ->getValue();
        }
        return false;
    }

    public function ifEnabled(): bool
    {
        if ($this->getProductAttributeSizechartValue() !== false &&
            $this->getProductAttributeSizechartValue() !== self::VALUE_DISABLED
        ) {
            return true;
        }
        return false;
    }

    public function validateCustomAttribute(): bool
    {
        if ($this->getProductInformation()->getCustomAttribute(self::ATTRIBUTE_FIELD_SIZECHART) !== null) {
            return true;
        }
        return false;
    }

    public function getProductInformation()
    {
        return $this->productInformation->getProduct();
    }
}
