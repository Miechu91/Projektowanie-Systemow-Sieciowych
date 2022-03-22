<?php
/* Smarty version 3.1.44, created on 2022-01-24 14:03:06
  from 'C:\xampp\htdocs\Projekt\app\views\StartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61eea38a9fc1a9_89671843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '242663d24f33baacc1f7517b3fca3d9ca0396788' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\StartView.tpl',
      1 => 1643029385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61eea38a9fc1a9_89671843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92904772161eea38a9e5424_29357548', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_92904772161eea38a9e5424_29357548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_92904772161eea38a9e5424_29357548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_reservations']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["id_cars"];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["state"];
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('reservation_state1', $_prefixVariable2);?>
        <?php }?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["id_cars"];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 2) {?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["state"];
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('reservation_state2', $_prefixVariable4);?>
        <?php }?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["id_cars"];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == 3) {?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["state"];
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_assignInScope('reservation_state3', $_prefixVariable6);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div class="l-content">
        <div class="pricing-tables pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table">
                    <div class="pricing-table-header">
                        <span class="pricing-table-price">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/samochod1.jpg" width="310" height="200" />
                        </span>
                    </div>
                    <ul class="pricing-table-list">
                        <li>Model: Mercedes AMG</li>
                        <li>Moc: 500 KM</li>
                        <li>Wyposażenie: komfort</li>
                        <li>Spalanie: 10 L/100km</li>
                        <li>Cena: 200 zł/h</li>
                    </ul>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation/1" method="get">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['reservation_state1']->value;
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == 1) {?>
                            <button type="submit" class="button-choose pure-button" disabled>Zarezerwowany</button>
                        <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['reservation_state1']->value;
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 == 2) {?>
                            <button type="submit" class="button-choose pure-button" disabled>Rezerwacja zaakceptowana</button>
                        <?php } else { ?>
                            <button type="submit" class="button-choose pure-button">Wybierz</button>
                        <?php }}?>

                    </form>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table">
                    <div class="pricing-table-header">
                        <span class="pricing-table-price">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/samochod2.jpg" width="310" height="200" />
                        </span>
                    </div>
                    <ul class="pricing-table-list">
                        <li>Model: Ford Mustang</li>
                        <li>Moc: 800 KM</li>
                        <li>Wyposażenie: sport</li>
                        <li>Spalanie: 18 L/100km</li>
                        <li>Cena: 180 zł/h</li>
                    </ul>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation/2" method="get">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['reservation_state2']->value;
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable9 == 1) {?>
                            <button type="submit" class="button-choose pure-button" disabled>Zarezerwowany</button>
                        <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['reservation_state2']->value;
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10 == 2) {?>
                            <button type="submit" class="button-choose pure-button" disabled>Rezerwacja zaakceptowana</button>
                        <?php } else { ?>
                            <button type="submit" class="button-choose pure-button">Wybierz</button>
                        <?php }}?>

                    </form>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <div class="pricing-table">
                    <div class="pricing-table-header">
                        <span class="pricing-table-price">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/samochod3.jpg" width="310" height="200" />
                        </span>
                    </div>
                    <ul class="pricing-table-list">
                        <li>Model: Porsche Panamera</li>
                        <li>Moc: 420 KM</li>
                        <li>Wyposażenie: komfort</li>
                        <li>Spalanie: 8 L/100km</li>
                        <li>Cena: 150 zł/h</li>
                    </ul>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation/3" method="get">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['reservation_state3']->value;
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable11 == 1) {?>
                            <button type="submit" class="button-choose pure-button" disabled>Zarezerwowany</button>
                        <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['reservation_state3']->value;
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable12 == 2) {?>
                            <button type="submit" class="button-choose pure-button" disabled>Rezerwacja zaakceptowana</button>
                        <?php } else { ?>
                            <button type="submit" class="button-choose pure-button">Wybierz</button>
                        <?php }}?>

                    </form>
                </div>
            </div>
        </div> <!-- end pricing-tables -->

        <div class="information pure-g">
            <div class="pure-u-1 pure-u-md-1-1">
                <div class="l-box">
                    <h3 class="information-head">O nas</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel est nulla. Interdum et
                        malesuada fames ac ante ipsum primis in faucibus. Integer scelerisque, elit ac semper aliquet,
                        ligula ipsum eleifend est, eu scelerisque diam lectus ac enim. Sed finibus iaculis erat, vel
                        viverra enim rutrum nec. Pellentesque accumsan, est sed mollis posuere, purus urna pulvinar est,
                        a imperdiet orci nulla eu leo. Nulla non est non urna facilisis semper. Donec eu ipsum sollicitudin,
                        malesuada leo in, efficitur dui. Ut pretium ex id elit laoreet, id ultricies sapien sodales.
                        Sed eleifend tempus sem, a faucibus elit bibendum quis. In rhoncus aliquam nulla non porttitor.
                        Morbi eget convallis massa. Suspendisse ullamcorper fermentum dictum. Cras vestibulum pretium varius.
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras gravida elementum velit, nec
                        mattis nunc scelerisque non.
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
