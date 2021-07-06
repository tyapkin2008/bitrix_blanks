<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class ReportComponent extends \CBitrixComponent
{
    public function onPrepareComponentParams($params)
    {
        $params['template'] = "";
        $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();

        if($request->getPost('action') == 'excel')
        {
            $params['template'] = 'excel';
        }
        return $params;
    }

    public function executeComponent()
    {
        /*if excel mode*/
        if($this->arParams['template'] == 'excel')
        {
           // include_once $_SERVER['DOCUMENT_ROOT']."/local/php_interface/classes/exc.php");
            $this->arResult['styles'] = [];
        }
        // $this->includeComponentTemplate($this->arParams['template']);
    }
}