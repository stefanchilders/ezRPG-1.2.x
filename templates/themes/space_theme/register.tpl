{include file="file:[$THEME]header.tpl" TITLE="Register"}

<h1>{$LANGUAGE_Page_Register}</h1>
<div id="center_box" align="center">
<p>
{$LANGUAGE_Want_to_join_the_fun_Fill_out_the_form_below_to_register}
</p>

<form method="POST" action="index.php?mod=Register">

<label>{$LANGUAGE_Username}</label>
<input type="text" size="40" name="username"{if $GET_USERNAME != ""} value="{$GET_USERNAME}"{/if} />

<label>{$LANGUAGE_Password}</label>
<input type="password" size="40" name="password" />

<label>{$LANGUAGE_Verify_Password}</label>
<input type="password" size="40" name="password2" />

<label>{$LANGUAGE_Email}</label>
<input type="text" size="40" name="email"{if $GET_EMAIL != ""} value="{$GET_EMAIL}"{/if} />

<label>{$LANGUAGE_Verify_Email}</label>
<input type="text" size="40" name="email2"{if $GET_EMAIL2 != ""} value="{$GET_EMAIL2}"{/if} />

<label>{$LANGUAGE_Enter_The_Code}</label>
<img src="./captcha.php" /><br />
<input type="text" size="40" name="reg_verify" autocomplete="off" />

<br />
<input name="register" type="submit" value="{$LANGUAGE_Register}" class="button" />
</form>
</div>
{include file="file:[$THEME]footer.tpl"}