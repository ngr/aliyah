<?php if (!defined('IN_PHPBB')) exit; ?>﻿<?php $this->_tpl_include('overall_header.html'); ?>


<head>
</head>

<div id="middlepart">
  <table cellpadding="0" cellspacing="0" width="100%" height="1">
    <tr>
      <td width="100%" align="center" valign="top" style="padding-left: 29px;"> &nbsp;
      </td>
    </tr>
  </table>
</div>

<div id="contentpart">
  <div id="content">
    <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td class="content-box" valign="top" align="left" style="padding-right: 0px; width: 600px; padding-left: 5px;">
        <div style="width: 600px;">
        	Добро пожаловать!<br><br>До начала изучения иврита осталась всего пара минут. Так как программа автоматически подстраивается под Ваше знание языка, 
			то для работы с флеш-картами важно зарегистрироваться и подтвердить e-mail. Эта же учётная запись может в дальнейшем использоваться 
			Вами и для общения на форуме. После авторизации для перехода к 
			тестам, используйте кнопку <strong>"Флеш-карты"</strong> в верхнем 
			меню.</div>
        <div style="font-weight:bold;font-size:large;text-align:left; padding-top:30px;"><a href="../ucp.php?mode=register">Регистрация</a></div>

        </td>
      </tr>
    </table>
<div style="font-style:italic;font-size:large;text-align:left; padding-top:50px;">Рекомендуем ознакомиться: <a href="http://phpbb.aliyah.co/viewtopic.php?f=6&amp;t=16http://phpbb.aliyah.co/viewtopic.php?f=6&amp;t=16">Инструкция и замечания! </a></div>
    <?php if ($this->_rootref['L_DB_QUERIES']) {  ?>

    <div style="font-style:italic;font-size:x-small;text-align:left;">DB queries: <?php echo ((isset($this->_rootref['L_DB_QUERIES'])) ? $this->_rootref['L_DB_QUERIES'] : ((isset($user->lang['DB_QUERIES'])) ? $user->lang['DB_QUERIES'] : '{ DB_QUERIES }')); ?> <br> DB query time: <?php echo ((isset($this->_rootref['L_DB_QUERY_TIME'])) ? $this->_rootref['L_DB_QUERY_TIME'] : ((isset($user->lang['DB_QUERY_TIME'])) ? $user->lang['DB_QUERY_TIME'] : '{ DB_QUERY_TIME }')); ?></div>
    <?php } ?>

  </div>
</div>