<?php
/* Smarty version 3.1.44, created on 2022-01-24 21:57:05
  from 'C:\xampp\htdocs\Projekt\app\views\ModerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61ef12a13ad5e4_10939730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dc98612fcf105ebf95673b9b83cf0993d008f21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\ModerView.tpl',
      1 => 1643057821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ef12a13ad5e4_10939730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75444265961ef12a139aaf0_54088112', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_75444265961ef12a139aaf0_54088112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_75444265961ef12a139aaf0_54088112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="l-content">
        <div class="information pure-g">
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <h3 class="information-head">Panel moderatora</h3>
                    <p>Lista rezerwacji do zaakceptowania:</p>
                    <table id="tab_people" class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>Numer <br />zamówienia</th>
                            <th>Imię <br />zamawiającego</th>
                            <th>Nazwisko <br />zamawiającego</th>
                            <th>Marka <br />samochodu</th>
                            <th>Model <br />samochodu</th>
                            <th>Opcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["marka"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["model"];?>
</td><td><a class="button-small pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resAccept/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">Zatwierdź</a>&nbsp;<a class="button-small pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">Anuluj</a></td></tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>


                </div>
            </div>
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <p>Lista zaakceptowanych rezerwacji:</p>
                    <table id="tab_people" class="pure-table pure-table-bordered">
                        <thead>
                        <tr>
                            <th>Numer <br />zamówienia</th>
                            <th>Imię <br />zamawiającego</th>
                            <th>Nazwisko <br />zamawiającego</th>
                            <th>Marka <br />samochodu</th>
                            <th>Model <br />samochodu</th>
                            <th>Opcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people2']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["marka"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["model"];?>
</td><td><a class="button-small pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">Anuluj</a></td></tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div> <!-- end information -->
    </div> <!-- end l-content -->

<?php
}
}
/* {/block 'top'} */
}
