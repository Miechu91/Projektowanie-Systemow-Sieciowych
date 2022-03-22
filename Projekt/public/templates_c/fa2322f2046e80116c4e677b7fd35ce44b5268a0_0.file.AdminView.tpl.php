<?php
/* Smarty version 3.1.44, created on 2022-01-24 21:26:12
  from 'C:\xampp\htdocs\Projekt\app\views\AdminView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61ef0b649e4ca3_45170403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa2322f2046e80116c4e677b7fd35ce44b5268a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\AdminView.tpl',
      1 => 1643055961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ef0b649e4ca3_45170403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177803734961ef0b649698c2_06896764', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_177803734961ef0b649698c2_06896764 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_177803734961ef0b649698c2_06896764',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="l-content">
        <div class="information pure-g">
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <h3 class="information-head">Panel administratora</h3>
                    <table id="tab_people" class="pure-table pure-table-bordered">
                        <p>Lista użytkowników w systemie:</p>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imię</th>
                            <th>Nazwisko</th>
                            <th>Adres e-mail</th>
                            <th>Login</th>
                            <th>Rola</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["mail"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["login"];?>
</td><?php if ($_smarty_tpl->tpl_vars['u']->value["id_role"] == 1) {?><td><?php echo $_smarty_tpl->tpl_vars['u']->value["id_role"];?>
 - Admin</td><?php } elseif ($_smarty_tpl->tpl_vars['u']->value["id_role"] == 2) {?><td><?php echo $_smarty_tpl->tpl_vars['u']->value["id_role"];?>
 - Moderator</td><?php } else { ?><td><?php echo $_smarty_tpl->tpl_vars['u']->value["id_role"];?>
 - User</td><?php }?></tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                    <p>Aby zmienić rolę użytkownikowi wprować jego ID oraz numer roli która chcesz mu przypisać:</p>
                    <p>Legenda - role:</p>
                    1 - Admin <br />
                    2 - Moderator<br />
                    3 - User<br />
                    <p>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
changerole" method="post" class="pure-form pure-form-aligned">
                        <fieldset>
                            <div class="pure-control-group">
                                <label for="id_user">ID użytkownika: </label>
                                <input id="id_user" type="text" name="id_user" />
                            </div>
                            <div class="pure-control-group">
                                <label for="id_role">Numer roli: </label>
                                <input id="id_role" type="text" name="id_role" />
                            </div>
                            <div class="pure-controls">
                                <input type="submit" value="Zmień rolę" class="button-choose pure-button"/>
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
