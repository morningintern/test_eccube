<?php /* Smarty version 2.6.26, created on 2014-12-22 02:07:18
         compiled from system/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'system/index.tpl', 26, false),array('modifier', 'h', 'system/index.tpl', 57, false),array('function', 't', 'system/index.tpl', 44, false),)), $this); ?>

<form name="form1" id="form1" method="post" action="">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<div id="system" class="contents-main">
    <div class="paging">
        <!--▼ページ送り-->
        <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_strnavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

        <!--▲ページ送り-->
    </div>

    <!--▼メンバー一覧ここから-->
    <table class="list">
        <col width="15%" />
        <col width="20%" />
        <col width="20%" />
        <col width="10%" />
        <col width="7.5%" />
        <col width="7.5%" />
        <col width="20%" />
        <div class="btn">
            <a class="btn-action" href="javascript:;" onclick="win02('./input.php','input','620','450'); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Add member_01'), $this);?>
</span></a>
        </div>
        <tr>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Access_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Name_03'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Affiliation_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Operating_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</th>
            <th><?php echo smarty_function_t(array('string' => 'tpl_Move_01'), $this);?>
</th>
        </tr>
        <?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['list_data'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
$this->_sections['data']['start'] = $this->_sections['data']['step'] > 0 ? 0 : $this->_sections['data']['loop']-1;
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = $this->_sections['data']['loop'];
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?><!--▼メンバー<?php echo ((is_array($_tmp=$this->_sections['data']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-->
        <tr>
            <?php $this->assign('auth', ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['authority'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?><td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrAUTHORITY'][$this->_tpl_vars['auth']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['department'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <?php $this->assign('work', ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['work'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?><td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrWORK'][$this->_tpl_vars['work']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</td>
            <td align="center"><a href="#" onClick="win02('./input.php?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['member_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
&amp;pageno=<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_disppage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
','member_edit','620','450'); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Edit_01'), $this);?>
</a></td>
            <td align="center"><?php if (((is_array($_tmp=$this->_tpl_vars['workmax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 1): ?><a href="#" onClick="fnDeleteMember(<?php echo ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['member_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
,<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_disppage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;"><?php echo smarty_function_t(array('string' => 'tpl_Remove_01'), $this);?>
</a><?php else: ?>-<?php endif; ?></td>
            <td align="center">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_nomove'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

            <?php if (! ( ((is_array($_tmp=$this->_sections['data']['first'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['tpl_disppage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1 )): ?><a href="./rank.php?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['member_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
&amp;move=up&amp;pageno=<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_disppage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><?php echo smarty_function_t(array('string' => 'tpl_To top_01'), $this);?>
</a><?php endif; ?>
            <?php if (! ( ((is_array($_tmp=$this->_sections['data']['last'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['tpl_disppage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['tpl_pagemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?><a href="./rank.php?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['member_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
&amp;move=down&amp;pageno=<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_disppage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><?php echo smarty_function_t(array('string' => 'tpl_To bottom_01'), $this);?>
</a><?php endif; ?>
            </td>
        </tr>
        <!--▲メンバー<?php echo ((is_array($_tmp=$this->_sections['data']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-->
        <?php endfor; endif; ?>
    </table>

    <div class="paging">
        <!--▼ページ送り-->
        <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_strnavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

        <!--▲ページ送り-->
    </div>
</div>
</form>