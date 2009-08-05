<?php

/*
	It is recommended for you to change 'auth_login_incorrect_password' and 'auth_login_username_not_exist' into something vague.
	For example: Username and password do not match.
*/

$lang['auth_login_incorrect_password'] = "Su contrase�a es incorrecta.";
$lang['auth_login_username_not_exist'] = "El usuario no existe.";

$lang['auth_username_or_email_not_exist'] = "El usuario o e-mail no existen.";
$lang['auth_not_activated'] = "Su cuenta no ha sido activada aun. Por favor verifique su e-mail.";
$lang['auth_request_sent'] = "Su peticion para cambiar la contrase�a ya ha sido enviada. Por favor verifique su e-mail.";
$lang['auth_incorrect_old_password'] = "Su contrase�a antigua es incorrecta.";
$lang['auth_incorrect_password'] = "Su contrase�a es incorrecta.";

// Email subject
$lang['auth_account_subject'] = "%s detalles de cuenta";
$lang['auth_activate_subject'] = "%s activation";
$lang['auth_forgot_password_subject'] = "Pedido de nueva contrase�a";

// Email content
$lang['auth_account_content'] = "Bienvenido a %s,

Gracias por registrarse. Su cuenta ha sido creada exitosamente.

Ud. puede ingresar con su nombre de usuario o direccion de e-mail:

Usuario: %s
E-mail: %s
Clave: %s

Ud. puede intentar ingresar ahora yendo a %s

Saludos,
El equipo de %s";

$lang['auth_activate_content'] = "Bienvenido a %s,

Para activar su cuenta, Ud. debe clickear el enlace de activaci�n a continuaci�n:
%s

Por favor active su cuenta dentro de %s horas, caso contrario su registracion sera invalida y debera registrarse nuevamente.

Ud. puede usar su nombre de usuario o direccion de e-mail como ingreso.
Sus detalles de ingreso son los siguientes:

Usuario: %s
Email: %s
Password: %s

Saludos,
El equipo de %s";

$lang['auth_forgot_password_content'] = "%s,

Ud. ha pedido que su contrase�a sea cambiada, debido a que olvido la contrase�a..
Por favor clickee en el siguiente enlace para completar el proceso de cambio de contrase�a:
%s

Su nueva contrase�a: %s
Codigo de Activacion: %s

Luego de que complete exitosamente el proceso, puede cambiar esta nueva contrase�a por la que Ud. desee.

Si Ud. tiene algun otro problema al acceder, por favor contactese a %s.

Saludos,
El equipo de %s";

/* End of file dx_auth_lang.php */
/* Location: ./application/language/english/dx_auth_lang.php */