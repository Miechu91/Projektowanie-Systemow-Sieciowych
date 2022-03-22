<?php
/* Smarty version 3.1.44, created on 2022-01-22 23:45:43
  from 'C:\xampp\htdocs\Projekt\app\views\RegistrationView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61ec8917ec7b37_96197721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03cbb33bfe14337f23d199e55e8d7a9b30473470' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\RegistrationView.tpl',
      1 => 1642891542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ec8917ec7b37_96197721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111278746361ec8917ec1ab0_19495899', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_111278746361ec8917ec1ab0_19495899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_111278746361ec8917ec1ab0_19495899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="l-content">
        <div class="information pure-g">
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <h3 class="information-head">Rejestracja</h3>
                    <p>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adduser" method="post" class="pure-form pure-form-aligned">
                        <fieldset>
                            <div class="pure-control-group">
                                <label for="name">Imię: </label>
                                <input id="name" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" />
                            </div>
                            <div class="pure-control-group">
                                <label for="surname">Nazwisko: </label>
                                <input id="surname" type="text" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
" />
                            </div>
                            <div class="pure-control-group">
                                <label for="mail">e-mail: </label>
                                <input id="mail" type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->mail;?>
" />
                            </div>
                            <div class="pure-control-group">
                                <label for="login">login: </label>
                                <input id="login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />
                            </div>
                            <div class="pure-control-group">
                                <label for="pass">Hasło: </label>
                                <input id="pass" type="password" name="pass" /><br />
                            </div>
                            <div class="pure-controls">
                                <input type="submit" value="Zarejestruj" class="button-choose pure-button"/>
                            </div>
                        </fieldset>
                    </form>
                    </p>
                </div>
            </div>
        </div> <!-- end information -->
    </div> <!-- end l-content -->

<?php
}
}
/* {/block 'top'} */
}
