<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wypożyczalnia samochodów - Piotr Miechowski</title>
	<link rel="stylesheet" href="{$conf->app_url}/css/pure-min.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/grids-responsive-min.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/styles.css">
</head>
<body>

<div class="pure-menu pure-menu-horizontal">
	<ul class="pure-menu-list">
		<li class="pure-menu-item"><a href="{$conf->action_root}start" class="pure-menu-link">Strona główna</a></li>
		{if core\RoleUtils::inRole(1)}
			<li class="pure-menu-item"><a href="{$conf->action_root}admin" class="pure-menu-link">Admin</a></li>
		{/if}
		{if core\RoleUtils::inRole(2)}
			<li class="pure-menu-item"><a href="{$conf->action_root}moder" class="pure-menu-link">Moderator</a></li>
		{/if}
		{if count($conf->roles)>0}
			<li class="pure-menu-item"><a href="{$conf->action_root}logout" class="pure-menu-link">Wyloguj</a></li>
		{else}
			<li class="pure-menu-item"><a href="{$conf->action_root}login" class="pure-menu-link">Logowanie</a></li>
		{/if}
		<li class="pure-menu-item"><a href="{$conf->action_root}registration" class="pure-menu-link">Rejestracja</a></li>
	</ul>
</div>

<div class="banner">
	<h1 class="banner-head">
		SUPER FURA<br />
		AUTA NA GODZINY
	</h1>
</div>

{block name=messages}

	{if $msgs->isMessage()}
		<div class="information pure-g">
			<div class="pure-u-1 pure-u-md-1-1">
				<div class="l-box">
					<h3 class="information-head">Komunikat</h3>
					<p>
						{foreach $msgs->getMessages() as $msg}
						{strip}
					<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
					{/strip}
					{/foreach}
					</p>
				</div>
			</div>
		</div>
	{/if}

{/block}

{block name=top} {/block}

<div class="footer l-box">
	<p>
		Strona stworzona przy pomocy Amelia PHP Framework oraz Pure.CSS <br /> Autor: Piotr Miechowski
	</p>
</div>

</body>
</html>