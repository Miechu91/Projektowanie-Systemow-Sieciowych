<?php
/* Smarty version 3.1.44, created on 2022-01-23 15:20:59
  from 'C:\xampp\htdocs\Projekt\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61ed644b24c9a7_97299143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a01c53912a40049b99841d94d68e657c47530422' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\LoginView.tpl',
      1 => 1642947655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ed644b24c9a7_97299143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169111811061ed644b23f352_61390806', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_169111811061ed644b23f352_61390806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_169111811061ed644b23f352_61390806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="l-content">
        <div class="information pure-g">
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <h3 class="information-head">Logowanie</h3>
                    <p>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logged" method="post" class="pure-form pure-form-aligned">
                        <fieldset>
                            <div class="pure-control-group">
                                <label for="login">Login: </label>
                                <input id="login" type="text" name="login" />
                            </div>
                            <div class="pure-control-group">
                                <label for="pass">Hasło: </label>
                                <input id="pass" type="password" name="pass" />
                            </div>
                            <div class="pure-controls">
                                <input type="submit" value="Zaloguj" class="button-choose pure-button"/>
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
