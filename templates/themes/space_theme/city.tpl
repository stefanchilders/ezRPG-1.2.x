{include file="file:[$THEME]header.tpl" TITLE="City"}

<h1>{$LANGUAGE_SYS_City}</h1>

<div class="left">

<h3>{$LANGUAGE_SYS_Player}</h3>

<ul>
	{foreach from=$MENU_UserMenu item=menu key=menukey} 
<li><a href={$menu}>{$LANGUAGE_SYS_{$menukey}}</a></li>
	{/foreach}
</ul>
</div>
<div class="right">

<h3>{$LANGUAGE_SYS_World}</h3>

<ul>
	{foreach from=$MENU_WorldMenu item=menu key=menukey} 
<li><a href={$menu}>{$LANGUAGE_SYS_{$menukey}}</a></li>
	{/foreach}
</ul>

<h3>{$LANGUAGE_SYS_City}</h3>

<ul>
	{foreach from=$MENU_City item=menu key=menukey} 
<li><a href={$menu}>{$LANGUAGE_SYS_{$menukey}}</a></li>
	{/foreach}
</ul>



</div>

{include file="file:[$THEME]footer.tpl"}
