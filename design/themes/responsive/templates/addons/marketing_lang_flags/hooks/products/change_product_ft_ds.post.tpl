{if $product.marketing_lang_flags|@count > 0}
<div style="float:left;"> <span>{__("product_marketing_lang_flags_lang_available")}</span></div><div style="float:left; line-height: 40px;"> {foreach from=$product.marketing_lang_flags item="language"} <span class="flag-icon flag-icon-{$language}"></span>{/foreach}</div>
{/if}
