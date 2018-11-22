<?php

namespace Popup\Sizechart\Block;

use \Magento\Framework\View\Element\Template\Context;
use \Magento\Catalog\Block\Product\View\AbstractView;

class Display extends \Magento\Framework\View\Element\Template
{
    protected $productInformation;
    const ATTRIBUTE_FIELD_SIZECHART = "sizechart";

    public function __construct(Context $context, AbstractView $productInformation)
    {
        $this->productInformation = $productInformation;
        parent::__construct($context);
    }

    public function getProductAttributeSizechartValue(): int
    {
        return $this->productInformation->getProduct()
            ->getCustomAttribute(self::ATTRIBUTE_FIELD_SIZECHART)
            ->getValue();
    }
}
