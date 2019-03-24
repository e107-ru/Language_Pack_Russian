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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/users.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Управление пользователями";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "На этой странице вы можете добавить юзера, который незамедлительно будет активирован, с назначенными вами правами доступа и пренадлежности к классу.<br /><br />
	Если вы установите параметры «Подтверждение по электронной почте», логин и пароль будут отправлены <b>открытым текстом</b>, поэтому пользователю рекомендуется изменить свой пароль при получении письма подтверждения учетной записи.";
    break;

  case 'prune' :
	$text = "Массовое удаление нежелательных пользователей из базы данных. Это могут быть либо те, кто не смог завершить процесс регистрации, либо
  те, чьи адреса эл. почты были недействительными. Любые сообщения на форуме, в комментариях и т. д. Будут отмечены как «Удаленный пользователь»,'.
	";
	break;

  case 'unverified' :
	$text = "Отображает тех пользователей, которые не смогли завершить процесс регистрации. Параметры отображают весь список аккаунтов.";
    break;

  case 'options' :
	$text = "Настройки, влияющие на всех пользователей.<br /><br />
	<b>Разрешить загрузку Аватаров</b><br />
	Если включено, пользователи могут загрузить свой аватар, который будет храниться на вашем сервере. Относитесь с осторожностью, так как могут быть проблемы с безопасностью.<br /><br />
	<b>Разрешить загрузку фотографий</b><br />
	Если включено, пользователи могут загрузить на сервер свою фотографию. Относитесь с осторожностью, так как могут быть проблемы с безопасностью.<br /><br />
	<b>Отслеживание юзера он-лайн</b><br />
	Включите, если желаете отслеживать практически все действия пользователя, включая количество участников онлайн. Опция значительно увеличивает нагрузку на Базу Данных.<br /><br />
	<b>Данные пользователя</b><br />
	Определяет класс, которому будет доступен список пользоварелей сайта.
	";
    break;

  default :
	$text = "Страница показывает список зарегистрированных пользователей. Вы можете обновить настройки, предоставлять статус администратора, назначать класс пользователей, а также многое другое.<br /><br />
	Порядок сортировки изменяется, если нажать на заголовок столбца.<br />
	Видимые столбцы информации можно изменить, нажав на «Опции» в верхнем меню, выбрать нужные столбцы, затем кликнуть на «Сохранить»<br /><br />
	<b>Информация</b><br />
	Показать Профиль пользователя (или кликнуть по отображаемому имени)<br /><br />
	<b>Классы пользователей</b><br />
	Установить принадлежность к классу можно двумя способами: либо индивидуально, выбрав нужный класс пользователей, либо пакетной обработкой, выбирая внизу страницы одного/нескольких юзеров. <br /><br />
	<b>Редактировать</b><br />
	Изменить настройки профиля. <br /><br />
	<b>Бан и Отмена бана</b><br />
	Определить, может ли пользователь получить доступ к сайту.<br /><br />
	<b>Активировать</b><br />
	Авторизует пользователя, который ответил на письмо активации (нажал на ссылку подтверждения аккаунта)<br /><br />
	<b>Повторная отправка Email</b><br />
	Ещё раз отправляет электронное письмо активации аккаунта.<br /><br />
	<b>Проверка адреса эл. почты</b><br />
	Автоматически проверять email-адрес на действительность (без отправки электронного сообщения)<br /><br />
	<b>Классы пользователей</b><br />
	Установить класс для пользователя<br /><br />
	<b>Удаление</b><br />
	Полное удаление пользователя (любые сообщения на форуме, комментарии и т. д., остаются помечеными как «Удаленный»)";
}

$ns -> tablerender($caption, $text);
unset($text);