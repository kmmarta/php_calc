{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}showStrona"  class="pure-menu-heading pure-menu-link"> STRONA DLA ADMINA</a>
	
</div>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
             <div class="row">
        <div class="col-6">

            <!-- Form -->
            

                <form method="post" action="{$conf->action_root}calcCompute">
                    <div class="field">
                        <div class="col-6">
                            <input type="text" name="a" id="a" value="{$form->a}" placeholder="Kwota kredytu" />
                        </div>
                        <div class="col-6">
                            <input type="text" name="b" id="b" value="{$form->b}" placeholder="Liczba lat" />
                        </div>
                        <div class="col-6">
                            <input type="text" name="c" id="c" value="{$form->c}" placeholder="Oprocentowanie" />
                        </div>

                        <div class="col-6">
                            <ul class="actions">
                                <li><input type="submit" value="Oblicz ratę kredytu" /></li>
                               
                            </ul>
                        </div>
                    </div>
                </form>
                        <section>
<div class="row">
             
    <h2> WITAM W KALKULATORZE KREDYTOWYM</h2>
                <img src="{$conf->app_url}/images/TEKILA.jpg" alt="WITAM W KALKULATORZE KREDYTOWYM" width="350" height="501" />
               
                <?php

            </div>
            <p> </p>
        </section>
       
            
        
{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}