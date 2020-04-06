<?php
/**
 * Redsys Virtual POS
 *
 * @package    Redsys Virtual POS
 * @author     Javier Zapata <javierzapata82@gmail.com>
 * @copyright  2020 Javier Zapata <javierzapata82@gmail.com>
 * @license    https://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       https://github.com/jzfgo/redsys-virtual-pos
 */

namespace nkm\RedsysVirtualPos\Field;

/**
 * Holds the value of a request/response parameter
 *
 * @package    Redsys Virtual POS
 * @author     Javier Zapata <javierzapata82@gmail.com>
 * @copyright  2020 Javier Zapata <javierzapata82@gmail.com>
 * @license    https://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       https://github.com/jzfgo/redsys-virtual-pos
 */
class Country extends AbstractField implements FieldInterface
{
    /**
     * Set of predefined values
     *
     * @var array
     */
    protected static $availableValues = [
        '004' => 'Afganistán',
        '008' => 'Albania',
        '012' => 'Argelia',
        '016' => 'Samoa Americana',
        '020' => 'Andorra',
        '024' => 'Angola',
        '028' => 'Antigua y Barbuda',
        '031' => 'Azerbaiyán',
        '032' => 'Argentina',
        '036' => 'Australia',
        '040' => 'Austria',
        '044' => 'Bahamas',
        '048' => 'Baréin',
        '050' => 'Bangladés',
        '051' => 'Armenia',
        '052' => 'Barbados',
        '056' => 'Bélgica',
        '060' => 'Bermudas',
        '064' => 'Bután',
        '068' => 'Bolivia',
        '070' => 'Bosnia y Herzegovina',
        '072' => 'Botsuana',
        '074' => 'Isla Bouvet',
        '076' => 'Brasil',
        '084' => 'Belice',
        '086' => 'Territorio Británico del Océano Índico',
        '090' => 'Islas Salomón',
        '092' => 'Islas Vírgenes Británicas',
        '096' => 'Brunéi',
        '100' => 'Bulgaria',
        '104' => 'Birmania',
        '108' => 'Burundi',
        '112' => 'Bielorrusia',
        '116' => 'Camboya',
        '120' => 'Camerún',
        '124' => 'Canadá',
        '132' => 'Cabo Verde',
        '136' => 'Islas Caimán',
        '140' => 'República Centroafricana',
        '144' => 'Sri Lanka',
        '148' => 'Chad',
        '152' => 'Chile',
        '156' => 'China',
        '158' => 'Taiwán',
        '162' => 'Isla de Navidad',
        '166' => 'Islas Cocos',
        '170' => 'Colombia',
        '174' => 'Comoras',
        '175' => 'Mayotte',
        '178' => 'República del Congo',
        '180' => 'Rep. Dem. del Congo',
        '184' => 'Islas Cook',
        '188' => 'Costa Rica',
        '191' => 'Croacia',
        '192' => 'Cuba',
        '196' => 'Chipre',
        '203' => 'República Checa',
        '204' => 'Benín',
        '208' => 'Dinamarca',
        '212' => 'Dominica',
        '214' => 'República Dominicana',
        '218' => 'Ecuador',
        '222' => 'El Salvador',
        '226' => 'Guinea Ecuatorial',
        '231' => 'Etiopía',
        '232' => 'Eritrea',
        '233' => 'Estonia',
        '234' => 'Islas Feroe',
        '238' => 'Islas Malvinas',
        '239' => 'Islas Georgias y Sandwich del Sur',
        '242' => 'Fiyi',
        '246' => 'Finlandia',
        '248' => 'Aland',
        '250' => 'Francia',
        '254' => 'Guayana Francesa',
        '258' => 'Polinesia Francesa',
        '260' => 'Territorios Australes Franceses',
        '262' => 'Yibuti',
        '266' => 'Gabón',
        '268' => 'Georgia',
        '270' => 'Gambia',
        '275' => 'Estado de Palestina',
        '276' => 'Alemania',
        '288' => 'Ghana',
        '292' => 'Gibraltar',
        '296' => 'Kiribati',
        '300' => 'Grecia',
        '304' => 'Groenlandia',
        '308' => 'Granada',
        '312' => 'Guadalupe',
        '316' => 'Guam',
        '320' => 'Guatemala',
        '324' => 'Guinea',
        '328' => 'Guyana',
        '332' => 'Haití',
        '334' => 'Islas Heard y McDonald',
        '336' => 'Ciudad del Vaticano',
        '340' => 'Honduras',
        '344' => 'Hong Kong',
        '348' => 'Hungría',
        '352' => 'Islandia',
        '356' => 'India',
        '360' => 'Indonesia',
        '364' => 'Irán',
        '368' => 'Irak',
        '372' => 'Irlanda',
        '376' => 'Israel',
        '380' => 'Italia',
        '384' => 'Costa de Marfil',
        '388' => 'Jamaica',
        '392' => 'Japón',
        '398' => 'Kazajistán',
        '400' => 'Jordania',
        '404' => 'Kenia',
        '408' => 'Corea del Norte',
        '410' => 'Corea del Sur',
        '414' => 'Kuwait',
        '417' => 'Kirguistán',
        '418' => 'Laos',
        '422' => 'Líbano',
        '426' => 'Lesoto',
        '428' => 'Letonia',
        '430' => 'Liberia',
        '434' => 'Libia',
        '438' => 'Liechtenstein',
        '440' => 'Lituania',
        '442' => 'Luxemburgo',
        '446' => 'Macao',
        '450' => 'Madagascar',
        '454' => 'Malaui',
        '458' => 'Malasia',
        '462' => 'Maldivas',
        '466' => 'Malí',
        '470' => 'Malta',
        '474' => 'Martinica',
        '478' => 'Mauritania',
        '480' => 'Mauricio',
        '484' => 'México',
        '492' => 'Mónaco',
        '496' => 'Mongolia',
        '498' => 'Moldavia',
        '499' => 'Montenegro',
        '500' => 'Montserrat',
        '504' => 'Marruecos',
        '508' => 'Mozambique',
        '512' => 'Omán',
        '516' => 'Namibia',
        '520' => 'Nauru',
        '524' => 'Nepal',
        '528' => 'Países Bajos',
        '531' => 'Curazao',
        '533' => 'Aruba',
        '540' => 'Nueva Caledonia',
        '548' => 'Vanuatu',
        '554' => 'Nueva Zelanda',
        '558' => 'Nicaragua',
        '562' => 'Níger',
        '566' => 'Nigeria',
        '570' => 'Niue',
        '574' => 'Norfolk',
        '578' => 'Noruega',
        '580' => 'Islas Marianas del Norte',
        '583' => 'Micronesia',
        '584' => 'Islas Marshall',
        '585' => 'Palaos',
        '586' => 'Pakistán',
        '591' => 'Panamá',
        '598' => 'Papúa Nueva Guinea',
        '600' => 'Paraguay',
        '604' => 'Perú',
        '608' => 'Filipinas',
        '612' => 'Islas Pitcairn',
        '616' => 'Polonia',
        '620' => 'Portugal',
        '624' => 'Guinea-Bisáu',
        '626' => 'Timor Oriental',
        '630' => 'Puerto Rico',
        '634' => 'Catar',
        '638' => 'Reunión',
        '642' => 'Rumania',
        '643' => 'Rusia',
        '646' => 'Ruanda',
        '652' => 'San Bartolomé',
        '654' => 'Santa Helena, A. y T.',
        '659' => 'San Cristóbal y Nieves',
        '660' => 'Anguila',
        '662' => 'Santa Lucía',
        '663' => 'San Martín',
        '666' => 'San Pedro y Miquelón',
        '670' => 'San Vicente y las Granadinas',
        '674' => 'San Marino',
        '678' => 'Santo Tomé y Príncipe',
        '682' => 'Arabia Saudita',
        '686' => 'Senegal',
        '688' => 'Serbia',
        '690' => 'Seychelles',
        '694' => 'Sierra Leona',
        '702' => 'Singapur',
        '703' => 'Eslovaquia',
        '704' => 'Vietnam',
        '705' => 'Eslovenia',
        '706' => 'Somalia',
        '710' => 'Sudáfrica',
        '716' => 'Zimbabue',
        '724' => 'España',
        '728' => 'Sudán del Sur',
        '729' => 'Sudán',
        '732' => 'República Árabe Saharaui Democrática',
        '740' => 'Surinam',
        '744' => 'Svalbard y Jan Mayen',
        '748' => 'Suazilandia',
        '752' => 'Suecia',
        '756' => 'Suiza',
        '760' => 'Siria',
        '762' => 'Tayikistán',
        '764' => 'Tailandia',
        '768' => 'Togo',
        '772' => 'Tokelau',
        '776' => 'Tonga',
        '780' => 'Trinidad y Tobago',
        '784' => 'Emiratos Árabes Unidos',
        '788' => 'Túnez',
        '792' => 'Turquía',
        '795' => 'Turkmenistán',
        '796' => 'Islas Turcas y Caicos',
        '798' => 'Tuvalu',
        '800' => 'Uganda',
        '804' => 'Ucrania',
        '807' => 'República de Macedonia',
        '818' => 'Egipto',
        '826' => 'Reino Unido',
        '831' => 'Guernsey',
        '832' => 'Jersey',
        '833' => 'Isla de Man',
        '834' => 'Tanzania',
        '840' => 'Estados Unidos',
        '850' => 'Islas Vírgenes de los Estados Unidos',
        '854' => 'Burkina Faso',
        '858' => 'Uruguay',
        '860' => 'Uzbekistán',
        '862' => 'Venezuela',
        '876' => 'Wallis y Futuna',
        '882' => 'Samoa',
        '887' => 'Yemen',
        '894' => 'Zambia',
    ];
}
