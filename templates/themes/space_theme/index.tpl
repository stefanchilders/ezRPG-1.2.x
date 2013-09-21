{include file="file:[$THEME]header.tpl" TITLE="Home"}

<h1>{$LANGUAGE_Home}</h1>

<div class="left">
<p>
{$LANGUAGE_Welcome_to_ezRPG_Login_now}
</p>
</div>

<div class="right">
<form method="post" action="index.php?mod=Login">
<label>{$LANGUAGE_Username}</label>
<input type="text" name="username" />

<label>{$LANGUAGE_Password}</label>
<input type="password" name="password" />

<input name="login" type="submit" class="button" value="{$LANGUAGE_Login}">
</form>
</div>

{include file="file:[$THEME]footer.tpl"}