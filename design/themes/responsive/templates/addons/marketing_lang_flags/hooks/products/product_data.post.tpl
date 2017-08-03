
{capture name="marketing_lang_flags_`$obj_id`"}
{$product.marketing_lang_flags nofilter}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="marketing_lang_flags_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}