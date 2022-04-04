{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}



{block name=content}

<header>
        <h2>Kalkulator kredytowy</h2>
        <p>Oblicz miesięczną rate kredytu</p>
    </header>


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

                <hr />
    



<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>

{/block}