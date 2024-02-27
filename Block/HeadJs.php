<?php

namespace MISPay\MISPayMethod\Block;

use \Magento\Framework\View\Element\Template;
use MISPay\MISPayMethod\Helper\MISPayHelper;

class HeadJs extends Template
{
    protected $mispayHelper;

    public function __construct(
        Template\Context $context,
        MISPayHelper $mispayHelper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->mispayHelper = $mispayHelper;
    }

    public function isWidgetEnabled()
    {
        return $this->mispayHelper->isWidgetEnabled();
    }

    public function getAccessKey()
    {
        return $this->mispayHelper->getWidgetAccessKey();
    }
}
