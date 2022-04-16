
<ol>
    {foreach $data as $item} 
        {strip}
            <li><u>idwynik</u>: {$item['idwynik']} 
                ||||<u> kwota</u>: {$item['kwota']} 
                ||||<u> liczba lat</u>: {$item['lat']} 
                ||||<u> procent</u>: {$item['procent']}
                ||||<u> rata</u>: {$item['rata']}  
                ||||<u> data</u>: {$item['data']}</li>
            {/strip}
        {/foreach}
</ol>