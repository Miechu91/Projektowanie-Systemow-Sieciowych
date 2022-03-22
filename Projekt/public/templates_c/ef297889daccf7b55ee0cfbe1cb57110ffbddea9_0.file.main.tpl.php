<?php
/* Smarty version 3.1.44, created on 2022-01-24 22:23:49
  from 'C:\xampp\htdocs\Projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61ef18e5756c06_19157227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef297889daccf7b55ee0cfbe1cb57110ffbddea9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\templates\\main.tpl',
      1 => 1643059420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ef18e5756c06_19157227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wypożyczalnia samochodów - Piotr Miechowski</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/pure-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/grids-responsive-min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styles.css">
</head>
<body>

<div class="pure-menu pure-menu-horizontal">
	<ul class="pure-menu-list">
		<li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
start" class="pure-menu-link">Strona główna</a></li>
		<?php if (core\RoleUtils::inRole(1)) {?>
			<li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
admin" class="pure-menu-link">Admin</a></li>
		<?php }?>
		<?php if (core\RoleUtils::inRole(2)) {?>
			<li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
moder" class="pure-menu-link">Moderator</a></li>
		<?php }?>
		<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
			<li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-link">Wyloguj</a></li>
		<?php } else { ?>
			<li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" class="pure-menu-link">Logowanie</a></li>
		<?php }?>
		<li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registration" class="pure-menu-link">Rejestracja</a></li>
	</ul>
</div>

<div class="banner">
	<h1 class="banner-head">
		SUPER FURA<br />
		AUTA NA GODZINY
	</h1>
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157074067961ef18e5748aa8_98512974', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206204962361ef18e5756058_10196222', 'top');
?>


<div class="footer l-box">
	<p>
		Strona stworzona przy pomocy Amelia PHP Framework oraz Pure.CSS <br /> Autor: Piotr Miechowski
	</p>
</div>

</body>
</html><?php }
/* {block 'messages'} */
class Block_157074067961ef18e5748aa8_98512974 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_157074067961ef18e5748aa8_98512974',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
		<div class="information pure-g">
			<div class="pure-u-1 pure-u-md-1-1">
				<div class="l-box">
					<h3 class="information-head">Komunikat</h3>
					<p>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
						<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</p>
				</div>
			</div>
		</div>
	<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'top'} */
class Block_206204962361ef18e5756058_10196222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_206204962361ef18e5756058_10196222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
}
