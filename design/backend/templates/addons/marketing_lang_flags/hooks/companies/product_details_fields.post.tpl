

<div class="control-group">
            <label class="control-label" for="product_description_marketing_lang_flags">{__("product_marketing_lang_flags")}</label>
            <div class="controls">
          
           {foreach from=$languages_array item="language"}
             <input class="input" form="form" type="checkbox" name="product_data[marketing_lang_flags][]" id="product_description_marketing_lang_flags_{$language.falg}" value="{$language.falg}" {if $language.falg|in_array:$product_data.marketing_lang_flags} checked{/if} /><i title="{$language.name}"  class="flag flag-{$language.falg}"></i>
                 {/foreach}

            </div>
            
       
            

 </div>