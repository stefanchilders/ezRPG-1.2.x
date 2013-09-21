<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="Description" content="ezRPG Project, the free, open source browser-based game engine!" />
<meta name="Keywords" content="ezrpg, game, game engine, pbbg, browser game, browser games, rpg, ezrpg project" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" href="static/default/style.css" type="text/css" />	
<title>ezRPG :: {$TITLE|default:""}</title>


    <script language="javascript" type="text/javascript">
    
       window.setInterval("zeitanzeige()",1000);
 
       function zeitanzeige()
       {
        d = new Date ();
 
        h = (d.getHours () < 10 ? '0' + d.getHours () : d.getHours ());
        m = (d.getMinutes () < 10 ? '0' + d.getMinutes () : d.getMinutes ());
        s = (d.getSeconds () < 10 ? '0' + d.getSeconds () : d.getSeconds ());
 
        document.getElementById("zeit").innerHTML =  
        h + ':' + m + ':' + s ;
       }
    </script>


</head>
<body>

<div id="wrapper">

<div id="header">
	<span id="title">{$GAMESETTINGS['game_name']['value']}</span>
	<span id="time">{$LANGUAGE_SYS_{$smarty.now|date_format:'%A'}}<span id="zeit"></span>
	<br />
	<strong>{$LANGUAGE_SYS_Players_Online}</strong>: {$ONLINE}</span>
</div>

<div id="nav">
	{if $LOGGED_IN == 'TRUE'}
	<ul>
	{foreach from=$TOP_MENU_UserMenu item=menu key=menukey} 
	<li><a href={$menu}>{$LANGUAGE_SYS_{$menukey}}</a></li>
	{/foreach}
	</ul>
	{else}
	<ul>
	{foreach from=$TOP_MENU_LOGGEDOUT item=menu key=menukey} 
	<li><a href={$menu}>{$LANGUAGE_SYS_{$menukey}}</a></li>
	{/foreach}
	</ul>
	{/if}
</div>

<span class="space"></span>

{if $LOGGED_IN == 'TRUE'}
<div id="sidebar">
<strong>{$LANGUAGE_SYS_Level}</strong>: {$player->level}<br />
<strong>{$LANGUAGE_SYS_Gold}</strong>: {$player->money}<br />
<div class="bar">
	<div class="inner" style="width: {{$player->exp}/{$player->max_exp}*100}%"></div>
	<div class="text">{$LANGUAGE_SYS_EXP}: {$player->exp} / {$player->max_exp}</div>
</div>
<div class="bar">
	<div class="inner" style="width: {{$player->hp}/{$player->max_hp}*100}%"></div>
	<div class="text">{$LANGUAGE_SYS_HP}: {$player->hp} / {$player->max_hp}</div>
</div>
<div class="bar">
	<div class="inner" style="width: {{$player->energy}/{$player->max_energy}*100}%"></div>
	<div class="text">{$LANGUAGE_SYS_Energy}: {$player->energy} / {$player->max_energy}</div>
</div>

{if $new_logs > 0}
<a href="index.php?mod=EventLog" class="red"><strong>{$new_logs} {$LANGUAGE_SYS_New_Log_Events}</strong></a>
{/if}
</div>
{/if}

<div id="{if $LOGGED_IN == 'TRUE'}gamebody{else}body{/if}">
	{if isset($MSG)}
	<div class="msg">
	{foreach $MSG as $newmsg}
		{foreach $newmsg as $level=>$message}
			<span class="msg {$level}"><strong>{$message}</strong></span>
		{/foreach}
	{/foreach}
	</div>
	{/if}
	<span class="space"></span>
