<?php
/* Smarty version 3.1.30, created on 2017-06-07 23:23:27
  from "C:\xampp\htdocs\bases\templates\adminListado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59386ecfce5f39_75323589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b81902ae2f61a5c7cf03efc93b513db81eafb26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bases\\templates\\adminListado.tpl',
      1 => 1496870603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59386ecfce5f39_75323589 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\bases\\libs\\plugins\\modifier.truncate.php';
?>

<section class="container">
   <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
      <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
    <?php }?>
  <div class="row">
    <h4>Listado de productos</h4>
    <div class="row destacados" >
      <p>
          <a href="/maquinarias/admin/productos/agregar" class="btn btn-success" role="button">Agregar nuevo producto</a>
      </p>
         <div class="row">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <div class="col-md-3">
            <div class="unidad">
              <img src="/maquinarias/<?php echo $_smarty_tpl->tpl_vars['item']->value['imagenes_des'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
" class="img-rounded" width="204" height="136" >
              <div class="caption">
                <h4><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['prod_nombre'],24,"...",true);?>
</h4>
                <p>Categoria: <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_nombre'];?>
</p>
                <p>Marca: <?php echo $_smarty_tpl->tpl_vars['item']->value['mar_nombre'];?>
</p>
                <p>
                  <a href="/maquinarias/admin/productos/modificar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_producto'];?>
" class="btn btn-primary" role="button">Modificar</a>
                  <a href="/maquinarias/admin/productos/borrar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_producto'];?>
" class="btn btn-default" role="button">Eliminar</a>
                </p>
              </div>
            </div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </div>
    </div>
  </div>
</section>
<?php }
}
