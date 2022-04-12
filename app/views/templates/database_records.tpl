
<ol>
    {foreach $data as $item} 
        {strip}
            <li><b>idwynik</b>: {$item['idwynik']} 
                ||||<b> kwota</b>: {$item['kwota']} 
                ||||<b> liczba lat</b>: {$item['lat']} 
                ||||<b> procent</b>: {$item['procent']}
                ||||<b> rata</b>: {$item['rata']}  
                ||||<b> data</b>: {$item['data']}</li>
            {/strip}
        {/foreach}
</ol>