<?php

use App\Request;

class Cars_List_View extends Vtiger_List_View
{
    public function getHeaderScripts(Request $request)
    {
        $headerScripts = parent::getHeaderScripts($request);
        $moduleName = $request->getModule();

        $headerScripts[] = new Vtiger_JsScript_Model(['src' => "modules/{$moduleName}/resources/ListView.js"]);

        return $headerScripts;
    }
}
