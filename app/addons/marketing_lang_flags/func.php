<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

if ( !defined('AREA') ) { die('Access denied'); }

function fn_marketing_lang_flags_init_templater_post($view)
{
        
        $languages_array = array();
    $languages_array[] = array('name'=>'العربية','falg'=>'sa','code'=>'ar');
    $languages_array[] = array('name'=>'English','falg'=>'us','code'=>'en');
    $languages_array[] = array('name'=>'English UK','falg'=>'gb','code'=>'gb');
    $languages_array[] = array('name'=>'Brazil','falg'=>'br','code'=>'br');
    $languages_array[] = array('name'=>'South Korea','falg'=>'kr','code'=>'kr');
    $languages_array[] = array('name'=>'Spanish','falg'=>'es','code'=>'es');
    $languages_array[] = array('name'=>'پارسی','falg'=>'ir','code'=>'fa');
    $languages_array[] = array('name'=>'French','falg'=>'fr','code'=>'fr');
    $languages_array[] = array('name'=>'Русский','falg'=>'ru','code'=>'ru');
    $languages_array[] = array('name'=>'Türkçe','falg'=>'tr','code'=>'tr');
    $languages_array[] = array('name'=>'Čeština','falg'=>'cz','code'=>'cs');
    $languages_array[] = array('name'=>'Danish','falg'=>'dk','code'=>'da');
    $languages_array[] = array('name'=>'German','falg'=>'de','code'=>'de');
    $languages_array[] = array('name'=>'Ελληνικά','falg'=>'gr','code'=>'el');
    $languages_array[] = array('name'=>'Hrvatski','falg'=>'hr','code'=>'hr');
    $languages_array[] = array('name'=>'Hungarian','falg'=>'hu','code'=>'hu');
    $languages_array[] = array('name'=>'Italiano','falg'=>'it','code'=>'it');
    $languages_array[] = array('name'=>'日本語','falg'=>'jp','code'=>'ja');
    $languages_array[] = array('name'=>'ქართული','falg'=>'ge','code'=>'ka');
    $languages_array[] = array('name'=>'Nederlands','falg'=>'nl','code'=>'nl');
    $languages_array[] = array('name'=>'Norsk','falg'=>'no','code'=>'no');
    $languages_array[] = array('name'=>'Polski','falg'=>'pl','code'=>'pl');
    $languages_array[] = array('name'=>'Português Brasileiro','falg'=>'pt','code'=>'br');
    $languages_array[] = array('name'=>'Română','falg'=>'ro','code'=>'ro');
    $languages_array[] = array('name'=>'Slovak','falg'=>'sk','code'=>'sk');
    $languages_array[] = array('name'=>'Serbian','falg'=>'sr','code'=>'sr');
    $languages_array[] = array('name'=>'Swedish','falg'=>'sv','code'=>'sv');
    $languages_array[] = array('name'=>'Українська','falg'=>'uk','code'=>'ua');
    $languages_array[] = array('name'=>'Vietnamese','falg'=>'vn','code'=>'vi');

 Tygh::$app['view']->assign('languages_array', $languages_array);


}






function fn_marketing_lang_flags_get_products ($params, &$fields, $sortings, $condition, $join, $sorting, $group_by, $lang_code, $having)
{
 $fields['marketing_lang_flags'] =  "marketing_lang_flags";
}




function fn_marketing_lang_flags_get_product_data_post (&$product_data, $auth, $preview, $lang_code)
{
    if ($product_data['marketing_lang_flags'] && !empty($product_data['marketing_lang_flags']) && $product_data['marketing_lang_flags'] !="" && $product_data['marketing_lang_flags']!=NULL )
    {
    $product_data['marketing_lang_flags'] = explode("," ,$product_data['marketing_lang_flags']);
    }
    else
    {
        $product_data['marketing_lang_flags'] =array();
    }
   
}







function fn_marketing_lang_flags_update_product_pre(&$product_data, $product_id, $lang_code, $can_update)
{

   $product_data['marketing_lang_flags'] = implode("," ,  $product_data['marketing_lang_flags']);
   
    
}