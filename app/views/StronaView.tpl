
{extends file="main.tpl"}

 

    {block name=content}

        <p> użytkownik: {$user->login}, rola: {$user->role}</p>
        <div class="row">
            
        
</p>
<section>
            <ul class="actions">
                <li><a href="{$conf->action_url}calcCompute"  class="pure-menu-heading pure-menu-linkn">Powrót do kalkulatora</a></li>
                <li><a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">Wyloguj się</a>
                </li>
            </ul>
            
        </section>


        <section>
            <div class="row">
                <h2> HISTORIA WYNIKÓW: </h2>
                    {include file='database_records.tpl'}
                </div>
    </section>





    {/block}










