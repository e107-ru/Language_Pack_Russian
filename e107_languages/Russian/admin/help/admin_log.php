<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/admin_log.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Журналы логов";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Фильтры данных</b><br />
  Вы можете указать различные фильтры, которые ограничивают объем данных для просмотра. Настройки фильтров сохраняются в сессионной cookie, до тех пор пока вы не выйдете из системы.<br />
  Фильтры начальных и конечных даты/времени должны быть включены через соответствующие чекбоксы.<br />
  Другие фильтры активны, если в соответсвующее поле записано значение.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "На этой странице отображаются действия пользователя, которые вы выбрали для записи в журнал логов.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Эта страница позволяет настроить различные параметры для логов системы.<br /><br />
  <b>Общие настройки</b><br />
  Устанавливает количество строк для отображения логов.<br /><br />
  <b>Логи Администратора</b><br />
  Этот журнал логов сохраняет события до тех пор, пока они не будут удалены; используйте эти настройки удаления старых событий.<br /><br />
  <b>Логи пользователей</b><br />
   Журнал отслеживает активность пользователя. Для зарегистрированных пользователей отслеживаются только те классы, которые вы выбрали для отслеживания их активности. 
   Можно настроить так, чтобы отслеживать только определенный класс пользователей, или создать свой пользовательский класс для записи его действий в журнал. 
   Затем, можно насторить типы действий, которые вы хотите отслеживать.<br />
   Логи регистрации на сайте отслеживаются отдельно.<br /><br />
  <b>Ротация логов</b><br />
  Этот журнал используется для отслеживания аномальных событий, поддержки отладки и т. Д. Его можно отключить. События автоматически удаляются после установленного количества дней.
  ";
  break;
case 'rolllog' :
  $text = "В логах отображаются различные аномальные события, которые иначе не регистрируются. Он также может использоваться для отладки и для проверки кода.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "На этой странице отображаются загрузки пользователей.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "На этой странице отображаются комментарии пользователей, с возможностью выбора по идентификатору пользователя, типу и дате. Нежелательные комментарии могут быть удалены.";
  break;
case 'detailed' :
  $text = "Основная система логов регистрирует время записей с высокой степенью точности (если сервер поддерживает ее), и эта страница позволяет вам проверять записи
 событий происхосящих в относительно небольшом временном промежутке. Записи из журнала логов администратора, логов действий пользователя и логов ротации объединяются, так что вы можете видеть точные
 соотношения между событиями.";
  break;
case 'adminlog' :
default :
  $text = "Эта страница отображает логи Администраторов.<br /><br />
  (В днный момент в логи добавляются данные, поэтому запись в журнал ещё не закончена.)<br /><br />";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
?>