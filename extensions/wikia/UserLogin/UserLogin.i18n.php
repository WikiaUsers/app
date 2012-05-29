<?php
/**
* Internationalisation file for the UserLogin extension.
*
* @addtogroup Languages
*/

$messages = array();

$messages['en'] = array(
	// login
	'userlogin-login-heading' => 'Log in',
	'userlogin-forgot-password' => 'Forgot your password?',
	'userlogin-remembermypassword' => 'Stay logged in',
	'userlogin-error-noname' => 'Oops, please fill in the username field.',
	'userlogin-error-sessionfailure' => 'Your log in session has timed out. Please log in again.',
	'userlogin-error-nosuchuser' => "We don't recognize this name. Don't forget usernames are case sensitive.",
	'userlogin-error-wrongpassword' => 'Oops, wrong password. Make sure caps lock is off and try again.',
	'userlogin-error-wrongpasswordempty' => 'Oops, please fill in the password field.',
	'userlogin-error-resetpass_announce' => 'Looks like you used a temporary password. Pick a new password here to continue logging in.',
	'userlogin-error-login-throttled' => 'You have tried to log in with the wrong password too many times. Wait a while before trying again.',
	'userlogin-error-login-userblocked' => "Your username has been blocked and cannot be used to log in.",
	'userlogin-error-edit-account-closed-flag' => 'Your account has been disabled by Wikia.',
	'userlogin-error-cantcreateaccount-text' => 'Your IP address is not allowed to create new accounts.',
	'userlogin-error-userexists' => 'Someone already has this username. Try a different one!',
	'userlogin-error-invalidemailaddress' => 'Please enter a valid e-mail address.',
	'userlogin-get-account' => 'Don\'t have an account? [[Special:UserSignup|Sign up]]',

	// signup
	'userlogin-error-invalid-username' => 'Invalid username',
	'userlogin-error-userlogin-unable-info' => 'Sorry, we are not able to register your account at this time.',
	'userlogin-error-user-not-allowed' => 'This username is not allowed.',
	'userlogin-error-captcha-createaccount-fail' => 'The word you entered did not match the word in the box, try again!',
	'userlogin-error-userlogin-bad-birthday' => 'Oops, please fill out month, day and year.',
	'userlogin-error-externaldberror' => 'Sorry! Our site is currently having an issue. Please try again later.',
	'userlogin-error-noemailtitle' => 'Please enter a valid e-mail address.',
	'userlogin-error-acct_creation_throttle_hit' => 'Sorry, this IP address has created too many accounts today. Please try again later.',

	// mail password
	'userlogin-error-resetpass_forbidden' => 'Passwords cannot be changed',
	'userlogin-error-blocked-mailpassword' => 'You cannot request a new password because this IP address is blocked by Wikia.',
	'userlogin-error-throttled-mailpassword' => 'We have already sent a password reminder to this account in the last {{PLURAL:$1|hour|$1 hours}}. Please check your email.',
	'userlogin-error-mail-error' => 'Oops, there was a problem sending you e-mail. Please [[Special:Contact/general|contact us]].',
	'userlogin-password-email-sent' => 'We have sent a new password to the e-mail address for $1.',
	'userlogin-error-unconfirmed-user' => 'Sorry, you have not confirmed your e-mail address. Please confirm your e-mail address first.',

	// change password page
	'userlogin-password-page-title' => 'Change your password',
	'userlogin-oldpassword' => 'Old password',
	'userlogin-newpassword' => 'New password',
	'userlogin-retypenew' => 'Retype new password',


	// password email
	'userlogin-password-email-subject' => 'Forgotten password request',
	'userlogin-password-email-greeting' => 'Hi $USERNAME,',
	'userlogin-password-email-content' => 'Please use this temporary password to log in to Wikia: "$NEWPASSWORD"
<br/><br/>
If you did not request a new password, don\'t worry! Your account is safe and secure. You can ignore this email and continue log in to Wikia with your old password.
<br /><br />
Questions or concerns? Feel free to contact us.',
	'userlogin-password-email-signature' => 'Wikia Community Support',
	'userlogin-password-email-body' => 'Hi $2,

Please use this temporary password to log in to Wikia: "$3"

If you did not request a new password, don\'t worry! Your account is safe and secure. You can ignore this email and continue log in to Wikia with your old password.

Questions or concerns? Feel free to contact us.

Wikia Community Support


___________________________________________

To check out the latest happenings on Wikia, visit http://community.wikia.com
Want to control which emails you receive? Go to: {{fullurl:{{ns:special}}:Preferences}}',
	'userlogin-password-email-body-HTML' => '',

	// general email
	'userlogin-email-footer-line1' => 'To check out the latest happenings on Wikia, visit <a style="color:#2a87d5;text-decoration:none;" href="http://community.wikia.com">community.wikia.com</a>',
	'userlogin-email-footer-line2' => 'Want to control which emails you receive? Go to your <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Preferences</a>',
	'userlogin-email-footer-line3' => '<a href="http://www.twitter.com/wikia" style="text-decoration:none">
<img alt="twitter" src="http://images4.wikia.nocookie.net/wikianewsletter/images/f/f7/Twitter.png" style="border:none">
</a>
&nbsp;
<a href="http://www.facebook.com/wikia" style="text-decoration:none">
<img alt="facebook" src="http://images2.wikia.nocookie.net/wikianewsletter/images/5/55/Facebook.png" style="border:none">
</a>
&nbsp;
<a href="http://www.youtube.com/wikia" style="text-decoration:none">
<img alt="youtube" src="http://images3.wikia.nocookie.net/wikianewsletter/images/a/af/Youtube.png" style="border:none">
</a>
&nbsp;
<a href="http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog" style="text-decoration:none">
<img alt="wikia" src="http://images1.wikia.nocookie.net/wikianewsletter/images/b/be/Wikia_blog.png" style="border:none">
</a>',

	// 3rd party login providers
	'userlogin-provider-or' => 'Or',
	'userlogin-provider-tooltip-facebook' => 'Click the button to log in with Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Click the button to sign up with Facebook',

	'userlogin-facebook-show-preferences' => 'Show Facebook feed preferences',
	'userlogin-facebook-hide-preferences' => 'Hide Facebook feed preferences',

	'userlogin-loginreqlink' => 'log in',
	'userlogin-changepassword-needlogin' => 'You need to $1 to change your password.',

	//WikiaMobile skin
	'wikiamobile-sendpassword-label' => 'Send new password',
	'wikiamobile-facebook-connect-fail' => 'Sorry, your Facebook account is not currently linked with a Wikia account.'
);

/** Message documentation (Message documentation)
 * @author Siebrand
 */
$messages['qqq'] = array(
	'userlogin-login-heading' => 'Login page heading',
	'userlogin-forgot-password' => 'Link that asks if you forgot your password.',
	'userlogin-remembermypassword' => 'Label for staying logged in checkbox',
	'userlogin-error-noname' => 'Error message upon login attempt stating the name field is blank.',
	'userlogin-error-sessionfailure' => 'Error message upon login attempt stating session has timed out.',
	'userlogin-error-nosuchuser' => 'Error message upon login attempt stating there is no such user. Reminds of caps lock.',
	'userlogin-error-wrongpassword' => 'Error message upon login attempt stating the password is incorrect. Reminds of caps lock.',
	'userlogin-error-wrongpasswordempty' => 'Error message upon login attempt stating password field is blank.',
	'userlogin-error-resetpass_announce' => 'Error message upon login attempt stating that this password is a temp password, and the user needs to set a new password.',
	'userlogin-error-login-throttled' => 'Error message upon login attempt stating user has failed too many logins for the time period.',
	'userlogin-error-login-userblocked' => 'Error message upon login attempt stating user has been blocked.',
	'userlogin-error-edit-account-closed-flag' => 'Error message upon login attempt stating the account has been closed.',
	'userlogin-error-cantcreateaccount-text' => "Error message upon login attempt stating that the user's IP address has been throttled because of login failures.",
	'userlogin-error-userexists' => 'Error message upon signup attempt stating user name already exists.',
	'userlogin-error-invalidemailaddress' => 'Error message upon signup attempt stating e-mail address is invalid.',
	'userlogin-get-account' => 'Marketing blurb asking to sign up with wikitext internal link to usersignup page. Please append userlang as appropriate.',
	'userlogin-error-invalid-username' => 'Error message upon signup attempt stating username is badly formatted, or invalid',
	'userlogin-error-userlogin-unable-info' => 'Error message upon signup attempt stating account cannot be create currently.',
	'userlogin-error-user-not-allowed' => 'Error message upon signup attempt stating username is unacceptable.',
	'userlogin-error-captcha-createaccount-fail' => 'Error message upon signup attempt stating CAPTCHA has failed or not entered correctly.',
	'userlogin-error-userlogin-bad-birthday' => 'Error message upon signup attempt stating all fields for birthday is required: Year, Month, Day.',
	'userlogin-error-externaldberror' => 'Error message upon signup attempt stating there was a technical issue at Wikia.',
	'userlogin-error-noemailtitle' => 'Error message upon signup attempt stating user should enter a valid e-mail address.',
	'userlogin-error-acct_creation_throttle_hit' => 'Error message upon signup attempt stating that too many accounts have been created from the same IP.',
	'userlogin-error-resetpass_forbidden' => 'Error message stating password cannot be changed.',
	'userlogin-error-blocked-mailpassword' => 'Error message stating password cannot be changed because IP has been restricted.',
	'userlogin-error-throttled-mailpassword' => 'Error message stating email has already been sent $1 hours ago and asks user to check email. Parameters:
* $1 is numerical hour.',
	'userlogin-error-mail-error' => 'Error message stating there was an error sending the email. Link to Contact us page in wikitext.',
	'userlogin-password-email-sent' => 'Validation message stating that email has been to the user. Parameters:
* $1 contains the user name in plain text',
	'userlogin-error-unconfirmed-user' => 'Error message stating that user needs to be confirmed first.',
	'userlogin-password-page-title' => 'Heading for change password page.',
	'userlogin-oldpassword' => 'Label for old password field',
	'userlogin-newpassword' => 'Label for new password field',
	'userlogin-retypenew' => 'Label for retype password field',
	'userlogin-password-email-subject' => 'Subject line for Forgot password email',
	'userlogin-password-email-greeting' => 'Email body heading. $USERNAME is a special wikia magic word, so re-use it without changing. This may contain html markup, and is placed onto a template.',
	'userlogin-password-email-content' => 'Email body. $NEWPASSWORD is wikia magic word. This may contain html markup, and is placed onto a template.',
	'userlogin-password-email-signature' => 'Wikia Email signature at the bottom of the email. This may contain html markup, and is placed onto a template.',
	'userlogin-password-email-body' => 'This is a text-only version email that combines the contents userlogin-password-email-greeting, userlogin-password-email-content, and userlogin-password-email-signature. This does NOT contain HTML. Parameters:
* $2 is username in greeting,
* $3 is the temporary password value. Content-wise, it is exactly the same as templated html version, but this is a complete stand-alone.',
	'userlogin-email-footer-line1' => 'Footer line 1 in the standard Wikia email template.',
	'userlogin-email-footer-line2' => 'Footer line 2 in the standard Wikia email template.',
	'userlogin-provider-or' => 'Word shown between login form and FB connect button',
	'userlogin-provider-tooltip-facebook' => 'Tooltip when hovering over facebook connect button in login page or context.',
	'userlogin-provider-tooltip-facebook-signup' => 'Tooltip when hovering over facebook connect button in signup page or context.',
	'userlogin-facebook-show-preferences' => 'Action anchor text to show facebook feed preference section of the UI when near facebook signup completion.',
	'userlogin-facebook-hide-preferences' => 'Action anchor text to hide facebook feed preference section of the UI when near facebook signup completion.',
	'userlogin-loginreqlink' => 'login link',
	'userlogin-changepassword-needlogin' => 'Parameters:
* $1 is an action link using the message {{msg-wikia|userlogin-loginreqlink}}.',
	'wikiamobile-sendpassword-label' => 'Label for the button used to request a new password for recovery',
	'wikiamobile-facebook-connect-fail' => "Shown when a user tries to log in via FBConnect but there's no matching account in our DB, please keep the message as short as possible as the space at disposal is really limited",
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 */
$messages['bcl'] = array(
	'userlogin-login-heading' => 'Maglaóg',
	'userlogin-forgot-password' => 'Nalingawán an susing tataramon?',
	'userlogin-remembermypassword' => 'Nakadagos saná',
	'userlogin-error-noname' => 'Ay, paki kaagán an liang-liang kan paragamít',
	'userlogin-error-sessionfailure' => 'Nagpaso na an saimong paglaóg. Pakí laóg giraray.',
	'userlogin-error-nosuchuser' => 'Daí nyamò midbid iníng ngaran. Giromdomón na an mga ngaran nin paragamít case sensitive.',
	'userlogin-error-wrongpassword' => 'Ay, salâ an susing tataramon. Tibaad naka-caps lock. Probaran liwát.',
	'userlogin-error-wrongpasswordempty' => 'Ay, paki kaagán an liangliang para sa susing tataramon.',
);

/** German (Deutsch)
 * @author MtaÄ
 */
$messages['de'] = array(
	'userlogin-login-heading' => 'Anmelden',
	'userlogin-forgot-password' => 'Passwort vergessen?',
	'userlogin-remembermypassword' => 'Eingeloggt bleiben',
	'userlogin-error-noname' => 'Bitte gib einen Benutzernamen an.',
	'userlogin-error-sessionfailure' => 'Deine Anmelde-Sitzung ist abgelaufen. Bitte melde dich erneut an.',
	'userlogin-error-nosuchuser' => 'Dieser Benutzername scheint nicht zu existieren. Beachte bei der Eingabe des Benutzernamens die Groß-/Kleinschreibung.',
	'userlogin-error-wrongpassword' => 'Falsches Passwort. Stelle sicher, dass Caps-Lock deaktiviert ist und versuche es noch einmal.',
	'userlogin-error-wrongpasswordempty' => 'Bitte gib ein Passwort an.',
	'userlogin-error-resetpass_announce' => 'Du hast ein temporäres Passwort eingegeben. Bitte gib ein neues Passwort ein, das du von nun an für dein Benutzerkonto verwenden möchtest.',
	'userlogin-error-login-throttled' => 'Du hast das Passwort zu oft falsch eingegeben. Bitte warte eine Weile und versuche es anschließend nochmal.',
	'userlogin-error-login-userblocked' => 'Dieser Benutzername wurde gesperrt und kann nicht zum Einloggen benutzt werden.',
	'userlogin-error-edit-account-closed-flag' => 'Dieses Benutzerkonto wurde von Wikia deaktiviert.',
	'userlogin-error-cantcreateaccount-text' => 'Die IP die du momentan nutzt darf keine neuen Benutzerkonten anlegen.',
	'userlogin-error-userexists' => 'Dieser Benutzername ist bereits vergeben. Gib einen anderen an!',
	'userlogin-error-invalidemailaddress' => 'Bitte gib eine gültige E-Mail-Adresse an.',
	'userlogin-get-account' => 'Du hast noch kein Benutzerkonto? Dann [[Special:UserSignup|erstelle eines]].',
	'userlogin-error-invalid-username' => 'Ungültiger Benutzername',
	'userlogin-error-userlogin-unable-info' => 'Entschuldige, wir können dein Benutzerkonto zu diesem Zeitpunkt nicht registrieren.',
	'userlogin-error-user-not-allowed' => 'Dieser Benutzername ist nicht erlaubt.',
	'userlogin-error-captcha-createaccount-fail' => 'Das eingegebene Wort ist nicht identisch mit dem Wort in der Box. Versuche es noch einmal!',
	'userlogin-error-userlogin-bad-birthday' => 'Bitte gib dein Geburtsdatum an.',
	'userlogin-error-externaldberror' => 'Entschuldige! Unsere Webseite hat derzeit ein Problem. Bitte versuche es später noch einmal.',
	'userlogin-error-noemailtitle' => 'Bitte gib eine gültige E-Mail-Adresse an.',
	'userlogin-error-acct_creation_throttle_hit' => 'Diese IP-Adresse hat heute zu viele Benutzerkonten erstellt. Bitte versuche es später noch einmal.',
	'userlogin-error-resetpass_forbidden' => 'Das Passwort kann nicht geändert werden.',
	'userlogin-error-blocked-mailpassword' => 'Du kannst kein neues Passwort beantragen, weil deine IP-Adresse von Wikia gesperrt wurde.',
	'userlogin-error-throttled-mailpassword' => 'Wir haben dir bereits ein temporäres Passwort in {{PLURAL:$1|der letzten Stunde|den letzten $1 Stunden}} zugestellt. Bitte überprüfe dein E-Mail-Postfach.',
	'userlogin-error-mail-error' => 'Wir konnten dir diese E-Mail nicht zustellen. Bitte [[Special:Contact/general|kontaktiere uns]].',
	'userlogin-password-email-sent' => 'Wir haben ein neues Passwort an $1 geschickt.',
	'userlogin-error-unconfirmed-user' => 'Entschuldige, du hast deine E-Mail-Adresse nicht bestätigt. Bitte bestätige deine E-Mail-Adresse zuerst.',
	'userlogin-password-page-title' => 'Passwort ändern',
	'userlogin-oldpassword' => 'Alte Passwort',
	'userlogin-newpassword' => 'Neues Passwort',
	'userlogin-retypenew' => 'Passwort wiederholen',
	'userlogin-password-email-subject' => 'Anforderung eines neuen Passwortes',
	'userlogin-password-email-greeting' => 'Hallo $USERNAME,',
	'userlogin-password-email-content' => 'Gib dieses temporäre Passwort an, um dich bei Wikia anzumelden: "$NEWPASSWORD"
 <br /><br />
Falls du kein neues Passwort beantragt hast kannst du diese E-Mail ignorieren und weiterhin dein altes Passwort verwenden. Keine Sorge! Dein Benutzerkonto ist immernoch sicher. 
 <br /><br />
Bei Fragen oder Bedenken kannst du uns jederzeit kontaktieren.',
	'userlogin-password-email-signature' => 'Wikia Community Support',
	'userlogin-password-email-body' => 'Hallo $2,

gib dieses temporäre Passwort an, um dich bei Wikia anzumelden: "$3"

Falls du kein neues Passwort beantragt hast kannst du diese E-Mail ignorieren und weiterhin dein altes Passwort verwenden. Keine Sorge! Dein Benutzerkonto ist immernoch sicher. 

Bei Fragen oder Bedenken kannst du uns jederzeit kontaktieren.

Wikia Community Support

___________________________________________
Bleib auf dem Laufenden und besuche unser Community-Wiki: http://de.community.wikia.com
Möchtest du deine E-Mail-Einstellungen ändern? Besuche {{fullurl:{{ns:special}}:Preferences}}',
	'userlogin-email-footer-line1' => 'Bleib auf dem Laufenden und besuche unser Community-Wiki unter <a style="color:#2a87d5;text-decoration:none;" href="http://de.community.wikia.com">de.community.wikia.com</a>',
	'userlogin-email-footer-line2' => 'Möchtest du deine E-Mail-Einstellungen ändern? Besuche <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">deine Einstellungen</a>',
	'userlogin-provider-or' => 'oder',
	'userlogin-provider-tooltip-facebook' => 'Klicke hier, um dich mit deinem Facebook-Konto anzumelden',
	'userlogin-provider-tooltip-facebook-signup' => 'Anmelden mittels Facebook',
	'userlogin-facebook-show-preferences' => 'Zeige Facebook-Einstellungen an',
	'userlogin-facebook-hide-preferences' => 'Verstecke die Facebook-Feed-Einstellungen',
	'userlogin-loginreqlink' => 'anmelden',
	'userlogin-changepassword-needlogin' => 'Du musst dich $1, um dein Passwort zu ändern.',
	'wikiamobile-sendpassword-label' => 'Schicke neues Passwort',
	'wikiamobile-facebook-connect-fail' => 'Dein Facebook-Konto ist momentan nicht mit deinem Wikia-Benutzerkonto verbunden.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'userlogin-login-heading' => 'Qeyd be',
	'userlogin-password-page-title' => 'Parolaya xo bıvurne',
	'userlogin-oldpassword' => 'Parola verên',
	'userlogin-newpassword' => 'Parola newên',
	'userlogin-password-email-greeting' => 'Merheba Bırayo $USERNAME,',
	'userlogin-provider-or' => 'Ya na',
	'userlogin-loginreqlink' => 'Deqewtış',
);

/** Spanish (Español)
 * @author Armando-Martin
 * @author Invadinado
 * @author VegaDark
 */
$messages['es'] = array(
	'userlogin-login-heading' => 'Iniciar sesión',
	'userlogin-forgot-password' => '¿Olvidaste tu contraseña?',
	'userlogin-remembermypassword' => 'Permanecer conectado',
	'userlogin-error-noname' => 'Por favor, rellena el campo de nombre de usuario.',
	'userlogin-error-sessionfailure' => 'El registro de la sesión ha caducado. Por favor, inicia sesión de nuevo.',
	'userlogin-error-nosuchuser' => 'No reconocemos este nombre. No olvides que los nombres de usuario distinguen mayúsculas de minúsculas.',
	'userlogin-error-wrongpassword' => 'Vaya, contraseña errónea. Asegúrate que la tecla Bloq Mayús (Caps Lock) está desactivada y vuelve a intentarlo.',
	'userlogin-error-wrongpasswordempty' => 'Perdón, rellena el campo de la contraseña.',
	'userlogin-error-resetpass_announce' => 'Parece que utilizaste una contraseña temporal. Elige aquí una nueva contraseña para continuar la sesión.',
	'userlogin-error-login-throttled' => 'Has intentado iniciar sesión con la contraseña incorrecta demasiadas veces. Espera un rato antes de volver a intentarlo.',
	'userlogin-error-login-userblocked' => 'Tu nombre de usuario ha sido bloqueado y no puede utilizarse para iniciar sesión.',
	'userlogin-error-edit-account-closed-flag' => 'Tu cuenta ha sido deshabilitada por Wikia.',
	'userlogin-error-cantcreateaccount-text' => 'Tu dirección IP no está autorizada para crear cuentas nuevas.',
	'userlogin-error-userexists' => 'Alguien ya tiene este nombre de usuario. ¡Prueba uno diferente!',
	'userlogin-error-invalidemailaddress' => 'Por favor, introduce una dirección de correo electrónico válida.',
	'userlogin-get-account' => '¿No tienes una cuenta? [[Special:UserSignup|Regístrate]]',
	'userlogin-error-invalid-username' => 'Nombre de usuario inválido',
	'userlogin-error-userlogin-unable-info' => 'Lo sentimos, no es posible registrar tu cuenta en este momento.',
	'userlogin-error-user-not-allowed' => 'Este nombre de usuario no está permitido.',
	'userlogin-error-captcha-createaccount-fail' => 'La palabra que has introducido no coincide con la palabra del recuadro, ¡vuelve a intentarlo!',
	'userlogin-error-userlogin-bad-birthday' => 'Por favor rellena mes, día y año.',
	'userlogin-error-externaldberror' => '¡Lo sentimos! Nuestro sitio actualmente está teniendo un problema. Inténtalo de nuevo más tarde.',
	'userlogin-error-noemailtitle' => 'Por favor, introduce una dirección de correo electrónico válida.',
	'userlogin-error-acct_creation_throttle_hit' => 'Lo sentimos, pero hoy ya se han creado demasiadas cuentas desde esta dirección IP. Por favor, inténtalo más tarde.',
	'userlogin-error-resetpass_forbidden' => 'No se pueden cambiar las contraseñas',
	'userlogin-error-blocked-mailpassword' => 'No puedes solicitar una nueva contraseña porque esta dirección IP está bloqueada por Wikia.',
	'userlogin-error-throttled-mailpassword' => 'Ya hemos enviado un recordatorio de contraseña de esta cuenta en {{PLURAL:$1|la última hora|las $1 últimas horas}}. Por favor, revisa tu correo electrónico.',
	'userlogin-error-mail-error' => 'Perdón, hubo un problema al enviar tu correo electrónico. Por favor, [[Special:Contact/general|contáctanos]].',
	'userlogin-password-email-sent' => 'Hemos enviado una nueva contraseña a la dirección de correo electrónico $1.',
	'userlogin-error-unconfirmed-user' => 'No has confirmado tu dirección de correo electrónico. Confirma tu dirección de correo electrónico primero.',
	'userlogin-password-page-title' => 'Cambia tu contraseña',
	'userlogin-oldpassword' => 'Contraseña antigua',
	'userlogin-newpassword' => 'Nueva contraseña',
	'userlogin-retypenew' => 'Confirma la contraseña nueva',
	'userlogin-password-email-subject' => 'Solicitud de contraseña olvidada',
	'userlogin-password-email-greeting' => 'Hola, $USERNAME.',
	'userlogin-password-email-content' => 'Utiliza esta contraseña temporal para iniciar sesión en Wikia: "$NEWPASSWORD"
<br /><br />
Si no solicitaste una nueva contraseña, ¡no te preocupes! Tu cuenta está segura. Puedes ignorar este mensaje y continuar iniciando sesión en Wikia con tu antigua contraseña.
<br /><br />
¿Tienes preguntas o inquietudes? No dudes en ponerte en contacto con nosotros.',
	'userlogin-password-email-signature' => 'Equipo Comunitario de Wikia',
	'userlogin-password-email-body' => 'Hola $2,

Utiliza esta contraseña temporal para iniciar sesión en Wikia: "$3"

Si no solicitaste una nueva contraseña, ¡no te preocupes! Tu cuenta está segura. Puedes ignorar este mensaje y continuar iniciando sesión en Wikia con tu antigua contraseña.

¿Tienes preguntas o inquietudes? No dudes en ponerte en contacto con nosotros.

Equipo Comunitario de Wikia


___________________________________________

Para comprobar los acontecimientos más recientes en Wikia, visita http://es.wikia.com
¿Deseas controlar qué mensajes de correo electrónico recibes? Ve a: {{fullurl:{{ns:special}}:Preferences}}',
	'userlogin-email-footer-line1' => 'Para comprobar las últimas novedades en Wikia, visita <a style="color:#2a87d5;text-decoration:none;" href="http://es.wikia.com">es.wikia.com</a>',
	'userlogin-email-footer-line2' => '¿Deseas controlar los correos electrónicos que recibes? Ve a tus <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">preferencias</a>',
	'userlogin-provider-or' => 'o',
	'userlogin-provider-tooltip-facebook' => 'Pulsa el botón para iniciar sesión con Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Pulsa el botón para iniciar sesión con Facebook',
	'userlogin-facebook-show-preferences' => 'Mostrar preferencias de conexión de Facebook',
	'userlogin-facebook-hide-preferences' => 'Ocultar preferencias de conexión de Facebook',
	'userlogin-loginreqlink' => 'iniciar sesión',
	'userlogin-changepassword-needlogin' => 'Necesitas $1 para cambiar la contraseña.',
	'wikiamobile-sendpassword-label' => 'Enviar una nueva contraseña',
	'wikiamobile-facebook-connect-fail' => 'Lo sentimos, pero tu cuenta en Facebook no está actualmente vinculada con una cuenta Wikia.',
);

/** French (Français)
 * @author Gomoko
 * @author Wyz
 */
$messages['fr'] = array(
	'userlogin-login-heading' => 'Connexion',
	'userlogin-forgot-password' => 'Vous avez oublié votre mot de passe ?',
	'userlogin-remembermypassword' => 'Rester connecté',
	'userlogin-error-noname' => "Oups, merci de remplir le champ nom d'utilisateur.",
	'userlogin-error-sessionfailure' => 'Votre session de connexion a expiré. Veuillez vous reconnecter.',
	'userlogin-error-nosuchuser' => 'Nous ne reconnaissons pas ce nom. N’oubliez pas que les noms d’utilisateur sont sensibles à la casse.',
	'userlogin-error-wrongpassword' => 'Oups, mauvais mot de passe. Assurez-vous que les majuscules ne sont pas activées et réessayez.',
	'userlogin-error-wrongpasswordempty' => 'Oups, merci de remplir le champ mot de passe.',
	'userlogin-error-resetpass_announce' => 'Il semble que vous ayez utilisé un mot de passe temporaire. Choisissez un nouveau mot de passe ici pour poursuivre la connexion.',
	'userlogin-error-login-throttled' => "Vous avez essayé d'ouvrir une session avec un mot de passe erroné trop de fois. Attendez un peu avant de retenter.",
	'userlogin-error-login-userblocked' => 'Votre nom d’utilisateur a été bloqué et ne peut pas être utilisé pour vous connecter.',
	'userlogin-error-edit-account-closed-flag' => 'Votre compte a été désactivé par Wikia.',
	'userlogin-error-cantcreateaccount-text' => "Votre adresse IP n'est pas autorisée à créer de nouveaux comptes.",
	'userlogin-error-userexists' => 'Ce nom d’utilisateur est déjà utilisé par quelqu’un. Essayez-en un autre !',
	'userlogin-error-invalidemailaddress' => 'Veuillez entrer une adresse de courriel valide.',
	'userlogin-get-account' => "Vous n'avez pas encore de compte? [[Special:UserSignup|Inscrivez-vous]]",
	'userlogin-error-invalid-username' => 'Nom d’utilisateur invalide',
	'userlogin-error-userlogin-unable-info' => "Désolé, nous ne sommes pas en mesure d'enregistrer votre compte pour le moment.",
	'userlogin-error-user-not-allowed' => "Ce nom d'utilisateur n'est pas autorisé.",
	'userlogin-error-captcha-createaccount-fail' => 'Le mot que vous avez saisi ne correspond pas à celui dans le cadre, veuillez réessayer !',
	'userlogin-error-userlogin-bad-birthday' => "Oups, veuillez remplir le jour, le mois et l'année.",
	'userlogin-error-externaldberror' => 'Désolé! Notre site a actuellement un problème. Veuillez réessayer plus tard.',
	'userlogin-error-noemailtitle' => 'Veuillez entrer une adresse de courriel valide.',
	'userlogin-error-acct_creation_throttle_hit' => 'Désolé, cette adresse IP a créé trop de comptes aujourd’hui. Veuillez réessayer plus tard.',
	'userlogin-error-resetpass_forbidden' => 'Les mots de passe ne peuvent pas être changés',
	'userlogin-error-blocked-mailpassword' => 'Vous ne pouvez pas demander un nouveau mot de passe parce que cette adresse IP est bloquée par Wikia.',
	'userlogin-error-throttled-mailpassword' => 'Nous avons déjà envoyé un rappel de mot de passe de ce compte durant {{PLURAL:$1|la dernière heure|les $1 dernières heures}}. Veuillez vérifier votre courriel.',
	'userlogin-error-mail-error' => "Oups, il y a eu un problème d'envoi du courriel. Veuillez [[Special:Contact/general|nous contacter]].",
	'userlogin-password-email-sent' => "Nous avons envoyé un nouveau mot de passe à l'adresse courriel pour $1.",
	'userlogin-error-unconfirmed-user' => "Désolé, vous n'avez pas confirmé votre adresse de courriel. Veuillez confirmer d'abord celle-ci.",
	'userlogin-password-page-title' => 'Modifier votre mot de passe',
	'userlogin-oldpassword' => 'Ancien mot de passe',
	'userlogin-newpassword' => 'Nouveau mot de passe',
	'userlogin-retypenew' => 'Ressaisissez votre nouveau mot de passe',
	'userlogin-password-email-subject' => 'Demande de mot de passe oublié',
	'userlogin-password-email-greeting' => 'Bonjour $USERNAME,',
	'userlogin-password-email-content' => 'Veuillez utiliser ce mot de passe temporaire pour vous connecter sur Wikia : $NEWPASSWORD
<br /><br />
Si vous n\'avez pas demandé de nouveau mot de passe, ne vous inquiétez pas ! Votre compte est sain et sauf. Vous pouvez ignorer ce courriel et continuer à vous connecter sur Wikia avec votre ancien mot de passe.
<br /><br />
Vous avez des questions ? N’hésitez pas à nous contacter.',
	'userlogin-password-email-signature' => 'Support de la communauté Wikia',
	'userlogin-password-email-body' => "Bonjour $2,

Veuillez utiliser ce mot de passe temporaire pour vous connecter à Wikia : $3

Si vous n'avez pas demandé de nouveau mot de passe, ne vous inquiétez pas ! Votre compte est sain et sauf. Vous pouvez ignorer ce courriel et continuer à vous connecter sur Wikia avec votre ancien mot de passe.

Vous avez des questions ? N’hésitez pas à nous contacter.

Support de la communauté Wikia


___________________________________________

Pour voir les derniers évènements sur Wikia, consultez http://communaute.wikia.com
Vous souhaitez contrôler les courriels que vous recevez ? Allez à : {{fullurl:{{ns:special}}:Preferences}}",
	'userlogin-email-footer-line1' => 'Pour voir les derniers évènements sur Wikia, consultez <a style="color:#2a87d5;text-decoration:none;" href="http://communaute.wikia.com">communaute.wikia.com</a>',
	'userlogin-email-footer-line2' => 'Vous souhaitez contrôler les courriels que vous recevez ? Allez à vos <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">préférences</a>',
	'userlogin-provider-or' => 'Ou',
	'userlogin-provider-tooltip-facebook' => 'Cliquez sur le bouton pour vous connecter avec Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Cliquez sur le bouton pour vous connecter avec Facebook',
	'userlogin-facebook-show-preferences' => 'Afficher les préférences de flux de Facebook',
	'userlogin-facebook-hide-preferences' => 'Masquer les préférences de flux de Facebook',
	'userlogin-loginreqlink' => 'vous connecter',
	'userlogin-changepassword-needlogin' => 'Vous devez $1 pour changer votre mot de passe.',
	'wikiamobile-sendpassword-label' => 'Envoyer un nouveau mot de passe',
	'wikiamobile-facebook-connect-fail' => 'Désolé, votre compte Facebook n’est pour le moment pas relié à un compte Wikia.',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'userlogin-login-heading' => 'Rexistro',
	'userlogin-forgot-password' => 'Esqueceu o contrasinal?',
	'userlogin-remembermypassword' => 'Permanecer conectado',
	'userlogin-error-noname' => 'Vaites! Cómpre encher o campo do nome de usuario.',
	'userlogin-error-sessionfailure' => 'A súa sesión caducou. Acceda ao sistema de novo.',
	'userlogin-error-nosuchuser' => 'Non recoñecemos ese nome. Lembre que os nomes de usuario distinguen entre maiúsculas e minúsculas.',
	'userlogin-error-wrongpassword' => 'Vaites! O contrasinal non é correcto. Asegúrese de que tecla das maiúsculas está desactivada e inténteo de novo.',
	'userlogin-error-wrongpasswordempty' => 'Vaites! Cómpre encher o campo do contrasinal.',
	'userlogin-error-resetpass_announce' => 'Semella que empregou un contrasinal temporal. Escolla un novo contrasinal aquí para continuar coa sesión.',
	'userlogin-error-login-throttled' => 'Intentou acceder ao sistema cun contrasinal incorrecto demasiadas veces. Ten que agardar un anaco antes de intentalo de novo.',
	'userlogin-error-login-userblocked' => 'O seu nome de usuario está bloqueado e non se pode empregar para acceder ao sistema.',
	'userlogin-error-edit-account-closed-flag' => 'Wikia desactivou a súa conta.',
	'userlogin-error-cantcreateaccount-text' => 'O seu enderezo IP non está autorizado a crear novas contas.',
	'userlogin-error-userexists' => 'Alguén xa ten ese nome de usuario. Probe con outro!',
	'userlogin-error-invalidemailaddress' => 'Por favor, escriba un enderezo de correo electrónico válido.',
	'userlogin-get-account' => 'Non ten unha conta? [[Special:UserSignup|Rexístrese]]',
	'userlogin-error-invalid-username' => 'Nome de usuario inválido',
	'userlogin-error-userlogin-unable-info' => 'Sentímolo, non é posible rexistrar a súa conta nestes intres.',
	'userlogin-error-user-not-allowed' => 'Este nome de usuario non está permitido.',
	'userlogin-error-captcha-createaccount-fail' => 'A palabra que escribiu non coincide co texto da caixa. Inténteo de novo!',
	'userlogin-error-userlogin-bad-birthday' => 'Vaites! Cómpre encher o día, o mes e o ano.',
	'userlogin-error-externaldberror' => 'Sentímolo! O noso sitio está tendo problemas nestes intres. Inténteo de novo máis tarde.',
	'userlogin-error-noemailtitle' => 'Por favor, escriba un enderezo de correo electrónico válido.',
	'userlogin-error-acct_creation_throttle_hit' => 'Sentímolo, este enderezo IP creou demasiadas contas no día de hoxe. Inténteo de novo máis tarde.',
	'userlogin-error-resetpass_forbidden' => 'Non se poden mudar os contrasinais',
	'userlogin-error-blocked-mailpassword' => 'Non pode solicitar un novo contrasinal porque Wikia bloqueou este enderezo IP.',
	'userlogin-error-throttled-mailpassword' => 'Xa enviamos un recordatorio do contrasinal desta conta {{PLURAL:$1|na última hora|nas $1 últimas horas}}. Comprobe o seu correo electrónico.',
	'userlogin-error-mail-error' => 'Vaites! Houbo un problema ao enviar o correo electrónico. Por favor, [[Special:Contact/general|póñase en contacto con nós]].',
	'userlogin-password-email-sent' => 'Enviamos un novo contrasinal ao enderezo de correo electrónico $1.',
	'userlogin-error-unconfirmed-user' => 'Aínda non confirmou o seu enderezo de correo electrónico. Confirme o enderezo primeiro.',
	'userlogin-password-page-title' => 'Cambiar o seu contrasinal',
	'userlogin-oldpassword' => 'Contrasinal antigo',
	'userlogin-newpassword' => 'Novo contrasinal',
	'userlogin-retypenew' => 'Insira outra vez o novo contrasinal',
	'userlogin-password-email-subject' => 'Solicitude de contrasinal esquecido',
	'userlogin-password-email-greeting' => 'Boas, $USERNAME:',
	'userlogin-password-email-content' => 'Utilice este contrasinal temporal para acceder ao sistema en Wikia: "$NEWPASSWORD"
<br /><br />
Se non solicitou un contrasinal novo, non se preocupe! A súa conta está a salvo e é segura. Pode ignorar este correo electrónico e seguir accedendo ao sistema de Wikia co seu contrasinal antigo.
<br /><br />
Ten preguntas ou preocupacións? Síntase libre de poñerse en contacto con nós.',
	'userlogin-password-email-signature' => 'O equipo de soporte comunitario de Wikia',
	'userlogin-password-email-body' => 'Boas, $2:

Utilice este contrasinal temporal para acceder ao sistema en Wikia: "$3"

Se non solicitou un contrasinal novo, non se preocupe! A súa conta está a salvo e é segura. Pode ignorar este correo electrónico e seguir accedendo ao sistema de Wikia co seu contrasinal antigo.

Ten preguntas ou preocupacións? Síntase libre de poñerse en contacto con nós.

O equipo de soporte comunitario de Wikia


___________________________________________

Para botar unha ollada aos últimos acontecementos en Wikia, visite http://community.wikia.com
Quere controlar os correos electrónicos que recibe? Vaia a {{fullurl:{{ns:special}}:Preferences}}',
	'userlogin-email-footer-line1' => 'Para botar unha ollada aos últimos acontecementos en Wikia, visite <a style="color:#2a87d5;text-decoration:none;" href="http://community.wikia.com">community.wikia.com</a>',
	'userlogin-email-footer-line2' => 'Quere controlar os correos electrónicos que recibe? Vaia ás súas <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">preferencias</a>',
	'userlogin-provider-or' => 'Ou',
	'userlogin-provider-tooltip-facebook' => 'Prema no botón para acceder co Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Prema no botón para rexistrarse co Facebook',
	'userlogin-facebook-show-preferences' => 'Mostrar as preferencias de fonte de novas do Facebook',
	'userlogin-facebook-hide-preferences' => 'Agochar as preferencias de fonte de novas do Facebook',
	'userlogin-loginreqlink' => 'acceder ao sistema',
	'userlogin-changepassword-needlogin' => 'Cómpre $1 para cambiar o contrasinal.',
	'wikiamobile-sendpassword-label' => 'Enviar un novo contrasinal',
	'wikiamobile-facebook-connect-fail' => 'Sentímolo, a súa conta do Facebook non está ligada con ningunha de Wikia.',
);

/** Italian (Italiano)
 * @author Minerva Titani
 */
$messages['it'] = array(
	'userlogin-login-heading' => 'Login',
	'userlogin-forgot-password' => 'Hai dimenticato la password?',
	'userlogin-remembermypassword' => 'Rimani loggato',
	'userlogin-error-noname' => 'Ops, per favore riempi il campo dello username.',
	'userlogin-error-sessionfailure' => 'La tua sessione di connessione è scaduta. Per favore effettua di nuovo il login.',
	'userlogin-error-nosuchuser' => 'Non riconosciamo questo username. Non dimenticarti che gli username sono sensibili alle maiuscole.',
	'userlogin-error-wrongpassword' => 'Ops, password sbagliata. Assicurati che il blocco delle maiuscole sia disattivato e riprova.',
	'userlogin-error-wrongpasswordempty' => 'Ops, per favore riempi il campo della password.',
	'userlogin-error-resetpass_announce' => 'Sembra che tu abbia usato una password temporanea. Scegli qui una nuova password per continuare il login.',
	'userlogin-error-login-throttled' => "Hai provato ad effettuare il login troppe volte con una password sbagliata. Devi aspettare un po' prima di riprovare.",
	'userlogin-error-login-userblocked' => 'Il tuo username è stato bloccato e non può essere usato per il login.',
	'userlogin-error-invalid-username' => 'Username non valido',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'userlogin-login-heading' => 'Најава',
	'userlogin-forgot-password' => 'Ја заборавивте лозинката?',
	'userlogin-remembermypassword' => 'Задржи ме најавен',
	'userlogin-error-noname' => 'Пополнете го полето за корисничко име.',
	'userlogin-error-sessionfailure' => 'Најавната сесија ви истече. Најавете се повторно.',
	'userlogin-error-nosuchuser' => 'Ова име не се признава. Не заборавајте дека системот разликува мали и големи букви.',
	'userlogin-error-wrongpassword' => 'Погрешна лозинка. Проверете да не пишувате со големи букви и обидете се повторно.',
	'userlogin-error-wrongpasswordempty' => 'Пополнете го полето за лозинка.',
	'userlogin-error-resetpass_announce' => 'Изгледа употребивте привремена лозинка. Тука одберете нова, па продолжете со најавата.',
	'userlogin-error-login-throttled' => 'Премногу пати внесовте погрешна лозинка. Почекајте малку, па обидете се повторно.',
	'userlogin-error-login-userblocked' => 'Вашето корисничко име е блокирано, па затоа не можете да се најавите со него.',
	'userlogin-error-edit-account-closed-flag' => 'Сметката ви е оневозможена од Викија.',
	'userlogin-error-cantcreateaccount-text' => 'На вашата IP-адреса не ѝ е допуштено да создава нови сметки.',
	'userlogin-error-userexists' => 'Корисничкото име е зафатено. Одберете друго!',
	'userlogin-error-invalidemailaddress' => 'Внесете важечка е-пошта.',
	'userlogin-get-account' => 'Немате сметка? [[Special:UserSignup|Регистрирајте се]]',
	'userlogin-error-invalid-username' => 'Неважечко корисничко име',
	'userlogin-error-userlogin-unable-info' => 'Нажалост, во моментов не можете да се регистрирате.',
	'userlogin-error-user-not-allowed' => 'Ова корисничко име не е дозволено.',
	'userlogin-error-captcha-createaccount-fail' => 'Внесениот збор не е ист со оној во полето. Обидете се повторно!',
	'userlogin-error-userlogin-bad-birthday' => 'Пополнете месец, ден и година.',
	'userlogin-error-externaldberror' => 'Извинете! Моментално се соочуваме со проблем. Обидете се подоцна.',
	'userlogin-error-noemailtitle' => 'Внесете важечка е-пошта.',
	'userlogin-error-acct_creation_throttle_hit' => 'Извинете, но оваа IP-адреса создаде премногу сметки за денес. Обидете се подоцна.',
	'userlogin-error-resetpass_forbidden' => 'Лозинките не може да се менуваат',
	'userlogin-error-blocked-mailpassword' => 'Не можете да побарате нова лозинка бидејќи оваа IP-адреса е блокирана од Викија.',
	'userlogin-error-throttled-mailpassword' => 'Веќе ви испративме потсетник за лозинката на оваа сметка во {{PLURAL:$1|последниов час|последниве $1 часа}}. Проверете си ја е-поштата.',
	'userlogin-error-mail-error' => 'Се појави проблем при испраќањето на пораката. Ве молиме, [[Special:Contact/general|контактирајте нè]].',
	'userlogin-password-email-sent' => 'Ви испративме нова лозинка на е-поштата назначена за $1.',
	'userlogin-error-unconfirmed-user' => 'Нажалост, ја немате потврдено вашата е-пошта. Ќе треба најпрвин да ја потврдите.',
	'userlogin-password-page-title' => 'Променете си ја лозинката.',
	'userlogin-oldpassword' => 'Стара лозинка',
	'userlogin-newpassword' => 'Нова лозинка',
	'userlogin-retypenew' => 'Повторете ја новата лозинка:',
	'userlogin-password-email-subject' => 'Барање за заборавена лозинка',
	'userlogin-password-email-greeting' => 'Здраво $USERNAME,',
	'userlogin-password-email-content' => 'Искористете ја оваа привремена лозинка за да се најавите на Викија: „$NEWPASSWORD“
<br /><br />
Доколку не побаравте нова лозинка, не грижете се! Сметката ви е сосем безбедна. Занемарете го ова писмо и најавувајте се со постоечката лозинка.
<br /><br />
Имате прашања или проблеми? Слободно обратете ни се.',
	'userlogin-password-email-signature' => 'Поддршка за заедницата на Викија',
	'userlogin-password-email-body' => 'Здраво $2,

Искористете ја оваа привремена лозинка за да се најавите на Викија: „$3“

Доколку не побаравте нова лозинка, не грижете се! Сметката ви е сосем безбедна. Занемарете го ова писмо и најавувајте се со постоечката лозинка.

Имате прашања или проблеми? Слободно обратете ни се.

Поддршка за заедницата на Викија


___________________________________________

Најновите збиднувања на Викија ќе ги најдете на http://community.wikia.com
Сакате да одберете што да добивате по е-пошта? Појдете на: {{fullurl:{{ns:special}}:Preferences}}',
	'userlogin-email-footer-line1' => 'За да ги проследите најновите случувања на Викија, посетете ја страницата <a style="color:#2a87d5;text-decoration:none;" href="http://community.wikia.com">community.wikia.com</a>',
	'userlogin-email-footer-line2' => 'Сакате да одберете кои пораки да ги добивате? Појдете на вашите <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Нагодувања</a>',
	'userlogin-provider-or' => 'или',
	'userlogin-provider-tooltip-facebook' => 'Стиснете на копчето за да се најавите со Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Стиснете на копчето за да се регистрирате со Facebook',
	'userlogin-facebook-show-preferences' => 'Прикажи поставки за каналот на Facebook',
	'userlogin-facebook-hide-preferences' => 'Скриј поставки за каналот на Facebook',
	'userlogin-loginreqlink' => 'се најавите',
	'userlogin-changepassword-needlogin' => 'Треба да $1 за да можете да ја смените лозинката.',
	'wikiamobile-sendpassword-label' => 'Испрати нова лозинка',
	'wikiamobile-facebook-connect-fail' => 'Нажалост, сметката на Facebook не ви е поврзана со сметка на Викија.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'userlogin-login-heading' => 'Log masuk',
	'userlogin-forgot-password' => 'Lupa kata laluan anda?',
	'userlogin-remembermypassword' => 'Kekal log masuk',
	'userlogin-error-noname' => 'Maaf, sila isi ruangan nama pengguna.',
	'userlogin-error-sessionfailure' => 'Sesi log masuk anda sudah habis. Sila log masuk semula.',
	'userlogin-error-nosuchuser' => 'Kami tidak mengenali nama ini. Jangan lupa, nama pengguna adalah peka kecil besar huruf.',
	'userlogin-error-wrongpassword' => 'Maaf, kata laluan salah. Pastikan CAPS LOCK terpadam dan cuba lagi.',
	'userlogin-error-wrongpasswordempty' => 'Maaf, sila isi ruangan kata laluan.',
	'userlogin-error-resetpass_announce' => 'Rupanya anda menggunakan kata laluan sementara. Sila buat kata laluan baru di sini untuk terus log masuk.',
	'userlogin-error-login-throttled' => 'Anda telah cuba log masuk dengan kata laluan yang salah terlalu banyak kali. Sila tunggu sebentar sebelum dapat mencuba lagi.',
	'userlogin-error-login-userblocked' => 'Nama pengguna anda telah disekat dan tidak boleh digunakan untuk log masuk.',
	'userlogin-error-edit-account-closed-flag' => 'Akaun anda telah dimatikan oleh Wikia.',
	'userlogin-error-cantcreateaccount-text' => 'Alamat IP anda tidak dibenarkan untuk membuka akaun baru.',
	'userlogin-error-userexists' => 'Nama pengguna ini sudah diambil. Cuba gunakan nama yang lain!',
	'userlogin-error-invalidemailaddress' => 'Sila berikan alamat e-mel yang sah.',
	'userlogin-get-account' => 'Tiada akaun? [[Special:UserSignup|Daftarlah]]',
	'userlogin-error-invalid-username' => 'Nama pengguna tidak sah',
	'userlogin-error-userlogin-unable-info' => 'Maaf, kami tidak dapat mendaftarkan akaun anda buat masa ini.',
	'userlogin-error-user-not-allowed' => 'Nama pengguna ini tidak dibenarkan.',
	'userlogin-error-captcha-createaccount-fail' => 'Perkataan yang anda taipkan tidak sepadan dengan perkataan dalam petak. Sila cuba lagi!',
	'userlogin-error-userlogin-bad-birthday' => 'Maaf, tolong isikan bulan, hari bulan dan tahun.',
	'userlogin-error-externaldberror' => 'Harap maaf! Tapak kami kini mengalami masalah teknikal. Sila cuba lagi nanti.',
	'userlogin-error-noemailtitle' => 'Sila berikan alamat e-mel yang sah.',
	'userlogin-error-acct_creation_throttle_hit' => 'Maaf, alamat IP ini telah membuka terlalu banyak akaun hari ini. Sila cuba lagi nanti.',
	'userlogin-error-resetpass_forbidden' => 'Kata laluan tidak boleh ditukar',
	'userlogin-error-blocked-mailpassword' => 'Anda tidak boleh meminta kata laluan baru kerana alamat IP ini disekat oleh Wikia.',
	'userlogin-error-throttled-mailpassword' => 'Kami telah menghantar peringatan kata laluan kepada akaun ini dalam {{PLURAL:$1|sejam|$1 jam}} yang lalu. Sila semak e-mel anda.',
	'userlogin-error-mail-error' => 'Maaf, timbulnya masalah ketika menghantar e-mel kepada anda.Sila [[Special:Contact/general|hubungi kami]].',
	'userlogin-password-email-sent' => 'Kami telah menghantar kata laluan baru kepada alamat e-mel $1.',
	'userlogin-error-unconfirmed-user' => 'Maaf, anda belum mengesahkan alamat e-mel anda. Sila sahkan alamat e-mel anda terlebih dahulu.',
	'userlogin-password-page-title' => 'Tukar kata laluan anda',
	'userlogin-oldpassword' => 'Kata laluan lama',
	'userlogin-newpassword' => 'Kata laluan baru',
	'userlogin-retypenew' => 'Ulangi kata laluan baru',
	'userlogin-password-email-subject' => 'Memohon kata laluan yang terlupa',
	'userlogin-password-email-greeting' => 'Apa khabar $USERNAME,',
	'userlogin-password-email-content' => 'Sila gunakan kata laluan sementara ini untuk log masuk ke dalam Wikia: "$NEWPASSWORD"
<br /><br />
Jika anda tidak memohon kata laluan baru, usah risau! Akaun anda masih selamat dan terlindung. Anda boleh mengabaikan e-mel ini dan terus log masuk ke dalam Wikia dengan kata laluan lama anda.
<br /><br />
Jika anda mempunyai sebarang pertanyaan, sila hubungi kami tanpa rasa segan.',
	'userlogin-password-email-signature' => 'Bantuan Komuniti Wikia',
	'userlogin-password-email-body' => 'Apa khabar $2,

Sila gunakan kata laluan sementara ini untuk log masuk ke dalam Wikia: "$3"

Jika anda tidak memohon kata laluan baru, usah risau! Akaun anda masih selamat dan terlindung. Anda boleh mengabaikan e-mel ini dan terus log masuk ke dalam Wikia dengan kata laluan lama anda.

Jika anda mempunyai sebarang pertanyaan, sila hubungi kami tanpa rasa segan.

Bantuan Komuniti Wikia


___________________________________________

Untuk meninjau perkembangan terkini di Wikia, lawati http://community.wikia.com
Ingin mengawal e-mel yang anda terima? Pergi ke: {{fullurl:{{ns:special}}:Preferences}}',
	'userlogin-email-footer-line1' => 'Untuk meninjau perkembangan terkini di Wikia, lawati <a style="color:#2a87d5;text-decoration:none;" href="http://community.wikia.com">community.wikia.com</a>',
	'userlogin-email-footer-line2' => 'Ingin mengawal e-mel yang anda terima? Pergi ke <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Keutamaan</a>',
	'userlogin-provider-or' => 'Atau',
	'userlogin-provider-tooltip-facebook' => 'Klik butang ini untuk log masuk dengan Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Klik butang ini untuk mendaftar diri dengan Facebook',
	'userlogin-facebook-show-preferences' => 'Tunjukkan keutamaan suapan Facebook',
	'userlogin-facebook-hide-preferences' => 'Sorokkan keutamaan suapan Facebook',
	'userlogin-loginreqlink' => 'log masuk',
	'userlogin-changepassword-needlogin' => 'Anda perlu $1 untuk menukar kata laluan baru.',
	'wikiamobile-sendpassword-label' => 'Hantar kata laluan baru',
	'wikiamobile-facebook-connect-fail' => 'Maaf, akaun Facebook anda sekarang tidak berpautan dengan sebarang akaun Wikia.',
);

/** Norwegian Bokmål (‪Norsk (bokmål)‬)
 * @author Audun
 */
$messages['nb'] = array(
	'userlogin-login-heading' => 'Logg inn',
	'userlogin-forgot-password' => 'Glemt passordet ditt?',
	'userlogin-remembermypassword' => 'Forbli innlogget',
	'userlogin-error-noname' => 'Ops, vennligst fyll ut brukernavn-feltet.',
	'userlogin-error-sessionfailure' => 'Innloggingssesjonen din har utløpt. Vennligst logg inn igjen.',
	'userlogin-error-nosuchuser' => 'Vi gjenkjenner ikke dette navnet. Ikke glem at brukernavn skiller mellom store og små bokstaver.',
	'userlogin-error-wrongpassword' => 'Ops, galt passord. Pass på at caps lock er av og forsøk igjen.',
	'userlogin-error-wrongpasswordempty' => 'Ops, vennligst fyll ut passord-feltet.',
	'userlogin-error-resetpass_announce' => 'Det ser ut som du brukte et midlertidig passord. Velg et nytt passord her for å fortsette innloggingen.',
	'userlogin-error-login-throttled' => 'Du har forsøkt å logge inn med galt passord for mange ganger. Vent en stund før du prøver igjen.',
	'userlogin-error-login-userblocked' => 'Brukernavnet ditt har blitt blokkert og kan ikke brukes for å logge inn.',
	'userlogin-error-edit-account-closed-flag' => 'Kontoen din har blitt deaktivert av Wikia.',
	'userlogin-error-cantcreateaccount-text' => 'IP-adressen din har ikke tillatelse til å opprette nye kontoer.',
	'userlogin-error-userexists' => 'Noen har alt tatt dette brukernavnet. Prøv et annet!',
	'userlogin-error-invalidemailaddress' => 'Vennligst oppgi en gyldig e-postadresse.',
	'userlogin-get-account' => 'Har du ikke en konto? [[Special:UserSignup|Registrer deg]]',
	'userlogin-error-invalid-username' => 'Ugyldig brukernavn',
	'userlogin-error-userlogin-unable-info' => 'Beklager, vi kan for øyeblikket ikke registrere kontoen din.',
	'userlogin-error-user-not-allowed' => 'Dette brukernavnet er ikke tillatt.',
	'userlogin-error-captcha-createaccount-fail' => 'Ordet du oppga samsvarer ikke med ordet i boksen, prøv igjen!',
	'userlogin-error-userlogin-bad-birthday' => 'Ops, vennligst fyll ut måneden, dagen og året.',
	'userlogin-error-externaldberror' => 'Beklager! Siden vår opplever for øyeblikket et problem. Vennligst prøv igjen senere.',
	'userlogin-error-noemailtitle' => 'Vennligst oppgi en gyldig e-postadresse.',
	'userlogin-error-acct_creation_throttle_hit' => 'Beklager, denne IP-adressen har allerede opprettet for mange kontoer i dag. Vennligst prøv igjen senere.',
	'userlogin-error-resetpass_forbidden' => 'Passordene kunne ikke endres',
	'userlogin-error-blocked-mailpassword' => 'Du kan ikke be om et nytt passord fordi denne IP-adressen er blokkert av Wikia.',
	'userlogin-error-throttled-mailpassword' => 'Vi har allerede sent en passordpåminnelse til denne kontoen i løpet av {{PLURAL:$1|den siste timen|de $1 siste timene}}. Vennligst sjekk e-posten din.',
	'userlogin-error-mail-error' => 'Ops, det oppstod et problem under sendingen av e-posten din. Vennligst [[Special:Contact/general|kontakt oss]].',
	'userlogin-password-email-sent' => 'Vi har sendt et nytt passord til e-postadressen $1.',
	'userlogin-error-unconfirmed-user' => 'Beklager, du har ikke bekreftet e-postadressen din. Vennligst bekreft e-postadressen din først.',
	'userlogin-password-page-title' => 'Endre passordet ditt',
	'userlogin-oldpassword' => 'Gammelt passord',
	'userlogin-newpassword' => 'Nytt passord',
	'userlogin-retypenew' => 'Gjenta nytt passord',
	'userlogin-password-email-subject' => 'Forespørsel om glemt passord',
	'userlogin-password-email-greeting' => 'Hei $USERNAME,',
	'userlogin-password-email-content' => 'Vennligst bruk dette midlertidige passordet for å logge inn i Wikia: «$NEWPASSWORD»
<br /><br />
Hvis du ikke har bedt om et nytt passord, ikke vær bekymret! Kontoen din er trygg og sikker. Du kan ignorere denne e-posten og fortsette å logge inn i Wikia med det gamle passordet ditt. 
<br /><br />
Spørsmål eller bekymringer? Kontakt oss gjerne.',
	'userlogin-password-email-signature' => 'Wikia fellesskapssupport',
	'userlogin-password-email-body' => 'Hei $2,

Vennligst bruk dette midlertidige passordet for å logge inn i Wikia: «$3»

Hvis du ikke har bedt om et nytt passord, ikke vær bekymret! Kontoen din er trygg og sikker. Du kan ignorere denne e-posten og fortsette å logge inn i Wikia med det gamle passordet ditt.

Spørsmål eller bekymringer? Kontakt oss gjerne.

Wikia fellesskapssupport


___________________________________________
For å sjekke ut de nyeste hendelsene på Wikia, besøk http://community.wikia.com
Vil du kontrollere hva slags e-post du mottar? Gå til: <a href="{{fullurl:Special:Preferences}}">Innstillingene dine<a>',
	'userlogin-email-footer-line1' => 'For å sjekke ut de siste hendelsene på Wikia, besøk <a style="color:#2a87d5;text-decoration:none;" href="http://community.wikia.com">community.wikia.com</a>',
	'userlogin-email-footer-line2' => 'Vil du kontrollere hvilke e-post du mottar? Gå til <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">innstillingene dine</a>',
	'userlogin-provider-or' => 'Eller',
	'userlogin-provider-tooltip-facebook' => 'Trykk på knappen for å logge inn med Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Trykk på knappen for å registrere deg med Facebook',
	'userlogin-facebook-show-preferences' => 'Vis innstillinger for nyhetsoppdateringer fra Facebook',
	'userlogin-facebook-hide-preferences' => 'Skjul innstillinger for nyhetsoppdateringer fra Facebook',
	'userlogin-loginreqlink' => 'logg inn',
	'userlogin-changepassword-needlogin' => 'Du må $1 for å endre passordet ditt.',
	'wikiamobile-sendpassword-label' => 'Send nytt passord',
	'wikiamobile-facebook-connect-fail' => 'Beklager, Facebook-kontoen din er for øyeblikket ikke koblet til en Wikia-konto.',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'userlogin-login-heading' => 'Aanmelden',
	'userlogin-forgot-password' => 'Wachtwoord vergeten?',
	'userlogin-remembermypassword' => 'Aangemeld blijven',
	'userlogin-error-noname' => 'Geef een gebruikersnaam op.',
	'userlogin-error-sessionfailure' => 'Uw aanmeldsessie is verlopen. Meld u opnieuw aan.',
	'userlogin-error-nosuchuser' => 'Deze gebruikersnaam wordt niet herkend. Vergeet niet dat gebruikersnamen hoofdlettergevoelig zijn.',
	'userlogin-error-wrongpassword' => 'Het wachtwoord is onjuist. Vergeet niet dat wachtwoorden hoofdlettergevoelig zijn.',
	'userlogin-error-wrongpasswordempty' => 'Geef een wachtwoord op.',
	'userlogin-error-resetpass_announce' => 'U hebt een tijdelijk wachtwoord gebruikt. Kies een nieuw wachtwoord om door te gaan met aanmelden.',
	'userlogin-error-login-throttled' => 'U hebt te vaak een onjuist wachtwoord ingegeven. Wacht even voordat u het opnieuw probeert.',
	'userlogin-error-login-userblocked' => 'Uw gebruiker is geblokkeerd en er kan niet mee aangemeld worden.',
	'userlogin-error-edit-account-closed-flag' => 'Uw gebruiker is door Wikia buiten werking gesteld.',
	'userlogin-error-cantcreateaccount-text' => 'Via uw IP-adres mogen geen nieuwe gebruikers aangemaakt worden.',
	'userlogin-error-userexists' => 'Deze naam is al in gebruik. Kies een andere.',
	'userlogin-error-invalidemailaddress' => 'Voer alstublieft een geldig e-mailadres in.',
	'userlogin-get-account' => 'Hebt u nog geen gebruiker? [[Special:UserSignup|Registreren]]',
	'userlogin-error-invalid-username' => 'Ongeldige gebruikersnaam',
	'userlogin-error-userlogin-unable-info' => 'Het is helaas niet mogelijk uw gebruiker op dit moment te registreren.',
	'userlogin-error-user-not-allowed' => 'Deze gebruikersnaam is niet toegestaan.',
	'userlogin-error-captcha-createaccount-fail' => 'Het woord dat u hebt ingevoerd komt niet overeen met het woord in het vakje. Probeer het opnieuw.',
	'userlogin-error-userlogin-bad-birthday' => 'Geef een maand, dag en jaar op.',
	'userlogin-error-externaldberror' => 'Er is een probleem met onze site. Probeer het later opnieuw.',
	'userlogin-error-noemailtitle' => 'Voer alstublieft een geldig e-mailadres in.',
	'userlogin-error-acct_creation_throttle_hit' => 'Via dit IP-adres zijn vandaag al te veel gebruikers aangemaakt. Probeer het later opnieuw.',
	'userlogin-error-resetpass_forbidden' => 'Wachtwoorden kunnen niet gewijzigd worden',
	'userlogin-error-blocked-mailpassword' => 'U kunt geen nieuw wachtwoord opvragen omdat dit IP-adres door Wikia geblokkeerd is.',
	'userlogin-error-throttled-mailpassword' => 'We hebben in {{PLURAL:$1|het afgelopen|de afgelopen $1}} uur al een wachtwoordherinnering voor deze gebruiker verzonden. Controleer uw e-mail.',
	'userlogin-error-mail-error' => 'Het was niet mogelijk een e-mail aan u te verzenden. [[Special:Contact/general|Neem contact met ons op]].',
	'userlogin-password-email-sent' => 'Er is een nieuw wachtwoord verzonden naar het e-mailadres $1.',
	'userlogin-error-unconfirmed-user' => 'Uw e-mailadres is niet bevestigd. Bevestig alstublieft eerst uw e-mailadres.',
	'userlogin-password-page-title' => 'Uw wachtwoord wijzigen',
	'userlogin-oldpassword' => 'Huidige wachtwoord',
	'userlogin-newpassword' => 'Nieuw wachtwoord',
	'userlogin-retypenew' => 'Herhaling nieuwe wachtwoord',
	'userlogin-password-email-subject' => 'Verzoek voor nieuw wachtwoord',
	'userlogin-password-email-greeting' => 'Hallo $USERNAME,',
	'userlogin-password-email-content' => 'Gebruik het volgende tijdelijke wachtwoord om aan te melden bij Wikia: "$NEWPASSWORD".
<br /><br />
Maak u geen zorgen als u geen nieuw wachtwoord hebt opgevraagd. Uw gebruiker is veilig. U kunt deze e-mail negeren en blijven aanmelden bij Wikia met uw oude wachtwoord.
<br /><br />
Neem alstublieft contact met ons op als u vragen of zorgen hebt.',
	'userlogin-password-email-signature' => 'Wikia Community Support',
	'userlogin-password-email-body' => 'Hallo $2,

Gebruik het volgende tijdelijke wachtwoord om aan te melden bij Wikia: "$3".

Maak u geen zorgen als u geen nieuw wachtwoord hebt opgevraagd. Uw gebruiker is veilig. U kunt deze e-mail negeren en blijven aanmelden bij Wikia met uw oude wachtwoord.

Neem alstublieft contact met ons op als u vragen of zorgen hebt.


___________________________________________
Bezoek http://community.wikia.com voor het laatste nieuws over Wikia.
Om in te stellen welke e-mails u wilt ontvangen, gaat u naar {{fullurl:{{ns:special}}:Preferences}}.',
	'userlogin-email-footer-line1' => 'Ga naar <a style="color:#2a87d5;text-decoration:none;" href="http://community.wikia.com">community.wikia.com</a> om de laatste ontwikkelingen bij Wikia te volgen',
	'userlogin-email-footer-line2' => 'Wilt u bepalen welke e-mails u krijgt? Ga naar uw [{{fullurl:{{ns:special}}:Preferences}} voorkeuren]',
	'userlogin-provider-or' => 'Of',
	'userlogin-provider-tooltip-facebook' => 'Klik op de knop om aan te melden via Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Klik op de knop om te registreren via Facebook',
	'userlogin-facebook-show-preferences' => 'Feedvoorkeuren van Facebook weergeven',
	'userlogin-facebook-hide-preferences' => 'Feedvoorkeuren van Facebook verbergen',
	'userlogin-loginreqlink' => 'aanmelden',
	'userlogin-changepassword-needlogin' => 'U moet $1 om uw wachtwoord te kunnen wijzigen.',
	'wikiamobile-sendpassword-label' => 'Nieuw wachtwoord sturen',
	'wikiamobile-facebook-connect-fail' => 'Uw Facebookgebruiker is op het moment niet gekoppeld met uw Wikiagebruiker.',
);

/** Polish (Polski)
 * @author Nandy
 * @author Sovq
 */
$messages['pl'] = array(
	'userlogin-login-heading' => 'Zaloguj się',
	'userlogin-forgot-password' => 'Nie pamiętasz hasła?',
	'userlogin-remembermypassword' => 'Zapamiętaj mnie',
	'userlogin-error-noname' => 'Ups, proszę wypełnij pole z nazwą użytkownika.',
	'userlogin-error-sessionfailure' => 'Twoja sesja wygasła. Zaloguj się ponownie.',
	'userlogin-error-nosuchuser' => 'Nie rozpoznaliśmy tej nazwy użytkownika. Nie zapominaj o tym, że przy nazwie użytkownika wielkość liter ma znaczenie.',
	'userlogin-error-wrongpassword' => 'Ups, złe hasło. Upewnij się, czy klawisz caps lock jest wyłączony i spróbuj ponownie.',
	'userlogin-error-wrongpasswordempty' => 'Ups, proszę wypełnij hasło.',
	'userlogin-error-resetpass_announce' => 'Wygląda na to, że użyłeś tymczasowego hasła. Wpisz nowe hasło w celu kontynuacji logowania się.',
	'userlogin-error-login-throttled' => 'Próbowałeś zalogować się podając złe hasło zbyt wiele razy. Poczekaj chwilę zanim będziesz mógł spróbować ponownie.',
	'userlogin-error-login-userblocked' => 'Twoja nazwa użytkownika została zablokowana i nie możesz się zalogować używając jej.',
	'userlogin-error-edit-account-closed-flag' => 'Twoje konto zostało wyłączone przez Wikia.',
	'userlogin-error-cantcreateaccount-text' => 'Nie możesz zakładać nowych kont z adresu IP, którego obecnie używasz.',
	'userlogin-error-userexists' => 'Ktoś już używa takiej nazwy użytkownika. Spróbuj innej!',
	'userlogin-error-invalidemailaddress' => 'Wprowadź prawidłowy adres e-mail.',
	'userlogin-get-account' => 'Nie masz jeszcze konta? [[Special:UserSignup|Zarejestruj się]]',
	'userlogin-error-invalid-username' => 'Nieprawidłowa nazwa użytkownika',
	'userlogin-error-userlogin-unable-info' => 'Przykro nam. Nie jesteśmy w stanie zarejestrować Twojego konta w tym momencie.',
	'userlogin-error-user-not-allowed' => 'Ta nazwa użytkownika nie jest dozwolona.',
	'userlogin-error-captcha-createaccount-fail' => 'Słowo, które wprowadziłeś nie zgadza się ze słowem z obrazka, spróbuj ponownie!',
	'userlogin-error-userlogin-bad-birthday' => 'Ups, wypełnij miesiąc, dzień i rok.',
	'userlogin-error-externaldberror' => 'Przepraszamy! Pojawiły się problemy na naszej stronie. Prosimy spróbować ponownie później.',
	'userlogin-error-noemailtitle' => 'Wprowadź prawidłowy adres e-mail.',
	'userlogin-error-acct_creation_throttle_hit' => 'Przepraszamy, ten adres IP stworzył dzisiaj już zbyt dużo nowych kont. Prosimy spróbować ponownie później.',
	'userlogin-error-resetpass_forbidden' => 'Hasła nie mogą zostać zmienione',
	'userlogin-error-blocked-mailpassword' => 'Nie możesz prosić o nowe hasło ponieważ Twój adres IP został zablokowany przez Wikia.',
	'userlogin-error-throttled-mailpassword' => 'Wysłaliśmy już przypomnienie z hasłem tego konta w ciągu {{PLURAL:$1|ostatniej godziny|ostatnich $1 godzin}}. Sprawdź swoją skrzynkę e-mail.',
	'userlogin-error-mail-error' => 'Ups, wystąpił problem z wysyłką Twojej wiadomości e-mail. Prosimy [[Special:Contact/general|skontaktuj się z nami]].',
	'userlogin-password-email-sent' => 'Hasło zostało wysłane na adres e-mail $1.',
	'userlogin-error-unconfirmed-user' => 'Przepraszamy, nie potwierdziłeś swojego adresu e-mail. Proszę potwierdź go najpierw.',
	'userlogin-password-page-title' => 'Zmień hasło',
	'userlogin-oldpassword' => 'Poprzednie hasło',
	'userlogin-newpassword' => 'Nowe hasło',
	'userlogin-retypenew' => 'Powtórz nowe hasło',
	'userlogin-password-email-subject' => 'Przypomnienie hasła',
	'userlogin-password-email-greeting' => 'Witaj $USERNAME,',
	'userlogin-password-email-content' => 'Użyj tego tymczasowego hasła, aby zalogować się na Wikii: "$NEWPASSWORD"
<br /><br />
Jeśli nie zgłaszałeś prośby o nowe hasło, nie martw się! Twoje konto jest bezpieczne. Możesz zignorować tą wiadomość i zalogować się przy użyciu starego hasła.
<br /><br />
Masz pytania lub wątpliwości? Daj nam znać.',
	'userlogin-password-email-signature' => 'Zespół Wikia',
	'userlogin-password-email-body' => 'Witaj $2,

Użyj tego tymczasowego hasła, aby zalogować się na Wikii: "$3"

Jeśli nie zgłaszałeś prośby o nowe hasło, nie martw się! Twoje konto jest bezpieczne. Możesz zignorować tą wiadomość i zalogować się przy użyciu starego hasła.

Masz pytania lub wątpliwości? Daj nam znać.

Zespół Wikia


___________________________________________

Aby zapoznać się z nowościami, odwiedź http://spolecznosc.wikia.com
Chcesz zmienić ustawienia otrzymywanych powiadomień? Zajrzyj tutaj: {{fullurl:{{ns:special}}:Preferences}}.',
	'userlogin-email-footer-line1' => 'Aby zapoznać się z nowościami, odwiedź <a style="color:#2a87d5;text-decoration:none;" href="http://spolecznosc.wikia.com">spolecznosc.wikia.com</a>',
	'userlogin-email-footer-line2' => 'Chcesz zmienić ustawienia otrzymywanych powiadomień? Zajrzyj tutaj: <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Ustawienia</a>',
	'userlogin-provider-or' => 'Lub',
	'userlogin-provider-tooltip-facebook' => 'Kliknij, aby zalogować się przez Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Kliknij, aby zarejestrować się używając konta z Facebooka',
	'userlogin-facebook-show-preferences' => 'Pokaż ustawienia Facebooka',
	'userlogin-facebook-hide-preferences' => 'Ukryj ustawienia Facebooka',
	'userlogin-loginreqlink' => 'zaloguj się',
	'userlogin-changepassword-needlogin' => '$1, aby zmienić swoje hasło.',
	'wikiamobile-sendpassword-label' => 'Wyślij nowe hasło',
	'wikiamobile-facebook-connect-fail' => 'Przepraszamy, Twoje konto na Facebooku nie jest obecnie połączone z kontem na Wikii.',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Caio1478
 */
$messages['pt-br'] = array(
	'userlogin-login-heading' => 'Login',
	'userlogin-forgot-password' => 'Esqueceu sua senha?',
	'userlogin-remembermypassword' => 'Permanecer logado',
	'userlogin-error-noname' => 'Ops, por favor preencha o campo de nome de usuário.',
	'userlogin-error-sessionfailure' => 'Sua sessão de login expirou. Por favor, faça login novamente.',
	'userlogin-error-nosuchuser' => 'Nós não reconhecemos este nome. Não se esqueça, nomes de usuário são caso sensível.',
	'userlogin-error-wrongpassword' => 'Ops, senha errada. Certifique-se que a tecla caps lock está desativada e tente novamente.',
	'userlogin-error-wrongpasswordempty' => 'Ops, por favor preencha o campo de senha.',
	'userlogin-error-resetpass_announce' => 'Parece que você usou uma senha temporária. Escolha uma nova senha aqui para continuar o login.',
	'userlogin-error-login-throttled' => 'Você tentou entrar com a senha errada muitas vezes. Espere um pouco antes de tentar novamente.',
	'userlogin-error-login-userblocked' => 'Seu nome de usuário foi bloqueado e não pode ser usado para fazer login.',
	'userlogin-error-edit-account-closed-flag' => 'Sua conta foi desativada pela Wikia.',
	'userlogin-error-cantcreateaccount-text' => 'Seu endereço de IP não é permitido para criar novas contas.',
	'userlogin-error-userexists' => 'Alguém já tem este nome de usuário. Tente um diferente!',
	'userlogin-error-invalidemailaddress' => 'Digite um endereço de e-mail válido.',
	'userlogin-get-account' => 'Não possui uma conta? [[Special:UserSignup|Registre-se]]',
	'userlogin-error-invalid-username' => 'Nome de usuário inválido',
	'userlogin-error-userlogin-unable-info' => 'Desculpe, mas não somos capazes de registrar sua conta neste momento.',
	'userlogin-error-user-not-allowed' => 'Esse nome de usuário não é permitido.',
	'userlogin-error-captcha-createaccount-fail' => 'A palavra que você digitou não encontrou a palavra na caixa, tente novamente!',
	'userlogin-error-userlogin-bad-birthday' => 'Ops, por favor preencha o dia, mês e ano.',
	'userlogin-error-externaldberror' => 'Desculpe! Nosso site está tendo um problema. Por favor, tente novamente mais tarde.',
	'userlogin-error-noemailtitle' => 'Por favor, digite um endereço de e-mail válido.',
	'userlogin-error-acct_creation_throttle_hit' => 'Desculpe, este endereço de IP criou muitas contas hoje. Por favor, tente novamente mais tarde.',
	'userlogin-error-resetpass_forbidden' => 'Senhas não podem ser alteradas',
	'userlogin-error-blocked-mailpassword' => 'Você não pode pedir uma nova senha porque este endereço de IP é bloqueado pela Wikia.',
	'userlogin-error-throttled-mailpassword' => 'Já enviamos um lembrete de senha para essa conta {{PLURAL:$1|na última hora|nas últimas $1 horas}}. Por favor, verifique seu e-mail.',
	'userlogin-error-mail-error' => 'Ops, ocorreu um problema enviando seu e-mail. Por favor, [[Special:Contact/general|contate-nos]].',
	'userlogin-password-email-sent' => 'Nós enviamos uma nova senha para o endereço de e-mail para $1.',
	'userlogin-error-unconfirmed-user' => 'Desculpe, você não confirmou seu endereço de e-mail. Por favor, confirme seu endereço de e-mail primeiro.',
	'userlogin-password-page-title' => 'Mude sua senha',
);

/** Russian (Русский)
 * @author Kuzura
 */
$messages['ru'] = array(
	'userlogin-login-heading' => 'Войти',
	'userlogin-forgot-password' => 'Забыли пароль?',
	'userlogin-remembermypassword' => 'Оставаться в системе',
	'userlogin-error-noname' => 'Пожалуйста, заполните строку Имя участника.',
	'userlogin-error-sessionfailure' => 'Превышено время ожидания. Пожалуйста, войдите снова.',
	'userlogin-error-nosuchuser' => 'Данное имя не зарегистрировано. Не забывайте, что имена участников чувствительны к регистру.',
	'userlogin-error-wrongpassword' => 'Неправильный пароль. Возможно, вам надо отключить caps lock и повторить попытку.',
	'userlogin-error-wrongpasswordempty' => 'Пожалуйста, заполните строку Пароль.',
	'userlogin-error-resetpass_announce' => 'Похоже, что вы использовали временный пароль. Введите новый пароль здесь, чтобы войти в систему.',
	'userlogin-error-login-throttled' => 'Вы пытались войти в систему используя неправильный пароль слишком много раз. Подождите какое-то время перед повторной попыткой.',
	'userlogin-error-login-userblocked' => 'Ваше имя участника было заблокировано и не может быть использовано для входа в систему.',
	'userlogin-error-edit-account-closed-flag' => 'Ваш аккаунт был отключён на всей Викия.',
	'userlogin-error-cantcreateaccount-text' => 'С Вашего IP-адреса запрещено создавать новые учётные записи.',
	'userlogin-error-userexists' => 'Кто-то уже зарегистрировал это имя участника. Попробуйте другое!',
	'userlogin-error-invalidemailaddress' => 'Пожалуйста, введите действительный адрес электронной почты.',
	'userlogin-get-account' => 'Нет учётной записи? [[Special:UserSignup|Зарегистрироваться]]',
	'userlogin-error-invalid-username' => 'Неправильное имя участника',
	'userlogin-error-userlogin-unable-info' => 'К сожалению, мы не можем зарегистрировать вашу учётную запись в это время.',
	'userlogin-error-user-not-allowed' => 'Недопустимое имя участника.',
	'userlogin-error-captcha-createaccount-fail' => 'Слово, которое вы ввели, не соответствует в слову в окошке. Попробуйте ещё раз!',
	'userlogin-error-userlogin-bad-birthday' => 'Пожалуйста, заполните месяц, день и год.',
	'userlogin-error-externaldberror' => 'Извините! Наш сайт в настоящее время столкнулся с проблемами. Пожалуйста, попробуйте ещё раз позже.',
	'userlogin-error-noemailtitle' => 'Пожалуйста, введите действительный адрес электронной почты.',
	'userlogin-error-acct_creation_throttle_hit' => 'С этого IP-адреса создано слишком много аккаунтов сегодня. Пожалуйста, попробуйте ещё раз позже.',
	'userlogin-error-resetpass_forbidden' => 'Пароли нельзя изменить',
	'userlogin-error-blocked-mailpassword' => 'Вы не можете запросить новый пароль, так как Ваш IP-адрес был заблокирован.',
	'userlogin-error-throttled-mailpassword' => 'Мы уже отправили пароль для этой учётной записи {{PLURAL:$1| час|$1 часов}} назад. Пожалуйста, проверьте свою электронную почту.',
	'userlogin-error-mail-error' => 'К сожалению, у нас проблема с отправкой писем на Ваш e-mail. Пожалуйста, [[Special:Contact/general|свяжитесь с нами]].',
	'userlogin-password-email-sent' => 'Мы направили новый пароль на e-mail - $1 .',
	'userlogin-error-unconfirmed-user' => 'Извините, вы не подтвердили свой адрес электронной почты. Пожалуйста, сделайте это.',
	'userlogin-password-page-title' => 'Изменить пароль',
	'userlogin-oldpassword' => 'Старый пароль',
	'userlogin-newpassword' => 'Новый пароль',
	'userlogin-retypenew' => 'Повторить новый пароль',
	'userlogin-password-email-subject' => 'Запросить забытый пароль',
	'userlogin-password-email-greeting' => 'Привет, $USERNAME',
	'userlogin-password-email-content' => 'Пожалуйста, используйте этот временный пароль для входа в систему: "$NEWPASSWORD"
<br /><br />
Если вы не запрашивали новый пароль, не волнуйтесь! Ваша учётная запись в безопасности и надёжно защищена. Вы можете игнорировать это сообщение и использовать старый пароль для входа на Викия.
<b r/><br />
Вопросы или проблемы? Свяжитесь с нами.',
	'userlogin-password-email-signature' => 'Команда Викия',
	'userlogin-password-email-body' => 'Привет, $2

Пожалуйста, используйте этот временный пароль для входа в систему: "$3"

Если вы не запрашивали новый пароль, не волнуйтесь! Ваша учётная запись в безопасности и надёжно защищена. Вы можете игнорировать это сообщение и использовать старый пароль для входа на Викия.

Вопросы или проблемы? Свяжитесь с нами.

Команда Викия


___________________________________________

Чтобы проверить последние новости Викия, посетите http://community.wikia.com
Хотите настроить количество писем, которые Вы получаете? Перейдите к {{fullurl:{{ns:special}}:Preferences}}',
	'userlogin-email-footer-line1' => 'Чтобы узнать о последних новостях Викия, посетите <a style="color:#2a87d5;text-decoration:none;" href="http://community.wikia.com">community.wikia.com</a>',
	'userlogin-email-footer-line2' => 'Хотите настроить количество писем, которые Вы получаете? Перейдите к <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">личным настройкам</a>',
	'userlogin-provider-or' => 'Или',
	'userlogin-provider-tooltip-facebook' => 'Нажмите кнопку, чтобы войти в систему через Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Нажмите кнопку, чтобы зарегистрироваться через Facebook',
	'userlogin-facebook-show-preferences' => 'Показать настройки Facebook',
	'userlogin-facebook-hide-preferences' => 'Скрыть настройки Facebook',
	'userlogin-loginreqlink' => 'войти',
	'userlogin-changepassword-needlogin' => 'Вам нужно $1, чтобы изменить свой пароль.',
	'wikiamobile-sendpassword-label' => 'Отправить новый пароль',
	'wikiamobile-facebook-connect-fail' => 'К сожалению, ваш аккаунт на Facebook в настоящее время не связан с учётной записью Викия.',
);

/** Swedish (Svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'userlogin-login-heading' => 'Logga in',
	'userlogin-forgot-password' => 'Glömt ditt lösenord?',
	'userlogin-remembermypassword' => 'Förbli inloggad',
	'userlogin-error-noname' => 'Hoppsan, var god fyll i användarnamnsfältet.',
	'userlogin-error-sessionfailure' => 'Din inloggningssession har löpt ut. Var god logga in igen.',
	'userlogin-error-nosuchuser' => 'Vi känner inte igen detta namn. Glöm inte att användarnamn är skiftlägeskänsliga.',
	'userlogin-error-wrongpassword' => 'Hoppsan, fel lösenord. Se till att Caps Lock är inaktiverat och försök igen.',
	'userlogin-error-wrongpasswordempty' => 'Hoppsan, var god fyll i lösenordsfältet.',
	'userlogin-error-resetpass_announce' => 'Det ser ut som du använde ett temporärt lösenord. Välj ett nytt lösenord här för att fortsätta inloggningen.',
	'userlogin-error-login-throttled' => 'Du har försökt logga in med fel lösenord för många gånger. Vänta ett stund innan du försöker igen.',
	'userlogin-error-login-userblocked' => 'Ditt användarnamn har blockerats och kan inte användas för att logga in.',
	'userlogin-error-edit-account-closed-flag' => 'Ditt konto har inaktiverats av Wikia.',
	'userlogin-error-cantcreateaccount-text' => 'Din IP-adress har inte tillåtelse att skapa nya konton.',
	'userlogin-error-userexists' => 'Någon har redan detta användarnamn. Prova ett annat!',
	'userlogin-error-invalidemailaddress' => 'Var god ange en giltig e-postadress.',
	'userlogin-get-account' => 'Har du inte ett konto? [[Special:UserSignup|Registrera dig]]',
	'userlogin-error-invalid-username' => 'Ogiltigt användarnamn',
	'userlogin-error-userlogin-unable-info' => 'Tyvärr, vi kan inte registrera ditt konto för tillfället.',
	'userlogin-error-user-not-allowed' => 'Ditt användarnamn är inte tillåtet.',
	'userlogin-error-captcha-createaccount-fail' => 'Ordet du skrev in stämde inte överens med ordet i lådan, försök igen!',
	'userlogin-error-userlogin-bad-birthday' => 'Hoppsan, var god fyll i månad, dag och år.',
	'userlogin-error-externaldberror' => 'Tyvärr! Vår sida har för tillfället stött på ett fel. Var god försök igen senare.',
	'userlogin-error-noemailtitle' => 'Var god ange en giltig e-postadress.',
	'userlogin-error-acct_creation_throttle_hit' => 'Tyvärr, denna IP-adress har skapat för många konton idag. Var god försök igen senare.',
	'userlogin-error-resetpass_forbidden' => 'Lösenord kan inte ändras',
	'userlogin-error-blocked-mailpassword' => 'Du kan inte begära ett nytt lösenord eftersom denna IP-adress är blockerad av Wikia.',
	'userlogin-error-throttled-mailpassword' => 'Vi har redan skickat ett lösenordspåminnelse till detta konto inom {{PLURAL:$1|den senaste timmen|de senaste $1 timmarna}}. Var god kolla din e-post.',
	'userlogin-error-mail-error' => 'Hoppsan, ett fel uppstod när det skulle skickas till din e-post. Var god [[Special:Contact/general|kontakta oss]].',
	'userlogin-password-email-sent' => 'Vi har skickat ett nytt lösenord till e-postadressen för $1.',
	'userlogin-error-unconfirmed-user' => 'Tyvärr, du har inte bekräftat din e-postadress. Var god bekräfta din e-postadress först.',
	'userlogin-password-page-title' => 'Ändra ditt lösenord',
	'userlogin-oldpassword' => 'Gammalt lösenord',
	'userlogin-newpassword' => 'Nytt lösenord',
	'userlogin-retypenew' => 'Upprepa nytt lösenord',
	'userlogin-password-email-subject' => 'Begäran om glömt lösenord',
	'userlogin-password-email-greeting' => 'Hej $USERNAME,',
	'userlogin-password-email-content' => 'Var god använd detta temporära lösenord för att logga in på Wikia: "$NEWPASSWORD"
<br /><br />
Om du inte begärde ett nytt lösenord, oroa dig inte! Ditt konto är tryggt och säkert. Du kan ignorera detta e-postmeddelande och fortsätta logga in på Wikia med ditt gamla lösenord.
<br /><br />
Frågor eller problem? Kontakta oss gärna.',
	'userlogin-password-email-signature' => 'Wikia gemenskapssupport',
	'userlogin-password-email-body' => 'Hej $2,

Var god använd detta temporära lösenord för att logga in på Wikia: "$3"

Om du inte begärde ett nytt lösenord, oroa dig inte! Ditt konto är tryggt och säkert. Du kan ignorera detta e-postmeddelande och fortsätta logga in på Wikia med ditt gamla lösenord.

Frågor eller problem? Kontakta oss gärna.

Wikia gemenskapssupport


___________________________________________

För att kolla in de senaste händelserna på Wikia, besök http://community.wikia.com
Vill du kontrollera vilka e-postmeddelanden du får? Gå till: {{fullurl:{{ns:special}}:Preferences}}',
	'userlogin-email-footer-line1' => 'För att kolla in de senaste händelserna på Wikia, besök <a style="color:#2a87d5;text-decoration:none;" href="http://community.wikia.com">community.wikia.com</a>',
	'userlogin-email-footer-line2' => 'Vill du kontrollera vilka e-postmeddelanden du får? Gå till dina <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">inställningar</a>',
	'userlogin-provider-or' => 'Eller',
	'userlogin-provider-tooltip-facebook' => 'Klicka på knappen Logga in med Facebook',
	'userlogin-provider-tooltip-facebook-signup' => 'Klicka på knappen för att registrera dig med Facebook',
	'userlogin-facebook-show-preferences' => 'Visa inställningar för Facebook-flöde',
	'userlogin-facebook-hide-preferences' => 'Dölj inställningar för Facebook-flöde',
	'userlogin-loginreqlink' => 'logga in',
	'userlogin-changepassword-needlogin' => 'Du måste $1 för att ändra ditt lösenord.',
	'wikiamobile-sendpassword-label' => 'Skicka nytt lösenord',
	'wikiamobile-facebook-connect-fail' => 'Tyvärr, ditt Facebook-konto är för tillfället inte är länkat med ett Wikia-konto.',
);

