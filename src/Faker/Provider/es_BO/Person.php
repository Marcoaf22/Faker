<?php

namespace Faker\Provider\es_BO;

class Person extends \Faker\Provider\Person
{

    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    ];


    protected static $firstNameMale = [
        'Aaron', 'Adrián', 'Alberto', 'Agustin', 'Alexis', 'Alejandro', 'Alex', 'Alonso', 'Álvaro', 'Ander', 'Andrés', 'Ángel', 'Antonio', 'Axel',
        'Benjamín', 'Bruno',
        'Camilo', 'Carlos', 'César', 'Cristian', 'Christian', 'Cristóbal',
        'Daniel', 'Dario', 'David', 'Diego', 'Dylan',
        'Edmundo', 'Eduardo', 'Emiliano', 'Enrique', 'Eric', 'Erik', 'Esteban',
        'Fernando', 'Francisco', 'Francisco Javier',
        'Gabriel', 'Gerard', 'Gonzalo', 'Guillermo',
        'Héctor', 'Horacio', 'Hugo',
        'Ignacio', 'Isaac', 'Ismael', 'Iván',
        'Jacobo', 'Javier', 'Jerónimo', 'Jesús', 'Joaquín', 'Joel', 'Jorge', 'Joshua', 'Josué', 'José', 'Jose luís', 'Juan', 'Juan David', 'Juan de Díos', 'Juan José', 'Juan Manuel', 'Juan Martín', 'Juan Pablo', 'Juan Sebastián', 'Julián',
        'Kevin',
        'Leo', 'Leonardo', 'Lucas', 'Luis',
        'Manuel', 'Marc', 'Marco', 'Marcos', 'Marco antonio', 'Mario', 'Martín', 'Mateo', 'Miguel', 'Miguel Ángel',
        'Nicolás',
        'Oliver', 'Omar', 'Óscar',
        'Pablo', 'Pedro',
        'Rafael', 'Raúl', 'Roberto', 'Rodrigo', 'Rubén',
        'Samuel', 'Santiago', 'Saúl', 'Sergio', 'Simón',
        'Víctor',
    ];

    protected static $firstNameFemale = [
        'Abril', 'Adriana', 'Aitana', 'Alba', 'Alejandra', 'Alexandra', 'Alexia', 'Alicia', 'Alma', 'Ana', 'Ana Isabel', 'Ana María', 'Andrea',  'Ángela', 'Antonia', 'Ariadna', 'Aurora',
        'Beatriz', 'Berta', 'Bianca', 'Blanca',
        'Camila', 'Candela', 'Carla', 'Carmen', 'Carolina', 'Clara', 'Claudia', 'Cristina',
        'Daniela', 'Diana',
        'Elena', 'Elsa', 'Emilia', 'Eva', 'Esther',
        'Fabiana', 'Fátima', 'Francisca',
        'Gabriela', 'Gloria',
        'Inés', 'Irene',  'Isabel', 'Ivanna',
        'Jazmín', 'Josefa', 'Jimena', 'Juana', 'Julia',
        'Laura', 'Lorena', 'Lidia', 'Lola', 'Lucía', 'Luisa', 'Luna',
        'Magdalena', 'Maite', 'Margarita', 'María', 'María Ángela', 'María Carmen', 'María Dolores', 'María Elizabeth', 'María Fernanda', 'María Pilar', 'Marina', 'Marta',  'Martina', 'Mireia', 'Miriam',
        'Nadia', 'Natalia', 'Nia', 'Nicole', 'Noelia', 'Nora',
        'Olivia', 'Olga', 'Ona',
        'Paola', 'Patricia', 'Pau', 'Paula', 'Pilar',
        'Raquel', 'Rafaela', 'Rebeca', 'Regina', 'Rocío', 'Rosa', 'Rosa María', 'Rosario',
        'Salma', 'Sandra', 'Sara', 'Silvia', 'Sofía', 'Sonia',
        'Teresa',
        'Úrsula',
        'Valentina', 'Valeria', 'Vera', 'Verónica', 'Victoria',
        'Yolanda',
        'Zoe',
    ];

    protected static $lastName = [
        'Acevedo', 'Acosta', 'Acuña', 'Aguayo', 'Águilar', 'Aguilera', 'Aguirre', 'Alanis', 'Alaniz', 'Alarcón', 'Alba', 'Alcala', 'Alcántar', 'Alcaraz', 'Alemán', 'Alfaro', 'Alicea', 'Almanza', 'Almaraz', 'Almonte', 'Alonso', 'Alonzo', 'Altamirano', 'Alva', 'Alvarado', 'Álvarez', 'Amador', 'Amaya', 'Anaya', 'Anguiano', 'Angulo', 'Aparicio', 'Apodaca', 'Aponte', 'Aragón', 'Araña', 'Aranda', 'Arce', 'Archuleta', 'Arellano', 'Arenas', 'Arevalo', 'Arguello', 'Arias', 'Armas', 'Armendáriz', 'Armenta', 'Arredondo', 'Arreola', 'Arriaga', 'Arroyo', 'Arteaga', 'Asturias,', 'Asturizaga', 'Ávalos', 'Ávila', 'Ayala',
        'Ballesteros', 'Banda', 'Barela', 'Barragán', 'Barraza', 'Barrera', 'Barreto', 'Barrientos', 'Barrios', 'Batista', 'Becerra', 'Beltrán', 'Benavides', 'Benavídez', 'Benítez', 'Bermúdez', 'Bernal', 'Berríos', 'Bétancourt', 'Blanco', 'Bonilla', 'Borrego', 'Botello', 'Bravo', 'Burgos', 'Bustamante',
        'Caballero', 'Cabán', 'Cabrera', 'Cadena', 'Caldera', 'Calderón', 'Camacho', 'Campos', 'Canales', 'Candelaria', 'Cano', 'Cantú', 'Caraballo', 'Carbajal', 'Cardenas', 'Cardona', 'Carranza', 'Carrasco', 'Carrasquillo', 'Carrera', 'Carrero', 'Carrillo', 'Carrion', 'Carvajal', 'Casanova', 'Casares', 'Casárez', 'Casas', 'Casillas', 'Castañeda', 'Castellanos', 'Castillo', 'Castro', 'Cavazos', 'Cazares', 'Ceballos', 'Ceja', 'Centeno', 'Cepeda', 'Cerda', 'Cervantes', 'Cervántez', 'Chacón', 'Chapa', 'Chavarría', 'Chávez', 'Cisneros', 'Collado', 'Collazo', 'Colón', 'Concepción', 'Contreras', 'Cordero', 'Córdova', 'Cornejo', 'Corona', 'Coronado', 'Corral', 'Corrales', 'Correa', 'Cortés', 'Cortez', 'Crespo', 'Cruz', 'Cuellar',
        'Dávila', 'de Jesús', 'De La Crúz', 'De La Fuente', 'De La Rosa', 'De La Torre', 'De León', 'Delgadillo', 'Delgado', 'Del Río', 'Del Valle', 'Díaz', 'Domínguez', 'Domínquez', 'Duarte', 'Dueñas', 'Duran',
        'Echevarría', 'Enríquez', 'Escalante', 'Escobar', 'Escobedo', 'Espinal', 'Espino', 'Espinosa', 'Espinoza', 'Esquibel', 'Esquivel', 'Estévez', 'Estrada',
        'Fajardo', 'Farías', 'Feliciano', 'Fernández', 'Ferrer', 'Fierro', 'Figueroa', 'Flores', 'Flórez', 'Fonseca', 'Franco', 'Frías', 'Fuentes',
        'Gaitán', 'Galarza', 'Galindo', 'Gallardo', 'Gallegos', 'Galván', 'Gálvez', 'Gamboa', 'Gamez', 'Gaona', 'Garay', 'García', 'Garrido', 'Garza', 'Gaytán', 'Gil', 'Girón', 'Godínez', 'Godoy', 'Gómez', 'Gonzales', 'González', 'Gracia', 'Granado', 'Granados', 'Griego', 'Guerra', 'Guerrero', 'Guevara', 'Gutiérrez', 'Guzmán',
        'Henríquez', 'Heredia', 'Hernádez', 'Hernandes', 'Hernández', 'Herrera', 'Hidalgo', 'Hinojosa', 'Holguín', 'Huerta', 'Hurtado',
        'Ibarra', 'Iglesias',
        'Jaramillo', 'Jiménez', 'Juárez', 'Jurado',
        'Lara', 'Laureano', 'Leal', 'Ledesma', 'Leiva', 'León', 'Leyva', 'Limón', 'Linares', 'Lira', 'Llamas', 'López', 'Lovato', 'Lozada', 'Lozano', 'Lugo', 'Luján', 'Luna',
        'Madera', 'Madrid', 'Madrigal', 'Maldonado', 'Mamani', 'Manzanares', 'Marín', 'Márquez', 'Marroquín', 'Martínez', 'Mateo', 'Matías', 'Matos', 'Maya', 'Mayorga', 'Medina', 'Medrano', 'Mejía', 'Meléndez', 'Melgar', 'Mena', 'Méndez', 'Mendoza', 'Menéndez', 'Mercado', 'Merino', 'Mesa', 'Meza', 'Miranda', 'Molina', 'Mondragón', 'Montalvo', 'Montañez', 'Montaño', 'Montenegro', 'Montero', 'Montes', 'Montez', 'Montoya', 'Mora', 'Morales', 'Moreno', 'Mota', 'Moya', 'Muñiz', 'Muñoz', 'Murillo', 'Muro',
        'Naranjo', 'Nava', 'Navarrete', 'Navarro', 'Nazario', 'Negrete', 'Nieto', 'Nieves', 'Noriega', 'Núñez',
        'Ocampo', 'Ocasio', 'Ochoa', 'Ojeda', 'Olivares', 'Olivárez', 'Olivas', 'Olivera', 'Olivo', 'Olmos', 'Olvera', 'Oquendo', 'Ordóñez', 'Orellana', 'Ornelas', 'Orosco', 'Orozco', 'Ortega', 'Ortiz', 'Osorio', 'Otero', 'Ozuna',
        'Pacheco', 'Padilla', 'Palacios', 'Palomino', 'Palomo', 'Pantoja', 'Paredes', 'Parra', 'Partida', 'Patiño', 'Paz', 'Pedraza', 'Pedroza', 'Pelayo', 'Peña', 'Perales', 'Peralta', 'Perea', 'Pérez', 'Pichardo', 'Piña', 'Pineda', 'Pizarro', 'Polanco', 'Ponce', 'Porras', 'Portillo', 'Posada', 'Prado', 'Preciado', 'Prieto', 'Puente', 'Puga', 'Pulido',
        'Quesada', 'Quezada', 'Quiñones', 'Quiñónez', 'Quintana', 'Quintanilla', 'Quintero', 'Quiroz', 'Quispe',
        'Rael', 'Ramírez', 'Ramón', 'Ramos', 'Rangel', 'Raya', 'Razo', 'Regalado', 'Rendón', 'Rentería', 'Reséndez', 'Reyes', 'Reyna', 'Reynoso', 'Rico', 'Rincón', 'Riojas', 'Ríos', 'Rivas', 'Rivera', 'Rivero', 'Robledo', 'Robles', 'Rocha', 'Rodarte', 'Rodrígez', 'Rodríguez', 'Rodríquez', 'Rojas', 'Rojo', 'Roldán', 'Rolón', 'Romero', 'Romo', 'Roque', 'Rosado', 'Rosales', 'Rosario', 'Rosas', 'Rubio', 'Ruelas', 'Ruiz',
        'Saavedra', 'Sáenz', 'Salas', 'Salazar', 'Salcedo', 'Salcido', 'Saldaña', 'Saldivar', 'Salgado', 'Salinas', 'Samaniego', 'Sanabria', 'Sanches', 'Sánchez', 'Sandoval', 'Santacruz', 'Santana', 'Santiago', 'Santillán', 'Sarabia', 'Sauceda', 'Saucedo', 'Sedillo', 'Segovia', 'Segura', 'Sepúlveda', 'Serna', 'Serrano', 'Serrato', 'Sevilla', 'Sierra', 'Sisneros', 'Solano', 'Solís', 'Soliz', 'Solorio', 'Solorzano', 'Soria', 'Sosa', 'Sotelo', 'Soto', 'Suárez',
        'Tafoya', 'Tamayo', 'Tamez', 'Tapia', 'Tejada', 'Tejeda', 'Téllez', 'Tello', 'Terán', 'Terrazas', 'Tijerina', 'Tirado', 'Toledo', 'Toro', 'Torres', 'Tórrez', 'Tovar', 'Trejo', 'Treviño', 'Trujillo',
        'Ulibarri', 'Ulloa', 'Urbina', 'Ureña', 'Urías', 'Uribe', 'Urrutia',
        'Vaca', 'Valadez', 'Valdés', 'Valdez', 'Valdivia', 'Valencia', 'Valentín', 'Valenzuela', 'Valladares', 'Valle', 'Vallejo', 'Valles', 'Valverde', 'Vanegas', 'Varela', 'Vargas', 'Vásquez', 'Vázquez', 'Vega', 'Vela', 'Velasco', 'Velásquez', 'Velázquez', 'Vélez', 'Véliz', 'Venegas', 'Vera', 'Verdugo', 'Verduzco', 'Vergara', 'Viera', 'Vigil', 'Villa', 'Villagómez', 'Villalobos', 'Villalpando', 'Villanueva', 'Villareal', 'Villarreal', 'Villaseñor', 'Villegas',
        'Yáñez', 'Ybarra',
        'Zambrano', 'Zamora', 'Zamudio', 'Zapata', 'Zaragoza', 'Zarate',, 'Zelaya', 'Zúñiga',
    ];

    protected static $titleMale = ['Sr.', 'D.', 'Dr.', 'Lic.', 'Ing.'];

    protected static $titleFemale = ['Sra.', 'Srta.', 'Dña', 'Dr.', 'Lic.', 'Ing.'];

    protected static $licenceCodes = ['M', 'P', 'A', 'B', 'C', 'T'];


    public function ci()
    {
        $number = static::numberBetween(222222, 14999999);
        return $number;
    }

    public function licenceCode()
    {
        return static::randomElement(static::$licenceCodes);
    }
}
