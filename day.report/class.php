<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

CBitrixComponent::includeComponentClass("reports:report");
class DayReport extends \ReportComponent
{
    public function executeComponent()
    {
        $this->getParent()->executeComponent();

        $this->includeComponentTemplate();
    }
}