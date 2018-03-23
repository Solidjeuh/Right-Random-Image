<?php
/**
*
* @package phpBB Extension - Right Random Image
* @copyright (c) 2015 HiFiKabin
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
    exit;
}
if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'ACP_RIGHTRANDOMIMAGE'                       => 'Rechter Willekeurige Afbeelding',
    'RIGHTRANDOMIMAGE_CONFIG'                    => 'Rechter Willekeurige Afbeelding Instellingen',

    'ACP_RIGHTRANDOMIMAGE_CONFIG'                => 'Rechter Willekeurige Afbeelding',
    'ACP_RIGHTRANDOMIMAGE_CONFIG_EXPLAIN'        => 'Dit is de configuratie pagina voor de Rechter Willekeurige Afbeelding extensie. De headerbar van uw forum wordt automatisch aangepast aan de grootte van de afbeelding.',

    'ACP_RIGHTRANDOMIMAGE_CONFIG_SET'            => 'Configuratie',
    'RIGHTRANDOMIMAGE_CONFIG_SAVED'              => 'Rechter Willekeurige Afbeelding Instellingen opgeslagen',

    'RIGHTRANDOMIMAGE_ENABLE'                    => 'Schakel Rechter Willekeurige Afbeelding in',
    'RIGHTRANDOMIMAGE_ENABLE_EXPLAIN'            => 'Wilt u de Rechter Willekeurige Afbeelding EXT inschakelen?',

    'RIGHTRANDOMIMAGE_SEARCH'                    => 'Zoek',
    'RIGHTRANDOMIMAGE_SEARCH_EXPLAIN'            => 'Wilt u de zoekopdracht in de NavBar weergeven wanneer Rechter Willekeurige Afbeelding is ingeschakeld?',

    'RIGHTRANDOMIMAGE_NUMBER_EXPLAIN'            => 'Hoeveel afbeeldingen gebruikt u?',

    'RIGHTRANDOMIMAGE_NUMBER_ONE'                => '1',
    'RIGHTRANDOMIMAGE_NUMBER_TWO'                => '2',
    'RIGHTRANDOMIMAGE_NUMBER_THREE'              => '3',
    'RIGHTRANDOMIMAGE_NUMBER_FOUR'               => '4',
    'RIGHTRANDOMIMAGE_NUMBER_FIVE'               => '5',
    'RIGHTRANDOMIMAGE_NUMBER_SIX'                => '6',

    'RIGHTRANDOMIMAGE_RESIZE'                   => 'Afbeelding grootte',
    'RIGHTRANDOMIMAGE_RESIZE_EXPLAIN'           => 'U kunt de maximale grootte van de afbeelding hier wijzigen, maar bedenk dat grotere afbeeldingen de lay-out in de header kunnen verstoren. Standaard is 200' ,


    'RIGHTRANDOMIMAGE_IMAGE_URL_1'               => 'Eerste afbeelding URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_1'       => 'Voer de URL in van de eerste afbeelding inclusief de extensie. Externe afbeeldingen vereisen de volledige URL, lokale afbeeldingen vereisen het lokale pad, bijv. images/right_random_images/afbeelding.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_1'   => 'http://afbeelding1.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_URL_2'               => 'Tweede afbeelding URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_2'       => 'Voer de URL in van de tweede afbeelding inclusief de extensie. Externe afbeeldingen vereisen de volledige URL, lokale afbeeldingen vereisen het lokale pad, bijv. images/right_random_images/afbeelding.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_2'   => 'http://afbeelding2.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_URL_3'               => 'Derde afbeelding URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_3'       => 'Voer de URL in van de derde afbeelding inclusief de extensie. Externe afbeeldingen vereisen de volledige URL, lokale afbeeldingen vereisen het lokale pad, bijv. images/right_random_images/afbeelding.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_3'   => 'http://afbeelding3.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_URL_4'               => 'Vierde afbeelding URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_4'       => 'Voer de URL in van de vierde afbeelding inclusief de extensie. Externe afbeeldingen vereisen de volledige URL, lokale afbeeldingen vereisen het lokale pad, bijv. images/right_random_images/afbeelding.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_4'   => 'http://afbeelding4.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_URL_5'               => 'Vijfde afbeelding URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_5'       => 'Voer de URL in van de vijfde afbeelding inclusief de extensie. Externe afbeeldingen vereisen de volledige URL, lokale afbeeldingen vereisen het lokale pad, bijv. images/right_random_images/afbeelding.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_5'   => 'http://afbeelding5.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_URL_6'               => 'Zesde afbeelding URL',
    'RIGHTRANDOMIMAGE_IMAGE_URL_EXPLAIN_6'       => 'Voer de URL in van de zesde afbeelding inclusief de extensie. Externe afbeeldingen vereisen de volledige URL, lokale afbeeldingen vereisen het lokale pad, bijv. images/right_random_images/afbeelding.gif',
    'RIGHTRANDOMIMAGE_IMAGE_URL_PLACEHOLDER_6'   => 'http://afbeelding6.jpg',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_1'              => 'Eerste afbeelding Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_1'      => 'Voer de volledige URL in van de pagina waaraan u de eerste afbeelding wilt koppelen, INCLUSIEF http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_1'  => 'http://link1.com',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_2'              => 'Tweede afbeelding Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_2'      => 'Voer de volledige URL in van de pagina waaraan u de tweede afbeelding wilt koppelen, INCLUSIEF http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_2'  => 'http://link2.com',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_3'              => 'Derde afbeelding Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_3'      => 'Voer de volledige URL in van de pagina waaraan u de derde afbeelding wilt koppelen, INCLUSIEF http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_3'  => 'http://link3.com',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_4'              => 'Vierde afbeelding Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_4'      => 'Voer de volledige URL in van de pagina waaraan u de vierde afbeelding wilt koppelen, INCLUSIEF http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_4'  => 'http://link4.com',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_5'              => 'Vijfde afbeelding Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_5'      => 'Voer de volledige URL in van de pagina waaraan u de vijfde afbeelding wilt koppelen, INCLUSIEF http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_5'  => 'http://link5.com',

    'RIGHTRANDOMIMAGE_IMAGE_LINK_6'              => 'Zesde afbeelding Link URL',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_EXPLAIN_6'      => 'Voer de volledige URL in van de pagina waaraan u de zesde afbeelding wilt koppelen, INCLUSIEF http:// ',
    'RIGHTRANDOMIMAGE_IMAGE_LINK_PLACEHOLDER_6'  => 'http://link6.com',

    'RIGHTRANDOMIMAGE_OPEN'                      => 'Instellingen voor koppelen openen' ,
    'RIGHTRANDOMIMAGE_OPEN_EXPLAIN'              => 'Wat wil je doen als er op de afbeelding wordt geklikt?' ,
    'RIGHTRANDOMIMAGE_URL_NOTHING'               => 'Niets' ,
    'RIGHTRANDOMIMAGE_URL_SAME'                  => 'Link openen in hetzelfde tabblad' ,
    'RIGHTRANDOMIMAGE_URL_NEW'                   => 'Link openen in een nieuw tabblad' ,

    'RIGHTRSANDOMIMAGE_REQUIRE_3.1.4'            => 'Deze extensie heeft ten minste phpBB 3.1.4 nodig en werkt niet met phpBB 3.2.0',
    'RIGHTRSANDOMIMAGE_REQUIRE_3.2.0'            => 'Deze extensie is voor phpBB 3.2.0 en hoger. Het werkt niet met phpBB 3.1.0',
));

