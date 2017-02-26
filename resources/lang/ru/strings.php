<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы названий строк (Strings)
    |--------------------------------------------------------------------------
    |
    | Следующие языковые ресурсы используются в названиях
    | строк (Strings) всего вашего приложения.
    | Вы можете свободно изменять эти языковые ресурсы в соответствии
    | с требованиями вашего приложения.
    |
    */

    'backend'  => [
        'access'    => [
            'users' => [
                'delete_user_confirm'  => 'Вы уверены, что хотите удалить этого пользователя навсегда? Если в приложении, имеются ссылки на этого пользователя, возможно это приведет к ошибкам. Действуйте на своё усмотрение!',
                'if_confirmed_off'     => '(Если чекбоокс \'Подтверждён\' неактивен)',
                'restore_user_confirm' => 'Восстановить этого пользователя?',
            ],
        ],
        'dashboard' => [
            'title'   => 'Системная панель администратора',
            'welcome' => 'Добро пожаловать',
        ],
        'general'   => [
            'all_rights_reserved' => 'Все права защищены.',
            'are_you_sure'        => 'Вы уверены?',
            'boilerplate_link'    => 'Laravel 5 Boilerplate',
            'continue'            => 'Продолжить',
            'member_since'        => 'Пользователь с',
            'minutes'             => 'минут',
            'search_placeholder'  => 'Поиск...',
            'see_all'             => [
                'messages'      => 'Просмотр всех сообщений',
                'notifications' => 'Показать все',
                'tasks'         => 'Показать все задачи',
            ],
            'status'              => [
                'offline' => 'Офлайн',
                'online'  => 'Онлайн',
            ],
            'timeout'             => 'Вы автоматически выведены из системы из соображений безопасности, так как Вы не были активны в течении',
            'you_have'            => [
                'messages'      => '{0} У Вас нет сообщений|{1} У Вас 1 сообщение|[2,Inf] У Вас :number сообщений',
                'notifications' => '{0} У Вас нет уведомлений|{1} У Вас есть 1 уведомление|[2,Inf] У Вас :number уведомлений',
                'tasks'         => '{0} У Вас нет заданий|{1} У Вас 1 задание|[2,Inf] У Вас :number заданий',
            ],
        ],
        'search'    => [
            'empty'      => 'Введите слово для поиска.',
            'incomplete' => 'Вы должны подключить или создать свою систему поиска для этого приложения.',
            'results'    => 'Результаты поиска :query',
            'title'      => 'Результаты поиска',
        ],
        'welcome'   => <<<'TEXT'
<p>В этой системе управления <strong>"Laravel 5 Boilerplate"</strong>, использована тема оформления <strong>AdminLTE</strong> с минимальным набором стилей и скриптов из этой темы, для полноценной работы этого приложения на данном примере.</p>
<p>Вы можете скачать полную версию <strong>AdminLTE</strong> шаблона по адресу <a href="https://almsaeedstudio.com/" target="_blank">https://almsaeedstudio.com/</a>, и добавить в это приложение необходимые вам компоненты на ваше усмотрение.</p>
<p>Это приложение поставляется с <strong>полнофункциональной библиотекой управления пользователями, и с разграничением пользователей на основе ролей и разрешений.</strong></p>
<p>Имейте в виду, что это приложение постоянно совершенствуется мною и может иметь ошибки, и я делаю все возможное чтобы исправить их, как только буду знать о них.</p>
<p>Надеюсь, что Вам понравится мой труд, который я вложил в это приложение.</p>
<p>Пожалуйста, посетите <a href="https://github.com/rappasoft/laravel-5-boilerplate" target="_blank">GitHub</a> страницу, для получения дополнительной информации, и можете там же опубликовать свои любые вопросы и предложения.</p>
<p><strong>Этот проект является востребованным, и чтобы не отставать от быстро развивающегося Фреймворка laravel, любая помощь приветствуется.</strong></p>
<p>- Anthony Rappa</p>
TEXT
,
    ],
    'emails'   => [
        'auth' => [
            'click_to_confirm'          => 'Щелкните здесь, чтобы подтвердить вашу учетную запись:',
            'error'                     => 'Упс!',
            'greeting'                  => 'Здравствуйте!',
            'password_cause_of_email'   => 'Вы получили это письмо, потому что мы получили запрос на сброс пароля для Вашей учетной записи.',
            'password_if_not_requested' => 'Если Вы не запрашивали запрос на сброс пароля, никаких дополнительных действий не требуется.',
            'password_reset_subject'    => 'Сбросить пароль',
            'regards'                   => 'С уважением,',
            'reset_password'            => 'Щелкните для сброса пароля',
            'thank_you_for_using_app'   => 'Спасибо за использование нашего приложения!',
            'trouble_clicking_button'   => 'Если у вас возникли проблемы с нажатием ":action_text" кнопки, скопируйте и вставьте URL ниже в адресную строку браузера:',
        ],
    ],
    'frontend' => [
        'test'       => 'Тест',
        'tests'      => [
            'based_on'                       => [
                'permission' => 'Система доступа приложения на примере применения разрешения (й) в -',
                'role'       => 'Система доступа приложения на примере применения роли (ей) в -',
            ],
            'js_injected_from_controller'    => 'Javascript Injected from a Controller',
            'using_access_helper'            => [
                'array_permissions'     => 'Access Helper с массивом названий разрешений или их ID\'s, где пользователь обладает всеми правами.',
                'array_permissions_not' => 'Access Helper с массивом названий разрешений или их ID\'s, где пользователь не обладает всеми правами.',
                'array_roles'           => 'Access Helper с массивом имен ролей или их ID\'s, где пользователь обладает всеми правами.',
                'array_roles_not'       => 'Access Helper с массивом имен ролей или их ID\'s, где пользователь не обладает всеми правами.',
                'permission_id'         => 'Access Helper с ID названия разрешения',
                'permission_name'       => 'Access Helper с названием в разрешении',
                'role_id'               => 'Access Helper с ID роли',
                'role_name'             => 'Access Helper с именем роли',
            ],
            'using_blade_extensions'         => 'вьювере Blade Extensions',
            'view_console_it_works'          => 'Сообщение console, вы должны видеть \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because'            => 'Вы видите это, потому что у вас роль \':role\'!',
            'you_can_see_because_permission' => 'Вы видите это, потому что у вас есть разрешение \':permission\'!',
        ],
        'user'       => [
            'change_email_notice'  => 'При смене вашего нового E-mail, он будет перезаписан, и вы должны снова подтвердить свой новый E-mail.',
            'email_changed_notice' => 'Вы должны подтвердить Ваш новый E-mail, прежде чем вы сможете войти снова.',
            'password_updated'     => 'Пароль обновлен.',
            'profile_updated'      => 'Профиль обновлен.',
        ],
        'welcome_to' => 'Добро пожаловать в приложение :place',
    ],
];
