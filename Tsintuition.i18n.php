<?php
/**
 * Interface messages for TsIntuition.
 *
 * @toolowner krinkle
 */

$url = '~intuition/';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title' =>	'Toolserver Intuition', // Ignore
	'fullname' => 'Internationalization for Toolserver\'s User Interface',
	'current-settings' => 'Current settings',
	'current-language' => 'Currently selected language',
	'settings-legend' => 'Settings',
	'choose-language' => 'Choose a language',
	'clear-cookies' => 'clear cookies',
	'renew-cookies' => 'renew cookies',
	'cookie-expiration' => 'Cookie expiration',
	'clearcookies-success' => 'Succesfully cleared cookies.',
	'renewcookies-success' => 'Cookies renewed! You are all set for the next $1.',
	'tab-overview' => 'Overview',
	'tab-settings' => 'Settings',
	'tab-about' => 'About',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'My language settings',
	'bl-mysettings-new' => 'Change language!',
	'bl-promo' => 'Translations are powered by $1 and $2.',
	'bl-changelanguage' => 'Click here to change the interface language of this tool.',
	'usage' => 'Tools translated by Toolserver Intuition.',
	'help-translate-tool' => 'Help translate this tool!',
	'help-translate-all' => 'Help translate Toolserver!',
	'help-translate-tooltip' => 'Help others by translating interface messages into your language.',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Jan Luca
 * @author Krinkle
 * @author Lloffiwr
 * @author Purodha
 */
$messages['qqq'] = array(
	'fullname' => "The full name of the Toolserver Intution. Intution (INTUI-tion) stands for \"'' '''In'''ternationalization for '''T'''oolserver's '''U'''ser '''I'''nterface''\".",
	'current-settings' => 'Form legend in the language settings dashboard around the box that displays the current settings and their properties (such as expiry time).',
	'current-language' => 'Label in front of the currently selected language name in the "Current settings"-box',
	'settings-legend' => 'The legend around the form under the "Change settings" tab
{{Identical|Settings}}',
	'choose-language' => 'Label for the language dropdown menu in the Dashboard.',
	'clear-cookies' => 'Link in the dashboard that will remove all memory (cookies) of the visitors language choise.',
	'renew-cookies' => "Link in the dashboard that will renew all memory (cookies) of the visitors language choise. This resets the expiry, so that they won't expire soon.",
	'cookie-expiration' => 'Label in the dashboard\'s "current settings"-tab. This is the time until the language memory (cookies) will expire.',
	'clearcookies-success' => 'Message displayed after cookies are cleared.',
	'renewcookies-success' => 'This message is shown after the cookies are renewed. The $1 variable contains the period of time until the cookies will expire (eg. "30 days")..',
	'tab-overview' => 'Dashboard tab for "Overview" which shows the current settings.
{{Identical|Overview}}',
	'tab-settings' => 'Dashboard tab for "Settings" which allows the user to edit the settings.
{{Identical|Settings}}',
	'tab-about' => "Dashboard tab for \"About\" which opens a window with a demonstration page. See [//toolserver.org/~intuition/ TsIntuition Dashboard] for a live example.

If 'About' doesn't work in your language, possible equivalents may be 'Details', 'About us', 'About this', 'Information' or 'Data'.

{{Identical|About}}",
	'tab-demo' => 'Dashboard tab for "Demo" which opens a window with a demonstration page.',
	'bl-mysettings' => 'Backlink from within other tools to the dashboard for users that have used TsIntuition before.',
	'bl-mysettings-new' => 'Backlink to TsIntuition for users that are new to TsIntuition.',
	'bl-promo' => "Sentence displayed at the bottom of other tools promoting translatewiki.net and Toolserver Intuition.
* $1 is a link to translatewiki.net
* $2 is the link to Toolserver Intuition's about page",
	'bl-changelanguage' => 'Tooltip of the clickable link displayed at the pages of other tools to the dashboard where you can change your interface language.',
	'usage' => 'Heading on the About-page of the Toolserver Intuition dashboard. A list of tools and textdomains is listed below.',
	'help-translate-tool' => 'Link displayed in the footer of other tools linking to Special:Translate on translatewiki.net for that tool.',
	'help-translate-all' => 'Link displayed in the footer of other tools linking to Special:Translate on translatewiki.net for all tools.',
	'help-translate-tooltip' => 'Tooltip displayed when hovering the "Help translate!" button.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'current-settings' => 'Huidige instellings',
	'current-language' => 'Huidig gekose taal',
	'settings-legend' => 'Instellings',
	'choose-language' => "Kies 'n taal",
	'clear-cookies' => 'vee koekies uit',
	'renew-cookies' => 'verfris koekies',
	'cookie-expiration' => 'Koekie uitlooptyd',
	'clearcookies-success' => 'Koekies suksesvol uitgevee.',
	'renewcookies-success' => 'Koekies is hernu! U is reg vir die komende $1.',
	'tab-overview' => 'Oorsig',
	'tab-settings' => 'Instellings',
	'tab-about' => 'Aangaande',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'My taalinstellings',
	'bl-mysettings-new' => 'Verander taal!',
	'bl-promo' => 'Die vertaling is moontlik gemaak deur $1 en $2.',
	'help-translate-tool' => 'Help om hierdie program te vertaal!',
	'help-translate-all' => 'Help om Toolserver te vertaal!',
	'help-translate-tooltip' => 'Help ander deur koppelvlak-boodskappe na u taal te vertaal.',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'fullname' => 'تدويل واجهة مستخدم Toolserver',
	'current-settings' => 'الإعدادات الحالية',
	'current-language' => 'اللغة المختارة حاليا',
	'settings-legend' => 'الإعدادات',
	'choose-language' => 'اختر لغة',
	'clear-cookies' => 'امسح الكوكيز',
	'renew-cookies' => 'جدد الكوكيز',
	'cookie-expiration' => 'تاريخ انتهاء الكوكيز',
	'clearcookies-success' => 'تم حذف كل الكوكيز بنجاح.',
	'renewcookies-success' => 'تم تجديد الكوكيز! أنت الآن جاهز للنص $1.',
	'tab-overview' => 'نظرة عامة',
	'tab-settings' => 'الإعدادات',
	'tab-about' => 'عن',
	'tab-demo' => 'تجربة',
	'bl-mysettings' => 'إعدادات لغتي',
	'bl-mysettings-new' => 'غير اللغة!',
	'bl-promo' => 'يدعم هذه الترجمات كل من $1 و $2.',
	'bl-changelanguage' => 'أضغط هنا لتغيير لغة الواجهة لهذه الأدات.',
	'usage' => 'تمت ترجمة الأدوات عن طريق Toolserver Intuition.',
	'help-translate-tool' => 'ساعد في ترجمة هذه الأداة!',
	'help-translate-all' => 'ساعد في ترجمة التول سيرفر!',
	'help-translate-tooltip' => 'ساعد الآخرين بترجمة رسائل الواجهة إلى لغتك الأم.',
);

/** Assamese (অসমীয়া)
 * @author Simbu123
 */
$messages['as'] = array(
	'choose-language' => 'ভাষা নির্বাচন কৰক',
	'bl-mysettings-new' => 'ভাষা পৰিবৰ্তন কৰক!',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'fullname' => "Internacionalización pa la interfaz d'usuariu de Toolserver",
	'current-settings' => 'Configuración actual',
	'current-language' => 'Llingua seleicionada anguaño',
	'settings-legend' => 'Configuración',
	'choose-language' => 'Escueyi una llingua',
	'clear-cookies' => 'desaniciar cookies',
	'renew-cookies' => 'anovar cookies',
	'cookie-expiration' => 'Espiración de la cookie',
	'clearcookies-success' => 'Les cookies se desaniciaron correutamente.',
	'renewcookies-success' => "¡S'anovaron les cookies! Tas preparáu pa los siguientes $1.",
	'tab-overview' => 'Resume',
	'tab-settings' => 'Configuración',
	'tab-about' => 'Tocante a',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Les mios preferencies de llingua',
	'bl-mysettings-new' => '¡Camudar llingua!',
	'bl-promo' => 'Traducciones feches con $1 y $2.',
	'bl-changelanguage' => "Calca equí pa camudar la llingua de la interfaz d'esta ferramienta.",
	'usage' => 'Ferramientes traducíes por Toolserver Intuition.',
	'help-translate-tool' => '¡Ayuda a traducir esta ferramienta!',
	'help-translate-all' => '¡Ayuda a traducir Toolserver!',
	'help-translate-tooltip' => 'Ayuda a otres persones traduciendo los mensaxes de la interfaz a la to llingua.',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 * @author Vago
 */
$messages['az'] = array(
	'clear-cookies' => 'kökələri təmizlə',
	'cookie-expiration' => 'kökənin bitmə vaxtı',
	'tab-about' => 'Haqqında',
);

/** Belarusian (беларуская)
 * @author LexArt
 */
$messages['be'] = array(
	'fullname' => 'Інтэрналіцыяналізацыя інтэрфейсу карыстальніка Toolserver',
	'current-settings' => 'Цяперашнія наладкі',
	'current-language' => 'Цяперашняя выбраная мова',
	'settings-legend' => 'Наладкі',
	'choose-language' => 'Абярыце мову',
	'clear-cookies' => 'Ачысціць квіткі (кукі)',
	'renew-cookies' => 'абнавіць квіткі (кукі)',
	'cookie-expiration' => 'Квіткі (кукі) пратэрмінаваныя',
	'clearcookies-success' => 'Квіткі (кукі) паспяхова выдаленыя.',
	'renewcookies-success' => 'Квіткі (кукі) абноўленыя. Усё гатова на тэрмін у $1',
	'tab-overview' => 'Агляд',
	'tab-settings' => 'Наладкі',
	'tab-about' => 'Што гэта?',
	'tab-demo' => 'Дэманстрацыя',
	'bl-mysettings' => 'Мае моўныя наладкі',
	'bl-mysettings-new' => 'Змяніце мову!',
	'bl-promo' => 'Пераклады зробленыя на сайтах $1 і $2',
	'bl-changelanguage' => 'Націсніце тут для змены мовы для гэтай прылады',
	'usage' => 'Прылады перакладзеныя на Toolserver Intuition.',
	'help-translate-tool' => 'Дапамажыце з перакладамі для гэтай прылады',
	'help-translate-all' => 'Дапамажыце перакласці Toolserver!',
	'help-translate-tooltip' => 'Дапамажыце карыстальнікам - перакладайце паведамленні інтэрфейсу на вашую мову.',
);

/** Belarusian (Taraškievica orthography) (‪беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'fullname' => 'Інтэрналіцыяналізацыя інтэрфэйсу карыстальніка Toolserver',
	'current-settings' => 'Цяперашнія налады',
	'current-language' => 'Цяперашняя выбраная мова',
	'settings-legend' => 'Налады',
	'choose-language' => 'Выберыце мову',
	'clear-cookies' => 'ачысьціць закладкі (cookies)',
	'renew-cookies' => 'аднавіць закладкі (cookies)',
	'cookie-expiration' => 'Тэрмін дзеяньня закладак (cookies)',
	'clearcookies-success' => 'Закладкі (cookies) ачышчаныя пасьпяхова.',
	'renewcookies-success' => 'Закладкі (cookies) адноўленыя! Яны будуць дзейнічаць наступныя $1.',
	'tab-overview' => 'Агляд',
	'tab-settings' => 'Налады',
	'tab-about' => 'Пра',
	'tab-demo' => 'Дэманстрацыя',
	'bl-mysettings' => 'Мае моўныя налады',
	'bl-mysettings-new' => 'Выберыце мову',
	'bl-promo' => 'Пераклады зробленыя пры падтрымцы $1 і $2.',
	'bl-changelanguage' => 'Націсьніце, каб зьмяніць мову інтэрфэйсу гэтага інструмэнта.',
	'usage' => 'Інструмэнты перакладзеныя ў межах Toolserver Intuition.',
	'help-translate-tool' => 'Дапамажыце перакласьці гэты інструмэнт!',
	'help-translate-all' => 'Дапамажыце перакласьці сэрвэр інструмэнтаў!',
	'help-translate-tooltip' => 'Дапамажыце іншым з перакладам інтэрфэйса на Вашую мову.',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'current-settings' => 'Текущи настройки',
	'current-language' => 'Текущо избран език',
	'settings-legend' => 'Настройки',
	'choose-language' => 'Избиране на език',
	'tab-settings' => 'Настройки',
	'tab-about' => 'Относно',
	'tab-demo' => 'Демонстрация',
	'bl-mysettings' => 'Моите езикови настройки',
	'bl-mysettings-new' => 'Промяна на езика!',
	'help-translate-tool' => 'Помогнете за превода на този инструмент!',
);

/** Banjar (Bahasa Banjar)
 * @author Riemogerz
 */
$messages['bjn'] = array(
	'current-settings' => 'Satilan wahini',
	'settings-legend' => 'Satilan',
	'tab-settings' => 'Satilan',
	'tab-about' => 'Pasal',
	'tab-demo' => 'Dimu',
	'bl-mysettings' => 'Satilan bahasa ulun',
	'bl-mysettings-new' => 'Ganti bahasa!',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'fullname' => 'টুলসার্ভারের ব্যবহারকারী ইন্টারফেসের আন্তর্জাতিকীকরণ',
	'current-settings' => 'বর্তমান সেটিংস',
	'current-language' => 'বর্তমানে নির্ধারিত ভাষাসমূহ',
	'settings-legend' => 'সেটিংস',
	'choose-language' => 'একটি ভাষা নির্বাচন করুন',
	'clear-cookies' => 'কুকি পরিস্কার',
	'renew-cookies' => 'কুকি নবায়ন',
	'cookie-expiration' => 'কুকি উত্তীর্ণের মেয়াদ',
	'clearcookies-success' => 'সফলভাবে কুকি পরিস্কার সম্পন্ন হয়েছে।',
	'renewcookies-success' => 'কুকি নবায়নকৃত হয়েছে! আপনারা সবাই $1 পর্যন্ত নিশ্চিত।',
	'tab-overview' => 'ভূমিকা',
	'tab-settings' => 'সেটিং',
	'tab-about' => 'পরিচিতি',
	'tab-demo' => 'ডেমো',
	'bl-mysettings' => 'আমার ভাষা সেটিং',
	'bl-mysettings-new' => 'ভাষা পরিবর্তন!',
	'bl-promo' => 'অনুবাদসমূহ $1 ও $2-এর সহায়তায় অনূদিত হয়েছে।',
	'bl-changelanguage' => 'এই সরঞ্জামটির ইন্টারফেস ভাষা পরিবর্তন করতে এখানে ক্লিক করুন।',
	'usage' => 'সরঞ্জামগুলো টুলসার্ভার ইনট্যুইশনের সহায়তায় অনূদিত হয়েছে।',
	'help-translate-tool' => 'এই টুলটি অনুবাদে সাহায্য করুন!',
	'help-translate-all' => 'টুলসার্ভার অনুবাদ করতে সাহায্য করুন!',
	'help-translate-tooltip' => 'ইন্টারফেস বার্তাগুলো আপনার ভাষায় অনুবাদ করে অন্যদের সাহায্য করুন।',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'fullname' => 'Etrebroadeladur evit etrefas implijer an Toolserver',
	'current-settings' => 'Arventennoù red',
	'current-language' => 'Yezh dibabet evit poent',
	'settings-legend' => 'Arventennoù',
	'choose-language' => 'Dibab ar yezh',
	'clear-cookies' => 'riñsañ an toupinoù',
	'renew-cookies' => 'reneveziñ an toupinoù',
	'cookie-expiration' => 'Termen an toupin',
	'clearcookies-success' => 'Diverket eo bet an toupinoù ervat.',
	'renewcookies-success' => "Nevesaet eo bet an toupinoù. Barrek oc'h evit ur prantad a $1.",
	'tab-overview' => 'Brassell',
	'tab-settings' => 'Arventennoù',
	'tab-about' => 'Diwar-benn',
	'tab-demo' => 'Amprouadenn',
	'bl-mysettings' => 'Ma arventennoù yezh',
	'bl-mysettings-new' => 'Cheñch yezh !',
	'bl-promo' => 'Pourchaset eo an troidigezhioù gant $1 ha $2',
	'bl-changelanguage' => 'Klikañ amañ evit cheñch yezh etrefas an ostilh-mañ.',
	'usage' => 'Ostilhoù troet gant Toolserver Intuition.',
	'help-translate-tool' => 'Hor skoazellit da dreiñ an ostilh-mañ !',
	'help-translate-all' => 'Hor skoazellit da dreiñ an Toolserver !',
	'help-translate-tooltip' => 'Skoazellit ar re all en ur reiñ dorn da dreiñ kemennadennoù an etrefas en ho yezh.',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'fullname' => 'Prijevod za korisnički interfejs Toolservera',
	'current-settings' => 'Trenutne postavke',
	'current-language' => 'Trenutno odabrani jezik',
	'settings-legend' => 'Postavke',
	'choose-language' => 'Odaberi jezik',
	'clear-cookies' => 'obriši kolačiće',
	'renew-cookies' => 'obnovi kolačiće',
	'cookie-expiration' => 'Isticanje kolačića',
	'clearcookies-success' => 'Uspješno obrisani kolačići.',
	'renewcookies-success' => 'Kolačići obnovljeni! Sve ste pripremili za slijedećih $1.',
	'tab-overview' => 'Pregled',
	'tab-settings' => 'Postavke',
	'tab-about' => 'O',
	'bl-mysettings' => 'Moje jezičke postavke',
	'bl-mysettings-new' => 'Promijeni jezik!',
	'bl-promo' => 'Prevod su vam omogućili $1 i $2.',
	'bl-changelanguage' => 'Kliknite ovdje za promjenu jezika interfejsa za ovaj alat.',
);

/** Catalan (català)
 * @author SMP
 */
$messages['ca'] = array(
	'fullname' => "Internacionalització i traducció de la interfície d'usuari del Toolserver",
	'current-settings' => 'Configuració actual',
	'current-language' => 'Idioma seleccionat actualment',
	'settings-legend' => 'Paràmetres',
	'choose-language' => 'Trieu un idioma',
	'clear-cookies' => 'neteja les galetes',
	'renew-cookies' => 'renova les galetes',
	'cookie-expiration' => 'Caducitat de les galetes',
	'clearcookies-success' => "S'han esborrat les galetes correctament.",
	'renewcookies-success' => 'Galetes renovades! Estaran disponibles durant els propers $1.',
	'tab-overview' => 'Vista general',
	'tab-settings' => 'Paràmetres',
	'tab-about' => 'Quant a',
	'tab-demo' => 'Demo',
	'bl-mysettings' => "Configuració d'idioma",
	'bl-mysettings-new' => "Canvia l'idioma!",
	'bl-promo' => 'Les traduccions són gentilesa de $1 i $2.',
	'bl-changelanguage' => "Feu clic ací per canviar l'idioma de la interfície d'aquesta eina.",
	'usage' => 'Eines traduïdes per Toolserver Intuition.',
	'help-translate-tool' => 'Ajudeu-nos a traduir aquesta eina!',
	'help-translate-all' => 'Ajudeu-nos a traduir el Toolserver!',
	'help-translate-tooltip' => 'Ajudeu els altres fent les traduccions al vostre idioma dels missatges de la interfície.',
);

/** Czech (česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'fullname' => 'Překlady uživatelského rozhraní Toolserveru',
	'current-settings' => 'Aktuální nastavení',
	'current-language' => 'Aktuálně vybraný jazyk',
	'settings-legend' => 'Nastavení',
	'choose-language' => 'Vyberte jazyk',
	'clear-cookies' => 'smazat cookies',
	'renew-cookies' => 'obnovit cookies',
	'cookie-expiration' => 'Konec platnosti cookie',
	'clearcookies-success' => 'Cookies úspěšně smazány.',
	'renewcookies-success' => 'Cookies obnoveny! Vše nastaveno na dalších $1.',
	'tab-overview' => 'Přehled',
	'tab-settings' => 'Nastavení',
	'tab-about' => 'O nástroji',
	'tab-demo' => 'Ukázka',
	'bl-mysettings' => 'Mé jazykové nastavení',
	'bl-mysettings-new' => 'Změnit jazyk!',
	'bl-promo' => 'Překlady fungují prostřednictvím $1 a $2.',
	'bl-changelanguage' => 'Kliknutím zde změníte jazyk rozhraní tohoto nástroje.',
	'usage' => 'Nástroje přeložené pomocí Toolserver Intuition.',
	'help-translate-tool' => 'Pomozte přeložit tento nástroj!',
	'help-translate-all' => 'Pomozte přeložit Toolserver!',
	'help-translate-tooltip' => 'Pomozte ostatním tím, že přeložíte zprávy rozhraní do svého jazyka.',
);

/** Danish (dansk)
 * @author Peter Alberti
 * @author Sarrus
 */
$messages['da'] = array(
	'fullname' => 'Internationalisering til Toolservers brugergrænseflade',
	'current-settings' => 'Aktuelle indstillinger',
	'current-language' => 'Aktuelt valgte sprog',
	'settings-legend' => 'Indstillinger',
	'choose-language' => 'Vælg et sprog',
	'clear-cookies' => 'Fjern cookies',
	'renew-cookies' => 'Forny cookies',
	'cookie-expiration' => 'Cookieudløb',
	'clearcookies-success' => 'Det lykkedes at slette cookies',
	'renewcookies-success' => 'Cookies fornyet! Du er klar til næste $1.',
	'tab-overview' => 'Oversigt',
	'tab-settings' => 'Indstillinger',
	'tab-about' => 'Om',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Mine sprogindstillinger',
	'bl-mysettings-new' => 'Skift sprog!',
	'bl-promo' => 'Oversættelser er drevet af $1 og $2 .',
	'bl-changelanguage' => 'Klik her for at ændre sproget i brugergrænsefladen for ​​dette værktøj.',
	'usage' => 'Værktøjer oversat af Toolserver Intuition.',
	'help-translate-tool' => 'Hjælpe med at oversætte dette værktøj!',
	'help-translate-all' => 'Hjælp med at oversætte Toolserver!',
	'help-translate-tooltip' => 'Hjælp andre ved at omsætte brugergrænsefladebeskeder til dit sprog.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Krinkle
 * @author UV
 */
$messages['de'] = array(
	'fullname' => 'Übersetzungen für die Benutzeroberfläche des Toolservers',
	'current-settings' => 'Aktuelle Einstellungen',
	'current-language' => 'Aktuell ausgewählte Sprache',
	'settings-legend' => 'Einstellungen',
	'choose-language' => 'Eine Sprache auswählen',
	'clear-cookies' => 'Cookies entfernen',
	'renew-cookies' => 'Cookies erneuern',
	'cookie-expiration' => 'Cookieablauf',
	'clearcookies-success' => 'Die Cookies wurden erfolgreich entfernt.',
	'renewcookies-success' => 'Die Cookies wurden erfolgreich erneuert. Für die kommenden $1 ist alles bereit.',
	'tab-overview' => 'Übersicht',
	'tab-settings' => 'Einstellungen',
	'tab-about' => 'Über',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Meine Spracheinstellungen',
	'bl-mysettings-new' => 'Sprache ändern',
	'bl-promo' => 'Die Übersetzungen werden von $1 und $2 möglich gemacht.',
	'bl-changelanguage' => 'Hier klicken, um die Sprache der Benutzeroberfläche dieses Hilfsprogramms zu ändern.',
	'usage' => 'Die Hilfsprogramme wurden von Toolserver Intuition übersetzt.',
	'help-translate-tool' => 'Hilf bitte dieses Hilfsprogramm zu übersetzen.',
	'help-translate-all' => 'Hilf bitte den Toolserver zu übersetzen.',
	'help-translate-tooltip' => 'Hilf anderen indem du die Nachrichten der Benutzeroberfläche in deine Sprache übersetzt.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'current-settings' => 'Sazê enewki',
	'current-language' => 'Zıwano ke newke weçineyayo',
	'settings-legend' => 'Sazi',
	'choose-language' => 'Yew zıwan weçinê',
	'clear-cookies' => 'Çereza besterne',
	'renew-cookies' => 'çereza anewe ke',
	'cookie-expiration' => 'wahdey çereza biyo pır',
	'clearcookies-success' => 'Çerezi weş besterneyay',
	'tab-overview' => 'Hera weynayis',
	'tab-settings' => 'Sazi',
	'tab-about' => 'Heq te cı',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Sazê zıwan dı mı',
	'bl-mysettings-new' => 'Zıwan vuurnayış!',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'fullname' => 'Pśełožki za wužywarski powjerch Toolserver',
	'current-settings' => 'Aktualne nstajenja',
	'current-language' => 'Tuchylu wubrana rěc',
	'settings-legend' => 'Nastajenja',
	'choose-language' => 'Rěc wubraś',
	'clear-cookies' => 'cookieje wulašowaś',
	'renew-cookies' => 'cookieje wótnowiś',
	'cookie-expiration' => 'Spadnjenje cookieja',
	'clearcookies-success' => 'Cookieje su se wuspěšnje wulašowali.',
	'renewcookies-success' => 'Cookieje su se wótnowili! Su na pśiduce $1 płaśiwe.',
	'tab-overview' => 'Pśeglěd',
	'tab-settings' => 'Nastajenja',
	'tab-about' => 'Wó',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Móje rěcne nastajenja',
	'bl-mysettings-new' => 'Rěc změniś!',
	'bl-promo' => 'Pśełožki zmóžnjaju se wót $1 a $2.',
	'bl-changelanguage' => 'Klikni how, aby rěc wužywarskego powjercha toś togo rěda změnił.',
	'usage' => 'Rědy su se wót Toolserver Intuition pśełožyli.',
	'help-translate-tool' => 'Pomóž toś ten rěd pśełožyś!',
	'help-translate-all' => 'Pomóž Toolserver pśełožyś!',
	'help-translate-tooltip' => 'Pomóž drugim luźim, za tym až pśełožujo powěźeńki wužywarskego powjercha do swójeje rěcy.',
);

/** Greek (Ελληνικά)
 * @author Evropi
 */
$messages['el'] = array(
	'current-settings' => 'Τρέχουσες ρυθμίσεις',
	'current-language' => 'Τρέχουσα επιλεγμένη γλώσσα',
	'settings-legend' => 'Ρυθμίσεις',
	'choose-language' => 'Επιλογή γλώσσας',
	'clear-cookies' => 'εκκαθάριση cookies',
	'renew-cookies' => 'ανανέωση των cookies',
	'cookie-expiration' => 'Λήξη cookie',
	'clearcookies-success' => 'Επιτυχής εκκαθάριση των cookie.',
	'renewcookies-success' => 'Τα cookies ανανεώθηκαν Είστε έτοιμοι για τις επόμενες $1 .',
	'tab-overview' => 'Επισκόπηση',
	'tab-settings' => 'Ρυθμίσεις',
	'tab-about' => 'Σχετικά',
	'bl-mysettings' => 'Ρυθμίσεις γλώσσας',
	'bl-mysettings-new' => 'Αλλαγή γλώσσας!',
	'bl-promo' => 'Οι μεταφράσεις τροφοδοτούνται από το $1 και το $2.',
	'bl-changelanguage' => 'Κάντε κλικ εδώ για να αλλάξετε την γλώσσα αυτού του εργαλείου.',
	'usage' => 'Εργαλεία μεταφρασμένα με το Toolserver Intuition.',
	'help-translate-tool' => 'Βοηθήστε μας να μεταφράσουμε αυτό το εργαλείο!',
	'help-translate-all' => 'Βοηθήστε μας να μεταφράσουμε το Toolserver!',
);

/** Spanish (español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'fullname' => 'Internacionalización de la interfaz de usuario de Toolserver',
	'current-settings' => 'Configuración actual',
	'current-language' => 'Idioma actualmente seleccionado',
	'settings-legend' => 'Configuración',
	'choose-language' => 'Elige un idioma',
	'clear-cookies' => 'eliminar cookies',
	'renew-cookies' => 'renovar cookies',
	'cookie-expiration' => 'Expiración de las cookies',
	'clearcookies-success' => 'Cookies eliminadas con éxito.',
	'renewcookies-success' => '¡Cookies renovadas! Ya está todo listo por los siguientes $1.',
	'tab-overview' => 'Visión general',
	'tab-settings' => 'Configuración',
	'tab-about' => 'Acerca de',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Mi configuración de idioma',
	'bl-mysettings-new' => '¡Cambiar idioma!',
	'bl-promo' => 'Las traducciones son impulsadas por $1 y $2.',
	'bl-changelanguage' => 'Haz clic aquí para cambiar el idioma de la interfaz de esta herramienta.',
	'usage' => 'Herramientas traducidas por Toolserver Intuition.',
	'help-translate-tool' => '¡Ayuda en la traducción de esta herramienta!',
	'help-translate-all' => '¡Ayuda a traducir Toolserver!',
	'help-translate-tooltip' => 'Ayuda a otros al traducir los mensajes de la interfaz en tu idioma.',
);

/** Estonian (eesti)
 * @author Pikne
 */
$messages['et'] = array(
	'fullname' => 'Toolserveri kasutajaliidese rahvusvahelikustamine',
	'current-settings' => 'Praegused sätted',
	'current-language' => 'Praegu valitud keel',
	'settings-legend' => 'Sätted',
	'choose-language' => 'Vali keel',
	'clear-cookies' => 'eemalda küpsised',
	'renew-cookies' => 'uuenda küpsiseid',
	'cookie-expiration' => 'Küpsise aegumine',
	'clearcookies-success' => 'Küpsised edukalt eemaldatud.',
	'renewcookies-success' => 'Küpsised uuendatud! Järgmised $1 on kõik paigas.',
	'tab-overview' => 'Ülevaade',
	'tab-settings' => 'Sätted',
	'tab-about' => 'Teave',
	'bl-mysettings' => 'Minu keelesätted',
	'bl-mysettings-new' => 'Muuda keelt!',
	'bl-promo' => 'Tõlked valmivad projektide $1 ja $2 abiga.',
	'bl-changelanguage' => 'Klõpsa siia, et muuta selle tööriista liidese keelt.',
	'usage' => 'Toolserver Intuitioni abil tõlgitavad tööriistad.',
	'help-translate-tool' => 'Aita seda tööriista tõlkida!',
	'help-translate-all' => 'Aita Toolserverit tõlkida!',
	'help-translate-tooltip' => 'Aita teisi liidese sõnumite tõlkimisega enda keelde.',
);

/** Basque (euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'current-settings' => 'Oraingo hobespenak',
	'current-language' => 'Orain aukeratutako hizkuntza',
	'settings-legend' => 'Hobespenak',
	'choose-language' => 'Hizkuntza aukeratu',
	'clear-cookies' => 'cookie-ak garbitu',
	'renew-cookies' => 'cookie-ak berritu',
	'tab-overview' => 'Ikuspegi orokorra',
	'tab-settings' => 'Hobespenak',
	'tab-about' => 'Honi buruz',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Nire hizkuntzaren hobespenak',
	'bl-mysettings-new' => 'Hizkuntza aldatu!',
	'usage' => 'Toolserver Intuitionek itzulitako tresnak.',
	'help-translate-tool' => 'Tresna hau itzultzen lagundu!',
	'help-translate-all' => 'Toolserver itzultzen lagundu!',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Wayiran
 */
$messages['fa'] = array(
	'fullname' => 'بین‌المللی سازی برای رابط کاربری تول‌سرور',
	'current-settings' => 'تنظیمات کنونی',
	'current-language' => 'زبان انتخاب شدهٔ فعلی',
	'settings-legend' => 'تنظیمات',
	'choose-language' => 'یک زبان را انتخاب کنید',
	'clear-cookies' => 'پاک‌کردن کوکی‌ها',
	'renew-cookies' => 'تجدید کوکی‌ها',
	'cookie-expiration' => 'انقضای کوکی',
	'clearcookies-success' => 'کوکی‌ها با موفقیت پاک شدند.',
	'renewcookies-success' => 'کوکی‌ها تازه شدند! شما برای $1 بعدی کاملاً آماده هستید.',
	'tab-overview' => 'چشم‌انداز',
	'tab-settings' => 'تنظیمات',
	'tab-about' => 'درباره',
	'tab-demo' => 'نسخهٔ نمایشی',
	'bl-mysettings' => 'تنظیمات زبان من',
	'bl-mysettings-new' => 'تغییر زبان!',
	'bl-promo' => 'ترجمه شده توسط $1 و $2 تهیه شده‌اند.',
	'bl-changelanguage' => 'برای تغییر زبان رابط این ابزار اینجا را کلیک کنید.',
	'usage' => 'ابزار ترجمه‌شده توسط درک تولسرور.',
	'help-translate-tool' => 'در ترجمه این ابزار کمک کنید!',
	'help-translate-all' => 'در ترجمهٔ تول‌سرور کمک کنید!',
	'help-translate-tooltip' => 'دیگران را با ترجمهٔ پیام‌های رابط به زبان‌تان کمک کنید!',
);

/** Finnish (suomi)
 * @author Nike
 */
$messages['fi'] = array(
	'fullname' => 'Toolserverin työkalujen kansainvälistäminen',
	'current-settings' => 'Nykyiset asetukset',
	'current-language' => 'Tällä hetkellä valittu kieli',
	'settings-legend' => 'Asetukset',
	'choose-language' => 'Valitse kieli',
	'clear-cookies' => 'poista evästeet',
	'renew-cookies' => 'uudista evästeet',
	'cookie-expiration' => 'Evästeiden vanheneminen',
	'clearcookies-success' => 'Evästeet poistettu.',
	'renewcookies-success' => 'Evästeet uusittu. Kaikki on kunnossa seuraavat $1.',
	'tab-overview' => 'Yleiskatsaus',
	'tab-settings' => 'Asetukset',
	'tab-about' => 'Tietoja',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Oma kieliasetus',
	'bl-mysettings-new' => 'Vaihda kieltä!',
	'bl-promo' => 'Käännökset mahdollistaa $1 ja $2.',
	'bl-changelanguage' => 'Vaihda käyttöliittymän kieltä napsauttamalla tästä.',
	'usage' => 'Toolserver Intuitionia käyttävät työkalut.',
	'help-translate-tool' => 'Auta tämän työkalun kääntämisessä!',
	'help-translate-all' => 'Auta Toolserverin kääntämisessä!',
	'help-translate-tooltip' => 'Auta toisia kääntämällä käyttöliittymäviestejä kielellesi.',
);

/** French (français)
 * @author Crochet.david
 * @author Jean-Frédéric
 * @author Od1n
 * @author Verdy p
 */
$messages['fr'] = array(
	'fullname' => 'Internationalisation de l’interface utilisateur du Toolserver',
	'current-settings' => 'Paramètres actuels',
	'current-language' => 'Langue actuellement sélectionnée',
	'settings-legend' => 'Configuration',
	'choose-language' => 'Choisissez une langue',
	'clear-cookies' => 'effacer les cookies',
	'renew-cookies' => 'renouveler les cookies',
	'cookie-expiration' => 'Expiration du cookie',
	'clearcookies-success' => 'Les cookies ont bien été effacés',
	'renewcookies-success' => 'Cookies renouvelés ! Vous êtes prêt pour une durée de $1.',
	'tab-overview' => 'Vue d’ensemble',
	'tab-settings' => 'Configuration',
	'tab-about' => 'À propos',
	'tab-demo' => 'Démo',
	'bl-mysettings' => 'Mes paramètres de langue',
	'bl-mysettings-new' => 'Changer la langue !',
	'bl-promo' => 'Les traductions sont propulsées par $1 et $2 .',
	'bl-changelanguage' => 'Cliquez ici pour changer la langue de l’interface de cet outil.',
	'usage' => 'Outils traduits par Toolserver Intuition.',
	'help-translate-tool' => 'Aidez à traduire cet outil !',
	'help-translate-all' => 'Aidez à traduire le Toolserver !',
	'help-translate-tooltip' => 'Aidez les autres en traduisant dans votre langue les messages de l’interface.',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'fullname' => 'Entèrnacionalisacion de l’entèrface utilisator du Toolserver',
	'current-settings' => 'Configuracion d’ora',
	'current-language' => 'Lengoua ora chouèsia',
	'settings-legend' => 'Configuracion',
	'choose-language' => 'Chouèsésséd na lengoua',
	'clear-cookies' => "èfaciér los tèmouens (''cookies'')",
	'renew-cookies' => "renovelar los tèmouens (''cookies'')",
	'cookie-expiration' => "Èxpiracion du tèmouen (''cookie'')",
	'clearcookies-success' => "Los tèmouens (''cookies'') sont étâs èfaciês avouéc reusséta",
	'tab-overview' => 'Apèrçu',
	'tab-settings' => 'Configuracion',
	'tab-about' => 'A propôs',
	'tab-demo' => 'Dèmô',
	'bl-mysettings' => 'Ma configuracion de lengoua',
	'bl-mysettings-new' => 'Changiér la lengoua !',
	'usage' => 'Outils traduits per Toolserver Intuition.',
	'help-translate-tool' => 'Édiéd a traduire cet’outil !',
	'help-translate-all' => 'Édiéd a traduire lo Toolserver !',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'tab-about' => 'Maidir leis',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'fullname' => 'Internacionalización para a interface de usuario do Toolserver',
	'current-settings' => 'Configuración actual',
	'current-language' => 'Lingua actual',
	'settings-legend' => 'Configuracións',
	'choose-language' => 'Escolla unha lingua',
	'clear-cookies' => 'borrar as cookies',
	'renew-cookies' => 'renovar as cookies',
	'cookie-expiration' => 'Caducidade das cookies',
	'clearcookies-success' => 'As cookies borráronse correctamente.',
	'renewcookies-success' => 'Cookies renovadas! Está listo para os vindeiros $1.',
	'tab-overview' => 'Vista xeral',
	'tab-settings' => 'Configuracións',
	'tab-about' => 'Acerca de',
	'tab-demo' => 'Demostración',
	'bl-mysettings' => 'As miñas opcións de lingua',
	'bl-mysettings-new' => 'Cambiar a lingua!',
	'bl-promo' => 'As traducións son posibles grazas a $1 e $2.',
	'bl-changelanguage' => 'Prema aquí para cambiar a lingua da interface da ferramenta.',
	'usage' => 'Ferramentas traducidas por Toolserver Intuition.',
	'help-translate-tool' => 'Axude a traducir esta ferramenta!',
	'help-translate-all' => 'Axude a traducir Toolserver!',
	'help-translate-tooltip' => 'Axude aos outros traducindo á súa lingua as mensaxes da interface.',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'fullname' => 'בִנאום עבור ממשק המשתמש של Toolserver',
	'current-settings' => 'הגדרות נוכחיות',
	'current-language' => 'השפה הנוכחית',
	'settings-legend' => 'הגדרות',
	'choose-language' => 'בחירת שפה',
	'clear-cookies' => 'ניקוי עוגיות',
	'renew-cookies' => 'חידוש עוגיות',
	'cookie-expiration' => 'תפוגת עוגיות',
	'clearcookies-success' => 'העוגיות נוקו בהצלחה.',
	'renewcookies-success' => 'העוגיות חודשו! הכול יהיה בסדר אצלך למשל $1.',
	'tab-overview' => 'סקירה',
	'tab-settings' => 'הגדרות',
	'tab-about' => 'אודות',
	'tab-demo' => 'הדגמה',
	'bl-mysettings' => 'הגדרות השפה שלי',
	'bl-mysettings-new' => 'לשנות שפה!',
	'bl-promo' => 'ההגדרות בזכות $1 ו־$2',
	'bl-changelanguage' => 'לחצו כאן לשינוי שפת הממשק של הכלי הזה.',
	'usage' => 'כלים שמתורגמים באמצעות Toolserver Intuition.',
	'help-translate-tool' => 'בואו לעזור את הכלי הזה!',
	'help-translate-all' => 'עזרו לתרגום את שרת הכלים!',
	'help-translate-tooltip' => 'עזרו לאחרים לתרגם את הודעות הממשק לשפתכם.',
);

/** Hindi (हिन्दी)
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'fullname' => 'टूलसर्वर के उपयोग अंतरफल के लिये अंतर्राष्ट्रीयकरण',
	'current-settings' => 'वर्तमान सेटिंग्स',
	'current-language' => 'वर्तमान चयनित भाषा',
	'settings-legend' => 'सेटिंग्स',
	'choose-language' => 'भाषा चुनें',
	'clear-cookies' => 'कुकीज़ साफ़ करें',
	'renew-cookies' => 'कुकीज़ को नवीनीकृत करें',
	'cookie-expiration' => 'कुकी समाप्ति',
	'clearcookies-success' => 'कुकीज़ साफ़ कर दी गई हैं।',
	'renewcookies-success' => 'कुकीज़ नवीनीकृत हो गयी! अब ये अगले $1 तक चलेंगी।',
	'tab-overview' => 'सारांश',
	'tab-settings' => 'सेटिंग्स',
	'tab-about' => 'विवरण',
	'tab-demo' => 'डॅमो',
	'bl-mysettings' => 'मेरी भाषा सेटिंग्स',
	'bl-mysettings-new' => 'भाषा बदलें!',
	'bl-promo' => 'अनुवाद $1 और $2 द्वारा किये गए हैं।',
	'bl-changelanguage' => 'इस टूल की अंतरफल भाषा बदलने के लिये यहाँ क्लिक करें।',
	'usage' => 'टूलसर्वर इंट्यूशन द्वारा अनूदित टूल',
	'help-translate-tool' => 'इस टूल का अनुवाद करने में मदद करें!',
	'help-translate-all' => 'टूलसर्वर का अनुवाद करने में मदद करें!',
	'help-translate-tooltip' => 'अपनी भाषा में अंतरफल संदेशों का अनुवाद कर के औरों की मदद करें।',
);

/** Croatian (hrvatski)
 * @author Ex13
 */
$messages['hr'] = array(
	'fullname' => 'Prijevod za suradničko sučelje Toolservera',
	'current-settings' => 'Trenutne postavke',
	'current-language' => 'Trenutačno odabrani jezik',
	'settings-legend' => 'Postavke',
	'choose-language' => 'Odaberite jezik',
	'clear-cookies' => 'obrišite kolačiće',
	'renew-cookies' => 'obnovite kolačiće',
	'cookie-expiration' => 'Istjecanje kolačića',
	'clearcookies-success' => 'Uspješno očišćeni kolačići.',
	'renewcookies-success' => 'Kolačići su obnovljeni. Svi su postavljeni za sljedećih $1.',
	'tab-overview' => 'Pregled',
	'tab-settings' => 'Postavke',
	'tab-about' => 'O',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Moje postavke jezika',
	'bl-mysettings-new' => 'Promjena jezika!',
	'bl-promo' => 'Za prijevode su zaslužni $1 i $2.',
	'bl-changelanguage' => 'Kliknite ovdje za promjenu jezika sučelja za ovaj alat.',
	'usage' => 'Alati koje je preveo Toolserver Intuition.',
	'help-translate-tool' => 'Pomozite nam prevesti ovaj alat!',
	'help-translate-all' => 'Pomozite nam da prevedemo Toolserver!',
	'help-translate-tooltip' => 'Pomozite drugima prijevodom poruka sučelja na svoj jezik.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'fullname' => 'Přełožki za wužiwarski powjerch Toolserver',
	'current-settings' => 'Aktualne nstajenja',
	'current-language' => 'Tuchwilu wubrana rěč',
	'settings-legend' => 'Nastajenja',
	'choose-language' => 'Rěč wubrać',
	'clear-cookies' => 'placki wotstronić',
	'renew-cookies' => 'placki wobnowić',
	'cookie-expiration' => 'spadnjenje placka',
	'clearcookies-success' => 'Placki su so wuspěšnje wotstronili.',
	'renewcookies-success' => 'Placki su so wobnowili! Su na přichodnych $1 płaćiwe.',
	'tab-overview' => 'Přehlad',
	'tab-settings' => 'Nastajenja',
	'tab-about' => 'Wo',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Moje rěčne nastajenja',
	'bl-mysettings-new' => 'Změń rěč!',
	'bl-promo' => 'Přełožki so wot $1 a $2 zmóžnjeja.',
	'bl-changelanguage' => 'Klikń tu, zo by rěč wužiwarskeho powjercha tutoho nastroja změnił.',
	'usage' => 'Nastroje su so wot Toolserver Intuition přełožili.',
	'help-translate-tool' => 'Pomhaj tutón nastroj přełožić!',
	'help-translate-all' => 'Pomhaj Toolserver přełožić!',
	'help-translate-tooltip' => 'Pomhaj druhim ludźom přełožujo zdźělenki wužiwarskeho powjercha do swojeje rěče.',
);

/** Hungarian (magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'fullname' => 'A Toolserver felhasználói felületének internacionalizációja',
	'current-settings' => 'Jelenlegi beállítások',
	'current-language' => 'Jelenleg kiválasztott nyelv',
	'settings-legend' => 'Beállítások',
	'choose-language' => 'Válassz nyelvet',
	'clear-cookies' => 'sütik törlése',
	'renew-cookies' => 'sütik megújítása',
	'cookie-expiration' => 'Süti lejárata',
	'clearcookies-success' => 'Sütik sikeresen törölve.',
	'renewcookies-success' => 'Sütik megújítva! Rendben vagy a következő időszakra: $1.',
	'tab-overview' => 'Áttekintés',
	'tab-settings' => 'Beállítások',
	'tab-about' => 'Rólunk',
	'tab-demo' => 'Demó',
	'bl-mysettings' => 'Nyelvi beállítások',
	'bl-mysettings-new' => 'Nyelv módosítása',
	'bl-promo' => 'A lokalizációt a $1 és a $2 teszi lehetővé.',
	'bl-changelanguage' => 'Kattints ide az eszköz felhasználói felülete nyelvének módosításához.',
	'usage' => 'Az eszköz fordítása a Toolserver Intuitionnel készült.',
	'help-translate-tool' => 'Segíts az eszköz fordításában!',
	'help-translate-all' => 'Segíts a Toolserver fordításában!',
	'help-translate-tooltip' => 'Segíts másokon a felület szövegének saját nyelvedre fordításával!',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'fullname' => 'Internationalisation pro le interfacie de usator de Toolserver',
	'current-settings' => 'Configuration actual',
	'current-language' => 'Lingua actualmente seligite',
	'settings-legend' => 'Configuration',
	'choose-language' => 'Selige un lingua',
	'clear-cookies' => 'rader cookies',
	'renew-cookies' => 'renovar cookies',
	'cookie-expiration' => 'Expiration del cookie',
	'clearcookies-success' => 'Cookies radite con successo.',
	'renewcookies-success' => 'Cookies renovate! Essera valide pro le proxime $1.',
	'tab-overview' => 'Vista general',
	'tab-settings' => 'Configuration',
	'tab-about' => 'A proposito',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Mi configuration de lingua',
	'bl-mysettings-new' => 'Cambiar de lingua!',
	'bl-promo' => 'Le traduction es actionate per $1 e $2.',
	'bl-changelanguage' => 'Clicca hic pro cambiar le lingua del interfacie de iste instrumento.',
	'usage' => 'Instrumentos traducite per Toolserver Intuition.',
	'help-translate-tool' => 'Adjuta a traducer iste instrumento!',
	'help-translate-all' => 'Adjuta a traducer Toolserver!',
	'help-translate-tooltip' => 'Adjuta alteres per traducer le messages de interfacie in tu lingua.',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'fullname' => 'Internasionalisasi Antarmuka Pengguna Toolserver',
	'current-settings' => 'Setelan sekarang',
	'current-language' => 'Bahasa terpilih sekarang',
	'settings-legend' => 'Setelan',
	'choose-language' => 'Pilih bahasa',
	'clear-cookies' => 'hapus kuki',
	'renew-cookies' => 'perbarui kuki',
	'cookie-expiration' => 'Kedaluwarsa kuki',
	'clearcookies-success' => 'Kuki berhasil dihapus.',
	'renewcookies-success' => 'Kuki diperbarui! Anda siap untuk $1 berikutnya.',
	'tab-overview' => 'Gambaran',
	'tab-settings' => 'Setelan',
	'tab-about' => 'Perihal',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Setelan bahasa saya',
	'bl-mysettings-new' => 'Ganti bahasa!',
	'bl-promo' => 'Terjemahan didukung oleh $1 dan $2.',
	'bl-changelanguage' => 'Klik di sini untuk mengganti bahasa antarmuka alat ini.',
	'usage' => 'Alat yang diterjemahkan oleh Toolserver Intuition.',
	'help-translate-tool' => 'Bantu menerjemahkan alat ini!',
	'help-translate-all' => 'Bantu menerjemahkan Toolserver!',
	'help-translate-tooltip' => 'Bantu orang lain dengan menerjemahkan pesan antarmuka ke dalam bahasa Anda.',
);

/** Italian (italiano)
 * @author Beta16
 * @author Nemo bis
 * @author Rippitippi
 */
$messages['it'] = array(
	'fullname' => "Internazionalizzazione per l'interfaccia utente di Toolserver",
	'current-settings' => 'Impostazioni attuali',
	'current-language' => 'Lingua attualmente selezionata',
	'settings-legend' => 'Impostazioni',
	'choose-language' => 'Scegli la lingua',
	'clear-cookies' => 'cancellare i cookie',
	'renew-cookies' => 'rinnovare i cookies',
	'cookie-expiration' => 'Scadenza del cookie',
	'clearcookies-success' => 'Cookie cancellati con successo',
	'renewcookies-success' => 'Cookies rinnovati! Saranno validi per i prossimi  $1.',
	'tab-overview' => "Vista d'insieme",
	'tab-settings' => 'Impostazioni',
	'tab-about' => 'Informazioni',
	'tab-demo' => 'Esempio',
	'bl-mysettings' => 'Le mie impostazioni per la lingua',
	'bl-mysettings-new' => 'Cambia lingua!',
	'bl-promo' => 'Le traduzioni sono curate da $1 e $2.',
	'bl-changelanguage' => "Clicca qui per modificare la lingua dell'interfaccia di questo strumento.",
	'usage' => 'Strumenti tradotti da Toolserver Intuition.',
	'help-translate-tool' => 'Aiutaci a tradurre questo strumento!',
	'help-translate-all' => 'Aiutaci a tradurre i testi del Toolserver!',
	'help-translate-tooltip' => "Aiuta gli altri traducendo i messaggi dell'interfaccia nella tua lingua.",
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Schu
 * @author Shirayuki
 * @author Whym
 */
$messages['ja'] = array(
	'fullname' => 'Toolserver のユーザーインターフェイスの国際化',
	'current-settings' => '現在の設定',
	'current-language' => '現在選択されている言語',
	'settings-legend' => '設定',
	'choose-language' => '言語を選択',
	'clear-cookies' => 'クッキーを消去',
	'renew-cookies' => 'クッキーを更新',
	'cookie-expiration' => 'クッキーの有効期限',
	'clearcookies-success' => 'クッキーを消去しました。',
	'renewcookies-success' => 'クッキーを更新しました。今後$1のあいだ有効です。',
	'tab-overview' => '概要',
	'tab-settings' => '設定',
	'tab-about' => '解説',
	'tab-demo' => 'デモ',
	'bl-mysettings' => '自分の言語設定',
	'bl-mysettings-new' => '言語を変更!',
	'bl-promo' => '翻訳したのは $1 と $2 です。',
	'bl-changelanguage' => 'このツールのインターフェイス言語を変更するにはここをクリックしてください。',
	'usage' => 'Toolserver Intuition が翻訳したツールです。',
	'help-translate-tool' => 'このツールの翻訳を手伝う!',
	'help-translate-all' => 'ツールサーバーの翻訳を手伝う!',
	'help-translate-tooltip' => 'インターフェイスメッセージをあなたの言語に翻訳して他の人を助ける!',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'current-settings' => 'Pangaturan saiki',
	'current-language' => 'Basa pinilih saiki',
	'settings-legend' => 'Pangaturan',
	'choose-language' => 'Pilih basa',
	'clear-cookies' => 'busak kuki',
	'renew-cookies' => 'anyari kuki',
	'cookie-expiration' => 'Kedaluwarsané kuki',
	'clearcookies-success' => 'Mbusak kuki kasil!',
	'renewcookies-success' => 'Kuki wis dianyari! Sampéyan siap kanggo $1 sabanjuré.',
	'tab-overview' => 'Gambaran',
	'tab-settings' => 'Pangaturan',
	'tab-about' => 'Bab',
	'tab-demo' => 'Démo',
	'bl-mysettings' => 'Aturan basa kula',
	'bl-mysettings-new' => 'Ganti basa!',
	'bl-promo' => 'Terjemahan disengkuyung déning $1 lan $2.',
	'bl-changelanguage' => 'Klik kéné kanggo ngganti basané antarmuka saka piranti iki.',
	'usage' => 'Piranti iki diterjemahaké déning Intuisi Toolserver.',
	'help-translate-tool' => 'Éwangi nerjemahaké piranti iki!',
	'help-translate-all' => 'Éwangi nerjemahaké Toolserver!',
	'help-translate-tooltip' => 'Éwangi liyané mawa cara nerjemahaké pesen antarmuka nèng basané Sampéyan.',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'settings-legend' => 'პარამეტრები',
	'choose-language' => 'აირჩიეთ ენა',
	'tab-settings' => 'პარამეტრები',
	'tab-demo' => 'დემო',
	'bl-mysettings' => 'ჩემი ენის პარამეტრები',
	'bl-mysettings-new' => 'ენის შეცვლა!',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'fullname' => 'Toolserver 사용자 인터페이스 국제화',
	'current-settings' => '현재 설정',
	'current-language' => '현재 선택한 언어',
	'settings-legend' => '설정',
	'choose-language' => '언어 선택하기',
	'clear-cookies' => '쿠키 지우기',
	'renew-cookies' => '쿠키 새로 고침',
	'cookie-expiration' => '쿠키 만료',
	'clearcookies-success' => '성공적으로 쿠키를 지웠습니다.',
	'renewcookies-success' => '쿠키를 새로 고쳤습니다! 다음 $1에 대한 모든 설정입니다.',
	'tab-overview' => '둘러보기',
	'tab-settings' => '설정',
	'tab-about' => '소개',
	'tab-demo' => '데모',
	'bl-mysettings' => '사용자 언어 설정',
	'bl-mysettings-new' => '언어가 바뀌었습니다!',
	'bl-promo' => '번역은 $1과 $2에 의해 작동합니다.',
	'bl-changelanguage' => '도구의 인터페이스 언어를 바꾸러면 여기를 클릭하세요.',
	'usage' => 'Toolserver Intuition에 의해 도구를 번역했습니다.',
	'help-translate-tool' => '도구 번역을 도와주세요!',
	'help-translate-all' => 'Toolserver 번역을 도와주세요!',
	'help-translate-tooltip' => '여러분의 언어로 인터페이스 메시지를 번역하는 이들을 도와주세요.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'fullname' => 'De Bedeenovverfläsh vum Tuulẞööver en alle Shprooche',
	'current-settings' => 'De aktoälle Enshtällonge',
	'current-language' => 'De ußjesöhk Shprooch',
	'settings-legend' => 'Enschtällonge',
	'choose-language' => 'Donn en Shprooch ußwähle',
	'clear-cookies' => 'Donn de <i lang="en">Cookies</i> fottschmiiße',
	'renew-cookies' => 'Donn de <i lang="en">Cookies</i> neu säze',
	'cookie-expiration' => 'Dä <i lang="en">Cookies</i> iehr Lävenszigg.',
	'clearcookies-success' => 'De <i lang="en">Cookies</i> sin fott.',
	'renewcookies-success' => 'De <i lang="en">Cookies</i> sin neu jesaz un se sullte för de näkßde $1 hallde.',
	'tab-overview' => 'Övverseesch',
	'tab-settings' => 'Enschtällonge',
	'tab-about' => 'Övver dat Projramm heh',
	'tab-demo' => 'Vörföhrung',
	'bl-mysettings' => 'Ming Shproochenshtällonge',
	'bl-mysettings-new' => 'De Shprooch wääßele',
	'bl-promo' => 'De Övversäzonge kumme vum $1 un övver $2 noh heh.',
	'bl-changelanguage' => 'Donn di Shprooch ändere, di heh dat Projramm met Der kallt.',
	'usage' => 'Projramme, di övver dem Tuulẞööver sing Süßteem „<i lang="en">Intuition</i>“
övversaz woode sin',
	'help-translate-tool' => 'Donn beim Övversäze för heh dat Projramm hellfe!',
	'help-translate-all' => 'Donn beim Övversäze för der Tuulẞööver hellfe!',
	'help-translate-tooltip' => 'Donn der Andere jet Joods un donn de Täxte un Nohreeschte vun de Projramme en Ding Shprooch övversäze.',
);

/** Kurdish (Latin script) (‪Kurdî (latînî)‬)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'tab-about' => 'Der barê',
	'bl-mysettings-new' => 'Zimanê biguherîne!',
);

/** Latin (Latina)
 * @author MissPetticoats
 */
$messages['la'] = array(
	'bl-mysettings-new' => 'Mutare linguam!',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'fullname' => 'Iwwersetzunge fir den Toolserver Benotzer-Interface',
	'current-settings' => 'Aktuell Astellungen',
	'current-language' => 'Aktuell erausgesichte Sprooch',
	'settings-legend' => 'Astellungen',
	'choose-language' => 'Sicht eng Sprooch eraus',
	'clear-cookies' => 'Cookie läschen',
	'renew-cookies' => 'Cookieën erneieren',
	'cookie-expiration' => 'Gültegkeetsdauer vum Cookie',
	'clearcookies-success' => "D'Cookie goufe geläscht.",
	'renewcookies-success' => "D'Cookie sinn erneiert! Dir sidd elo nees prett fir déi nächst $1.",
	'tab-overview' => 'Iwwersiicht',
	'tab-settings' => 'Astellungen',
	'tab-about' => 'Iwwer',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Meng Sproochastellungen',
	'bl-mysettings-new' => 'Sprooch wiesselen!',
	'bl-promo' => "D'Iwwersetzunge ginn duerch $1 an $2 erméiglecht.",
	'bl-changelanguage' => "Klickt hei fir d'Sprooch vum Interface vun dësem Tool z'änneren.",
	'usage' => "D'Toole goufe vum 'Toolserver Intuition' iwwersat.",
	'help-translate-tool' => "Hëlleft dësen Tool z'iwwersetzen!",
	'help-translate-all' => "Hëlleft den Toolserver z'iwwersetzen!",
	'help-translate-tooltip' => "Hëlleft Aneren domat datt Dir d'Message vum Interface an Är Sprooch iwwersetzt.",
);

/** Lithuanian (lietuvių)
 * @author Matasg
 */
$messages['lt'] = array(
	'fullname' => 'Toolserver vartotojo sąsajos internacionalizacija',
	'current-settings' => 'Esami nustatymai',
	'current-language' => 'Šiuo metu pasirinkta kalba',
	'settings-legend' => 'Nustatymai',
	'choose-language' => 'Pasirinkite kalbą',
	'clear-cookies' => 'valyti slapukus',
	'renew-cookies' => 'atnaujinti slapukus',
	'cookie-expiration' => 'Slapukų galiojimas',
	'clearcookies-success' => 'Slapukai sėkmingai išvalyti.',
	'renewcookies-success' => 'Slapukai atnaujinti! Juos nustatėte šiam periodui: $1.',
	'tab-overview' => 'Apžvalga',
	'tab-settings' => 'Nustatymai',
	'tab-about' => 'Apie',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Mano kalbos nustatymai',
	'bl-mysettings-new' => 'Keisti kalbą!',
	'bl-promo' => 'Vertimus teikia $1 bei $2.',
	'bl-changelanguage' => 'Spauskite čia, norėdami pakeisti šios priemonės kalbą.',
	'usage' => 'Įrankis išverstas Toolserver Intuition.',
	'help-translate-tool' => 'Padėkite išversti šį įrankį!',
	'help-translate-all' => 'Padėkite išversti Toolserver!',
	'help-translate-tooltip' => 'Padėkite kitiems versti sąsajos pranešimus į jūsų kalbą.',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'settings-legend' => 'Uzstādījumi',
	'choose-language' => 'Izvēlies valodu',
	'tab-overview' => 'Pārskats',
	'tab-settings' => 'Uzstādījumi',
	'tab-about' => 'Par',
	'tab-demo' => 'Demonstrācija',
	'bl-mysettings' => 'Mani valodas uzstādījumi',
	'bl-mysettings-new' => 'Mainīt valodu!',
	'help-translate-tool' => 'Palīdzi iztulkot šo rīku!',
	'help-translate-all' => 'Palīdzi tulkot Toolserver!',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'fullname' => 'Преводи на корисничкиот посредник на Toolserver',
	'current-settings' => 'Тековни поставки',
	'current-language' => 'Тековен избран јазик',
	'settings-legend' => 'Поставки',
	'choose-language' => 'Изберете јазик',
	'clear-cookies' => 'исчисти колачиња',
	'renew-cookies' => 'обнови колачиња',
	'cookie-expiration' => 'Истек на колачињата',
	'clearcookies-success' => 'Колачињата се успешно исчистени.',
	'renewcookies-success' => 'Колачињата се обновени! Сега сте обезбедени за следните $1.',
	'tab-overview' => 'Преглед',
	'tab-settings' => 'Поставки',
	'tab-about' => 'За алатката',
	'tab-demo' => 'Демо',
	'bl-mysettings' => 'Мои јазични поставки',
	'bl-mysettings-new' => 'Сменете јазик!',
	'bl-promo' => 'Преводот е овозможен од $1 и $2.',
	'bl-changelanguage' => 'Стиснете тука за да го смените јазикот на посредникот за алаткава.',
	'usage' => 'Алатки што се преведуваат со Toolserver Intuition.',
	'help-translate-tool' => 'Помогнете ни со преводот на алаткава!',
	'help-translate-all' => 'Помогнете ни со преводот на Toolserver!',
	'help-translate-tooltip' => 'Помогнете им на другите со преведување на посреднички пораки на вашиот јазик.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'fullname' => 'Pengantarabangsaan untuk Antara Muka Pengguna Toolserver (Intuition)',
	'current-settings' => 'Tetapan semasa',
	'current-language' => 'Bahasa yang dipilih sekarang',
	'settings-legend' => 'Tetapan',
	'choose-language' => 'Pilih bahasa',
	'clear-cookies' => 'padamkan cecikut (cookies)',
	'renew-cookies' => 'pulihkan cecikut (cookies)',
	'cookie-expiration' => 'Masa luput cecikut (cookies)',
	'clearcookies-success' => 'Cecikut berjaya dipadamkan.',
	'renewcookies-success' => 'Cecikut dipulihkan! Anda bersedia untuk $1 akan datang.',
	'tab-overview' => 'Intisari',
	'tab-settings' => 'Tetapan',
	'tab-about' => 'Perihal',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Tetapan bahasa saya',
	'bl-mysettings-new' => 'Tukar bahasa!',
	'bl-promo' => 'Penterjemahahn dijana oleh $1 dan $2.',
	'bl-changelanguage' => 'Klik di sini untuk menukar bahasa antara muka alat ini.',
	'usage' => 'Alat-alat yang diterjemah oleh Toolserver Intuition.',
	'help-translate-tool' => 'Bantu kami menterjemah alat ini!',
	'help-translate-all' => 'Bantu kami menterjemahkan Toolserver!',
	'help-translate-tooltip' => 'Bantu orang lain dengan menterjemah mesej-mesej antara muka kepada bahasa anda.',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'current-settings' => 'Konfigurazzjoni attwali',
	'current-language' => 'Lingwa magħżula bħalissa',
	'settings-legend' => 'Konfigurazzjoni',
	'choose-language' => 'Agħżel lingwa',
	'clear-cookies' => 'ħassar il-cookies',
	'renew-cookies' => 'ġedded il-cookies',
	'cookie-expiration' => 'Skadenza tal-cookie',
	'clearcookies-success' => "Il-cookies ġew imneħħija b'suċċess.",
	'renewcookies-success' => 'Cookies imġedda! Se jkunu validi għal $1 li jmiss.',
	'tab-overview' => 'Ħarsa ġenerali',
	'tab-settings' => 'Konfigurazzjoni',
	'tab-about' => 'Dwar',
	'tab-demo' => 'Eżempju',
	'bl-mysettings-new' => 'Biddel il-lingwa!',
	'bl-promo' => 'It-traduzzjonijiet huma sostnuti minn $1 u $2.',
	'bl-changelanguage' => "Iklikkja hawnhekk sabiex tbiddel il-lingwa tal-interfaċċa ta' din l-għodda",
	'help-translate-tool' => 'Għin ittraduċi din l-għodda!',
	'help-translate-all' => 'Għin ittraduċi Toolserver!',
	'help-translate-tooltip' => 'Għin oħrajn billi tittraduċi messaġġi tal-interfaċċa fil-lingwa tiegħek.',
);

/** Burmese (မြန်မာဘာသာ)
 * @author Erikoo
 */
$messages['my'] = array(
	'choose-language' => 'ဘာသာစကား ရွေးချယ်ပါ',
	'tab-about' => 'အကြောင်း',
	'bl-mysettings-new' => 'ဘာသာစကား ရွေးချယ်ပါ!',
);

/** Mazanderani (مازِرونی)
 * @author محک
 */
$messages['mzn'] = array(
	'fullname' => 'بین‌المللی ساجی رابط کاروری تول‌سرور وسّه',
	'current-settings' => 'تنظیمات کنونی',
	'current-language' => 'انتخاب بَیی زوون',
	'settings-legend' => 'تنظیمات',
	'choose-language' => 'اتا زوون ره بَیرین',
	'clear-cookies' => 'پاک‌هاکردن کوکی‌ئون',
	'renew-cookies' => 'تجدید کوکی‌ئون',
	'cookie-expiration' => 'انقضای کوکی',
	'tab-about' => 'درباره',
);

/** Norwegian Bokmål (‪norsk (bokmål)‬)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'fullname' => 'Internasjonalisering for Toolservers brukergrensesnitt',
	'current-settings' => 'Gjeldende innstillinger',
	'current-language' => 'Valgt språk',
	'settings-legend' => 'Innstillinger',
	'choose-language' => 'Velg et språk',
	'clear-cookies' => 'slett informasjonskapsler',
	'renew-cookies' => 'forny informasjonskapsler',
	'cookie-expiration' => 'Utløpsdato for informasjonskapsler',
	'clearcookies-success' => 'Informasjonskapslene ble tømt.',
	'renewcookies-success' => 'Informasjonskapslene ble oppdatert! Du er klarert for de neste $1.',
	'tab-overview' => 'Oversikt',
	'tab-settings' => 'Innstillinger',
	'tab-about' => 'Om',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Mine språkinnstillinger',
	'bl-mysettings-new' => 'Endre språk',
	'bl-promo' => 'Oversettelser drives av $1 og $2.',
	'bl-changelanguage' => 'Klikk her for å endre grensesnittspråket for dette verktøyet.',
	'usage' => 'Verktøy oversatt med Toolserver Intuition.',
	'help-translate-tool' => 'Hjelp med oversettelsen av dette verktøyet!',
	'help-translate-all' => 'Hjelp med oversettelsen av Toolserver!',
	'help-translate-tooltip' => 'Hjelp andre ved å oversette grensesnittmeldinger til ditt språk.',
);

/** Dutch (Nederlands)
 * @author Krinkle
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'fullname' => 'Vertaling voor de gebruikersinterface van Toolserver',
	'current-settings' => 'Huidige instellingen',
	'current-language' => 'Huidige taal',
	'settings-legend' => 'Instellingen',
	'choose-language' => 'Taal kiezen',
	'clear-cookies' => 'cookies wissen',
	'renew-cookies' => 'cookies verversen',
	'cookie-expiration' => 'Verlooptijd cookie',
	'clearcookies-success' => 'Cookies gewist.',
	'renewcookies-success' => 'De cookies zijn ververst. U bent weer klaar voor de komende $1.',
	'tab-overview' => 'Overzicht',
	'tab-settings' => 'Instellingen',
	'tab-about' => 'Over',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Mijn taalinstellingen',
	'bl-mysettings-new' => 'Taal wijzigen',
	'bl-promo' => 'De vertaling is mogelijk gemaakt door $1 en $2.',
	'bl-changelanguage' => 'Klik hier om de interfacetaal van dit programma te wijzigen.',
	'usage' => "Programma's die vertaald worden via Toolserver Intuition.",
	'help-translate-tool' => 'Help dit programma vertalen!',
	'help-translate-all' => 'Help Toolserver vertalen!',
	'help-translate-tooltip' => 'Help anderen door interfaceberichten te vertalen in uw taal.',
);

/** Norwegian Nynorsk (‪norsk (nynorsk)‬)
 * @author Harald Khan
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'current-settings' => 'Innstillingane no',
	'current-language' => 'Valt språk',
	'settings-legend' => 'Innstillingar',
	'choose-language' => 'Vel eit språk',
	'clear-cookies' => 'slett informasjonskapslane',
	'renew-cookies' => 'forny informasjonskapslane',
	'cookie-expiration' => 'Informasjonskapslane endar',
	'clearcookies-success' => 'Informasjonskapslane vart sletta.',
	'renewcookies-success' => 'Informasjonskapslane vart bytte ut! Du er klar for dei neste $1.',
	'tab-overview' => 'Oversyn',
	'tab-settings' => 'Innstillingar',
	'tab-about' => 'Om',
	'bl-mysettings' => 'Språkinnstillingane mine',
	'bl-mysettings-new' => 'Byt språk',
	'bl-promo' => 'Omsetjingane er drivne av $1 og $2.',
	'bl-changelanguage' => 'Trykk her for å byta språket i brukarflata til verktyet.',
	'usage' => 'Verkty sette om av Toolserver Intuition.',
	'help-translate-tool' => 'Hjelp til med å setja om dette verktyet!',
	'help-translate-all' => 'Hjelp til med å setja om Toolserver!',
);

/** Norwegian (bokmål)‬ (‪norsk (bokmål)‬)
 * @author Jon Harald Søby
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'fullname' => 'Internasjonalisering for Toolservers brukergrensesnitt',
	'current-settings' => 'Gjeldende innstillinger',
	'current-language' => 'Valgt språk',
	'settings-legend' => 'Innstillinger',
	'choose-language' => 'Velg et språk',
	'clear-cookies' => 'slett informasjonskapsler',
	'renew-cookies' => 'forny informasjonskapsler',
	'cookie-expiration' => 'Utløpsdato for informasjonskapsler',
	'clearcookies-success' => 'Informasjonskapslene ble tømt.',
	'renewcookies-success' => 'Informasjonskapslene ble oppdatert! Du er klarert for de neste $1.',
	'tab-overview' => 'Oversikt',
	'tab-settings' => 'Innstillinger',
	'tab-about' => 'Om',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Mine språkinnstillinger',
	'bl-mysettings-new' => 'Endre språk',
	'bl-promo' => 'Oversettelser drives av $1 og $2.',
	'bl-changelanguage' => 'Klikk her for å endre grensesnittspråket for dette verktøyet.',
	'usage' => 'Verktøy oversatt med Toolserver Intuition.',
	'help-translate-tool' => 'Hjelp med oversettelsen av dette verktøyet!',
	'help-translate-all' => 'Hjelp med oversettelsen av Toolserver!',
	'help-translate-tooltip' => 'Hjelp andre ved å oversette grensesnittmeldinger til ditt språk.',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 * @author Shisir 1945
 */
$messages['or'] = array(
	'current-settings' => 'ବର୍ତ୍ତମାନର ସଜାଣି',
	'current-language' => 'ବର୍ତ୍ତମାନ ବାଛିଥିବା ଭାଷା',
	'settings-legend' => 'ସଜାଣି',
	'choose-language' => 'ଭାଷା ଚୟନ କରନ୍ତୁ',
	'clear-cookies' => 'କୁକିସ କାଢି ଦିଅନ୍ତୁ',
	'renew-cookies' => 'କୁକିସ ପୁନାରମ୍ଭ କରନ୍ତୁ',
	'cookie-expiration' => 'କୁକି ସମାପ୍ତ',
	'clearcookies-success' => 'କୁକିସଗୁଡିକୁ ସଫଳ ଭାବେ କାଢି ଦିଆ ଯାଇଛି ।',
	'renewcookies-success' => 'କୁକି ନବୀକୃତ ହେଲା! ଆପଣ ଆଗାମୀ $1 ପାଇଁ ଉପଯୁକ୍ତ.',
	'tab-overview' => 'ନିରୀକ୍ଷଣ',
	'tab-settings' => 'ସଜାଣି',
	'tab-about' => 'ବିଷୟରେ',
	'tab-demo' => 'ଦେଖଣା',
	'bl-mysettings' => 'ମୋ ଭାଷା ସଜାଣି',
	'bl-mysettings-new' => 'ଭାଷା ବଦଳାନ୍ତୁ !',
	'bl-promo' => 'ଅନୁବାଦଟି $1 ଏବଂ $2 ଦ୍ଵାରା କରାଯାଇଛି ।',
	'help-translate-tool' => 'ଏହି ଯନ୍ତ୍ରାଂଶଟିର ଅନୁବାଦରେ ସ‌ହଯୋଗ କରିବେ ।',
	'help-translate-all' => 'ଟୁଲ୍‌ସର୍ଭର୍‌ ଅନୁବାଦ କରନ୍ତୁ',
	'help-translate-tooltip' => 'ଏହି ମେସେଜକୁ ନିଜ ଭାଷାରେ ବଦଳାଇ ଅନ୍ୟମାନଙ୍କୁ ସାହାଯ୍ୟ କରନ୍ତୁ',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'settings-legend' => 'Uffstellinge',
	'tab-settings' => 'Uffstellinge',
	'tab-about' => 'Iwwer',
	'tab-demo' => 'Demo',
	'bl-mysettings' => "Mei Uffstelling fer d'Schprooch",
	'bl-mysettings-new' => 'Schprooch ennere',
	'help-translate-tool' => 'Bitte hilf des Gscharr zu iwwersetze!',
	'help-translate-all' => 'Hilf bitte daen Waerkzeichheit-Rechlinger zu iwwersetze!',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'fullname' => 'Iwasedzung vunde Bnudzaowaflesch vum Toolseava',
	'current-settings' => 'Agduelli Oischdellunge',
	'current-language' => 'Agduell gwehldi Schbrooch',
	'settings-legend' => 'Oischdellunge',
	'choose-language' => 'Ä Schbrooch wehle',
	'clear-cookies' => 'Kuukies lesche',
	'renew-cookies' => 'Kuukies eanaijare',
	'cookie-expiration' => "S'Kuukie laafd ab.",
	'clearcookies-success' => 'Die Kuukies sind gleschd worre.',
	'renewcookies-success' => 'Kuukies isch eanaiad worre! Fa die kummende $1 ischs guud.',
	'tab-overview' => 'Iwabligg',
	'tab-settings' => 'Oischdellunge',
	'tab-about' => 'Iwa',
	'tab-demo' => 'Voafierung',
	'bl-mysettings' => 'Moin Schbroochoischdellung',
	'bl-mysettings-new' => 'Sprache wexsle',
	'bl-promo' => 'Iwasedzunge werre vun $1 un $2 eameschlischd.',
	'bl-changelanguage' => 'Do drigge, um die Schbrooch fa des Weagzaisch do zu änare.',
	'usage' => 'Weagzaisch sin vum Toolseava Intuition iwasedzd worre.',
	'help-translate-tool' => 'Hilfs Weagzaisch zu iwasedze.',
	'help-translate-all' => 'Hilf de Toolseava zu iwasedze.',
	'help-translate-tooltip' => 'Hilf onare indem die Nochrischde vunde Bnudzaowaflesch in doi Schbrooch iwasedze duschd.',
);

/** Polish (polski)
 * @author Marcin Łukasz Kiejzik
 * @author Odder
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'fullname' => 'Ustawienia międzynarodowe interfejsu użytkownika Toolservera',
	'current-settings' => 'Bieżące ustawienia',
	'current-language' => 'Obecnie wybrany język',
	'settings-legend' => 'Ustawienia',
	'choose-language' => 'Wybierz język',
	'clear-cookies' => 'usuń ciasteczka',
	'renew-cookies' => 'odnów ciasteczka',
	'cookie-expiration' => 'Wygaśnięcie ciasteczek',
	'clearcookies-success' => 'Pomyślnie usunięto ciasteczka.',
	'renewcookies-success' => 'Ciasteczka odnowione! Ponownie wygasną za $1.',
	'tab-overview' => 'Przegląd',
	'tab-settings' => 'Ustawienia',
	'tab-about' => 'O narzędziu',
	'tab-demo' => 'Podgląd',
	'bl-mysettings' => 'Moje ustawienia języka',
	'bl-mysettings-new' => 'Zmień język!',
	'bl-promo' => 'W tłumaczeniach interfejsu pomagają $1 i $2.',
	'bl-changelanguage' => 'Kliknij tutaj, aby zmienić język interfejsu tego narzędzia.',
	'usage' => 'Narzędzia przetłumaczone w ramach inicjatywy Toolserver Intuition.',
	'help-translate-tool' => 'Pomóż przetłumaczyć to narzędzie!',
	'help-translate-all' => 'Pomóż przetłumaczyć Toolserver!',
	'help-translate-tooltip' => 'Pomóż innym tłumacząc komunikaty interfejsu na swój język.',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'current-settings' => 'اوسنۍ امستنې',
	'current-language' => 'د دم مهال ټاکلې ژبه',
	'settings-legend' => 'امستنې',
	'choose-language' => 'يوه ژبه وټاکۍ',
	'clear-cookies' => 'کوکيز سپينول',
	'renew-cookies' => 'کوکيز بيا نوي کول',
	'tab-settings' => 'امستنې',
	'tab-about' => 'په اړه',
	'bl-mysettings' => 'زما د ژبې امستنې',
	'bl-mysettings-new' => 'ژبه ټاکل!',
);

/** Portuguese (português)
 * @author GoEThe
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'fullname' => 'Internacionalização para a Interface de Utilizador do Toolserver',
	'current-settings' => 'Definições actuais',
	'current-language' => 'Língua presentemente seleccionada',
	'settings-legend' => 'Definições',
	'choose-language' => 'Escolha uma língua',
	'clear-cookies' => 'limpar cookies',
	'renew-cookies' => 'renovar cookies',
	'cookie-expiration' => 'Prazo de expiração dos cookies',
	'clearcookies-success' => 'Os cookies foram removidos.',
	'renewcookies-success' => 'Cookies renovados! Está preparado para os próximos $1.',
	'tab-overview' => 'Visão geral',
	'tab-settings' => 'Definições',
	'tab-about' => 'Sobre',
	'tab-demo' => 'Exemplo',
	'bl-mysettings' => 'Definições de língua',
	'bl-mysettings-new' => 'Alterar língua!',
	'bl-promo' => 'Traduções possíveis graças à $1 e ao $2.',
	'bl-changelanguage' => 'Carregue aqui para mudar a língua da interface desta ferramenta.',
	'usage' => 'Ferramentas traduzidas pelo Toolserver Intuition.',
	'help-translate-tool' => 'Ajude a traduzir esta ferramenta!',
	'help-translate-all' => 'Ajude a traduzir o Toolserver!',
	'help-translate-tooltip' => 'Ajude outros utilizadores traduzindo as mensagens da interface para a sua língua.',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Hamilton Abreu
 * @author Helder.wiki
 */
$messages['pt-br'] = array(
	'fullname' => 'Internacionalização para o Interface de Usuário do Toolserver',
	'current-settings' => 'Configurações atuais',
	'current-language' => 'Idioma selecionado atualmente',
	'settings-legend' => 'Configurações',
	'choose-language' => 'Escolha um idioma',
	'clear-cookies' => 'limpar cookies',
	'renew-cookies' => 'renovar cookies',
	'cookie-expiration' => 'Prazo de expiração dos cookies',
	'clearcookies-success' => 'Os cookies foram removidos com sucesso.',
	'renewcookies-success' => 'Cookies renovados! Você está preparado para os próximos $1.',
	'tab-overview' => 'Visão geral',
	'tab-settings' => 'Configurações',
	'tab-about' => 'Sobre',
	'tab-demo' => 'Exemplo',
	'bl-mysettings' => 'Minhas configurações de idioma',
	'bl-mysettings-new' => 'Alterar o idioma!',
	'bl-promo' => 'Traduções possíveis graças à $1 e ao $2.',
	'bl-changelanguage' => 'Clique aqui para alterar o idioma da interface desta ferramenta.',
	'usage' => 'Ferramentas traduzidas pelo Toolserver Intuition.',
	'help-translate-tool' => 'Ajude a traduzir esta ferramenta!',
	'help-translate-all' => 'Ajude a traduzir o Toolserver!',
	'help-translate-tooltip' => 'Ajuda os outros, traduzindo as mensagens de interface para o seu idioma.',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'fullname' => 'Internaționalizare pentru interfața proiectului Toolserver',
	'current-settings' => 'Setări curente',
	'current-language' => 'Limba curentă',
	'settings-legend' => 'Setări',
	'choose-language' => 'Alegeți o limbă',
	'clear-cookies' => 'șterge modulele cookie',
	'renew-cookies' => 'reînnoiește modulele cookie',
	'cookie-expiration' => 'Modulele cookie vor expira după',
	'clearcookies-success' => 'Modulele cookie au fost șterse cu succes.',
	'renewcookies-success' => 'Modulele cookie au fost reînnoite! Timp de $1 acestea vor fi active.',
	'tab-overview' => 'Informații generale',
	'tab-settings' => 'Setări',
	'tab-about' => 'Despre',
	'tab-demo' => 'Demonstrație',
	'bl-mysettings' => 'Setările mele de limbă',
	'bl-mysettings-new' => 'Schimbă limba!',
	'bl-promo' => 'Traducerile sunt susținute și efectuate de $1 și $2.',
	'bl-changelanguage' => 'Apăsați aici pentru a schimba limba interfeței acestei unelte.',
	'usage' => 'Unelte traduse de Toolserver Intuition.',
	'help-translate-tool' => 'Ajutați-ne să traducem această unealtă!',
	'help-translate-all' => 'Ajutați-ne să traducem Toolserver!',
	'help-translate-tooltip' => 'Ajutați-i pe alții traducând mesajele de interfață în limba dumneavoastră.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'fullname' => "'Ndernazzionalizzazzione de l'Interfacce Utende de Toolserver",
	'current-settings' => "'Mbostaziune corrende",
	'current-language' => 'Lènga scacchiate de mò',
	'settings-legend' => "'Mbostaziune",
	'choose-language' => "Scacchie 'na lènghe",
	'clear-cookies' => 'pulizze le cookie',
	'renew-cookies' => 'rennove le cookie',
	'cookie-expiration' => 'Scadenze de le cookie',
	'clearcookies-success' => "E' pulezzate tutte le cookie cu successe.",
	'renewcookies-success' => "Cookie rennovate! Tu ste tutte 'mbostate pa prossime $1.",
	'tab-overview' => 'Panorameche',
	'tab-settings' => "'Mbostaziune",
	'tab-about' => 'Sus a',
	'tab-demo' => 'Demo',
	'bl-mysettings' => "'Mbostaziune d'a lènga meje",
	'bl-mysettings-new' => "Cange 'a lènghe!",
	'bl-promo' => 'Le traduziune sonde sostenute da $1 e $2.',
	'bl-changelanguage' => "Cazze aqquà pe cangià l'inderfacce d'a lènghe de stu strumende.",
	'usage' => 'Struminde tradotte da Toolserver Intuition.',
	'help-translate-tool' => "Danne 'na màne a traducere stu strumende!",
	'help-translate-all' => "Danne 'na màne a traducere Toolserver!",
	'help-translate-tooltip' => "Dà 'na màne a l'otre pe traducere le messagge de interfacce jndr'à lènga toje.",
);

/** Russian (русский)
 * @author Askarmuk
 * @author Eleferen
 * @author Lvova
 */
$messages['ru'] = array(
	'fullname' => 'Интернационализация пользовательского интерфейса Тулсервера',
	'current-settings' => 'Текущие настройки',
	'current-language' => 'Текущие языковые настройки',
	'settings-legend' => 'Настройки',
	'choose-language' => 'Выберите язык',
	'clear-cookies' => 'Удалить Cookies',
	'renew-cookies' => 'Обновить Cookies',
	'cookie-expiration' => 'Срок действия файла cookie',
	'clearcookies-success' => 'Успешно очищены файлы Cookies.',
	'renewcookies-success' => 'Cookie обновлены! Срок установлен на $1',
	'tab-overview' => 'Обзор',
	'tab-settings' => 'Настройки',
	'tab-about' => 'Описание',
	'tab-demo' => 'Демо',
	'bl-mysettings' => 'Мои языковые настройки',
	'bl-mysettings-new' => 'Изменить язык',
	'bl-promo' => 'Перевод сделан с помощью $1 и $2.',
	'bl-changelanguage' => 'Нажмите здесь, чтобы изменить язык интерфейса этого инструмента.',
	'usage' => 'Инструменты, переведенные с помощью Toolserver Intuition',
	'help-translate-tool' => 'Помогите перевести этот инструмент!',
	'help-translate-all' => 'Помогите перевести Тулсервер!',
	'help-translate-tooltip' => 'Помогите другим путём перевода интерфейса сообщений на ваш язык.',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 */
$messages['si'] = array(
	'settings-legend' => 'පරිස්ථිතීන්',
	'tab-overview' => 'දළ විශ්ලේෂණය',
	'tab-settings' => 'සැකසුම්',
	'tab-about' => 'පිළිබඳ',
	'tab-demo' => 'නිදර්ශනය',
	'bl-mysettings' => 'මගේ භාෂා සැකසුම්',
	'bl-mysettings-new' => 'භාෂාව වෙනස් කරන්න!',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'fullname' => 'Internacionalizacija uporabniškega vmesnika Toolserverja',
	'current-settings' => 'Trenutne nastavitve',
	'current-language' => 'Trenutno izbran jezik',
	'settings-legend' => 'Nastavitve',
	'choose-language' => 'Izberite jezik',
	'clear-cookies' => 'počisti piškotke',
	'renew-cookies' => 'obnovi piškotke',
	'cookie-expiration' => 'Potek piškotkov',
	'clearcookies-success' => 'Piškotki so uspešno počiščeni.',
	'renewcookies-success' => 'Piškotki so obnovljeni! Pripravljeni ste za naslednjih $1.',
	'tab-overview' => 'Pregled',
	'tab-settings' => 'Nastavitve',
	'tab-about' => 'O orodju',
	'tab-demo' => 'Predstavitev',
	'bl-mysettings' => 'Moje jezikovne nastavitve',
	'bl-mysettings-new' => 'Spremeni jezik!',
	'bl-promo' => 'Prevode zagotavljata $1 in $2.',
	'bl-changelanguage' => 'Kliknite tukaj za spremembo jezika vmesnika tega orodja.',
	'usage' => 'Orodja, ki so prevedena s Toolserverjevo Intuicijo.',
	'help-translate-tool' => 'Pomagajte prevesti to orodje!',
	'help-translate-all' => 'Pomagajte prevesti Toolserver!',
	'help-translate-tooltip' => 'Pomagajte drugim s prevajanjem sporočil vmesnika v svoj jezik.',
);

/** Albanian (shqip)
 * @author FatosMorina
 */
$messages['sq'] = array(
	'current-settings' => 'Parametrat aktualë',
	'current-language' => 'Gjuha e përzgjedhur aktualisht',
	'settings-legend' => 'Parametrat',
	'choose-language' => 'Zgjidhni një gjuhë',
	'clear-cookies' => 'fshini të ruajturat',
	'renew-cookies' => 'përditësoni të ruajturat',
	'cookie-expiration' => 'Skadimi i të ruajturave',
	'clearcookies-success' => 'Të ruajturat u pastruan me sukses.',
	'tab-settings' => 'Parametrat',
	'tab-about' => 'Për',
	'bl-mysettings' => 'Parametrat e mi të gjuhës',
	'bl-mysettings-new' => 'Ndryshoni gjuhën!',
	'bl-promo' => 'Përkthimet janë nga $1 dhe $2.',
	'bl-changelanguage' => 'Klikoni këtu për të ndryshuar gjuhën e ndërfaqes të kësaj vegle.',
	'usage' => 'Vegla të përkthyera nga Intuita e Toolserverit.',
	'help-translate-tool' => 'Ndihmoni në përkthimin e kësaj vegle.',
	'help-translate-all' => 'Ndihmoni në përkthimin e Toolserver!',
	'help-translate-tooltip' => 'Ndihmo të tjerët duke përkthyer porositë e ndërfaqes në gjuhën tuaj.',
);

/** Serbian (Cyrillic script) (‪српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'fullname' => 'Превод корисничког сучеља Тулсервера',
	'current-settings' => 'Текуће поставке',
	'current-language' => 'Изабрани језик',
	'settings-legend' => 'Поставке',
	'choose-language' => 'Изаберите језик',
	'clear-cookies' => 'очисти колачиће',
	'renew-cookies' => 'обнови колачиће',
	'cookie-expiration' => 'Истек колачића',
	'clearcookies-success' => 'Колачићи су очишћени.',
	'renewcookies-success' => 'Колачићи су обновљени. Они ће истећи за $1.',
	'tab-overview' => 'Преглед',
	'tab-settings' => 'Поставке',
	'tab-about' => 'О алатки',
	'tab-demo' => 'Демо',
	'bl-mysettings' => 'Језичке поставке',
	'bl-mysettings-new' => 'Промените језик.',
	'bl-promo' => 'За преводе су заслужни $1 и $2.',
	'bl-changelanguage' => 'Кликните овде да промените језик алатке',
	'usage' => 'Алатке које је превео Тулсервер интуишон:',
	'help-translate-tool' => 'помозите нам да преведемо ову алатку',
	'help-translate-all' => 'Помозите нам да преведемо Тулсервер.',
	'help-translate-tooltip' => 'Помозите другима преводивши поруке сучеља на свој језик',
);

/** Serbian (Latin script) (‪srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'fullname' => 'Prevod korisničkog sučelja Tulservera',
	'current-settings' => 'Tekuće postavke',
	'current-language' => 'Izabrani jezik',
	'settings-legend' => 'Postavke',
	'choose-language' => 'Izaberite jezik',
	'clear-cookies' => 'očisti kolačiće',
	'renew-cookies' => 'obnovi kolačiće',
	'cookie-expiration' => 'Istek kolačića',
	'clearcookies-success' => 'Kolačići su očišćeni.',
	'renewcookies-success' => 'Kolačići su obnovljeni. Oni će isteći za $1.',
	'tab-overview' => 'Pregled',
	'tab-settings' => 'Postavke',
	'tab-about' => 'O alatki',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Jezičke postavke',
	'bl-mysettings-new' => 'Promenite jezik.',
	'bl-promo' => 'Za prevode su zaslužni $1 i $2.',
	'bl-changelanguage' => 'Kliknite ovde da promenite jezik alatke',
	'usage' => 'Alatke koje je preveo Tulserver intuišon:',
	'help-translate-tool' => 'pomozite nam da prevedemo ovu alatku',
	'help-translate-all' => 'Pomozite nam da prevedemo Tulserver.',
	'help-translate-tooltip' => 'Pomozite drugima prevodivši poruke sučelja na svoj jezik',
);

/** Swedish (svenska)
 * @author Liftarn
 * @author Lokal Profil
 */
$messages['sv'] = array(
	'fullname' => 'Internationalisering för Toolservers användargränssnitt',
	'current-settings' => 'Aktuella inställningar',
	'current-language' => 'Valt språk',
	'settings-legend' => 'Inställningar',
	'choose-language' => 'Välj ett språk',
	'clear-cookies' => 'rensa kakor',
	'renew-cookies' => 'förnya kakor',
	'cookie-expiration' => 'Kakors förfallodatum',
	'clearcookies-success' => 'Lyckades rensa kakor.',
	'renewcookies-success' => 'Cookies förnyade! Du är klar för de nästa $1.',
	'tab-overview' => 'Översikt',
	'tab-settings' => 'Inställningar',
	'tab-about' => 'Om',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Mina språkinställningar',
	'bl-mysettings-new' => 'Byt språk!',
	'bl-promo' => 'Översättningar drivs av $1 och $2.',
	'bl-changelanguage' => 'Klicka här för att ändra gränssnittsspråket för detta verktyg.',
	'usage' => 'Verktyget översatt av Toolserver Intuition.',
	'help-translate-tool' => 'Hjälp till att översätta detta verktyg!',
	'help-translate-all' => 'Hjälpa till att översätta Toolserver!',
	'help-translate-tooltip' => 'Hjälp andra genom att översätta gränssnittsmeddelanden till ditt språk.',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'current-settings' => 'Mpangilio wa sasa',
	'current-language' => 'Lugha iliyochaguliwa kwa sasa',
	'settings-legend' => 'Mpangilio',
	'choose-language' => 'Chagua lugha',
	'tab-settings' => 'Mpangilio',
	'tab-about' => 'Kuhusu',
	'bl-mysettings' => 'Mpangilio wangu wa lugha',
	'bl-mysettings-new' => 'Badili lugha',
	'help-translate-tool' => 'Saidia kutafsiri kifaa hiki!',
);

/** Tamil (தமிழ்)
 * @author Aswn
 * @author Balajijagadesh
 * @author Karthi.dr
 * @author Logicwiki
 * @author Shanmugamp7
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'fullname' => 'தூல்சர்வரின் பயனர் இடைமுகத்துக்கான அனைத்துலமயமாக்கல்',
	'current-settings' => 'தற்போதைய அமைப்புகள்',
	'current-language' => 'தற்சமயம் தேர்வு செய்யப்பட்டுள்ள மொழி',
	'settings-legend' => 'அமைப்புகள்',
	'choose-language' => 'மொழியைத் தேர்ந்தெடுக்கவும்',
	'clear-cookies' => 'நினைவிகளை நீக்குக',
	'renew-cookies' => 'நினைவிகளை புதுப்பி',
	'clearcookies-success' => 'நினைவிகள் நீக்கம் வெற்றி',
	'tab-overview' => 'மேல்நோட்டம்',
	'tab-settings' => 'அமைப்புகள்',
	'tab-about' => 'விவரம்',
	'tab-demo' => 'எடுத்துக்காட்டு',
	'bl-mysettings' => 'எனது மொழி அமைப்புகள்',
	'bl-mysettings-new' => 'மொழியை மாற்று!',
	'bl-promo' => '$1, $2 ஆகியவற்றால் மொழிபெயர்ப்புகள் வழங்கப்படுகின்றன.',
	'bl-changelanguage' => 'இக்கருவியின் இடைமுகப்பு மொழியை மாற்ற இங்கே சொடுக்கவும்.',
	'help-translate-tool' => 'இந்த கருவியை மொழிபெயர்க்க உதவுக',
	'help-translate-all' => 'டூல்சர்வரை மொழிபெயர்க உதவுக!',
	'help-translate-tooltip' => 'இடைமுகச் செய்திகளை உங்கள் மொழிக்கு மொழிபெயர்ப்பதனூடாக ஏனையவர்களுக்கு உதவுங்கள்.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'fullname' => 'టూల్‌సర్వర్ పనిముట్ల అంతర్జాతీయీకరణ',
	'current-settings' => 'ప్రస్తుత అమరికలు',
	'current-language' => 'ప్రస్తుతం ఎంచుకున్న భాష',
	'settings-legend' => 'అమరికలు',
	'choose-language' => 'భాషని ఎంచుకోండి',
	'clear-cookies' => 'కుకీలను శుభ్రపరచు',
	'tab-overview' => 'అవలోకనం',
	'tab-settings' => 'అమరికలు',
	'tab-about' => 'గురించి',
	'bl-mysettings' => 'నా భాషా అమరికలు',
	'bl-mysettings-new' => 'భాషని మార్చు!',
	'bl-promo' => 'అనువాదాల సౌజన్యం $1 మరియు $2.',
	'bl-changelanguage' => 'ఈ పనిముట్టు ముఖాంతరపు భాషను మార్చడానికి ఇక్కడ నొక్కండి.',
	'usage' => 'టూల్‌సర్వర్ ఇన్‌ట్యూషన్ ద్వారా అనువాదమైన పనిముట్లు.',
	'help-translate-tool' => 'ఈ పనిముట్టుని అనువదించడానికి సహాయపడండి!',
	'help-translate-all' => 'టూల్‌సర్వర్‌ను అనువదించడానికి తోడ్పడండి!',
	'help-translate-tooltip' => 'ముఖాంతరం యొక్క సందేశాలను మీ భాష లోనికి అనువదించడం ద్వారా ఇతరులకి తోడ్పడండి.',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'settings-legend' => 'Preferénsia',
	'choose-language' => 'Hili lian',
	'tab-about' => 'Kona-ba',
	'bl-mysettings-new' => 'Lian seluk',
	'help-translate-tool' => "Favór ida, tulun tradús ne'e!",
	'help-translate-all' => 'Favór ida, tulun tradús Toolserver!',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'fullname' => 'Pagsasandaigdigan para sa Ugnayang-Mukha ng Toolserver',
	'current-settings' => 'Pangkasalukuyang mga katakdaan',
	'current-language' => 'Pangkasalukuyang napiling wika',
	'settings-legend' => 'Mga pagtatakda',
	'choose-language' => 'Pumili ng isang wika',
	'clear-cookies' => 'hawiin ang mga otap',
	'renew-cookies' => 'baguhing muli ang mga otap',
	'cookie-expiration' => 'Katapusan ng otap',
	'clearcookies-success' => 'Matagumpay na nahawi ang mga otap.',
	'renewcookies-success' => 'Muli nang nabago ang mga otap!  Nakahanda ka na para sa susunod na $1.',
	'tab-overview' => 'Pagtalakay na naglalarawan',
	'tab-settings' => 'Mga katakdaan',
	'tab-about' => 'Patungkol',
	'tab-demo' => 'Pagpapamalas',
	'bl-mysettings' => 'Mga pagtatakda ko sa wika',
	'bl-mysettings-new' => 'Palitan ang wika!',
	'bl-promo' => 'Ang mga salinwika ay binibigyang lakas ng $1 at $2.',
	'bl-changelanguage' => 'Pindutin dito upang baguhin anng wika ng ugnayang-mukha ng kasangkapang ito.',
	'usage' => 'Ang mga kasangkapan ay isinalinwika ng Kutob ng Toolserver.',
	'help-translate-tool' => 'Tumulong sa pagsasalinwika ng kasangkapang ito!',
	'help-translate-all' => 'Tumulong sa pagsasalinwika ng Toolserver!',
	'help-translate-tooltip' => 'Tulungan ang iba sa pamamagitan ng pagsasalinwika ng mga mensahe ng ugnayang-mukha papunta sa wika mo.',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'settings-legend' => 'Кукон',
	'choose-language' => 'Зывон бывыжнән',
	'clear-cookies' => 'Cookies рәдд кардеј',
	'tab-overview' => 'Чәшику дәвоније',
	'tab-settings' => 'Кукон',
	'tab-about' => 'Тәсвир',
	'bl-mysettings' => 'Чымы зывонә кукон',
	'bl-mysettings-new' => 'Зывони дәгиш кардеј!',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'fullname' => "Toolserver'ın Kullanıcı Arayüzü için Uluslararasılaştırma",
	'current-settings' => 'Güncel ayarlar',
	'current-language' => 'Halihazırda seçilmiş dil',
	'settings-legend' => 'Ayarlar',
	'choose-language' => 'Bir dil seçin',
	'clear-cookies' => 'çerezleri temizle',
	'renew-cookies' => 'çerezleri yenile',
	'cookie-expiration' => 'Çerez süresinin dolumu',
	'clearcookies-success' => 'Çerezler başarıyla temizlendi.',
	'renewcookies-success' => 'Çerezler temizlendi! Sonraki $1 için hazırsınız.',
	'tab-overview' => 'Genel görünüm',
	'tab-settings' => 'Ayarlar',
	'tab-about' => 'Hakkında',
	'tab-demo' => 'Demo',
	'bl-mysettings' => 'Dil ayarlarım',
	'bl-mysettings-new' => 'Dili değiştir!',
	'bl-promo' => 'Çeviriler, $1 ve $2 tarafından sağlanmaktadır.',
	'bl-changelanguage' => 'Bu aracın arayüz dilini değiştirmek için buraya tıklayın.',
	'usage' => 'Toolserver Intuition tarafından çevrilen araçlar.',
	'help-translate-tool' => 'Bu aracın çevrilmesine yardımcı olun!',
	'help-translate-all' => "Toolserver'ın çevrilmesine yardımcı olun!",
	'help-translate-tooltip' => 'Arayüz iletilerini dilinize çevirerek başkalarına yardımcı olun.',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'fullname' => 'Toolserver نىڭ ئىشلەتكۈچى ئارا يۈزىنى خەلقئارالاشتۇرۇش',
	'current-settings' => 'نۆۋەتتىكى تەڭشەكلەر',
	'current-language' => 'نۆۋەتتە تاللانغان تىل',
	'settings-legend' => 'تەڭشەكلەر',
	'choose-language' => 'بىر تىل تاللاڭ',
	'clear-cookies' => 'Cookie تازىلا',
	'renew-cookies' => 'cookie قايتا يېڭىلا',
	'cookie-expiration' => 'Cookie مۆھلىتى',
	'clearcookies-success' => 'cookie مۇۋەپپەقىيەتلىك تازىلاندى.',
	'renewcookies-success' => 'Cookie قايتا يېڭىلاندى! ھەممە تەڭشەكلىرىڭىز ساقلىنىدۇ $1.',
	'tab-overview' => 'قىسقىچە بايان',
	'tab-settings' => 'تەڭشەكلەر',
	'tab-about' => 'ھەققىدە',
	'tab-demo' => 'ئۈلگە كۆرسىتىش',
	'bl-mysettings' => 'تىل تەڭشەكلىرىم',
	'bl-mysettings-new' => 'تىل ئۆزگەرت!',
	'bl-promo' => 'تەرجىمىلەر $1 ۋە $2 نى قوللانغان.',
	'bl-changelanguage' => 'بۇ جاينى چېكىپ مەزكۇر قورالنىڭ ئارايۈز تىلىنى ئۆزگەرتىڭ.',
	'usage' => 'Toolserver Intuition تەرجىمە قىلغان قورال.',
	'help-translate-tool' => 'بۇ قورالنى تەرجىمە قىلىشقا ياردەملىشىڭ!',
	'help-translate-all' => 'Toolserver نى تەرجىمە قىلىشقا ياردەملىشىڭ!',
	'help-translate-tooltip' => 'باشقىلارنىڭ ئارايۈزنى تىلىڭىزغا تەرجىمە قىلىشىغا ياردەملىشىڭ.',
);

/** Ukrainian (українська)
 * @author A1
 */
$messages['uk'] = array(
	'tab-settings' => 'Налаштування',
	'tab-about' => 'Опис',
	'tab-demo' => 'Демо',
	'bl-mysettings' => 'Мої налаштування мови',
	'bl-mysettings-new' => 'Змінити мову!',
	'bl-promo' => 'Переклад здійснено за допомогою $1 і $2.',
	'bl-changelanguage' => 'Натисніть тут, щоб змінити мову інтерфейсу цього інструмента.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'fullname' => 'Quốc tế hóa giao diện người dùng của Toolserver',
	'current-settings' => 'Các tùy chọn hiện hành',
	'current-language' => 'Ngôn ngữ được chọn',
	'settings-legend' => 'Tùy chọn',
	'choose-language' => 'Chọn ngôn ngữ',
	'clear-cookies' => 'xóa cookie',
	'renew-cookies' => 'phục hồi cookie',
	'cookie-expiration' => 'Thời hạn cookie',
	'clearcookies-success' => 'Đã xóa cookie thành công',
	'renewcookies-success' => 'Đã phục hồi cookie cho $1 sau.',
	'tab-overview' => 'Tổng quan',
	'tab-settings' => 'Tùy chọn',
	'tab-about' => 'Giới thiệu',
	'tab-demo' => 'Ví dụ',
	'bl-mysettings' => 'Tùy chọn ngôn ngữ',
	'bl-mysettings-new' => 'Thay đổi ngôn ngữ!',
	'bl-promo' => 'Bản dịch do $1 và $2.',
	'bl-changelanguage' => 'Thay đổi ngôn ngữ giao diện của công cụ này.',
	'usage' => 'Các công cụ do Toolserver Intuition dịch',
	'help-translate-tool' => 'Giúp dịch công cụ này!',
	'help-translate-all' => 'Giúp dịch Toolserver!',
	'help-translate-tooltip' => 'Giúp người ta sử dụng công cụ bằng cách dịch thông điệp giao diện qua ngôn ngữ của bạn.',
);

/** Simplified Chinese (‪中文（简体）‬)
 * @author Hydra
 * @author Shizhao
 * @author Simon Shek
 */
$messages['zh-hans'] = array(
	'fullname' => '国际化Toolserver用户界面',
	'current-settings' => '当前的设置',
	'current-language' => '当前所选的语言',
	'settings-legend' => '设置',
	'choose-language' => '选择语言',
	'clear-cookies' => '清除 cookie',
	'renew-cookies' => '重设cookies',
	'cookie-expiration' => 'Cookie期限',
	'clearcookies-success' => '顺利清理cookies。',
	'renewcookies-success' => 'Cookies已经重设！你全部的设置将保留$1。',
	'tab-overview' => '概述',
	'tab-settings' => '设置',
	'tab-about' => '关于',
	'tab-demo' => '演示',
	'bl-mysettings' => '我的语言设置',
	'bl-mysettings-new' => '更改语言！',
	'bl-promo' => '翻译采用 $1 和 $2。',
	'bl-changelanguage' => '若要更改此工具界面语言，请单击此处。',
	'usage' => '由Toolserver Intuition翻译的工具。',
	'help-translate-tool' => '帮助翻译此工具！',
	'help-translate-all' => '帮助翻译Toolserver！',
	'help-translate-tooltip' => '帮助其他人把界面翻译成您的语言。',
);

/** Traditional Chinese (‪中文（繁體）‬)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'current-settings' => '當前的設定',
	'current-language' => '當前所選的語言',
	'settings-legend' => '設定',
	'choose-language' => '選擇語言',
	'clear-cookies' => '清除 cookie',
	'renew-cookies' => '重設cookie',
	'clearcookies-success' => '成功清除 cookie。',
	'tab-settings' => '設定',
	'tab-about' => '關於',
	'tab-demo' => '示範',
	'bl-mysettings' => '我的語言設定',
	'bl-mysettings-new' => '更改語言！',
	'bl-promo' => '翻譯來自 $1 和 $2 。',
	'bl-changelanguage' => '按此更改此工具的界面語言。',
	'usage' => '由Toolserver Intuition翻譯的工具。',
	'help-translate-tool' => '協助翻譯此工具！',
	'help-translate-all' => '協助翻譯Toolserver！',
	'help-translate-tooltip' => '幫助其他人把界面翻譯成您的語言。',
);

/** Chinese (Hong Kong) (‪中文（香港）‬)
 * @author Justincheng12345
 */
$messages['zh-hk'] = array(
	'fullname' => 'Toolserver用戶界面國際化',
	'current-settings' => '目前設置',
	'current-language' => '目前所選語言',
	'settings-legend' => '設定',
	'choose-language' => '選擇語言',
	'clear-cookies' => '清除cookie',
	'renew-cookies' => '重設cookies',
	'cookie-expiration' => 'Cookie期限',
	'clearcookies-success' => '成功清除cookie。',
	'renewcookies-success' => 'Cookies已經重設！你全部設定將保留$1。',
	'tab-overview' => '整體',
	'tab-settings' => '設定',
	'tab-about' => '關於',
	'tab-demo' => '演示',
	'bl-mysettings' => '我的語言設定',
	'bl-mysettings-new' => '更改語言！',
	'bl-promo' => '翻译由$1及$2提供。',
	'bl-changelanguage' => '若要更改此工具的介面語言，請按此處。',
	'usage' => '由Toolserver Intuition翻譯的工具。',
	'help-translate-tool' => '協助翻譯此工具 ！',
	'help-translate-all' => '協助翻譯Toolserver！',
	'help-translate-tooltip' => '幫助其他人把界面翻譯成您的語言。',
);

