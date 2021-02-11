<?php

namespace Faker\Provider\es_BO;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = ['San', 'Villa', 'El', 'Los', 'La', 'Las', 'Puerto'];

    protected static $buildingNumber = ['%##', '%####', 'N°###', 'N°####'];

    protected static $streetPrefix = [
        'Calle', 'Avenida', 'Plaza', 'Camino', 'Av.', 'C.', 'Esq.'
    ];


    protected static $state = [
        'Beni', 'Chuquisaca', 'Cochabamba', 'La paz', 'Oruro', 'Pando', 'Potosí', 'Santa Cruz', 'Tarija'
    ];

    protected static $country = [
        'Afganistán', 'Albania', 'Alemania', 'Andorra', 'Angola', 'Antigua y Barbuda', 'Arabia Saudí', 'Argelia', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaiyán',
        'Bahamas', 'Bangladés', 'Barbados', 'Baréin', 'Belice', 'Benín', 'Bielorrusia', 'Birmania', 'Bolivia', 'Bosnia-Herzegovina', 'Botsuana', 'Brasil', 'Brunéi Darusalam', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Bután', 'Bélgica',
        'Cabo Verde', 'Camboya', 'Camerún', 'Canadá', 'Catar', 'Chad', 'Chile', 'China', 'Chipre', 'Ciudad del Vaticano', 'Colombia', 'Comoras', 'Congo', 'Corea del Norte', 'Corea del Sur', 'Costa Rica', 'Costa de Marfil', 'Croacia', 'Cuba',
        'Dinamarca', 'Dominica',
        'Ecuador', 'Egipto', 'El Salvador', 'Emiratos Árabes Unidos', 'Eritrea', 'Eslovaquia', 'Eslovenia', 'España', 'Estados Unidos de América', 'Estonia', 'Etiopía',
        'Filipinas', 'Finlandia', 'Fiyi', 'Francia',
        'Gabón', 'Gambia', 'Georgia', 'Ghana', 'Granada', 'Grecia', 'Guatemala', 'Guinea', 'Guinea Ecuatorial', 'Guinea-Bisáu', 'Guyana',
        'Haití', 'Honduras', 'Hungría',
        'India', 'Indonesia', 'Irak', 'Irlanda', 'Irán', 'Islandia', 'Islas Marshall', 'Islas Salomón', 'Israel', 'Italia',
        'Jamaica', 'Japón', 'Jordania',
        'Kazajistán', 'Kenia', 'Kirguistán', 'Kiribati', 'Kuwait',
        'Laos', 'Lesoto', 'Letonia', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburgo', 'Líbano',
        'Macedonia', 'Madagascar', 'Malasia', 'Malaui', 'Maldivas', 'Mali', 'Malta', 'Marruecos', 'Mauricio', 'Mauritania', 'Micronesia', 'Moldavia', 'Mongolia', 'Montenegro', 'Mozambique', 'México', 'Mónaco',
        'Namibia', 'Nauru', 'Nepal', 'Nicaragua', 'Nigeria', 'Noruega', 'Nueva Zelanda', 'Níger',
        'Omán',
        'Pakistán', 'Palaos', 'Panamá', 'Papúa Nueva Guinea', 'Paraguay', 'Países Bajos', 'Perú', 'Polonia', 'Portugal',
        'Reino Unido', 'Reino Unido de Gran Bretaña e Irlanda del Norte', 'República Centroafricana', 'República Checa', 'República Democrática del Congo', 'República Dominicana', 'Ruanda', 'Rumanía', 'Rusia',
        'Samoa', 'San Cristóbal y Nieves', 'San Marino', 'San Vicente y las Granadinas', 'Santa Lucía', 'Santo Tomé y Príncipe', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leona', 'Singapur', 'Siria', 'Somalia', 'Sri Lanka', 'Suazilandia', 'Sudáfrica', 'Sudán', 'Suecia', 'Suiza', 'Surinam',
        'Tailandia', 'Tanzania', 'Tayikistán', 'Timor Oriental', 'Togo', 'Tonga', 'Trinidad y Tobago', 'Turkmenistán', 'Turquía', 'Tuvalu', 'Túnez',
        'Ucrania', 'Uganda', 'Uruguay', 'Uzbekistán',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Yemen', 'Yibuti',
        'Zambia', 'Zimbabue',
    ];

    protected static $cityFormats = [
        '{{cityPrefix}} {{lastName}}'
    ];

    protected static $streetNameFormats = [
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}',
    ];

    protected static $streetAddressFormats = [
        '{{streetName}}, {{buildingNumber}}'
    ];
    protected static $addressFormats = [
        '{{streetAddress}}, {{city}}',
    ];
    protected static $secondaryAddressFormats = ['#º', '#º A', '#º B'];

    /**
     * @example 'Avenida'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'Villa'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example '3ºA'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Santa cruz'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
