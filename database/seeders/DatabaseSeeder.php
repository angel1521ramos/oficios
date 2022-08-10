<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oficio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\Oficio::factory(50)->create();

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '15-dic-21',
            'hora' => 'SIN DATO',
            'noOficio' => 'SGPARN.02.IRA.4084/21',
            'dependencia' => 'SECRETARIO DE MEDIO AMBIENTE Y RECURSOS NATURALES',
            'remitente' => 'JORGE ANDRES SANTANDER ESPINOSA',
            'asunto' => 'OPINION TECNICA DEL PROYECTO NUEVA PLANTA RENDER',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-dic-21',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LOC. EJIDO SAN JOSE POCHITOQUE, MINATITLÁN, VER',
            'remitente' => 'C.JESÚS SOTO CARRASCO COMISARIADO EJIDAL, C.ANDRES SOTO RODRÍGUEZ CONSEJO DE VIGILANCIA',
            'asunto' => 'SOLICITUD DE APERTURA DE CAMINO COSECHERO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '29-dic-21',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONGREGACIÓN FERNANDO LOPEZ ARIAS AGENTE MUNICIPAL',
            'remitente' => 'SR.ERASTO HERNÁNDEZ SANTIAGO',
            'asunto' => 'SOLICITUD DE MATERIAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '29-dic-21',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONGREGACIÓN FERNANDO LOPEZ ARIAS AGENTE MUNICIPAL',
            'remitente' => 'SR.ERASTO HERNÁNDEZ SANTIAGO',
            'asunto' => 'SOLICITUD DE MATERIAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '30-dic-21',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONGREGACIÓN FERNANDO LOPEZ ARIAS MUNICIPIO DE MINATITLÁN, VER.',
            'remitente' => 'PATRONATO DEL CAMINO',
            'asunto' => 'SOLICITUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '30-dic-21',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO PROGRESO DEL MIRADOR MUNICIPIO DE MINATITLÁN, VERACRUZ.',
            'remitente' => 'AUTORIDADES DE LA COMUNIDAD',
            'asunto' => 'SOLICITUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '31-dic-21',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'SR.GONZALO HDEZ ARMAS',
            'asunto' => 'INVITACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '31-dic-21',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONGREGACIÓN FERNANDO LÓPEZ ARIAS',
            'remitente' => 'ERASTO HERNANDEZ SANTIAGO',
            'asunto' => 'SOLICITUD PARA DESPENSAS PARA LAS MADRES Y PADRES DE FAMILIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '31-dic-21',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LOC.EJIDO SAN JOSE POCHITOQUE, MINATITLÁN, VER',
            'remitente' => 'C.JESÚS SOTO CARRASCO COMISARIADO EJIDAL, C.ANDRES SOTO RODRÍGUEZ',
            'asunto' => 'SOLICITUD DE APERTURA DE CAMINO COSECHERO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => 'SIN DATO',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIEZ INTERNATIONAL CAMIONES S.A.DE C.V',
            'remitente' => 'LIC.MONICA MENDOZA MARTÍNEZ',
            'asunto' => 'COTIZACION',
            'telefono' => '921 138 6581',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => 'SIN DATO',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ASOCIACION DE AUTORIDADES LOCALES DE MÉXICO, A.C.',
            'remitente' => 'C. HERMILO PEREZ CABRERA',
            'asunto' => 'INVITACIÓN A FORMAR PARTE DE LA FAMILIA AALMAC',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => 'SIN DATO',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'remitente' => 'SIN DATO',
            'asunto' => 'REGISTRO DE FIRMAS AUTORIZADAS POR LOS ORGANISMOS PARA LA CERTIFICACION DE SOLICITUDES DE PRÉSTAMOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '01-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LOCALIDAD AREA RURAL CHICHONAL NOPALAPA, MUNICIPIO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'SIN DATO',
            'asunto' => 'AMPLIACIÓN DE RED ELÉCTRICA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '01-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LOCALIDAD AREA RURAL CHICHONAL NOPALAPA, MUNICIPIO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'SIN DATO',
            'asunto' => 'AMPLIACIÓN DE RED ELÉCTRICA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '03-ene-22',
            'hora' => '01:51:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO SAN FRANCISCO LAS ÁNIMAS',
            'remitente' => 'GONZALO TORRES SALOMÉ SUB-AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD PARA DOS VOLTEOS Y UN PAILODER PARA DAR MANTENIMIENTO A LOS ACCESOS Y CAMINOS DE TERRACERÍA DEL CENTRO DEL POBLADO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '03-ene-22',
            'hora' => '01:51:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO SAN FRANCISCO LAS ÁNIMAS',
            'remitente' => 'GONZALO TORRES SALOMÉ SUB-AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD PARA DOS VOLTEOS Y UN PAILODER PARA DAR MANTENIMIENTO A LOS ACCESOS Y CAMINOS DE TERRACERÍA DEL CENTRO DEL POBLADO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '03-ene-22',
            'hora' => '01:51:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO SAN FRANCISCO LAS ÁNIMAS',
            'remitente' => 'GONZALO TORRES SALOMÉ SUB-AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD PARA DOS VOLTEOS Y UN PAILODER PARA DAR MANTENIMIENTO A LOS ACCESOS Y CAMINOS DE TERRACERÍA DEL CENTRO DEL POBLADO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '03-ene-22',
            'hora' => '11:47:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'COMUNIDAD RURAL GUSTAVO DÍAZ ORDAZ',
            'remitente' => 'RODOLFO SOLIS HERNANDEZ COMISARIADO EJIDAL, EFREN ITEHUA ROMERO CONSEJO DE VIGILANCIA',
            'asunto' => 'SOLICITUD DE COLABORACIÓN PARA LA CONSTRUCCIÓN DE UN PARQUE RECREATIVO EN LA COMUNIDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '03-ene-22',
            'hora' => '11:47:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'COMUNIDAD RURAL GUSTAVO DÍAZ ORDAZ',
            'remitente' => 'RODOLFO SOLIS HERNANDEZ COMISARIADO EJIDAL, EFREN ITEHUA ROMERO CONSEJO DE VIGILANCIA',
            'asunto' => 'SOLICITUD DE AYUDA PARA QUE LAS PETICIONES SEAN ESCUCHADAS Y REALIZADAS',
            'telefono' => '922 101 0642',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '03-ene-22',
            'hora' => '11:47:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'COMUNIDAD RURAL GUSTAVO DÍAZ ORDAZ',
            'remitente' => 'RODOLFO SOLIS HERNANDEZ COMISARIADO EJIDAL, EFREN ITEHUA ROMERO CONSEJO DE VIGILANCIA',
            'asunto' => 'SOLICITUD DE AYUDA PARA EL CAMINO DIAMANTE DIAZ ORDAZ',
            'telefono' => '922 101 0642',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '02:38:00 p. m.',
            'noOficio' => 'TRANSP2022/0006',
            'dependencia' => 'UNIDAD DE TRANSPARENCIA H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'LIC.DEYCI MONTORES PEREZ TITULAR DE LA UNIDAD DE TRANSPARENCIA',
            'asunto' => 'SOLICITUD DE INFORMACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '02:36:00 p. m.',
            'noOficio' => 'TRANSP2022/0003',
            'dependencia' => 'UNIDAD DE TRANSPARENCIA H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'LIC.DEYCI MONTORES PEREZ TITULAR DE LA UNIDAD DE TRANSPARENCIA',
            'asunto' => 'SOLICITUD DE SELLO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '11:55:00 a. m.',
            'noOficio' => '0-003/2022',
            'dependencia' => 'SINDICATO DE EMPLEADOS MUNICIPALES DE MINATITLÁN, VER',
            'remitente' => 'MTRO.BALTAZAR GONZALEZ MENDIOLA SECRETARIO GENERAL',
            'asunto' => 'COMISIÓN SINDICAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '11:50:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO ROMITA MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'DARIO FRANCISCO RODRIGUEZ SUB-AGENTE MUNICIPAL EJIDO ROMITA',
            'asunto' => 'SOLICITUD DE APOYO PARA ESTE 6 DE ENERO',
            'telefono' => '922 255 3304',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '12:05:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONGREGACIÓN OTAPA, MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'MARÍA DE LA LUZ FERNANDEZ DOMINGUEZ AGENTE MUNICIPAL DE LA CONGREGACIÓN OTAPA',
            'asunto' => 'SOLICITUD DE APOYO PARA ESTE 6 DE ENERO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '01:12:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LAS ANIMAS MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'ESTEBAN FRANCISCO GONZALEZ AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE APOYO PARA ESTE 6 DE ENERO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '08:48:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONGREGACION EL TABASQUEÑO',
            'remitente' => 'C.ENRIQUE MARTÍNEZ CRUZ AGENTE MUNICIPAL DE LA CONGREGACIÓN EL TABASQUEÑO',
            'asunto' => 'SOLICITUD DE DULCES PARA CELEBRACIÓN DEL DIA DE REYES',
            'telefono' => '922 218 1882',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '09:50:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONGREGACIÓN LAS LOMAS, MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'C.CECILIA RAMOS GONZÁLEZ',
            'asunto' => 'SOLICITUD DE APOYO PARA ESTE 6 DE ENERO',
            'telefono' => '922 233 1710',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '01:05:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SINDICATO UNICO DE EMPLEADOS MUNICIPALES DE MINATITLÁN, VER',
            'remitente' => 'C.ANDRES SANTOS ESCANDON SECRETARIO GENERAL, C.MARCOS CANDELARIA JUAREZ SRIO.DE TRABAJO Y CONFLICTOS',
            'asunto' => 'SOLICITUD DE APOYO PARA DARLE CUMPLIMIENTO A LA CLÁUSULA 47, CONVENIO EN NUESTRAS CONDICIONES GENERALES DE TRABAJO, PACTADAS ENTRE LA ENTIDAD PÚBLICA MUNICIPAL Y ESTA REPRESENTACIÓN SINDICAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '10:38:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'ISRAEL GONZÁLEZ ZAVALA SUB AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE APOYO PARA QUE SE REALICE UNA OBRA DE PRIMERA NECESIDAD EN LA COMUNIDAD COMO ES EL AGUA POTABLE',
            'telefono' => '922 593 8790',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '03:09:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO EL ROBLE MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'C.CARLOS A. CORTAZA MEZA SUB AGENTE MUNICIPAL EJIDO EL ROBLE',
            'asunto' => 'SOLICITUD DE APOYO PARA ESTE 6 DE ENERO',
            'telefono' => '922 282 7802',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '09:34:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO COACHAPA MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'BONIFACIA PÉREZ ROMERO SUB AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE APOYO PARA ESTE 6 DE ENERO',
            'telefono' => '922 255 7613',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '09:42:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO FRANCISCO DE GARAY COLORADO MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'C.ALBERTO LORENZO LURÍA SUB AGENTE MUNICIPAL DE FRANCISCO DE GARAY COLORADO',
            'asunto' => 'SOLICITUD DE APOYO PARA ESTE 6 DE ENERO',
            'telefono' => '922 209 0678',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '10:14:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO PALO BONITO MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'EZEQUIEL VERGARA LÓPEZ SUB-AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 115 2927',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '10:45:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LOC.EMILIO CARRANZA, MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'C.LAURENTINO HERNANDEZ CRUZ AGENTE MUNICIPAL DE EMILIO CARRANZA',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 218 1010',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '10:39:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LAS LIMAS MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'JUVENCIO PEREZ FONSECA SUB AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE APOYO PARA ESTE PARA ESTE 6 DE ENERO',
            'telefono' => '922 210 9834',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '10:42:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'ISRAEL GONZÁLEZ ZAVALA SUB AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD PARA LA CONSTRUCCIÓN DE UN AULA PARA EL PREESCOLAR MIGUEL HIDALGO Y COSTILLA CON CLAVE 30KJN42680',
            'telefono' => '922 593 8790',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '09:34:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO COACHAPA MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'BONIFACIA PEREZ ROMERO SUB AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE APOYO PARA UNA RETRO EXCABADORA Y UN VOLTEO',
            'telefono' => '922 255 7613',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '11:50:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO ROMITA MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'DARIO FRANCISCO RODRIGUEZ SUB-AGENTE MUNICIPAL EJIDO ROMITA',
            'asunto' => 'SOLICITUD DE APOYO PARA LA COMUNIDAD ROMITA PARA SOLICITAR CASA DE SUB AGENCIA',
            'telefono' => '922 255 3304',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONGREGACIÓN EL TABASQUEÑO',
            'remitente' => 'C.ENRIQUE MARTÍNEZ CRUZ AGENTE MUNICIPAL DE LA CONGREGACIÓN EL TABASQUEÑO',
            'asunto' => 'SOLICITUD DE MANTENIMIENTO DE CARRETERA',
            'telefono' => '922 218 1882',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => '04:21:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFATURA DE TRÁNSITO Y VIALIDAD DEL H.AYUNTAMIENTO DE MINATITLÁN,VER',
            'remitente' => 'LIC.SERGIO EDUARDO URQUIDI URDIANA JEFE DE TRÁNSITO Y VIALIDAD DEL H.AYUNTAMIENTO DE MINATITLÁN, VER',
            'asunto' => 'SOLICITUD DE MATERIAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JARDIN DE NIÑOS MANUEL C. TELLO',
            'remitente' => 'PROFRA.RINA CAAMAL DELFIN',
            'asunto' => 'SOLICITUD PARA REALIZAR SANITARIO Y LABAVO DE MANOS',
            'telefono' => '922 206 83 58',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '05-ene-22',
            'hora' => '10:41:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO EMILIANO ZAPATA MUNICIPIO DE MINATITLÁN, VER.',
            'remitente' => 'CELSO CRUZ CASTILLO SUB AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '05-ene-22',
            'hora' => '17:11:00 p. m.',
            'noOficio' => 'OIC/0003/2022',
            'dependencia' => 'ÓRGANO IMTERNO DE CONTROL H. AYUNTAMIENTO DE MINATITLÁN',
            'remitente' => 'LIC. GRACIELA CONZÁLEZ MARTÍNEZ',
            'asunto' => 'REQUERIMIENTO DE DEVOLUCIÓN DE SELLOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '05-ene-22',
            'hora' => '12:07:00 p. m.',
            'noOficio' => 'PMAVER/109/2022',
            'dependencia' => 'PROCURADURIA ESTATAL DE PROTECCION AL MEDIO AMBIENTE',
            'remitente' => 'ING. SERGIO RODRIGUEZ CORTES',
            'asunto' => 'COLABORACION PARA EL USO CORRECTO DE RECURSOS PÚBLICOS, DESTINADOS A LAS ACTIVIDADES DE LIMPIA, RECOLECCION, TRASLADO, TRATAMOENTO Y DISPOSICÍON FINAL DE RESIDUOS SÓLIDOS URBANOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000018',
            'fecha' => '05-ene-22',
            'hora' => '10:48:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'JOSE PLACIDO MARTINEZ FRANCISCO',
            'asunto' => 'APOYO DE 3 VENTILADORES PARA LA CAPILLA SAN JUDAS TADEO',
            'telefono' => '922 290 3449',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '06-ene-22',
            'hora' => '11:10:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO SAN FRANCISCO LOS ANIMAS',
            'remitente' => 'C. VIRGINIO GONZALES MARTÍNEZ, JULIO LIRA MARCIAL, JOSUE MARTINEZ MARTINEZ, SAMUEL MIGUEL ALOR',
            'asunto' => 'APOYO POR PROBLEMAS QUE CAUSO LA CONSTRUCTORA EN LA RECONSTRUCCION DEL TRAMO CARRETERO SAN FRANCISCO LAS ANIMAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '06-ene-22',
            'hora' => '13:40:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C.JOSE MARIA MORENO REYES JEFE DE MANZANA SECCIONAL 2481',
            'asunto' => 'SOLICITUD DE INTERVENCIÓN',
            'telefono' => '922 226 2955',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '06-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'COL.AGRÍCOLA Y GANADERA LA MICHOACANA. MINATITLÁN, VER.',
            'remitente' => 'ADOLFO FLORES MALFAVON SUB-AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE ALCANTARILLAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '07-ene-22',
            'hora' => '09:25:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'RUPERTO BAUTISTA HERNANDEZ COMISARIADO EJIDAL',
            'asunto' => 'APOYO',
            'telefono' => '922 276 5009',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '07-ene-22',
            'hora' => '09:25:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'RUPERTO BAUTISTA HERNANDEZ COMISARIADO EJIDAL',
            'asunto' => 'APOYO',
            'telefono' => '922 276 5009',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '07-ene-22',
            'hora' => '09:25:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'RUPERTO BAUTISTA HERNANDEZ COMISARIADO EJIDAL',
            'asunto' => 'APOYO',
            'telefono' => '922 276 5009',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '07-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'CIRCULAR N.002',
            'dependencia' => 'DIRECCION DE ADMINISTRACION PATRIMONIAL',
            'remitente' => 'LIC.MARÍA SOFÍA ALEMÁN TOSCA',
            'asunto' => 'LOS BIENES MUEBLES BAJO SU CUSTODIA, RESGUARDADO O USO DERIVADO, SERAN RESPONSABLES DE SU CUIDADO, Y EN SU CASO DE SU REPOSICIÓN Y DEL RESARCIMIENTO DE LOS DAÑOS Y PERJUICIOS CAUSADOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '07-ene-22',
            'hora' => '10:02:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'COMITÉ DE VENDEDORES DEL PATQUE EL MANGAL, JUANA CRUZ MORENO, RICARDA HERNANDEZ LAZARO, ROSALIA CRUZ REYES, ASESOR DR. CECILIO OREOZCO GUTIERREZ JEFE DE MANZANA',
            'asunto' => 'DARLE MANTENIMIENTO AL PARQUE EL MANGAL A TODAS SUS AREAS Y CONSERVARLAS EN LAS MEJORES CONDICIONES POSIBLES',
            'telefono' => '922 1998881, 9222200690, 922 1584910',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '00097',
            'fecha' => '07-ene-22',
            'hora' => '12:37:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LAS ANIMAS MUNICIPIO DE MINATITLÁN, VER',
            'remitente' => 'ESTEBAN FRANCISCO GONZALEZ AGENTE MUNICIPAL',
            'asunto' => '  "55": "",',
            'telefono' => '993 469 9272',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000099',
            'fecha' => '07-ene-22',
            'hora' => '12:43:00 p. m.',
            'noOficio' => 'DCAS-GRS-SGDUOS-SRAO-RADM-MIN-005/2022',
            'dependencia' => 'DIRECCIÓN CORPORATIVA DE ADMINISTRACIÓN Y SERVICIOS',
            'remitente' => 'FORTINO SANTOS VÁZQUEZ',
            'asunto' => 'TRABAJOS DE MANTENIMIENTO PREVENTIVO Y/O CORRECTIVOS SOBRE INSTALACIONES SUPERFICIALES A CARGO DEL SECTOR DUCTOS DE MINATITLÁN DE PLOG',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000100',
            'fecha' => '07-ene-22',
            'hora' => '12:59:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DELEGACION DE POLITICA REGIONAL COSOLEACAQUE',
            'remitente' => 'LIC. LUIS IBARRA PADRON',
            'asunto' => 'INVITACION A LA REUNIÓN DE TRABAJO PARA REALIZAR LA PRESENTACIÓN FORMAL Y DARLE SEGUIMIRNTO AL PROYECTO SAN GABRIEL',
            'telefono' => '922 1049273, 9221355705',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000111',
            'fecha' => '10-ene-22',
            'hora' => '09:10:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'FOMENTO AGROPECUARIO',
            'remitente' => 'ING.VALENTIN SÁNCHEZ HIPÓLITO DIRECTOR DE FOMENTO AGROPECUARIO',
            'asunto' => 'INVITACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '07-ENERO-2022',
            'hora' => 'SIN DATO',
            'noOficio' => 'V500.0048.2022',
            'dependencia' => 'SUBSECRETARÍA DE DESARROLLO URBANO Y VIVIENDA',
            'remitente' => 'DANIEL ACTAVIO FAJARDO ORTIZ',
            'asunto' => 'COMUNICACIÓN DE DISTRIBUCIÓN DE SUBSIDIOS DEL PROGRAMA DE MEJORAMIENTO URBANO VERTIENTE MEJORAMIENTO INTEGRAL DE BARRIOS 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '07-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'V500.0048.2022',
            'dependencia' => 'SUBSECRETARÍA DE DESARROLLO URBANO Y VIVIENDA',
            'remitente' => 'DANIEL ACTAVIO FAJARDO ORTIZ',
            'asunto' => 'COMUNICACIÓN DE DISTRIBUCIÓN DE SUBSIDIOS DEL PROGRAMA DE MEJORAMIENTO URBANO VERTIENTE MEJORAMIENTO INTEGRAL DE BARRIOS 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000131',
            'fecha' => '10-ene-22',
            'hora' => '12:54:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'FOMENTO AGROPECUARIO',
            'remitente' => 'ING.VALENTIN SÁNCHEZ HIPÓLITO DIRECTOR DE FOMENTO AGROPECUARIO',
            'asunto' => 'INVITACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000136',
            'fecha' => '10-ene-22',
            'hora' => '13:02:00 p. m.',
            'noOficio' => '002/2022',
            'dependencia' => 'FOMENTO FORESTAL, ECOLOGÍA Y MEDIO AMBIENTE',
            'remitente' => 'LIC. BLINO HERNÁNDEZ FERNÁNDEZ',
            'asunto' => 'PROGRAMA RECICLA TU NAVIDAD 2022',
            'telefono' => '9222333206',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000147',
            'fecha' => '10-ene-22',
            'hora' => '13:22:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'MIGUEL ANGEL CABRERA QUIROZ',
            'asunto' => 'PROPUESTA PARA BUEN GOBIERN, 1.-LIMPIA PUBLICA, 2.-TRANSITO Y VIALIDAD, POLICIA MUNICIPAL, PROTECCION CIVIL',
            'telefono' => '922 100 2618',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000148',
            'fecha' => '10-ene-22',
            'hora' => '14:00:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'MINA GAS S.A. DE C.V.',
            'remitente' => 'MARGARITA SANTIAGO TOGA',
            'asunto' => 'SOLICITUD DE CAMBIO DE USO DE SUELO',
            'telefono' => '9221257956',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '10-ene-22',
            'hora' => '13:43:00 p. m.',
            'noOficio' => 'SAA-037',
            'dependencia' => 'SOCIEMUVEM',
            'remitente' => 'ITZEL CABRERA TOMINES',
            'asunto' => 'SOLICITUD PARA TRASNPORTE',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '10-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'CIIT/DG/0036/2022',
            'dependencia' => 'CORREDOR INTEROCEÁNICO ISTMO DE TEHUANTEPEC',
            'remitente' => 'LIC. RAFAEL MARÍN MOLLINEDO',
            'asunto' => 'PROGRAMA PARA EL DESARROLLO DEL ISTMO DE TEHUANTEPEC',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '10-ene-22',
            'hora' => '11:45:00 a. m.',
            'noOficio' => 'PM/001/2021',
            'dependencia' => 'SIN DATO',
            'remitente' => 'DRA. CARMEN MEDEL PALMA PRESIDENTA MUNICIPAL H. AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'asunto' => 'SE SOLICITA PUBLICACIÓN DEL REGLAMENTO INTERNO DE LA ADMINISTRACIÓN PÚBLICA MUNICIPAL Y ORGANIGRAMA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '11-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'VICTOR PAVON CHAZANO',
            'asunto' => 'TRABAJO',
            'telefono' => '9221368495',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '11-ene-22',
            'hora' => '13:44:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'ISAAC ALFILLE MIZRAHI',
            'asunto' => 'SOLICITUD DE APOYO PARA ACTUALIZAR INMUEBLE Y PAGO DE PREDIAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000161',
            'fecha' => '11-ene-22',
            'hora' => '11:33:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECCION DE FOMENTO FORESTAL, ECOLOGÍA Y MEDIO AMBIENTE',
            'remitente' => 'LIC. BLINO HERNÁNDEZ FERNÁNDEZ',
            'asunto' => 'INVITACION DE INICIO DE PROGRAMA RECICLA TU NAVIDAD',
            'telefono' => '922 233 3206',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000179',
            'fecha' => '11-ene-22',
            'hora' => '14:00:00 p. m.',
            'noOficio' => 'TyV/011/2022',
            'dependencia' => 'JEFATURA DE TRÁNSITO Y VIALIDAD MUNICIPAL',
            'remitente' => 'LIC.SERGIO EDUARDO URQUIDI URDIANA JEFE DE TRÁNSITO Y VIALIDAD DEL H.AYUNTAMIENTO DE MINATITLÁN, VER',
            'asunto' => 'LISTA DE ASISTENCIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000187',
            'fecha' => '11-ene-22',
            'hora' => '15:45:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'TELMEX DIRECCIÓN DIVISIONAL SUR GERENCIA DE MERCADO EMPRESARIAL ÁREA COATZACOALCOS',
            'remitente' => 'ROBERTO ORTIZ VIDAL',
            'asunto' => 'CONCEDER UNA REUNION AL GRUPO EJECUTIVO',
            'telefono' => '921 218 9202',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000189',
            'fecha' => '11-ene-22',
            'hora' => '17:11:00 p. m.',
            'noOficio' => 'TM-0012/2022',
            'dependencia' => 'TESORERIA MUNICIPAL',
            'remitente' => 'LIC. ERNESTO ARTEMIO VELAZCO ESCOBAR TESORERO MUNICIPAL',
            'asunto' => 'ES PRECISO QUE EL ÁREA DE CUENTA PÚBLICA CUENTE CON SU DIRECTOR, MISMO QUE A LA FECHA NO HA SIDO NOMBRADO, RAZÓN POR LA CUAL ME PERMITO SUGERIRLE DOS PRESONAS DE MI CONFIANZA DEBIDAMENTE PREPARADAS PARA DICHO CARGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '12-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'LIC. ARNOLDO MORALEZ DIAZ',
            'asunto' => 'PROPUESTA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '12-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'PATRONATO VECINAL',
            'remitente' => 'LIC.MARTIN VAZQUEZ L.',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 145 0350',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '12-ene-22',
            'hora' => '10:57:00 a. m.',
            'noOficio' => '015/CMD/2022',
            'dependencia' => 'JEFATURA DE LA COMISIÓN MUNICIPAL DEL DEPORTE COMUDE',
            'remitente' => 'LD.ERICK  HERNÁNDEZ SOTO ENCARGADO DE JEFATURA DE COMISIÓN MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000203',
            'fecha' => '12-ene-22',
            'hora' => '10:28:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CRUZ ROJA MEXICANA DELEGACION MINATITLÁN',
            'remitente' => 'SRA. JUDITH VELEZ LEDEZMA',
            'asunto' => 'SOLICITUD DE APOYO Y VISITA',
            'telefono' => '922 128 7241',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000205',
            'fecha' => '12-ene-22',
            'hora' => '10:31:00 a. m.',
            'noOficio' => '012/CMD/2022',
            'dependencia' => 'JEFATURA DE LA COMISIÓN MUNICIPAL DEL DEPORTE COMUDE',
            'remitente' => 'LD.ERICK  HERNÁNDEZ SOTO ENCARGADO DE JEFATURA DE COMISIÓN MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'SOLICITUD DE APOYO PARA LA DONACIÓN DE 23 TRAJES DEPORTIVOS PARA EL EQUIPO DE FUTBOL JUVENIL DE LA COMUNIDAD BENITO JUÁREZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000207',
            'fecha' => '11-ene-22',
            'hora' => '10:55:00 a. m.',
            'noOficio' => 'DAP/006/2022',
            'dependencia' => 'JEFATURA DE ALUMBRADO PÚBLICO DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'ING.ABEL MORALES HOYOS ENCARGADO DE LA JEFATURA DE ALUMBRADO PÚBLICO',
            'asunto' => 'RESPUESTA AL OFICIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000210',
            'fecha' => '12-ene-22',
            'hora' => '11:15:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'DR.CARLOMAGNO POBLETE FORTUNA PRESIDENTE DEL COMITÉ',
            'asunto' => 'SEGUIMIENTO DE SOLICITUD DE ENTUBADO DE DRENAJE Y PAVIMENTACIÓN DE CALLE INCONCLUSA',
            'telefono' => '922 113 3049',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000214',
            'fecha' => '12-ene-22',
            'hora' => '11:50:00 a. m.',
            'noOficio' => 'DOPYJ/001/2022',
            'dependencia' => 'DIRECCIÓN DE COMISIÓN DE ORNATOS, PARQUES Y JARDINES',
            'remitente' => 'LIC.JUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISIÓN DE ORNATOS, PARQUES Y JARDINES',
            'asunto' => 'INFORMACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000215',
            'fecha' => '12-ene-22',
            'hora' => '11:56:00 a. m.',
            'noOficio' => 'SSB/CTZ-01-30-2022',
            'dependencia' => 'COMISIÓN FEDERAL DE ELECTRICIDAD',
            'remitente' => 'LIC. HERMES QUETZALCOAT QUINO PÉREZ',
            'asunto' => '2DA REUNIÓN MUNICIPIO DE MINATITLÁN-CFE.COATZACOALCOS, VERACRUZ',
            'telefono' => '921 2112372',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000218',
            'fecha' => '12-ene-22',
            'hora' => '12:30:00 p. m.',
            'noOficio' => '001-01-PC-2022',
            'dependencia' => 'COMISION DE PARTICIPACION CIUDADANA',
            'remitente' => 'LIC. LUIS OCTAVIO VILLANUEVA VÁSQUEZ',
            'asunto' => 'SOLICITUD PARA CONVOCAR SESIÓN DE CABILDO PARA QUE ESTE AUTORICE LA INSTALACIÓN DE LOS ÓRGANOS DE PARTICIPACIÓN CIUDADANA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000221',
            'fecha' => '12-ene-22',
            'hora' => '14:12:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO LA ESMERALDA MUNICIPIO DE MINATITLÁN, VER.',
            'remitente' => 'ISRAEL ANTEMATE MORALES SUB-AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE APOYO PARA LA SRA.OFELIA MENDOZA Y SR.CRISPÍN HERRERA LOPEZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '12-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO LA ESMERALDA MUNICIPIO DE MINATITLÁN, VER.',
            'remitente' => 'ISRAEL ANTEMATE MORALES SUB-AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE APOYO PARA LA SRA.OFELIA MENDOZA Y SR.CRISPÍN HERRERA LOPEZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000226',
            'fecha' => '13-ene-22',
            'hora' => '08:41:00 a. m.',
            'noOficio' => '006/2122',
            'dependencia' => 'SECRETARIA DE EDUCACION DE VERACRUZ ESCUELA PRIMARIA PRIMERO DE JUNIO',
            'remitente' => 'ROBERTO REYES BELTRAN',
            'asunto' => 'INVITACIÓN',
            'telefono' => '922 159 1228',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000230',
            'fecha' => '13-ene-22',
            'hora' => '09:10:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ESCUELA GRAL. FRANCISCO VILLA TURNO VESPERTINO, ESCUELA NEZAHUALCOYOTL, ESCUELA ALFONSO ARROLLO FLORES, ESCUELA FRANCISCO VILLA, ESCUELA 22 DE SEPTIEMBRE TURNO VESPERTINO',
            'remitente' => 'PROFRA.LILIANA ELIZABETHCRUZ, PROFR.DOMINGO CELDO MOLINA, PROFR.LUIS JORGE MUÑOZ FLORES, PROFR.MARCELO ALEJANDRO TADEO CRUZ, PROFR.JESUS MUÑOS HERNANDEZ',
            'asunto' => 'SOLICITUD DE AUDIENCIA EN LA PRESIDENCIA MUNICIPAL DEL H.AYUNTAMIENTO DE MINATITLAN',
            'telefono' => '922 127 7927, 922 162 4321, 922 113 2811, 921 174 4845, 922 200 0760',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000247',
            'fecha' => '13-ene-22',
            'hora' => '11:18:00 a. m.',
            'noOficio' => '004/01/DIR/IMM72022',
            'dependencia' => 'INSTITUTO MUNICIPAL DE LAS MUJERES EN MINATITLÁN, VERACRUZ',
            'remitente' => 'LIC.EULALIA NATIVIDAD BERNARDO DIRECTORA DEL INSTITUTO MUNICIPAL DE LAS MIJERES EN MINATITLÁN, VERACRUZ',
            'asunto' => 'CONVOCATORIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000248',
            'fecha' => '13-ene-22',
            'hora' => '11:19:00 a. m.',
            'noOficio' => 'REG.8/006/2022',
            'dependencia' => 'REGIDURÍA OCTAVA',
            'remitente' => 'LIC.MIGUEL ÁNGEL ESTRADA FERRER REGIDOR OCTAVO SALUD Y ASISTENCIA PÚBLICA, DERECHOS HUMANOS',
            'asunto' => 'SOLICITUD PARA DOS COPIAS CERTIFICADAS DE LA ACTA DE SESION DE CABILDO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000257',
            'fecha' => '13-ene-22',
            'hora' => '14:45:00 p. m.',
            'noOficio' => 'OIC/0001/2022',
            'dependencia' => 'ÓRGANO INTERNO DE CONTROL',
            'remitente' => 'LIC.GRACIELA GONZÁLEZ MARTÍNEZ',
            'asunto' => 'DECLARACIÓN DE SITUACIÓN PATRIMONIAL Y DE INTERES A TODO EL PERSONAL DEL H.AYUNTAMIENTO DE MINATITLÁN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000259',
            'fecha' => '13-ene-22',
            'hora' => '15:45:00 p. m.',
            'noOficio' => 'DGRC/DG/0034/2021',
            'dependencia' => 'DIRECCION GENERAL DEL REGISTRO CIVIL',
            'remitente' => 'LIC.MTRO.CARLOS CORDOVA VEGA ENCARGADO DE DESPACHO LA DIRECCIÓN GENERAL DEL REGISTRO CIVIL',
            'asunto' => 'REGISTRO CÉDULA, SELLOS Y FIRMAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000260',
            'fecha' => '13-ene-22',
            'hora' => '17:30:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECCIÓN DE LIMPIA',
            'remitente' => 'LIC.HECTOR SOTO HERNANDEZ DIRECTOR DE LIMPIA PÚBLICA',
            'asunto' => 'SE SOLICITA LA COLABORACIÓN PARA EL USO CORRECTO DE RECURSOS PÚBLICOS, DESTINADOS A LAS ACTIVIDADES DE LIMPIA, RECOLECCIÓN, TRASLADO, TRATAMIENTO Y DISPOSICIÓN DE LOS RESIDUOS SOLIDOS URBANOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000314',
            'fecha' => '14-ene-22',
            'hora' => '12:02:00 p. m.',
            'noOficio' => 'CBV42 DIR./001/22',
            'dependencia' => 'DIRECCIÓN DEL COBAEV -42',
            'remitente' => 'DR.MIGUEL ÁNGEL MARTÍNEZ HERNÁNDEZ DIRECTOR DEL COBAEV -42',
            'asunto' => 'FELICITACIÓN POR SU ALTO ENCARGO',
            'telefono' => '922 222 7295',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000338',
            'fecha' => '14-ene-22',
            'hora' => '14:12:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SECRETARIA DE BIENESTAR',
            'remitente' => 'C.MARIA DE LOS ANGELES PRIETO LINARES DIRECTORA DE LA SECRETARÍA DE BIENESTAR REGIÓN 08 PROGARAMA ADULTOS MAYORES Y DISCAPACIDAD',
            'asunto' => 'SOLICITUD DE AYUDA PARA CORDINAR LA ENTREGA DE APOYOS DEL DIA 12 DE ENERO AL 07 DE FEBRERO DEL PRESENTE AÑO, SE LLEVARÁ A CABO LA ENTREGA DE APOYOS CORRESPONDIENTE AL BIMESTRE ENERO - FEBRERO 01 BIMESTRE 2022 PARA LOS BENEFICIARIOS ADULTOS MAYORES +68',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000340',
            'fecha' => '14-ene-22',
            'hora' => '14:25:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LOS PP´S',
            'remitente' => 'C.ENRIQUE ALEJANDRO MARTÍNEZ TORRES',
            'asunto' => 'SOLICITUD PARA PERMISO DE ESPACIO EN EL PARQUE',
            'telefono' => '922 100 1401',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000342',
            'fecha' => '14-ene-22',
            'hora' => '14:36:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'PARROQUIA DE SAN PEDRO APÓSTOL',
            'remitente' => 'PBRO.FERNANDO CERERO UGARTE PÁRROCO DE SAN PEDRO APÓSTOL',
            'asunto' => 'SOLICITUD DE APOYO PARA LA REALIZACIÓN DE LAS FESTIVIDADES EN HONOR A LA VIRGEN DE LA CANDELARIA',
            'telefono' => '922 223 8221',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000344',
            'fecha' => '14-ene-22',
            'hora' => '14:40:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SECRETARIA DE EDUCACIÓN DE VERACRUZ SUBSECRETARIA DE EDUCACIÓN BÁSICA DIRECCION GENERAL DE EDUCACIÓN PRIMARIA FEDERALIZADA ESCUELA PRIMARIA GENERAL CINCO DE MAYO',
            'remitente' => 'ARACELI CAMPACHANO SANTIAGO DIRECTORA',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 227 9640',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000351',
            'fecha' => '14-ene-22',
            'hora' => '17:32:00 p. m.',
            'noOficio' => 'CIRCULAR DGRC/SIREOP/00126/2022',
            'dependencia' => 'DIRECCIÓN GENERAL DEL REGISTRO CIVIL DEL ESTADO DE VERACRUZ',
            'remitente' => 'MTRO.CARLOS CORDOVA VEGA ENCARGADO DEL DESPACHO DE LA DIRECCIÓN GENERAL DEL REGISTRO CIVIL DEL ESTADO DE VERACRUZ',
            'asunto' => 'PROGRAMA MATRIMONIOS COLECTIVOS 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DG/6000/146/2022',
            'dependencia' => 'INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'remitente' => 'LIC.DANIELA GUADALUPE GRIEGO CEBALLOS DIRECTORA GENERAL DEL INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'asunto' => 'REMITIR INFORMACIÓN DE PRESUPUESTOS DE EGRESOS, PLANTILLA DE PERSONAL Y NÓMINAS DEL PRESENTE AÑO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'EXT.09/DOP/2022',
            'dependencia' => 'DIRECCIÓN GENERAL DE ORDENAMIENTO TERRITORIAL Y SUSTENTABILIDAD',
            'remitente' => 'ING.VICTOR MANUEL ARIAS ORDOÑEZ DIRECTOR GENERAL DE ORDENAMIENTO TERRITORIAL Y SUSTENTABILIDAD',
            'asunto' => 'SOLICITUD DE INSTALACIÓN DEL COPLADEMUN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-ene-22',
            'hora' => '09:30:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ESCUELA PRIMARIA MIGUEL ALEMÁN',
            'remitente' => 'C. SRA. RUBICELLA GUTIÉRREZ MÉNDEZ PRESIDENTA APF, SERGIO LUIS AGUILAR DIRECTOR, C. SRA. ROSALÍA ALEJANDRO CANO PRESIDENTA CEPS',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-ene-22',
            'hora' => '10:57:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'YADIRA DEL CARMEN BALCAZAR SANTIAGO',
            'asunto' => 'SOLICITUD DE AYUDA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000364',
            'fecha' => '17-ene-22',
            'hora' => '10:19:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'SR.ROBERTO MENDOZA',
            'asunto' => 'SOLICITUD DE AUDIENCIA PARA PLATICARLE SOBRE UNOS PROYECTOS',
            'telefono' => '922 107 0094, 922 192 4203',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000366',
            'fecha' => '17-ene-22',
            'hora' => '10:45:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'UPAV UNIVERSIDAD POPULAR AUTÓNOMA DE VERACRUZ CON SEDE EN MINATITLÁN',
            'remitente' => 'LIC.FELICITAS MARTÍNEZ TORRES DIRECTORA DE LA LICENCIATUIRA EN PSICOLOGÍA',
            'asunto' => 'APOYO PARA EL USO DEL PARQUE LA ROTONDA',
            'telefono' => '922 101 6502',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000367',
            'fecha' => '17-ene-22',
            'hora' => '10:48:00 a. m.',
            'noOficio' => 'SPC/OS/016-01/2022',
            'dependencia' => 'SECRETARIA DE PROTECCIÓN CIVIL',
            'remitente' => 'DRA.GUADALUPE OSORNO MALDONADO SECRETARIA DE PROTECCÓN CIVIL',
            'asunto' => 'SOLICITUD DE APOYO PARA REUNIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SECTUR/DST/022-AJ/2022',
            'dependencia' => 'SECRETARÍA DE TURISMO Y CULTURA',
            'remitente' => 'DR.OMAR CASTRO PRADO DIRECTOR DE SERVICIOS TURÍSTICOS',
            'asunto' => 'SOLICITUD DE APOYO CON LA FINALIDAD QUE SEA DESIGNADO EL ENCARGADO O ENCARGADA DE TURISMO DE SU MUNICIPIO O QUIEN ESTIME PERTINENTE PARA QUE TENGA A BIEN ACOMPAÑARNOS A UNA IMPORTANTE REUNIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000375',
            'fecha' => '17-ene-22',
            'hora' => '11:36:00 a. m.',
            'noOficio' => 'BDM/011/2021-2022',
            'dependencia' => 'DIRECCIÓN GENERAL DE EDUCACIÓN INICIAL Y PREESCOLAR JARDÍN DE NIÑOS BERTHA DOMÍNGUEZ MARTÍNEZ',
            'remitente' => 'LIC.LILIANA GUERRA MELÉNDEZ DIRECTORA',
            'asunto' => 'INVITACIÓN A VISITA',
            'telefono' => '922 156 3210',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000386',
            'fecha' => '17-ene-22',
            'hora' => '14:46:00 p. m.',
            'noOficio' => '00007/JC/2022',
            'dependencia' => 'JEFATURA DE CULTURA',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA JEFATURA DE CULTURA',
            'asunto' => 'SOLICITUD DE APOYO PARA REALIZAR EL PROGRAMA CULTURAL DE LA FERIA DEL TAMAL Y EL CHAMPURRADO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000387',
            'fecha' => '17-ene-22',
            'hora' => '14:47:00 p. m.',
            'noOficio' => '00006/JC/2022',
            'dependencia' => 'JEFATURA DE CULTURA',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA JEFATURA DE CULTURA',
            'asunto' => 'SOLICITUD PARA DIFUSIÓN EN LA PÁGINA OFICIAL DEL H. AYUNTAMIENTO DE MINATITLÁN, LA CONVOCATORIA DE LA FERIA DEL TAMAL Y EL CHAMPURRADO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000388',
            'fecha' => '17-ene-22',
            'hora' => '14:48:00 p. m.',
            'noOficio' => '00014/JC/2022',
            'dependencia' => 'JEFATURA DE CULTURA',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA JEFATURA DE CULTURA',
            'asunto' => 'SOLICITUD DE APOYO PARA QUE ELEMENTOS BAJO SU CARGO, MANTENGAN EL ORDEN Y VIGILANCIA VIAL EN LOS FESTEJOS EN HONOR A LA VIRGEN DE LA CANDELARIA 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000389',
            'fecha' => '17-ene-22',
            'hora' => '14:49:00 p. m.',
            'noOficio' => '00015/JC/2022',
            'dependencia' => 'JEFATURA DE CULTURA',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA JEFATURA DE CULTURA',
            'asunto' => 'SOLICITUD DE APOYO PARA QUE PERSONAL BAJO SU CARGO APOYE EN LAS ACTIVIDADES QUE SE REALIZARAN EN LOS FESTEJOS EN HONOR A LA VIRGEN DE LA CANDELARIA 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000390',
            'fecha' => '17-ene-22',
            'hora' => '14:50:00 a. m.',
            'noOficio' => '00009/JC/2022',
            'dependencia' => 'JEFATURA DE CULTURA',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA JEFATURA DE CULTURA',
            'asunto' => 'SOLICITARLE SU APOYO CON LA SANITIZACIÓN DE LOS SANITARIOS, CAMERINOS, FORO Y ESPACIO GENERAL DEL PARQUE INDEPENDENCIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000391',
            'fecha' => '17-ene-22',
            'hora' => '14:51:00 p. m.',
            'noOficio' => '00010/JC/2022',
            'dependencia' => 'JEFATURA DE CULTURA',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA JEFATURA DE CULTURA',
            'asunto' => 'SOLICITUD DE APOYO CON LA CONDONACIÓN DEL PAGO DE PISO PARA LOS ARTESANOS LOCALES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000392',
            'fecha' => '17-ene-22',
            'hora' => '14:52:00 p. m.',
            'noOficio' => '00011/JC/2022',
            'dependencia' => 'JEFATURA DE CULTURA',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA JEFATURA DE CULTURA',
            'asunto' => 'SOLICITUD DE APOYO CON LA LIMPIEZA ANTES, DURANTE Y DESPUÉS DE LAS ACTIVIDADES A REALIZAR EN LOS FESTEJOS EN HONOR DE LA VIRGEN DE LA CANDELARIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000393',
            'fecha' => '17-ene-22',
            'hora' => '14:53:00 p. m.',
            'noOficio' => '00012/JC/2022',
            'dependencia' => 'JEFATURA DE CULTURA',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA JEFATURA DE CULTURA',
            'asunto' => 'SOLICITUD DE APOYO PARA QUE ELEMENTOS BAJO SU CARGO, MANTENGAN EL ORDEN Y VIGILANCIA, ANTES, DURANTE Y DESPUÉS DE LAS ACTIVIDADES ARTÍSTICAS-CULTURALES DE LOS FESTEJOS EN HONOR A LA VIRGEN DE LA CANDELARIA 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-ene-22',
            'hora' => '09:46:00 a. m.',
            'noOficio' => 'CIRCULAR 01',
            'dependencia' => 'SECRETARÍA MUNICIPAL',
            'remitente' => 'LIC.GUILLERMO REYES ESPRONCEDA SECRETARIO DEL H.AYUNTAMIENTO',
            'asunto' => 'INFORMACIÓN DE TODO USO QUE SE TENGA QUE HACER DE LA SALA DE SALA DE CABILDO DEL PALACIO MUNICIPAL EN BASE A SUS COMISIONES O ACTIVIDADESQUE REALIZAN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-ene-22',
            'hora' => '05:25:00 p. m.',
            'noOficio' => 'DGJN/000004/2022',
            'dependencia' => 'DIRECCIÓN GENERAL JURÍDICA Y NORMATIVIDAD MINATITLÁN, VERACRUZ',
            'remitente' => 'C.ANGEL JARQUIN ESCORCIA',
            'asunto' => 'SE SOLICITA INFORMACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000417',
            'fecha' => '18-ene-22',
            'hora' => '09:44:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C.RAFAEL GONZÁLES MOLINA, C.FERNANDO ESPINOSA ORTIZ RESPONSABLE DEL EVENTO',
            'asunto' => 'SOLICITUD DE PERMISO PARA REALIZAR UN EVENTO',
            'telefono' => '923 131 4161',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000420',
            'fecha' => '18-ene-22',
            'hora' => '10:31:00 a. m.',
            'noOficio' => 'TyV/019/2022',
            'dependencia' => 'JEFATURA DE TRÁNSITO Y VIALIDAD MUNICIPAL',
            'remitente' => 'LIC.SERGIO EDUARDO URQUIDI URDIANA JEFE DE TRÁNSITO Y VIALIDAD DEL H.AYUNTAMIENTO DE MINATITLÁN, VER',
            'asunto' => 'INVITACIÓN A REUNIÓN DE TRABAJO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000421',
            'fecha' => '18-ene-22',
            'hora' => '10:40:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'VECINOS DEL CALLEJÓN AMAPOLA, COL.OBRERA',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000446',
            'fecha' => '18-ene-22',
            'hora' => '10:50:00 a. m.',
            'noOficio' => 'SPISA-OFMINA-023-008',
            'dependencia' => 'SUMINSITROS Y DESARROLLOS DE PROYECTOS INDUSTRIALES, S.A. DE C.V.',
            'remitente' => 'ING.FRANCO ALBERTO HERNÁNDEZ HERNÁNDEZ REPRESENTANTE LEGAL SUMINISTROS Y DESARROLLOS DE PROYECTOS INDUSTRIALES S.A. DE C.V.',
            'asunto' => 'SEGUIMIENTO A SOLICITUD DE PAGO 2DO ANTICIPO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '18-ene-22',
            'hora' => '03:44:00 p. m.',
            'noOficio' => 'DGJN/000005/2022',
            'dependencia' => 'DIRECCIÓN GENERAL JURÍDICA Y NORMATIVIDAD MINATITLÁN, VERACRUZ',
            'remitente' => 'C.ANGEL JARQUIN ESCORCIA',
            'asunto' => 'SE SOLICITA DICTAMEN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000451',
            'fecha' => '18-ene-22',
            'hora' => '11:43:00 a. m.',
            'noOficio' => 'OF/DEMA/0010/2022',
            'dependencia' => 'DIRECCIÓN DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING.JORGE DAVID PALAVICINI RODRÍGUEZ DIRECTOR DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'asunto' => 'INFORME DE INSPECCIÓN OCULAR',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000455',
            'fecha' => '18-ene-22',
            'hora' => '12:02:00 p. m.',
            'noOficio' => 'JT/0006/2022',
            'dependencia' => 'JEFATURA DE TURISMO',
            'remitente' => 'LIC. RUTH TORRES RENDÓN JEFATURA DE TURISMO',
            'asunto' => 'HACER DE SU CONOCIMIENTO LA AUTORIZACIÓN DE CAPITANÍA DE PUERTO PARA EL RECORRIDO VÍA FLUVIAL DE LAS FESTIVIDADES EN HONOR A LA VIRGEN DE LA CANDELARIA 2022 , EN EL RÍO DE COATZACOALCOS A REALIZARSE EL DÍA 03 DE FEBRERO DEL PRESENTE AÑO, DERIVADO DE LO ANTERIOR LE SOLICITO A USTED QUE PERSONAL DE LA DIRECCIÓN DE PROTECCIÓN CIVIL SE COORDINE CON PERSONAL DE CAPITANÍA DE PUERTO PARA SU LOGÍSTICA DE SEGURIDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000456',
            'fecha' => '18-ene-22',
            'hora' => '12:02:00 p. m.',
            'noOficio' => 'SECTUR/DST/022-AJ/2022',
            'dependencia' => 'SECRETARÍA DE TURISMO Y CULTURA',
            'remitente' => 'DR.OMAR CASTRO PRADO DIRECTOR DE SERVICIOS TURÍSTICOS',
            'asunto' => 'SOLICITUD DE APOYO CON LA FINALIDAD QUE SEA DESIGNADO EL ENCARGADO O ENCARGADA DE TURISMO DE SU MUNICIPIO O QUIEN ESTIME PERTINENTE PARA QUE TENGA A BIEN ACOMPAÑARNOS A UNA IMPORTANTE REUNIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000459',
            'fecha' => '18-ene-22',
            'hora' => '12:17:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C.JAVIER HERNÁNDEZ HIPÓLITO',
            'asunto' => 'SOLICITUD DE ATENCIÓN A LA SITUACIÓN QUE PREVALECE',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000462',
            'fecha' => '18-ene-22',
            'hora' => '12:34:00 p. m.',
            'noOficio' => '00008/R12ECRFDACRCPR/2022',
            'dependencia' => 'REGIDURIA DÉCIMOSEGUNDO',
            'remitente' => 'C.MTRO.HUGO LEONARDO TORRES VILLEGAS REGIDOR DÉCIMOSEGUNDO',
            'asunto' => 'SOLICITUD DE APOYO EN EL ANIVERSARIO DEL NATALICIO DEL GRAL. IGNACIO ALLENDE 1769/1881, IZAMIENTO DE BANDERA A TODA ASTA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000463',
            'fecha' => '18-ene-22',
            'hora' => '12:34:00 p. m.',
            'noOficio' => '00009/R12ECRFDACRCPR/2022',
            'dependencia' => 'REGIDURIA DÉCIMOSEGUNDO',
            'remitente' => 'C.MTRO.HUGO LEONARDO TORRES VILLEGAS REGIDOR DÉCIMOSEGUNDO',
            'asunto' => 'SOLICITUD DE APOYO EN EL ANIVERSARIO DEL NATALICIO DEL GRAL. IGNACIO ALLENDE 1769/1881, IZAMIENTO DE BANDERA A TODA ASTA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000467',
            'fecha' => '18-ene-22',
            'hora' => '13:00:00 p. m.',
            'noOficio' => 'DMAA-052/2021',
            'dependencia' => 'DIRECCIÓN MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING.EULALIO GONZALEZ AZAMAR DIRECTOR DE AGUA POTABLE, DRENAJE, ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'DEPURACIÓN DE REZAGO INCOBRABLE Y CONDONACIÓN DE MULTAS Y RECARGOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000468',
            'fecha' => '18-ene-22',
            'hora' => '13:00:00 p. m.',
            'noOficio' => 'DMAA-053/2022',
            'dependencia' => 'DIRECCIÓN MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING.EULALIO GONZALEZ AZAMAR DIRECTOR DE AGUA POTABLE, DRENAJE, ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'RESPUESTA AL OFICIO NO. BDM/010/2021-2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000472',
            'fecha' => '18-ene-22',
            'hora' => '13:38:00 p. m.',
            'noOficio' => 'DOPYJ/002/2022',
            'dependencia' => 'DIRECCIÓN DE LA COMISIÓN DE ORNATOS, PARQUES Y JARDINES',
            'remitente' => 'LIC.JUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISIÓN DE ORNATOS, PARQUES Y JARDINES',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000473',
            'fecha' => '18-ene-22',
            'hora' => '13:39:00 p. m.',
            'noOficio' => '00007/2022',
            'dependencia' => 'DIF MUNICIPAL',
            'remitente' => 'MTRA.MARÍA ISABEL DÁVILA REYES DIRECTORA DEL DIF MUNICIPAL',
            'asunto' => 'INFORME',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000480',
            'fecha' => '18-ene-22',
            'hora' => '14:41:00 p. m.',
            'noOficio' => '00018/JC/2022',
            'dependencia' => 'JEFATURA DE CULTURA',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA, LIC.RUTH TORRES RENDÓN JEFATURA DE CULTURA',
            'asunto' => 'PROGRAMAS DE ACTIVIDADES DEL EVENTO DE LA VIRGEN DE LA CANDELARIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000491',
            'fecha' => '18-ene-22',
            'hora' => '16:20:00 p. m.',
            'noOficio' => 'TRANSP2022/0041',
            'dependencia' => 'UNIDAD DE TRANSPARENCIA H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'LIC.DEYCI MONTORES PEREZ TITULAR DE LA UNIDAD DE TRANSPARENCIA',
            'asunto' => 'INVITACIÓN A CURSO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '19-ene-22',
            'hora' => '18:19:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIP.EUSEBIA CORTÉS PÉREZ',
            'remitente' => 'DIP.EUSEBIA CORTÉS PÉREZ',
            'asunto' => 'INAUGURACIÓN CASA DE ENLACE DE LA DIPUTADA EUSEBIA CORTÉS PÉREZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000497',
            'fecha' => '19-ene-22',
            'hora' => '09:11:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'FINANCING 4U',
            'remitente' => 'FRANCISCO JASSÁN DIRECTOR COMERCIAL',
            'asunto' => 'PRESENTACIÓN DE PROPUESTA FINANCIERA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000504',
            'fecha' => '19-ene-22',
            'hora' => '10:08:00 a. m.',
            'noOficio' => 'DMAA-054/2022',
            'dependencia' => 'DIRECCIÓN MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING.EULALIO GONZALEZ AZAMAR DIRECTOR DE AGUA POTABLE, DRENAJE, ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'CONTESTACIÓN A SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000505',
            'fecha' => '19-ene-22',
            'hora' => '10:08:00 a. m.',
            'noOficio' => 'DMAA-055/2022',
            'dependencia' => 'DIRECCIÓN MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING.EULALIO GONZALEZ AZAMAR DIRECTOR DE AGUA POTABLE, DRENAJE, ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'CONTESTACIÓN A SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000508',
            'fecha' => '19-ene-22',
            'hora' => '10:33:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'AGENDA 2030 PROMOTOR DE LA RED INTERNACIONAL PROMOTORES ODS INTERNATIONAL COUNCIL AGENDA 2030 FROM SOCIETY',
            'remitente' => 'LIC.MILDRED YAMILET QUIÑONES BIELMA ASESOR/CONSULTOR AGENDA 2030 PROMOTOR DE LA RED INTERNACIONAL PROMOTORES ODS INTERNATIONAL COUNCIL AGENDA 2030 FROM SOCIETY',
            'asunto' => 'SEGUIMIENTO DE LA ADOPCIÓN E IMPLEMENTACIÓN DE LA AGENDA 2030 Y LOS 17 ODS',
            'telefono' => '922 174 2812',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => 'SIN DATO',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'C.MARIA ANTONIA VEGA SANTIAGO',
            'asunto' => 'APOYO PARA MEDICAMENTO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000510',
            'fecha' => '19-ene-22',
            'hora' => '10:30:00 a. m.',
            'noOficio' => 'OIC/0002/2022',
            'dependencia' => 'ÓRGANO INTERNO DE CONTROL',
            'remitente' => 'LIC.GRACIELA GONZÁLEZ MARTÍNEZ',
            'asunto' => 'PLAZO DE 48 HORAS CONTADAS A PARTIR DE LA RECEPCIÓN DEL PRESENTE OFICIO DEL PROCESO DE ENTREGA Y RECEPCIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000512',
            'fecha' => '19-ene-22',
            'hora' => '10:32:00 a. m.',
            'noOficio' => 'DMAA-059/2022',
            'dependencia' => 'DIRECCIÓN MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING.EULALIO GONZALEZ AZAMAR DIRECTOR DE AGUA POTABLE, DRENAJE, ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'CONTESTACIÓN A SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000513',
            'fecha' => '19-ene-22',
            'hora' => '11:29:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'PATRONATO EDUARDO SOTO INNES',
            'remitente' => 'PATRONATO EDUARDO SOTO INNES',
            'asunto' => 'ACTUALIZACIÓN DE REGISTRO DE PATRONATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000514',
            'fecha' => '19-ene-22',
            'hora' => '11:31:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C.AGENTES Y SUB AGENTES MUNICIPALES DE DIFERENTES COMUNIDADES',
            'asunto' => 'SOLICITUD DE UNA AUDIENCIA PARA TRATAR ASUNTOS RELACIONADOS AL CAMPO Y DE LOS CAMINOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000517',
            'fecha' => '19-ene-22',
            'hora' => '12:31:00 p. m.',
            'noOficio' => '400-68-00-00-01-2022',
            'dependencia' => 'ADMINISTRADORA DESCONCENTRADA DE RECAUDACIÓN DE VERACRUZ 4 CON SEDE EN VERACRUZ',
            'remitente' => 'ACT.ANNETTE ALEJANDRE ESPINO',
            'asunto' => 'SE SOLICITA CONFIRMACIÓN DE LA EXISTENCIA DE LA LOCALIDAD EN EL MUNICIPIO QUE SE INDICA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000519',
            'fecha' => '19-ene-22',
            'hora' => '12:59:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'PARTICIPACIÓN CIUDADANA',
            'remitente' => 'C.MARIA DEL CARMEN LOPEZ ORTIZ',
            'asunto' => 'SOLICITUD DE APOYO PARA QUE SE REALICE LA PODA DE ÁRBOLES',
            'telefono' => '922 190 3466',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000521',
            'fecha' => '19-ene-22',
            'hora' => '13:20:00 p. m.',
            'noOficio' => 'REG.2/6-2022',
            'dependencia' => 'REGIDURIA 2DO DEL AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.JESUS ADRIAN PERALTA MARQUEZ REGIDOR SEGUNDO DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'asunto' => 'SOLICITUD PARA LA EMISION DE NUEVA CONVOCATORIA PARA ELEGIR NUEVA DIRECTIVA DEL MERCADO POPULAR',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000523',
            'fecha' => '19-ene-22',
            'hora' => '13:44:00 p. m.',
            'noOficio' => 'SECTUR/DST/025/2022',
            'dependencia' => 'SECRETARIA DE TURISMO Y CULTURA',
            'remitente' => 'DR.OMAR CASTRO PRADO DIRECTOR DE SERVICIOS TURÍSTICOS',
            'asunto' => 'SOLICITUD DE INTERVENCIÓN A FIN QUE SE BRINDEN LAS FACILIDADES PARA PODER CONCRETAR VISITA DE INSPECCIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000527',
            'fecha' => '19-ene-22',
            'hora' => '14:35:00 p. m.',
            'noOficio' => 'REG.2/10-2022',
            'dependencia' => 'REGIDURÍA 2 DEL H.AYUNTAMIENTO DE MINATITLÁN',
            'remitente' => 'C.JESÚS ADRIAN PERALTA MÁRQUEZ REGIDOR SEGUNDO DEL H.AYUNTAMIENTO DE MINATITLÁN',
            'asunto' => 'SOLICITUD PARA LA ENTREGA DE DOCUMENTACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000528',
            'fecha' => '19-ene-22',
            'hora' => '15:11:00 p. m.',
            'noOficio' => 'DR33/0003/2022',
            'dependencia' => 'DIRECCIÓN DE RAMO 33',
            'remitente' => 'ARQ.JOSÉ LUIS CASTILLEJOS GÓMEZ DIRECTOR DEL RAMO 33',
            'asunto' => 'INICIO DEL PROCESO DE SOLICITUD DE CLAVE DE ACCESO PARA LA CARGA DE LAS MIDS CORRESPONDIENTES AL EJERCICIO FISCAL 2022, EN EL CUAL SERÁ EL RESPONSABLE DE REALIZAR LAS CARGAS DE TODOS LOS PROYECTOS DE OBRA PÚBLICA QUE SE APROBARAN Y EJECUTARAN POR PARTE DE ESTE ENTE MUNICIPAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000528',
            'fecha' => '19-ene-22',
            'hora' => '15:11:00 p. m.',
            'noOficio' => 'DR33/0003/2022',
            'dependencia' => 'DIRECCIÓN DE RAMO 33',
            'remitente' => 'ARQ.JOSÉ LUIS CASTILLEJOS GÓMEZ DIRECTOR DEL RAMO 33',
            'asunto' => 'INICIO DEL PROCESO DE SOLICITUD DE CLAVE DE ACCESO PARA LA CARGA DE LAS MIDS CORRESPONDIENTES AL EJERCICIO FISCAL 2022, EN EL CUAL SERÁ EL RESPONSABLE DE REALIZAR LAS CARGAS DE TODOS LOS PROYECTOS DE OBRA PÚBLICA QUE SE APROBARAN Y EJECUTARAN POR PARTE DE ESTE ENTE MUNICIPAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000536',
            'fecha' => '19-ene-22',
            'hora' => '15:47:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'GRUPO DE MUJERES EMPRENDEDORAS DE LA CIUDAD DE MINATITLAN, VERACRUZ',
            'remitente' => 'MUJERES EMPRENDEDORAS DE LA CIUDAD DE MINATITLAN, VERACRUZ',
            'asunto' => 'SOLICITUD DE PERMISO',
            'telefono' => '922 111 5784, 922 109 2985, 922 203 9992, 922 176 2758, 922 173 9926, 922 189 7776, 922 137 3024, 922 226 1717',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000538',
            'fecha' => '20-ene-22',
            'hora' => '09:09:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'REGIDURÍA DE FOMENTO FORESTAL, ECOLOGÍA Y MEDIO AMBIENTE',
            'remitente' => 'C.LIC.BLINIO HERNÁNDEZ FERNÁNDEZ',
            'asunto' => 'INVITACIÓN',
            'telefono' => '922 233 3206',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000545',
            'fecha' => '20-ene-22',
            'hora' => '11:54:00 a. m.',
            'noOficio' => 'SU-008/2022',
            'dependencia' => 'H.AYUNTAMIENTO CONSTITUCIONAL DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.FRANCISCO ANDRADE MOLINA SINDICO UNICO',
            'asunto' => 'SOLICITUD A UNA JUNTA DE TRABAJO AL CABILDO A FIN DE QUE SOMETA  A CONSIDERACIÓN EL CONTENIDO DEL REGLAMENTO PARA SU POSTERIOR VOTACIÓN Y APROBACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000550',
            'fecha' => '20-ene-22',
            'hora' => '12:34:00 p. m.',
            'noOficio' => 'CZ3022/0049/2022',
            'dependencia' => 'COORDINACIÓN DE ZONA 3022 DE MINATITLÁN',
            'remitente' => 'LIC.ROBERTO CÁRCAMO FERNÁNDEZ CORDINADOR DE ZONA 3022 DE MINATITLÁN',
            'asunto' => 'SOLICITUD DE DIFUSIÓN IVEA',
            'telefono' => '922 223 6415',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000551',
            'fecha' => '20-ene-22',
            'hora' => '13:01:00 p. m.',
            'noOficio' => 'DMAA-064/2022',
            'dependencia' => 'DIRECCIÓN MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING.EULALIO GONZALEZ AZAMAR DIRECTOR DE AGUA POTABLE, DRENAJE, ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'SOLICITUD DE ACTA DE CABILDO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000567',
            'fecha' => '20-ene-22',
            'hora' => '14:36:00 p. m.',
            'noOficio' => 'REG.2/11-2022',
            'dependencia' => 'REGIDURIA 2DO DEL AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.JESUS ADRIAN PERALTA MARQUEZ REGIDOR SEGUNDO DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'asunto' => 'TURNAR EL ESCRITO, DE FECHA 18 DE ENERO DE 2022, SIGNADO POR EL C.ENRIQUE ALEJANDRO MARTÍNEZ TORRES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '20-ene-22',
            'hora' => '14:36:00 p. m.',
            'noOficio' => 'REG.2/11-2022',
            'dependencia' => 'REGIDURIA 2DO DEL AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.JESUS ADRIAN PERALTA MARQUEZ REGIDOR SEGUNDO DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'asunto' => 'TURNAR EL ESCRITO, DE FECHA 18 DE ENERO DE 2022, SIGNADO POR EL C.ENRIQUE ALEJANDRO MARTÍNEZ TORRES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000584',
            'fecha' => '21-ene-22',
            'hora' => '10:22:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANOS',
            'remitente' => 'VECINOS DE LA CALLE FRANCISCO VILLA E INDEPENDENCIA DE LA COLONIA INSURGENTES NORTE DE MINATITLÁN, VER.',
            'asunto' => 'EL QUE SE TRATA',
            'telefono' => '922 210 8568',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000587',
            'fecha' => '21-ene-22',
            'hora' => '10:39:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO EL DIAMANTE, MUNICIPIO DE MINATITLÁN, VER.',
            'remitente' => 'SR.ISABEL ALARCÓN MORALES SUBAGENTE MUNICIPAL Y PRESIDENTE DEL PATRONATO',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 212 4933, 922 226 1841',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000594',
            'fecha' => '21-ene-22',
            'hora' => '13:16:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ASOCIACION DE VOCEADORES MINATITLÁN 2003 A.C',
            'remitente' => 'COMITÉ DE REPRESENTACIÓN',
            'asunto' => '  "161": "",',
            'telefono' => '922 163 3027 Y 922 105 4489',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000597',
            'fecha' => '21-ene-22',
            'hora' => '13:32:00 p. m.',
            'noOficio' => 'REG.2/16-2022',
            'dependencia' => 'REGIDURIA 2DO DEL AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.JESÚS ADRIAN PERALTA MÁRQUEZ REGIDOR SEGUNDO DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'asunto' => 'QUE SE ESTABLEZCAN LOS LINEAMIENTOS Y EL PROCEDIMIENTO PARA QUE SEAN FORMALMENTE INSTALADAS Y CONSTITUIDAS LAS COMISIONES MUNICIPALES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000603',
            'fecha' => '21-ene-22',
            'hora' => '13:45:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SINDICATOS DE TRABAJADORES PETROLEROS DE LA REPÚBLICA MEXICANA',
            'remitente' => 'LIC. HORACIO TERAN MONTIEL SECRETARIO TESORERO DE LA H.SECCIÓN N.10 DEL S.T.P.R.M',
            'asunto' => 'SOLICITAR SU INTERVENCIÓN',
            'telefono' => '922 112 0964',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000606',
            'fecha' => '21-ene-22',
            'hora' => '13:52:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'FRANCISCO SANTES SILVESTRE',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 185 1324',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000608',
            'fecha' => '21-ene-22',
            'hora' => '14:34:00 p. m.',
            'noOficio' => 'REG.8/014/2022',
            'dependencia' => 'H.AYUNTAMIENTO CONSTITUCIONAL REGIDURÍA OCTAVA',
            'remitente' => 'LIC.MIGUEL ÁNGEL ESTRADA FERRER REGIDOR OCTAVO SALUD Y ASISTENCIA PÚBLICA, PROMOCIÓN A LOS DERECHOS HUMANOS',
            'asunto' => 'SOLICITUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000609',
            'fecha' => '21-ene-22',
            'hora' => '14:45:00 p. m.',
            'noOficio' => '012/2022',
            'dependencia' => 'REGIDURIA DECIMA DESEMPEÑO, FOMENTO FORESTAL, ECOLOGÍA Y MEDIO AMBIENTE',
            'remitente' => 'C.ING.BLINO HERNÁDEZ FERNÁNDEZ REGIDOR DÉCIMO DESEMPEÑO, FOMENTO FORESTAL, ECOLOGÍA Y MEDIO AMBIENTE',
            'asunto' => 'ASIGNACÓN DE ENLACE DE COMUNICACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000618',
            'fecha' => '21-ene-22',
            'hora' => '17:11:00 p. m.',
            'noOficio' => 'DMAA-076/2022',
            'dependencia' => 'DIRECCIÓN MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING.EULALIO GONZALEZ AZAMAR DIRECTOR DE AGUA POTABLE, DRENAJE, ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'SOLICITUD DE APOYO DE MATERIAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000619',
            'fecha' => '21-ene-22',
            'hora' => '17:25:00 p. m.',
            'noOficio' => 'DMAA-073/2022',
            'dependencia' => 'DIRECCIÓN MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING.EULALIO GONZALEZ AZAMAR DIRECTOR DE AGUA POTABLE, DRENAJE, ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'SOLICITUD DE APOYO DE MAQUINARIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '21-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C.JAIME TORRES HERNÁNDEZ',
            'asunto' => 'SOLICITUD DE AYUDA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '21-ene-22',
            'hora' => '07:45:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'REGIDURÍA DUODÉDECIMA Y JEFATURA DE EDUCACIÓN',
            'remitente' => 'MTRO.HUGO LEONARDO TORRES VILLEGAS REGIDOR DUODECIMO, LIC. MARÍA DE JESUS OROZCO CARTAS JEFATURA DE EDUCACIÓN',
            'asunto' => 'INVITACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000630',
            'fecha' => '24-ene-22',
            'hora' => '09:53:00 a. m.',
            'noOficio' => 'RVC/032/2022',
            'dependencia' => 'CAMARA DE DIPUTADOS',
            'remitente' => 'DIP.ROSALBA VALENCIA CRUZ',
            'asunto' => 'DAR A CONOCER A LA SOCIEDAD DE MINATITLÁN VERACRUZ EL CONTENIDO DE LA REFORMA ELÉCTRICA PROPUESTA POR NUESTRO PRESIDENTE',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000640',
            'fecha' => '24-ene-22',
            'hora' => '11:06:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C. JORGE CABALLERO CELAYA',
            'asunto' => 'SOLICITAR UNA OPORTUNIDAD DE TRABAJO',
            'telefono' => '922 220 9069',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000645',
            'fecha' => '24-ene-22',
            'hora' => '11:32:00 a. m.',
            'noOficio' => 'REG.2/18-2022',
            'dependencia' => 'REGIDURIA 2DO DEL AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.JESÚS ADRIAN PERALTA MARQUEZ REGIDOR SEGUNDO DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'asunto' => 'TURNAR EL ESCRITO DE FECHA 21 DE ENERO DE 2022 ASIGNADO POR LA C.MARIA DE LA CRUZ VÁZQUEZ PAVÓN EN EL CUAL SOLICITAN LA REUBICACIÓN DE VENDEDORES AMBULANTES LOS CIUDADANOS SAÚL BARRADAS SEGURA Y C.LETICIA HERNÁNDEZ AVAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000646',
            'fecha' => '24-ene-22',
            'hora' => '11:58:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C.MARIA ESTHER PACHECO',
            'asunto' => 'SOLICITUD DE AYUDA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000648',
            'fecha' => '24-ene-22',
            'hora' => '12:33:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ASOCIACIÓN MUNDIAL DE RESCATE AMBIENTAL Y SOCIAL',
            'remitente' => 'FRANCISCO JAVIER DE LA CRUZ DUHALT DIRECTOR GENERAL',
            'asunto' => 'INVITACIÓN Y COOPERACIÓN EN AGENDA AMBIENTAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000654',
            'fecha' => '24-ene-22',
            'hora' => '13:44:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C.HILDA GONZÁLEZ LARA',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 172 9812',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000655',
            'fecha' => '24-ene-22',
            'hora' => '14:02:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECIIÓN DE PARTICIPACIÓN CIUDADANA',
            'remitente' => 'LIC.LUIS OCTAVIO VILLANUEVA VÁSQUEZ DIRECTOR DE PARTICIPACIÓN CIUDADANA',
            'asunto' => 'SOLICITUD DE INFORMACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000656',
            'fecha' => '24-ene-22',
            'hora' => '14:03:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECCIÓN DE PARTICIPACIÓN CIUDADANA',
            'remitente' => 'LIC.LUIS OCTAVIO VILLANUEVA VÁSQUEZ DIRECTOR DE PARTICIPACIÓN CIUDADANA',
            'asunto' => 'SOLICITUD DE INFORMACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000659',
            'fecha' => '24-ene-22',
            'hora' => '14:14:00 p. m.',
            'noOficio' => '400-68-00-00-01-2022-0396',
            'dependencia' => 'ADMINISTRACIÓN DESCONCENTRADA DE RECAUDACIÓN DE VERACRUZ 4 CON SEDE EN VERACRUZ',
            'remitente' => 'ACT.ANNETTE ALEJANDRE ESPINO ADMINISTRADORA DESCONCENTRADA DE RECAUDACIÓN DE VERACRUZ 4 CON SEDE EN VERACRUZ',
            'asunto' => 'SE SOLICITA CONFIRMACIÓN DE LA EXISTENCIA DE LA LOCALIDAD EN EL MUNICIPIO QUE SE INDICA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000661',
            'fecha' => '24-ene-22',
            'hora' => '14:24:00 p. m.',
            'noOficio' => 'REG.5-022/2022',
            'dependencia' => 'REGIDURIA QUINTA DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'LIC.NAOMI EDITH GÓMEZ SANTOS REGIDORA QUINTA DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'asunto' => 'LA FINALIDAD DE INCENTIVAR LA PRODUCTIBIDAD Y CAPACITACIÓN PARA LOS CIUDADANOS Y GARANTIZAR LA PROFESIONALIZACIÓN EN LA ACTIVIDAD LABORAL EN EL ÁMBITO PÚBLICO Y PRIVADO SE SOMETE A CONSIDERACIÓN PARA SU ANALISIS Y PROPONER AL CABILDO LA AUTORIZACION DE SUSCRIVIR CONVENIO DE COLABORACIÓN CON EL INSTITUTO DE CAPACITACIÓN PARA EL TRABAJO DEL ESTADO DE VERACRUZ',
            'telefono' => '922 209 7711',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-ene-22',
            'hora' => '14:24:00 p. m.',
            'noOficio' => 'REG.5-022/2022',
            'dependencia' => 'REGIDURIA QUINTA DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'LIC.NAOMI EDITH GÓMEZ SANTOS REGIDORA QUINTA DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'asunto' => 'LA FINALIDAD DE INCENTIVAR LA PRODUCTIBIDAD Y CAPACITACIÓN PARA LOS CIUDADANOS Y GARANTIZAR LA PROFESIONALIZACIÓN EN LA ACTIVIDAD LABORAL EN EL ÁMBITO PÚBLICO Y PRIVADO SE SOMETE A CONSIDERACIÓN PARA SU ANALISIS Y PROPONER AL CABILDO LA AUTORIZACION DE SUSCRIVIR CONVENIO DE COLABORACIÓN CON EL INSTITUTO DE CAPACITACIÓN PARA EL TRABAJO DEL ESTADO DE VERACRUZ',
            'telefono' => '922 209 7711',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000665',
            'fecha' => '24-ene-22',
            'hora' => '14:35:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SUBAGENCIA LOCALIDAD POBLADO NOPALAPA MPIO. DE MINATITLÁN VERACRUZ',
            'remitente' => 'REFUGIO JOAQUÍN ANTELE SUBAGENTE MUNICIPAL LOC. POBLADO NOPALAPA',
            'asunto' => 'SOLICITUD DE APOYO PARA LA REPARACIÓN DE 10 LAMPARAS',
            'telefono' => '922 218 2148',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000668',
            'fecha' => '24-ene-22',
            'hora' => '15:48:00 p. m.',
            'noOficio' => 'SPC/OS/016-01/2022',
            'dependencia' => 'DIRECCIÓN MUNICIPAL DE PROTECCIÓN CIVIL Y BOMBEROS MUNICIPALES',
            'remitente' => 'ING.ANDRÉS EDMUNDO GÓMEZ MONTES DIRECTOR DE PROTECCIÓN CIVIL Y BOMBEROS MUNICIPALES',
            'asunto' => 'PRESENTACIÓN DE LA ESTRATEGIA DE TRABAJO PARA UNIDADES MUNICIPALES DE PROTECCIÓN CIVIL 2022',
            'telefono' => '922 223 4999',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SEDEMA/SFGA/0143/2022',
            'dependencia' => 'SECRETARÍA DE MEDIO AMBIENTE',
            'remitente' => 'ING. ANDREA KAROLINA HERNÁNDEZ GINÉS SUBSECRETARIA DE FOMENTO Y GESTIÓN AMBIENTAL DE LA SECRETARÍA DE MEDIO AMBIENTE DEL ESTADO DE VERACRUZ',
            'asunto' => 'EXHORTO PARA LA INSTALACIÓN DEL CONSEJO CONSULTIVO MUNICIPAL DE MEDIO AMBIENTE Y DESARROLLO SUSTENTABLE',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000669',
            'fecha' => '25-ene-22',
            'hora' => '09:08:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'COMITÉ DE POSESIONARIOS DE LOS TERRENOS UBICADOS EN LA COLONIA AMPLIACIÓN BUENA VISTA NORTE DE LA CIUDAD DE MINATITLÁN',
            'remitente' => 'ADOLFO CARRASCO FIGUEROA PRESIDENTE, MARGARITA MARTINEZ ROMERO SECRETARIA, JOSE CHAGALA BELTRAN TESORERO, ESTEBAN JIMENEZ TERRON VOCAL, DALILA VARGAS MIJANGOS VOCAL',
            'asunto' => 'SOLICITUD PARA TENER UNA UDIENCIA',
            'telefono' => '922 266 4962',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000671',
            'fecha' => '25-ene-22',
            'hora' => '10:35:00 a. m.',
            'noOficio' => '026/CMD/2022',
            'dependencia' => 'COMUDE COMISIÓN MUNICIPAL DEL DEPORTE',
            'remitente' => 'LD.ERICK  HERNÁNDEZ SOTO ENCARGADO DE JEFATURA DE COMISIÓN MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'SOLICITUD DE APOYO PARA LOS VIÁTICOS DE IDA Y VUELTA PARA 1 DELEGADO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000679',
            'fecha' => '25-ene-22',
            'hora' => '11:13:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'PATRONATO PRO-PAVIMENTACIÓN',
            'remitente' => 'C.PROFR.GUILLERMO ARROLLO CASTELLANOS PERSIDENTE DEL PATRONATO, C.EVELYN ANDRADE LOZADA SECRETARIO, C.OLIVIA MUÑOS ESCAMILLA TESORERA, C.OFELIA TOLEDO MANUEL VOCAL 1, C.PAULA DEL CARMEN MAZA HERNÁNDEZ VOCAL 2',
            'asunto' => 'PAVIMENTACIÓN CON CONCRETO HIDRAULICO, GUARNICIONES Y BANQUETAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000686',
            'fecha' => '25-ene-22',
            'hora' => '11:42:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'SR. IGNACIO ALBERTO HERNÁNDEZ BARÓN',
            'asunto' => 'INSTALACIÓN DE POSTE Y ALUMBRADO EN LA CALLE PLAN DE AYALA, PRADERAS DEL JAGUEY',
            'telefono' => '922 127 5884',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000693',
            'fecha' => '25-ene-22',
            'hora' => '12:09:00 p. m.',
            'noOficio' => 'TRANSP2022/0047',
            'dependencia' => 'UNIDAD DE TRANSPARENCIA H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'LIC.DEYCI MONTORES PEREZ TITULAR DE LA UNIDAD DE TRANSPARENCIA',
            'asunto' => 'INFORME DE OBSERVACIONES DE LA ENTREGA-RECEPCIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000695',
            'fecha' => '25-ene-22',
            'hora' => '12:22:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DEPARTAMENTO DE TRABAJADORES PETROLEROS JUBILADOS DE LA H.H SECCIONES 10 Y 23 DEL S.T.P.R.M.',
            'remitente' => 'LIC.ALFREDO IPARREA GONZALEZ PDTE.DEL DEPTO DE JUBILADOS DE LA SECCIÓN 10 Y 23, ENF.MARBELLA PAVON ROBLES COORD.DE EDUC. Y PREV.SOCIAL DE LA SECCIÓN 10 Y 23, DR.ALFREDO LOPEZ HERNANDEZ ENC.DEL CONSULTORIO MEDICO DE LA SECCIÓN 1',
            'asunto' => 'INAURACION CONSULTORIO MEDICO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000696',
            'fecha' => '25-ene-22',
            'hora' => '12:31:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFATURA DE SALUD',
            'remitente' => 'DR.SALVADOR SÁNCHEZ DÍAZ JEFE DE LA JEFATURA DE SALUD',
            'asunto' => 'SOLICITAR SU APOYO CON TRES BOCINAS, TRES MICRÓFONOS, TRES EXTENSIONES PARA LLEVAR A CABO LA JORNADA DE VACUNACÓN DE 50 A 59 AÑOS DE EDAD, APLICACIÓN DE REFUERZO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000701',
            'fecha' => '25-ene-22',
            'hora' => '13:13:00 p. m.',
            'noOficio' => 'OF/DEMA/0018/2022',
            'dependencia' => 'DIRECCIÓN DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING.JORGE DAVID PALAVICINI RODRÍGUEZ DIRECTOR DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'asunto' => 'PERMISO DE PODA DE ÁRBOL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000702',
            'fecha' => '25-ene-22',
            'hora' => '13:15:00 p. m.',
            'noOficio' => 'CM-016/2022',
            'dependencia' => 'DIRECCIÓN DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING.JORGE DAVID PALAVICINI RODRÍGUEZ DIRECTOR DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'asunto' => 'DERRIBO DE ÁBOL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000703',
            'fecha' => '25-ene-22',
            'hora' => '13:15:00 p. m.',
            'noOficio' => 'CM-0015/2022',
            'dependencia' => 'DIRECCIÓN DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING.JORGE DAVID PALAVICINI RODRÍGUEZ DIRECTOR DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'asunto' => 'DERRIBO DE ÁBOL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000705',
            'fecha' => '25-ene-22',
            'hora' => '14:18:00 p. m.',
            'noOficio' => '00405/022/01/2022',
            'dependencia' => 'SECRETARIA DE BIENESTAR',
            'remitente' => 'C.MARÍA DE LOS ANGELES PRIETO LINARES DIRECTORA REGIONAL DE PROGRAMAS INTEGRALES DE DESARROLLO REGIÓN 08, CON SEDE EN MINATITLÁN, VER.',
            'asunto' => 'SOLICITUD DE COLABORACIÓN POR EL MOTIVO DE INICIAR CON LA JORNADA DE VACUNACIÓN EN APLICACIÓN DE DE DOSIS DE REFUERZO EN LA ETAPA DE 50 Y MÁS, EMBARAZADAS MAYORES DE 18 AÑOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000714',
            'fecha' => '26-ene-22',
            'hora' => '08:30:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'VECINOS DE LAS CALLES TANTOYUCA Y JUAN ESCUTIA COL.MIGUEL HIDALGO',
            'asunto' => 'INVITACIÓN PARA UNA REUNIÓN VECINAL',
            'telefono' => '922 119 5088',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000718',
            'fecha' => '26-ene-22',
            'hora' => '09:05:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECIIÓN DE PARTICIPACIÓN CIUDADANA',
            'remitente' => 'LIC.LUIS OCTAVIO VILLANUEVA VÁSQUEZ DIRECTOR DE PARTICIPACIÓN CIUDADANA',
            'asunto' => 'SOLICITUD DE APOYO PARA MANTENER LIBRE EL DOMO DEL EJIDO TACOTENO LOS DIAS 27, 28 Y 29 DE ENERO DE 2022 PARA LLEVAR A CABO LA JORNADA DE VACUNACIÓN, DOSIS DE REFUERZO PARA ADULTOS DE 50 A 59 AÑOS DE EDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000727',
            'fecha' => '26-ene-22',
            'hora' => '11:08:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C.CECILIO MARTÍNEZ ZAMUDIO',
            'asunto' => 'SOLICITUD DE ATENCIÓN AL EMPAREJAMIENTO Y REVESTIMIENTO DE LAS CALLES DE LA COLONIA PRADERAS DEL JAGUEY',
            'telefono' => '922 127 2756',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000729',
            'fecha' => '26-ene-22',
            'hora' => '11:23:00 a. m.',
            'noOficio' => '1.6.30.1.6/008/2022',
            'dependencia' => 'INSUS INSTITUTO NACIONAL DEL SUELO SUSTENTABLE',
            'remitente' => 'MTRO.ARQ.GABRIEL ZILLI GARCIA REPRESENTANTE REGIONAL DEL INSUS EN LOS ESTADOS DE VERACRUZ, TABASCO Y CHIAPAS',
            'asunto' => 'CONVENIO DE COLABORACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000731',
            'fecha' => '26-ene-22',
            'hora' => '12:46:00 a. m.',
            'noOficio' => 'STI-062/2022',
            'dependencia' => 'DIRECCIÓN DE TECNOLOGÍAS DE LA INFORMACIÓN',
            'remitente' => 'C.SERGIO FERNÁNDEZ FERREIRA DIRECTOR DE SISTEMAS Y TECNOLOGÍAS DE LA INFORMACIÓN',
            'asunto' => 'CONTRATACIÓN DE DOS SERVICIOS DE TOTAL PLAY, CON UNA VELOCIDAD DE 1 GB CADA UNO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000736',
            'fecha' => '26-ene-22',
            'hora' => '14:10:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECCIÓN DE PARTICIPACIÓN CIUDADANA',
            'remitente' => 'LIC.LUIS OCTAVIO VILLANUEVA VÁSQUEZ DIRECTOR DE PARTICIPACIÓN CIUDADANA',
            'asunto' => 'SOLICITUD DE APOYO EN LA ATENCIÓN AL CASO QUE NOS EXPONE EL CIUDADANO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000737',
            'fecha' => '26-ene-22',
            'hora' => '14:20:00 p. m.',
            'noOficio' => 'REG.8/017/2022',
            'dependencia' => 'REGIDURÍA OCTAVA',
            'remitente' => 'LIC.MIGUEL ÁNGEL ESTRADA FERRER REGIDOR OCTAVO SALUD Y ASISTENCIA PÚBLICA, PROMOCIÓN A LOS DERECHOS HUMANOS',
            'asunto' => 'SOLICITUD DE REGLAMENTOS DEL MUNICIPIO DE MINATITLÁN, VERACRUZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000740',
            'fecha' => '26-ene-22',
            'hora' => '03:13:00 p. m.',
            'noOficio' => 'TRANSP2022/0048',
            'dependencia' => 'UNIDAD DE TRANSPARENCIA H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.DEYCI MONTORES PEREZ TITULAR DE LA UNIDAD DE TRANSPARENCIA',
            'asunto' => 'SOLICITUD DE INTEGRACIÓN DEL COMITÉ DE TRANSPARENCIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '26-ene-22',
            'hora' => '08:35:00 a. m.',
            'noOficio' => 'SSP/SUBLOG/OPM/003/2022',
            'dependencia' => 'OFICINA DE POLICÍAS MUNICIPALES',
            'remitente' => 'LIC.OSCAR ALARCÓN RAMOS JEFE DE OFICINA DE POLICÍAS MUNICIPALES',
            'asunto' => 'REMITA INFORMACIÓN SEMANAL REFERENTE A POLICÍAS MUNICIPALES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '26-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ESCUELA SECUDANRIA TÉCNICA INDUSTRIAL NO.88',
            'remitente' => 'MTRO.MIGUEL CASTILLO Y SÁNCHEZ',
            'asunto' => 'SOLICITUD',
            'telefono' => '922 223 7336',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '26-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'V.511.DGDUSV.0183.2022',
            'dependencia' => 'DIRECCIÓN GENERAL DE DESARROLLO URBANO, SUELO Y VIVIENDA',
            'remitente' => 'MELINA EMERITA CASTRO URQUIZA DIRECTORA GENERAL DE DESARROLLO URBANO, SUELO Y VIVIENDA',
            'asunto' => 'INFORME DE AVANCE AL PROYECTO DE ACTUALIZACIÓN DEL PROGRAMA MUNICIPAL DE DESARROLLO URBANO DE MINATITLÁN, VERACRUZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '26-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'V.511.DGDUSV.0183.2022',
            'dependencia' => 'DIRECCIÓN GENERAL DE DESARROLLO URBANO, SUELO Y VIVIENDA',
            'remitente' => 'MELINA EMERITA CASTRO URQUIZA DIRECTORA GENERAL DE DESARROLLO URBANO, SUELO Y VIVIENDA',
            'asunto' => 'INFORME DE AVANCE AL PROYECTO DE ACTUALIZACIÓN DEL PROGRAMA MUNICIPAL DE DESARROLLO URBANO DE MINATITLÁN, VERACRUZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000745',
            'fecha' => '26-ene-22',
            'hora' => '15:58:00 p. m.',
            'noOficio' => '036/DIOP/2022',
            'dependencia' => 'DIRECCIÓN DE INFRAESTRUCTURA Y OBRAS PÚBLICAS',
            'remitente' => 'ARQ.CARMELA MILLÁN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PÚBLICAS',
            'asunto' => 'SOLICITUD DE APOYO DE MANERA URGENTE PARA LAS OFICINAS DE LA DIRECCIÓN DE OBRAS PÚBLICAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000746',
            'fecha' => '26-ene-22',
            'hora' => '15:58:00 p. m.',
            'noOficio' => '037/DIOP/2021',
            'dependencia' => 'DIRECCIÓN DE INFRAESTRUCTURA Y OBRAS PÚBLICAS',
            'remitente' => 'ARQ.CARMELA MILLÁN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PÚBLICAS',
            'asunto' => 'SOLICITUD DEL PADRÓN DE CONTRATISTAS 2021',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000752',
            'fecha' => '27-ene-22',
            'hora' => '10:35:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFATURA DE CULTURA, JEFATURA DE TURISMO',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA JEFATURA DE CULTURA, LIC.RUTH TORRES RENDÓN JEFATURA DE TURISMO',
            'asunto' => 'INVITACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000761',
            'fecha' => '27-ene-22',
            'hora' => '12:24:00 p. m.',
            'noOficio' => '13.REG6/2022',
            'dependencia' => 'REGIDURÍA SEXTA',
            'remitente' => 'ISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL H.AYUNTAMIENTO CONSTITUCIONAL DE MINATITLÁN, VERACRUZ',
            'asunto' => 'EL QUE SE INDICA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000765',
            'fecha' => '27-ene-22',
            'hora' => '12:48:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'GRAN LOGIA UNIDA LIBERAL DE LA REPÚBLICA MEXICANA DE LLY AA MM DEL GR. OR. DE MINATITLÁN VERACRUZ',
            'remitente' => 'GR.MAEST.CARLOS CRUZ OROZCO, GR.SEC.CARLOS FCO.TREJO CASTRO',
            'asunto' => 'PRESENTACIÓN DE FUNCIONARIOS Y SOLICITUD DE AUDIENCIA',
            'telefono' => '922 223 4388',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000769',
            'fecha' => '27-ene-22',
            'hora' => '13:43:00 p. m.',
            'noOficio' => 'CS-02/2022',
            'dependencia' => 'DIRECCIÓN DE COMUNICACIÓN SOCIAL',
            'remitente' => 'C.CÉSAR ROSAS NUÑES DIRECTOR DE COMUNICACIÓN SOCIAL',
            'asunto' => 'SOLICITUD A CADA ÁREA SU COLABORACIÓN PARA EL DESARROLLO DEL PROYECTO DE POSICIONAMIENTO DEL H.AYUNTAMIENTO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000770',
            'fecha' => '27-ene-22',
            'hora' => '13:51:00 p. m.',
            'noOficio' => 'REG.2/22-2022',
            'dependencia' => 'REGIDURÍA 2DO DEL AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.JESÚS ADRIAN PERALTA MÁRQUEZ REGIDOR SEGUNDO DEL H. AYUNTAMIENTO DE MINATITLÁN, VER.',
            'asunto' => 'TURNAR EL ESCRITO DE FECHA 26 DE ENERO DE 2022, SIGNADO POR LA C.GABRIELA ALEJANDRA RODRÍGUEZ PÉREZ, EN LA CUAL SOLICITAN EL APOYO PARA REGULARIZAR LOCALES DEL MERCADO SOLIDARIDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000771',
            'fecha' => '27-ene-22',
            'hora' => '13:50:00 p. m.',
            'noOficio' => 'REG.2/23-2022',
            'dependencia' => 'REGIDURÍA 2DO DEL AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.JESÚS ADRIAN PERALTA MÁRQUEZ REGIDOR SEGUNDO DEL H. AYUNTAMIENTO DE MINATITLÁN, VER.',
            'asunto' => 'TURNAR EL ESCRITO DE FECHA 26 DE ENERO DE 2022, SIGNADO POR LA C.YARETH ALBERTO RODRÍGUEZ RAMOS, EN LA CUAL SOLICITAN EL APOYO PARA REGULARIZAR LOCALES DEL MERCADO SOLIDARIDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000772',
            'fecha' => '27-ene-22',
            'hora' => '13:52:00 p. m.',
            'noOficio' => 'REG2/01-2022',
            'dependencia' => 'REGIDURÍA 2DO DEL AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.JESÚS ADRIAN PERALTA MÁRQUEZ REGIDOR SEGUNDO DEL H. AYUNTAMIENTO DE MINATITLÁN, VER.',
            'asunto' => 'SOLICITUD DE APOYO PARA EL EVENTO DE MARATÓN DE CICLISMO DE MONTAÑA LLAMADO DESAFIO VOLCANO 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000773',
            'fecha' => '27-ene-22',
            'hora' => '04:48:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'MESA REDONDA PANAMERICANA DE MINATITLAN A.C.',
            'remitente' => 'PROFRA.ALICIA VIVAS DE MARTÍNEZ SECRETARIA DE CORRESPONDENCIA, NATIVIDAD DE JESUS VAUGHAN URREA DIRECTORA, EVA FERNÁNDEZ VICENTE PARLAMENTARIA',
            'asunto' => 'PRESENTARLE UN FRATERNAL SALUDO DE BUENOS DESEOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000774',
            'fecha' => '27-ene-22',
            'hora' => '14:55:00 p. m.',
            'noOficio' => 'OF/DEMA/0022/2022',
            'dependencia' => 'DIRECCIÓN DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING.JORGE DAVID PALAVICINI RODRÍGUEZ DIRECTOR DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'asunto' => 'PERMISO DE PODA DE ÁRBOL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000775',
            'fecha' => '27-ene-22',
            'hora' => '15:00:00 p. m.',
            'noOficio' => '007-01-JEG-2022',
            'dependencia' => 'JEFATURA DE EQUIDAD DE GÉNERO',
            'remitente' => 'LIC.DENHIA KRYSTAL HERRERA CUPIL JEFATURA DE EQUIDAD DE GÉNERO',
            'asunto' => 'SOLICITAR EL DISEÑO DE LAS TARJETAS DE PRESENTACIÓN',
            'telefono' => '922 227 8266',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000776',
            'fecha' => '27-ene-22',
            'hora' => '15:10:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'DESIDERIO PADILLA S.PRESIDENTE DE PATRONATO',
            'asunto' => 'SOLICITUD DE APOYO PARA OBRAS',
            'telefono' => '922 241 0041',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000777',
            'fecha' => '27-ene-22',
            'hora' => '15:41:00 p. m.',
            'noOficio' => 'PCYBM-005-2022',
            'dependencia' => 'DIRECCIÓN MUNICIPAL DE PROTECCIÓN CIVIL Y BOMBEROS MUNICIPALES',
            'remitente' => 'ING.ANDRÉS EDMUNDO GÓMEZ MONTES DIRECTOR DE PROTECCIÓN CIVIL Y BOMBEROS MUNICIPALES',
            'asunto' => 'VERIFICACIÓN',
            'telefono' => '922 223 4999',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '27-ene-22',
            'hora' => '07:02:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'LIC.LAURA VALENCIA HERNÁNDEZ',
            'asunto' => 'SOLICITUD DE INTERVENCIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '27-ene-22',
            'hora' => '07:03:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CECILIA SÁNCHEZ GARCIA SENADORA DE LA REPÚBLICA',
            'asunto' => 'CONVOCATORIA DE PRENSA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '27-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'LEIDY JANET FLORES ORTIZ',
            'asunto' => 'SOLICITUD DE PETICIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '27-ene-22',
            'hora' => '02:28:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C.GLORIA ESTHER LUNA LOPEZ',
            'asunto' => 'SIN DATO',
            'telefono' => '922 227 0410',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '27-ene-22',
            'hora' => '12:45:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'MARISOL AQUINO MARTÍNEZ',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 107 6213',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000794',
            'fecha' => '28-ene-22',
            'hora' => '11:57:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'MARISOL AQUINO MARTÍNEZ',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 107 6213',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000796',
            'fecha' => '28-ene-22',
            'hora' => '12:09:00 p. m.',
            'noOficio' => '046/DIOP/2022',
            'dependencia' => 'DIRECCIÓN DE INFRAESTRUCTURA Y OBRAS PÚBLICAS',
            'remitente' => 'ARQ.CARMELA MILLÁN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PÚBLICAS',
            'asunto' => 'PROPUESTA DE REQUISITOS PARA INSCRIPCIÓN AL PADRÓN DE CONTRATISTAS 2022',
            'telefono' => '922 225 0370',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000797',
            'fecha' => '26-ene-22',
            'hora' => '12:18:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'REGIDURÍA DÉCIMOSEGUNDO',
            'remitente' => 'C.MAESTRO. HUGO LEONARDO TORRES VILLEGAS REGIDOR DÉCIMOSEGUNDO',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000798',
            'fecha' => '28-ene-22',
            'hora' => '12:19:00 p. m.',
            'noOficio' => '00019/R12ECRFDACRCPR/2022',
            'dependencia' => 'REGIDURÍA DÉCIMOSEGUNDO',
            'remitente' => 'C.MTRO.HUGO LEONARDO TORRES VILLEGAS REGIDOR DÉCIMOSEGUNDO',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000799',
            'fecha' => '28-ene-22',
            'hora' => '12:21:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANOS',
            'remitente' => 'LIC.OCHIIRIIS ISAIAS GAMA',
            'asunto' => 'SOLICITUD DE PETICIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000802',
            'fecha' => '28-ene-22',
            'hora' => '12:37:00 p. m.',
            'noOficio' => 'REG.8/020/2022',
            'dependencia' => 'REGIDURÍA OCTAVA',
            'remitente' => 'LIC.MIGUEL ÁNGEL ESTRADA FERRER REGIDOR OCTAVO SALUD Y ASISTENCIA PÚBLICA, PROMOCIÓN A LOS DERECHOS HUMANOS',
            'asunto' => 'SOLICITUD DE APOYO EN LA PRIMER JORNADA MULTIDISCIPLINARIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000811',
            'fecha' => '28-ene-22',
            'hora' => '14:48:00 p. m.',
            'noOficio' => '008-01-JEG-2022',
            'dependencia' => 'JEFATURA DE EQUIDAD DE GÉNERO',
            'remitente' => 'LIC.DENHIA KRYSTAL HERRERA CUPIL JEFATURA DE EQUIDAD DE GÉNERO',
            'asunto' => 'SOLICITUD DE PRESENCIA EN LAS INSTALACIONES DE LA CASA DE LA JUVENTUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000812',
            'fecha' => '28-ene-22',
            'hora' => '15:05:00 p. m.',
            'noOficio' => '0020 / REG6-AP /2022',
            'dependencia' => 'REGIDURÍA SEXTA',
            'remitente' => 'LIC.ISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL H.AYUNTAMIENTO CONSTITUCIONAL DE MINATITLÁN, VERACRUZ',
            'asunto' => 'SOLICITUD DE SERVICIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000813',
            'fecha' => '28-ene-22',
            'hora' => '15:05:00 p. m.',
            'noOficio' => '14/REG.6-OPJ/2022',
            'dependencia' => 'REGIDURÍA SEXTA',
            'remitente' => 'LIC.ISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL H.AYUNTAMIENTO CONSTITUCIONAL DE MINATITLÁN, VERACRUZ',
            'asunto' => 'SOLICITUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000814',
            'fecha' => '28-ene-22',
            'hora' => '15:22:00 p. m.',
            'noOficio' => 'DLP/026/2022',
            'dependencia' => 'DIRECCIÓN DE LIMPIA PÚBLICA',
            'remitente' => 'LIC.HECTOR SOTO HERNANDEZ DIRECTOR DE LIMPIA PÚBLICA, LIC.JOSÉ RAMÍREZ DOMÍNGUEZ DIRECTOR GENERAL DE SERVICIOS PÚBLICOS GENERALES',
            'asunto' => 'SOLICITUD PARA AUTORIZAR LA ENTREGA DE UN FONDO FIJO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000816',
            'fecha' => '28-ene-22',
            'hora' => '15:42:00 p. m.',
            'noOficio' => 'OF/DEMA/0024/2022',
            'dependencia' => 'DIRECCIÓN DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING.JORGE DAVID PALAVICINI RODRÍGUEZ DIRECTOR DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'asunto' => 'PERMISO DE PODA DE ÁRBOL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '28-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'INSTITUTO MEJORES GOBERNANTES A.C.',
            'remitente' => 'GALO LIMÓN PRESIDENTE INSTITUTO MEJORES GOBERNANTES A.C., ANDRÉS FRANCO COORDINADOR DE RED GOBIERNO',
            'asunto' => 'CONVOCATORIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '29-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIPUTADAS Y DIPUTADOS DEL ESTADO DE VERACRUZ',
            'remitente' => 'DIPUTADAS Y DIPUTADOS DEL ESTADO DE VERACRUZ',
            'asunto' => 'INVITACIÓN A LA ASAMBLEA INFORMATIVAS PARA LA REFORMA ELÉCTRICA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000824',
            'fecha' => '31-ene-22',
            'hora' => '09:07:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFATURA DE CULTURA, JEFATURA DE TURISMO',
            'remitente' => 'LIC.FRANCISCO MORALES MOLINA JEFATURA DE CULTURA, LIC.RUTH TORRES RENDÓN JEFATURA DE TURISMO',
            'asunto' => 'INVITACIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000826',
            'fecha' => '31-ene-22',
            'hora' => '09:28:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ESCUELA PRIMARIA LUIS DONALDO COLOSIO MURRIETA',
            'remitente' => 'PROFA.NANCY VIANEY CORNELIO MATUS',
            'asunto' => 'SOLICITUD DE APOYO PARA MEJORAR LAS INSTALACIONES DE LA ESCUELA PRIMARIA LUIS DONALDO COLOSIO MURRIETA',
            'telefono' => '922 128 1023',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000829',
            'fecha' => '31-ene-22',
            'hora' => '09:44:00 a. m.',
            'noOficio' => '00024/R12ECRFDACRCPR/2022',
            'dependencia' => 'REGIDURÍA DUODECIMO',
            'remitente' => 'PROFR.HUGO LEONARDO TORRES VILLEGAS REGIDOR DUODECIMO EDUCACIÓN, CULTURA, RECREACIÓN, FOMENTO AL DEPORTE, ACTOS CÍVICOS, REGISTRO CIVIL, PANTEONES Y RECLUTAMIENTO',
            'asunto' => 'AUSENSIA DE LABORES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000837',
            'fecha' => '31-ene-22',
            'hora' => '10:37:00 a. m.',
            'noOficio' => 'REG2/02-2022',
            'dependencia' => 'REGIDURÍA SEGUNDO DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'C.JESUS ADRIAN PERALTA MARQUEZ REGIDOR SEGUNDO DEL H.AYUNTAMIENTO DE MINATITLÁN, VERACRUZ',
            'asunto' => 'SOLICITUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000840',
            'fecha' => '31-ene-22',
            'hora' => '11:19:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECCIÓN DE PARTICIPACIÓN CIUDADANA',
            'remitente' => 'LIC.LUIS OCTAVIO VILLANUEVA VÁSQUEZ DIRECTOR DE PARTICIPACIÓN CIUDADANA',
            'asunto' => 'SOLICITUD DE APOYO EN LA ATENCIÓN AL CASO QUE NOS EXPONE LA CIUDADANA EMILIA ZARATE FLORES',
            'telefono' => '922 211 6722, 922 131 2900',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000842',
            'fecha' => '31-ene-22',
            'hora' => '11:55:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO SAN PLÁCIDO MUNICIPIO DE MINATITLÁN VERACRUZ',
            'remitente' => 'C.RAMIRO ZÚÑIGA LÓPEZ SUBAGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000843',
            'fecha' => '31-ene-22',
            'hora' => '11:58:00 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'LIC.JORGE ALBERTO VÁSQUEZ SULVARÁN',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 156 7799',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000844',
            'fecha' => '31-ene-22',
            'hora' => '12:06:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'MIRIAM Z. PINEDA TORRES',
            'asunto' => 'SOLICITUD DE APOYO PARA MEDICAMENTOS',
            'telefono' => '922 125 3920',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000848',
            'fecha' => '31-ene-22',
            'hora' => '12:23:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'ELIA LOPEZ ROJAS',
            'asunto' => 'SOLICITUD DE APOYO ECONOMICO',
            'telefono' => '922 208 4051, 922 189 9433',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000852',
            'fecha' => '31-ene-22',
            'hora' => '12:45:00 p. m.',
            'noOficio' => 'STSCMAPS/2022/SG-027',
            'dependencia' => 'SINDICATO DE TRABAJADORES AL SERVICIO DE LA COMISIÓN MUNICIPAL DE AGUA POTABLE Y SANEAMIENTO DE MINATITLÁN, VERACRUZ',
            'remitente' => 'ING.JOSE ROBERTO DE JESUS TOLENTINO SECRETARIO GENERAL',
            'asunto' => 'LOS SALARIOS DE LOS TRABAJADORES DE LA COMUNICIÓN SERÁN PAGADOS LOS DÍAS QUINCE Y TREINTA DE CADA MES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '31-ene-22',
            'hora' => '06:02:00 p. m.',
            'noOficio' => '0003/2022',
            'dependencia' => 'SECRETARÍA MUNICIPAL',
            'remitente' => 'LIC.GUILLERMO REYES ESPRONCEDA SECRETARIO DEL H.AYUNTAMIENTO',
            'asunto' => 'AUTORIZACIÓN PARA ESPACIOS PÚBLICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000876',
            'fecha' => '31-ene-22',
            'hora' => '15:55:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECCIÓN GENERAL DEL REGISTRO CIVIL DEL ESTADO DE VERACRUZ',
            'remitente' => 'LIC.FRANCISCO HERNÁNDEZ HERNÁNDEZ OFICIAL ENCARGADO DEL REGISTRO CIVIL DE MINATITLÁN, VERACRUZ',
            'asunto' => 'SOLICITUD PARA QUE SE AUTORICE Y PROPORCIONE LOS 100 FORMATOS DE INSCRIPCIÓN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000883',
            'fecha' => '31-ene-22',
            'hora' => '18:34:00 p. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CRISTALINA TOLEDO ANTONIO PRESIDENTE DE LA SOCIEDAD ISTMEÑA',
            'asunto' => 'SOLICITUD DE AUTORIZACIÓN PARA EL USO DEL PARQUE INDEPEDENCIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '31-ene-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'COBAEV 42',
            'remitente' => 'DR.MIGUEL ÁNGEL MARTÍNEZ HERNÁNDEZ DIRECTOR DEL COBAEV -42, DR.HERMILLO ARISTA BONILLA CORDINADOR ZONA VII COBAEV',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '31-ene-2',
            'hora' => '18:15:00 p. m.',
            'noOficio' => 'EUPP/0032/2022',
            'dependencia' => 'UNIVERSIDAD DEL GOLFO DE MÉXICO CAMPUS MINATITLÁN',
            'remitente' => 'MTRA.CLAUDIA CANO OROZCO DIRECTORA UNIVERSIDAD DEL GOLFO DE MÉXICO, CAMPUS MINATITLÁN',
            'asunto' => 'INVITACIÓN PARA QUE LA DEPENDENCIA QUE DIGNAMENTE REPRESENTA SEA PARTE DE LA RED DE DEPENDENCIAS Y EMPRESAS A TRAVÉS DE LA FIRMA DE UN CONVENIO DE COLABORACIÓN PARA QUE NUESTROS ALUMNOS SE FORMEN PROFESIONALMENTE MEDIANTE LA REALIZACIÓN DE SUS RESIDENCIAS PROFESIONALES Y/O SERVICIO SOCIAL',
            'telefono' => '922 223 5005',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);
        
        Oficio::create([
            'folio' => '000910',
            'fecha' => '01-feb-22',
            'hora' => '12:21:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ESCUELA PRIMARIA SIMON BOLIVAR DE LA LOCALIDAD SAN CRISTOBAL MUNICIPIO DE MINATITLAN',
            'remitente' => 'PROFRAMARIA ISABEL BLAS MARQUEZ DIRECTOR DEL PLANTEL CGUADALUPE SAN JUAN REYES PRESIDENTE DE LA ASOCIACION DE PADRES DE FAMILIA ROBERTO MONTALVO MONTALVO PRESIDENTE DEL COMISARIADO EJIDAL EDUARDO GARCIA ITURRALDE AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE INTERVENCION PARA LA COLOCACION DE UN TRANSFORMADOR DE LUZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000913',
            'fecha' => '01-feb-22',
            'hora' => '12:37:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CMIGUEL ANGEL VELA ABAD',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000914',
            'fecha' => '01-feb-22',
            'hora' => '12:23:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SEDENA SECRETARIA DE LA DEFENSA NACIONAL',
            'remitente' => 'MAYOR FAPADEMAJOSE REYNALDO ALCARAZ ARCOVERDE COMANDANTE DE LA ESTACION AEREA MILITAR NO7',
            'asunto' => 'INVITACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000914',
            'fecha' => '01-feb-22',
            'hora' => '12:23:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SEDENA SECRETARIA DE LA DEFENSA NACIONAL',
            'remitente' => 'MAYOR FAPADEMAJOSE REYNALDO ALCARAZ ARCOVERDE COMANDANTE DE LA ESTACION AEREA MILITAR NO7',
            'asunto' => 'INVITACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000918',
            'fecha' => '01-feb-22',
            'hora' => '13:33:00 p m',
            'noOficio' => '0058/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'NOTIFICACION DEL CONTRATO NO CO-FEFMPHT - 501/2020',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000921',
            'fecha' => '01-feb-22',
            'hora' => '14:08:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'MONICA MIJANGOS TEJERO',
            'asunto' => 'REPORTE DE CALLE EN MAL ESTADO CALLE CIUDAD MADERO EN LA COLONIA MADERO EN LA COLONIA NUEVA TACOTENO',
            'telefono' => '229 132 6377',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000923',
            'fecha' => '01-feb-22',
            'hora' => '15:40:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'PATRONATO PRO REHABILITACION DE RED DE AGUA POTABLE DE LA CALLE NI�OS HEROES ENTRE LAS CALLES NI�OS HEROES Y MANANTIAL DE LA COLPRADERAS DEL JAGUEY',
            'asunto' => 'SOLICITUD PARA LA REALIZACION DE OBRA DE PRIMERA NECESIDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '01-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '311  1/18',
            'dependencia' => 'DIRECCION GENERAL DE CARRETERAS',
            'remitente' => 'MI MARTHA VELEZ XAXALPA DIRECTORA CORDINADORA DE PROYECTOS',
            'asunto' => 'SOLICITUD DE COLOBARACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '01-feb-22',
            'hora' => '02:16:00 p m',
            'noOficio' => 'DGJN/026/2022',
            'dependencia' => 'DIRECCION GENERAL JURIDICA Y NORMATIVIDAD',
            'remitente' => 'CANGEL JARQUIN ESCORCIA DIRECTOR GENERAL JURIDICO Y NORMATIVIDAD',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '01-feb-22',
            'hora' => '02:16:00 p m',
            'noOficio' => 'DGJN/025/2022',
            'dependencia' => 'DIRECCION GENERAL JURIDICA Y NORMATIVIDAD',
            'remitente' => 'CANGEL JARQUIN ESCORCIA DIRECTOR GENERAL JURIDICO Y NORMATIVIDAD',
            'asunto' => 'SE REMITE OFICIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '02-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CMIC CAMARA MEXICANA DE LA INDUSTRIA DE LA CONSTRUCCION DELEGACION VERACRUZ SUR',
            'remitente' => 'LIC LUIS FERNANDO ESCAMILLA AGUILAR PRESIDENTE ELECTO',
            'asunto' => 'INVITACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '02-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DSP/SPS/DPCYS/22/2022',
            'dependencia' => 'JEFATURA DE LA JURISDICCION SANITARIA NO XI',
            'remitente' => 'DRA SUSANA MORALES CASTRO JEFA DE LA JURISDICCION SANITARIA NO XI',
            'asunto' => 'REUNION DE ELECCION DEL ALCALDE COORDINADOR REGIONAL DE LA RED VERACRUZANA DE MUNICIPIOS POR LA SALUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '02-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'LIC MARIA FELIX OSORIO DOMINGUEZ AUDITORA ESPECIAL DE PLANEACION EVALUACION Y FORTALECIMIENTO INSTITUCIONAL',
            'asunto' => 'POR INSTRUCCIONES DE LA MTRA DELIA GONZALEZ  COBOS AUDITORA GENERAL TITULAR DEL ORFIS ME PERMITO CONVOCARLE A USTED PARA QUE PARTICIPEN EN LA VIDEOCONFERENCIA DENOMINADA JORNADAS DE ORIENTACION RESPECTO DEL PROCESO DE ENTREGA Y RECEPCION Y ATENCION DE LOS ASPECTOS MAS RELEVANTES DE LA ADMINISTRACION PUBLICA MUNICIPAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000932',
            'fecha' => '02-feb-22',
            'hora' => '10:29:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO NUEVO CHAMIZAL MUNICIPIO DE MINATITLAN VER',
            'remitente' => 'SIN DATO',
            'asunto' => 'SOLICITUD PARA EL CAMINO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '02-feb-22',
            'hora' => '15:25:00 p m',
            'noOficio' => 'AP-034/2022',
            'dependencia' => 'DIRECCION DE ADMINISTRACION PATRIMONIAL',
            'remitente' => 'CMARIA SOFIA ALEMAN TOSCA DIRECTORA DE ADMINISTRACION PATRIMONIAL',
            'asunto' => 'SOLICITUD PARA REALIZAR UNA REUNION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000933',
            'fecha' => '02-feb-22',
            'hora' => '10:35:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECCION DE PARTICIPACION',
            'remitente' => 'LICLUIS OCTAVIO VILLANUEVA VASQUEZ DIRECTOR DE PARTICIPACION CIUDADANA',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000934',
            'fecha' => '02-feb-22',
            'hora' => '10:37:00 a m',
            'noOficio' => '043/CMD/2022',
            'dependencia' => 'JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'remitente' => 'LDERICK HERNANDEZ SOTO ENCARGADO DE LA JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000935',
            'fecha' => '02-feb-22',
            'hora' => '10:37:00 a m',
            'noOficio' => '042/CMD/2022',
            'dependencia' => 'JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'remitente' => 'LDERICK HERNANDEZ SOTO ENCARGADO DE LA JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000940',
            'fecha' => '02-feb-22',
            'hora' => '12:25:00 p m',
            'noOficio' => 'AD/0001/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000941',
            'fecha' => '02-feb-22',
            'hora' => '12:55:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ESCUELA PRIMARIA ALFONSO ARROYO FLORES',
            'remitente' => 'DENISSE GABRIELA RAMOS GARCIA PRESIDENTE CEPS PROFRLUIS JORGE MU�OZ FLORES DIRECTOR DE LA ESCUELA ITZEL FUENTES PEREZ PRESIDENTE APF',
            'asunto' => 'SOLICITUD PARA CONSTRUCCION DE DOMO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000942',
            'fecha' => '02-feb-22',
            'hora' => '13:14:00 p m',
            'noOficio' => 'PC-009-2022',
            'dependencia' => 'DIRECCION MUNICIPAL DE PROTECCION CIVIL',
            'remitente' => 'ING ANDRES EDMUNDO GOMEZ MONTES DIRECTOR DE PROTECCION CIVIL',
            'asunto' => 'EL MOTIVO DE LA PRESENTE ES PARA HACERLE LLEGAR UN ACTA CIRCUNSTANCIADA DE HECHOS SUCITADOS EL 07 DE ENERO DEL PRESENTE A�O',
            'telefono' => '922 223 4999',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000945',
            'fecha' => '02-feb-22',
            'hora' => '13:16:00 p m',
            'noOficio' => '0061/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'SOLICITUD DE COPIA DE ESCRITURAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000953',
            'fecha' => '02-feb-22',
            'hora' => '14:18:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO LA SOLEDAD MUNICIPIO DE MINATITLAN VER',
            'remitente' => 'SUB AGENTE MUNICIPAL',
            'asunto' => 'SOLICITU DE AYUDA PARA EL CIERRE DE UNA CANTINA DISFRASADA DE ABARROTES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000956',
            'fecha' => '02-feb-22',
            'hora' => '14:38:00 p m',
            'noOficio' => '011-02-JEG-2022',
            'dependencia' => 'JEFATURA DE EQUIDAD DE GENERO',
            'remitente' => 'LICDENHIA KRYSTAL HERRERA CUPIL JEFATURA DE EQUIDAD DE GENERO',
            'asunto' => 'SE REALICE DISE�O DE INVITACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000957',
            'fecha' => '02-feb-22',
            'hora' => '14:39:00 p m',
            'noOficio' => '010-02-JEG-2022',
            'dependencia' => 'JEFATURA DE EQUIDAD DE GENERO',
            'remitente' => 'LICDENHIA KRYSTAL HERRERA CUPIL JEFATURA DE EQUIDAD DE GENERO',
            'asunto' => 'SE REALICE UNA PUBLICACION EN LA PAGINA OFICIAL DE ESTE AYUNTAMIENTO CON INFORMACION DE LA EQUIDAD DE GENERO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000958',
            'fecha' => '02-feb-22',
            'hora' => '15:06:00 p m',
            'noOficio' => 'AP-034/2022',
            'dependencia' => 'DIRECCION DE ADMINISTRACION PATRIMONIAL',
            'remitente' => 'CMARIA SOFIA ALEMAN TOSCA DIRECTORA DE ADMINISTRACION PATRIMONIAL',
            'asunto' => 'SOLICITUD DE REUNION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000965',
            'fecha' => '02-feb-22',
            'hora' => '15:32:00 p m',
            'noOficio' => 'REG2/27-2022',
            'dependencia' => 'REGUDURIA SEGUNDO DEL HAYUNTAMIENTO DE MINATITLAN VER',
            'remitente' => 'CJESUS ADRIAN PERALTA MARQUEZ REGIDOR SEGUNDO DEL HAYUNTAMIENTO DE MINATITLAN VER',
            'asunto' => 'SOLICITUD PARA QUE SE CONVOQUE SESION EXTRORDINARIA DE CABILDO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000966',
            'fecha' => '02-feb-22',
            'hora' => '16:34:00 p m',
            'noOficio' => 'DCAT/016/2022',
            'dependencia' => 'DIRECCION DE CATASTRO',
            'remitente' => 'JOSSELINE GUTIERREZ ESPINOSA',
            'asunto' => 'REMITIR COPIA DE LOS INSTRUMENTOS PUBLICOS QUE EXISTEN EN LOS ARCHIVOS DE LA DIRECCION DE CATASTRO RELATIVOS A LOS INMUEBLES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '03-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0012/DG-OTMS/2022',
            'dependencia' => 'DIRECCION GENERAL DE ORDENAMIENTO TERRITORIAL MUNICIPAL Y DE SUSTENTABILIDAD',
            'remitente' => 'ING VICTOR MANUEL ARIAS ORDO�EZ DIRECTOR GRAL DE ORENAMIENTO TERRITORIAL MUNICIPAL Y SUSTENTABILIDAD',
            'asunto' => 'ATENCION DE SOLICITUD DE INSPECCION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000971',
            'fecha' => '03-feb-22',
            'hora' => '10:13:00 a m',
            'noOficio' => '045/CMD/2022',
            'dependencia' => 'JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'remitente' => 'LDERICK HERNANDEZ SOTO ENCARGADO DE LA JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000990',
            'fecha' => '03-feb-22',
            'hora' => '13:06:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CJOSE ALVAREZ RODRIGUEZ',
            'asunto' => 'SOLICITUD PARA UNA AUDIENCIA',
            'telefono' => '923 100 5753',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '03-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CSILVIA MEDINA SOLIS',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000992',
            'fecha' => '03-feb-22',
            'hora' => '13:43:00 p m',
            'noOficio' => '011-11-J-D-S-2022',
            'dependencia' => 'JEFATURA DE DIVERSIDAD SEXUAL',
            'remitente' => 'ING JOSE IGNACIO SANCHEZ ESPINOSA JEFATURA DE DIVERSIDAD SEXUAL',
            'asunto' => 'CORDIAL INVITACION A LA SEGUNDA REUNION CON LOS MIEMBROS DE LA COMUNIDAD LGBTTT',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000993',
            'fecha' => '03-feb-22',
            'hora' => '13:43:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECCION DE PARTICIPACION CIUDADANA',
            'remitente' => 'LICLUIS OCTAVIO VILLANUEVA VASQUEZ DIRECTOR DE PARTICIPACION CIUDADANA',
            'asunto' => 'SOLICITUDES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '000995',
            'fecha' => '03-feb-22',
            'hora' => '14:38:00 p m',
            'noOficio' => 'DCAT/015/2022',
            'dependencia' => 'DIRECCION DE CATASTRO',
            'remitente' => 'LICJOSSELINE GUTIERRES ESPINOSA',
            'asunto' => 'EL QUE SE INDICA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001000',
            'fecha' => '03-feb-22',
            'hora' => '14:54:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CMONICA MIJANGOS TEJERO',
            'asunto' => 'REPORTE TIENDITA MINISUPER LA ESQUINITA UBICADO EN LA ESQUINA CALLE SALAMANCA CON ESQUINA CALLE LOPEZ RAYON EN LA COLONIA NUEVA TACOTENO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001001',
            'fecha' => '03-feb-22',
            'hora' => '15:10:00 p m',
            'noOficio' => '16/REG6-OPJ/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'LICISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL HAYUNTAMIENTO CONSTITUCIONAL DE MINATITLAN VER',
            'asunto' => 'SOLICITUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001002',
            'fecha' => '03-feb-22',
            'hora' => '15:11:00 p m',
            'noOficio' => '0021/REG6-AP/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'LICISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL HAYUNTAMIENTO CONSTITUCIONAL DE MINATITLAN VER',
            'asunto' => 'SOLICITUD DE SERVICIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001003',
            'fecha' => '03-feb-22',
            'hora' => '15:17:00 p m',
            'noOficio' => '0064/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'ENVIO DE REPORTE DE ESTADO DE OBRA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001005',
            'fecha' => '03-feb-22',
            'hora' => '15:19:00 p m',
            'noOficio' => '00026/R12ECRFDACRCPR/2022',
            'dependencia' => 'REGIDURIA DUODECIMO',
            'remitente' => 'PROFRHUGO LEONARDO TORRES VILLEGAS REGIDOR DUODECIMO EDUCACION CULTURA RECREACION FOMENTO AL DEPORTE ACTOS CIVICOS REGISTRO CIVIL PANTEONES Y RECLUTAMIENTO',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001006',
            'fecha' => '03-feb-22',
            'hora' => '15:19:00 p m',
            'noOficio' => '00025/R12ECRFDACRCPR/2022',
            'dependencia' => 'REGIDURIA DUODECIMO',
            'remitente' => 'PROFRHUGO LEONARDO TORRES VILLEGAS REGIDOR DUODECIMO EDUCACION CULTURA RECREACION FOMENTO AL DEPORTE ACTOS CIVICOS REGISTRO CIVIL PANTEONES Y RECLUTAMIENTO',
            'asunto' => 'SOLICITUD DE APOYO Y COLABORACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C ESTEBAN MENDEZ PARRA',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 174 4582',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001013',
            'fecha' => '04-feb-22',
            'hora' => '09:38:00 a m',
            'noOficio' => 'SECTUR/DS/0074/2022',
            'dependencia' => 'SECRETARIA DE TURISMO Y CULTURA',
            'remitente' => 'LICXOCHITL ARBESU LAGO SECRETARIA DE TURISMO Y CULTURA DEL ESTADO DE VERACRUZ',
            'asunto' => 'SOLICITUD PARA UTILIZAR LAS INSTALACIONES DE LA UNIDAD DEPORTIVA BENITO JUAREZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001014',
            'fecha' => '04-feb-22',
            'hora' => '09:44:00 a m',
            'noOficio' => 'AD/0003/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001015',
            'fecha' => '04-feb-22',
            'hora' => '09:44:00 a m',
            'noOficio' => 'AD/0003/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001016',
            'fecha' => '04-feb-22',
            'hora' => '09:45:00 a m',
            'noOficio' => 'MRP-08-22',
            'dependencia' => 'MESA PANAMERICANA DE MINATITLAN AC',
            'remitente' => 'SRANATIVIDAD DE JESUS VAUGHAN URREA DIRECTORA PROFAALICIA VIVAS DE MARTINEZ SECRETARIA DE CORRESPONDENCIA MTRAJUDITH GARCIA ADRIANO TESORERA',
            'asunto' => 'SOLICITUD DE PERSONAL PARA BIBLIOTECA Y MANTENIMIENTO',
            'telefono' => '922 129 2536',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001025',
            'fecha' => '04-feb-22',
            'hora' => '10:28:00 a m',
            'noOficio' => 'SGAR/3540/2010',
            'dependencia' => 'IGLESIA CRISTIANA PALABRA DE VIDA RESTAURACION INTERNACIONAL AR',
            'remitente' => 'CARLOS ARTURO PALMER COLORADO',
            'asunto' => 'AVISO DE MINISTROS DE CULTO EN LA CALLE E ZAPATA 6 COL CUAUHTEMOC',
            'telefono' => '937 1107420',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => '17:48:00 p m',
            'noOficio' => 'AD/0012/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => '17:49:00 p m',
            'noOficio' => 'AD/0013/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001038',
            'fecha' => '04-feb-22',
            'hora' => '11:51:00 a m',
            'noOficio' => 'DLP/028/2022',
            'dependencia' => 'DIRECCION DE LIMPIA PUBLICA',
            'remitente' => 'LIC HECTOR SOTO HERNANDEZ DIRECTOR DE LIMPIA PUBLICA',
            'asunto' => 'SE REALIZOLA INSPECCION Y RECOLECCION DE BASURA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001050',
            'fecha' => '04-feb-22',
            'hora' => '15:26:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SECCION ESTUDIANTIL DEL INSTITUTO MEXICANO DE INGENIEROS QUIMICOS DEL INSTITUTO TECNOLOGICO DE MINATITLAN SEIMIQ ITMINATITLAN',
            'remitente' => 'CALEXANDER LOPEZ MARTINEZ ASESOR INTERNO DE LA MESA DIRECTIVA SEIMIQ ITMINATITLAN',
            'asunto' => 'INVITACION PARA EL CONGRESO SEIMIQ 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001056',
            'fecha' => '04-feb-22',
            'hora' => '13:46:00 p m',
            'noOficio' => '040CMD/2022',
            'dependencia' => 'JEFATURA DE LA COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'remitente' => 'LDERICK HERNANDEZ SOTO ENCARGADO DE LA JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001056',
            'fecha' => '04-feb-22',
            'hora' => '13:46:00 p m',
            'noOficio' => '040CMD/2022',
            'dependencia' => 'JEFATURA DE LA COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'remitente' => 'LDERICK HERNANDEZ SOTO ENCARGADO DE LA JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001060',
            'fecha' => '04-feb-22',
            'hora' => '16:06:00 p m',
            'noOficio' => '24/REG7/2022',
            'dependencia' => 'REGIDURIA SEPTIMA',
            'remitente' => 'LIC PATRICIA RUEDA HERNANDEZ REGIDORA SEPTIMA DEL H AYUNTAMIENTO DE MINATITLAN VER',
            'asunto' => 'TENGO A BIEN INFORMAR QUE SE ENCUENTRAN PROYECTADAS DIVERSAS ACCIONES DENTRO DE LAS COMISIONES QUE ENCABEZA SU SERVIDORA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001062',
            'fecha' => '04-feb-22',
            'hora' => '17:49:00 p m',
            'noOficio' => 'AD/0013/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001063',
            'fecha' => '04-feb-22',
            'hora' => '17:48:00 p m',
            'noOficio' => 'AD/0012/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001064',
            'fecha' => '04-feb-22',
            'hora' => '17:47:00 p m',
            'noOficio' => 'AD/0011/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001065',
            'fecha' => '04-feb-22',
            'hora' => '17:46:00 p m',
            'noOficio' => 'AD/0010/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001066',
            'fecha' => '04-feb-22',
            'hora' => '17:45:00 p m',
            'noOficio' => 'AD/009/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001067',
            'fecha' => '04-feb-22',
            'hora' => '17:44:00 p m',
            'noOficio' => 'AD/0008/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001068',
            'fecha' => '04-feb-22',
            'hora' => '17:43:00 p m',
            'noOficio' => 'AD/0007/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001069',
            'fecha' => '04-feb-22',
            'hora' => '17:42:00 p m',
            'noOficio' => 'AD/0006/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001070',
            'fecha' => '04-feb-22',
            'hora' => '17:41:00 p m',
            'noOficio' => 'AD/0005/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001071',
            'fecha' => '04-feb-22',
            'hora' => '17:40:00 p m',
            'noOficio' => 'AD/0004/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => '17:40:00 p m',
            'noOficio' => 'AD/0004/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => '17:41:00 p m',
            'noOficio' => 'AD/0005/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => '17:42:00 p m',
            'noOficio' => 'AD/0006/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => '17:43:00 p m',
            'noOficio' => 'AD/0007/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => '17:44:00 p m',
            'noOficio' => 'AD/0008/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => '17:45:00 p m',
            'noOficio' => 'AD/009/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => '17:46:00 p m',
            'noOficio' => 'AD/0010/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => '17:47:00 p m',
            'noOficio' => 'AD/0011/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTO Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '04-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C CECILIO GUTIERREZ ROMERO',
            'asunto' => 'RENUNCIA VOLUNTARIA A LA RELACION LABORAL QUE TENIA EN LA DIRECCION DE SEGURIDAD PUBLICA DE MINATITLAN VERACRUZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '06-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIIO/SMN/1252/2676',
            'dependencia' => 'SEDENA SECRETARIA DE LA DEFENSA NACIONAL',
            'remitente' => 'COR DE INF DEM FELIX JESUS OJEDA ORTIZ EL COMANDANTE DEL 3/ER BATALLON DE INFANTERIA',
            'asunto' => 'CEREMONIA DE BIENVENIDA DEL SMN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '07-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0070/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'TRAMITACION DE NUMEROS DE OFICIOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '08-feb-22',
            'hora' => '17:49:00 p m',
            'noOficio' => 'TyV/061/2022',
            'dependencia' => 'DEPARTAMENTO DE TRANSITO Y VIALIDAD',
            'remitente' => 'LIC SERGIO EDUARDO URQUIDI URDIANA JEFE DE TRANSITO Y VIALIDAD DEL H AYUNTAMIENTO DE MINATITLAN VER',
            'asunto' => 'SOLICITUD DE TABULADOR',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '08-feb-22',
            'hora' => '17:48:00 p m',
            'noOficio' => 'TyV/061/2022',
            'dependencia' => 'DEPARTAMENTO DE TRANSITO Y VIALIDAD',
            'remitente' => 'LIC SERGIO EDUARDO URQUIDI URDIANA JEFE DE TRANSITO Y VIALIDAD DEL H AYUNTAMIENTO DE MINATITLAN VER',
            'asunto' => 'SOLICITUD DE TABULADOR',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '08-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'FA-026-2022',
            'dependencia' => 'FOMENTO AGROPECUARIO',
            'remitente' => 'ING VALENTIN SANCHEZ HIPOLITO JEFE DE FOMENTO AGROPECUARIO',
            'asunto' => 'ENTREGA DE LOS EXPEDIENTES EN DIGITAL RECIBIDOS EN LA JEFATURA DE FOMENTO AGROPECUARIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001078',
            'fecha' => '08-feb-22',
            'hora' => '09:59:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'SIN DATO',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001079',
            'fecha' => '08-feb-22',
            'hora' => '10:11:00 a m',
            'noOficio' => '0012/DG-OTMS/2022',
            'dependencia' => 'DIRECCION GENERAL DE ORDENAMIENTO TERRITORIAL MUNICIPAL Y DE SUSTENTABILIDAD',
            'remitente' => 'ING VICTOR MANUEL ARIAS ORDO�EZ DIRECTOR GRAL DE ORENAMIENTO TERRITORIAL MUNICIPAL Y SUSTENTABILIDAD',
            'asunto' => 'ATENCION DE SOLICITUD DE INSPECCION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001080',
            'fecha' => '08-feb-22',
            'hora' => '10:13:00 a m',
            'noOficio' => 'TM-0034/2022',
            'dependencia' => 'TESORERIA MUNICIPAL',
            'remitente' => 'CPEDUARDO CAMARGO TOBON TESORERO MUNICIPAL',
            'asunto' => 'RESPUESTA A OFICIO NOAD/002/2022 CON FECHA 04/02/2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001081',
            'fecha' => '08-feb-22',
            'hora' => '10:15:00 a m',
            'noOficio' => '0068/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'ENTREGA DE PROYECTOS DE CAMINOS SACA COSECHAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001083',
            'fecha' => '08-feb-22',
            'hora' => '10:30:00 a m',
            'noOficio' => '0070/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'TRAMITACION DE NUMEROS DE OFICIOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001096',
            'fecha' => '08-feb-22',
            'hora' => '11:44:00 a m',
            'noOficio' => '00416/07/02/2022',
            'dependencia' => 'SECRETARIA DE BIENESTAR',
            'remitente' => 'CMARIA DE LOS ANGELES PRIETO LINARES DIRECTORA REGIONAL DE PROGRAMAS INTEGRALES DE DESARROLLO REGION 08 CON SEDE EN MINATITLAN VER',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '922 106 4795',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001097',
            'fecha' => '08-feb-22',
            'hora' => '11:52:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EL BARZON DISTRITO MINATITLAN',
            'remitente' => 'LAE ALVARO CUEVAS PEREZ',
            'asunto' => 'SOLICITUD DE AUDIENCIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001101',
            'fecha' => '08-feb-22',
            'hora' => '12:43:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'UNION DE COMERCIANTES DEL MERCADO POPULAR SOLIDARIDAD DE MINATITLAN VER',
            'remitente' => 'UNION DE LOCATARIOS DEL MERCADO POPULAR AC',
            'asunto' => 'NOTIFICACION DE INCONFORMIDAD',
            'telefono' => '922 139 1022',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001104',
            'fecha' => '08-feb-22',
            'hora' => '12:48:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFATURA DE SALUD',
            'remitente' => 'DRSALVADOR SANCHEZ DIAZ JEFE DE LA JEFATURA DE SALUD',
            'asunto' => 'GRABACION DE AUDIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001105',
            'fecha' => '08-feb-22',
            'hora' => '12:53:00 p m',
            'noOficio' => '0071/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'SOLICITUD DE GUARDIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001106',
            'fecha' => '08-feb-22',
            'hora' => '12:54:00 p m',
            'noOficio' => '0072/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'SOLICITUD DE COPIA DE ESCRITURAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001116',
            'fecha' => '08-feb-22',
            'hora' => '14:41:00 p m',
            'noOficio' => '053/CMD/2022',
            'dependencia' => 'JEFARTURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'remitente' => 'LDERICK HERNANDEZ SOTO ENCARGADO DE LA JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'SOLICITUD DE APOYO PARA SOLICITAR MAMPARA Y EQUIPO DE SONIDO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001117',
            'fecha' => '08-feb-22',
            'hora' => '15:15:00 p m',
            'noOficio' => 'TRANSP2022/0055',
            'dependencia' => 'DIRECCION DE TRANSPARENCIA Y ACCESO A LA INFORMACION PUBLICA',
            'remitente' => 'LIC DEYCI MONTORES PEREZ TITULAR DE LA UNIDAD DE TRANSPARENCIA',
            'asunto' => 'PROPUESTA DE CALENDARIO DE CAPACITACION A UNIDADES ADMINISTRATIVAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001124',
            'fecha' => '08-feb-22',
            'hora' => '17:05:00 p m',
            'noOficio' => '24/REG6/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'LICISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL HAYUNTAMIENTO CONSTITUCIONAL DE MINATITLAN VER',
            'asunto' => 'NOTIFICACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001132',
            'fecha' => '09-feb-22',
            'hora' => '10:50:00 a m',
            'noOficio' => 'R9-033/2022',
            'dependencia' => 'REGIDURIA NOVENA',
            'remitente' => 'LIC ZAYRA NATALYE GONZALEZ CRUZ REGIDORA NOVENA FOMENTO AGROPECUARIO DE LA NI�EZ Y LA FAMILIA',
            'asunto' => 'SOLICITUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001136',
            'fecha' => '09-feb-22',
            'hora' => '11:30:00 a m',
            'noOficio' => 'JIJ-0009/2022',
            'dependencia' => 'JEFATURA DE LA JUVENTUD',
            'remitente' => 'ING JOSE ALFREDO JIMENEZ ESCUDERO JEFATURA DE LA JUVENTUD',
            'asunto' => 'HACER DE SU CONOCIMIENTO LAS CONDICIONES EN QUE SE ENCONTRO LA CASA DE LA JUVENTUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '08-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'UBBJ-MIN-005-2022',
            'dependencia' => 'UNIVERSIDADES PARA EL BIENESTAR BENITO JUAREZ GARCIA SEDE MINATITLAN VER',
            'remitente' => 'INGJORGE J PRIEGO SYMES ENCARGADO DE LA CORDINACION DE LA SEDE EDUCATIVA DE MINATITLAN EN VERACRUZ',
            'asunto' => 'SOLICITUD DE MAQUINARIA PARA LA CONSTRUCCION DE LA UBBJ SEDE MINATITLAN VERACRUZ',
            'telefono' => '922 224 0976',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '08-feb-22',
            'hora' => '12:44:00 p m',
            'noOficio' => 'SM/MR/002/2022',
            'dependencia' => 'SECRETARIA MUNICIPAL',
            'remitente' => 'LICGUILLERMO REYES ESPRONCEDA SECRETARIO DEL HAYUNTAMIENTO',
            'asunto' => 'FIRMA DE CARTILLAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '08-feb-22',
            'hora' => '12:44:00 p m',
            'noOficio' => 'SEDESOL/NO0178/2022',
            'dependencia' => 'SEDESOL SECRETARIA DE DESARROLLO SOCIAL',
            'remitente' => 'ING GUILLERMO FERNANDEZ SANCHEZ  SECRETARIO DE DESARROLLO SOCIAL',
            'asunto' => 'INFORMACION RELATIVA A LA NORMATIVA FISMDF 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '08-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CATALINA HERNANDEZ HERNANDEZ',
            'asunto' => 'SOLICITUD DE APOYO PARA ADQUIRIR DOS BOLETOS ADO PARA VIAJAR A XALAPA',
            'telefono' => '922 266 4666',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '08-feb-22',
            'hora' => '09:00:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LA BRE�A MUNICIPIO DE MINATITLAN VERACRUZ',
            'remitente' => 'CFRANCISCO ARPISTA TRINIDAD SUB AGENTE MUNICIPAL CISMAEL RODRIGUEZ CLARA PASTOR DE LA IGLESIA',
            'asunto' => 'SOLICITUD PARA LA CONSTRUCCION DE UNA TECHURA PARA UNA CASA DE ORACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001140',
            'fecha' => '09-feb-22',
            'hora' => '12:14:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONGRACION ADALBERTO TEJEDA MUNICIPIO DE MINATITLAN VER',
            'remitente' => 'FERNANDO ESPINOZA ORTIS ROSENDO BLANCO HERNANDEZ PAULINO RUEDA HERNANDEZ',
            'asunto' => 'SOLICITUD DE APOYO PARA DOS PATRULLAS Y PARA MAS SEGURIDAD',
            'telefono' => '923 131 4161',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001141',
            'fecha' => '09-feb-22',
            'hora' => '12:23:00 p m',
            'noOficio' => '00075/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'ENVIO EXPEDIENTES TECNICOS DIGITALIZADOS OBRA EN PROCESO 2020 Y 2021',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '09-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'COVERMER/0021-7/2022',
            'dependencia' => 'COVERMER',
            'remitente' => 'CPARITS BEATRIZ RODRIGUEZ TRILLO COMISIONADA VERACRUZANA DE MEJORA REGULATORIA',
            'asunto' => 'IMPLEMENTACION DE LA POLITICA PUBLICA DE MEJORA REGULATORIA Y DESIGNACION DE ENLACE',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '09-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'COVERMER/0021-7/2022',
            'dependencia' => 'COVERMER',
            'remitente' => 'CPARITS BEATRIZ RODRIGUEZ TRILLO COMISIONADA VERACRUZANA DE MEJORA REGULATORIA',
            'asunto' => 'IMPLEMENTACION DE LA POLITICA PUBLICA DE MEJORA REGULATORIA Y DESIGNACION DE ENLACE',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001148',
            'fecha' => '09-feb-22',
            'hora' => '12:59:00 p m',
            'noOficio' => '20/REG6-OPJ/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'LICISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL HAYUNTAMIENTO CONSTITUCIONAL DE MINATITLAN VER',
            'asunto' => 'NOTIFICACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '09-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'RH/0107/2022',
            'dependencia' => 'DIRECCION DE RECURSOS HUMANOS',
            'remitente' => 'LIC MIRIAM DEL CARMEN DE LUNA SOLER DIRECTORA DE RECURSOS HUMANOS',
            'asunto' => 'SOLICITUD PARA ENTREGAR TODOS LOS EXPEDIENTES DEL PERSONAL QUE LA BORA EN LA DIRECCION A SU CARGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001154',
            'fecha' => '09-feb-22',
            'hora' => '13:23:00 p m',
            'noOficio' => 'REG8/023/2022',
            'dependencia' => 'REGIDURIA OCTAVA',
            'remitente' => 'LICMIGUEL ANGEL ESTRADA FERRER REGIDOR OCTAVA SALUD Y ASISTENCIA PUBLICA PROMOCION A LOS DERECHOS HUMANOS',
            'asunto' => 'SOLICITUD PARA COPIA DE DOCUMENTOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001158',
            'fecha' => '09-feb-22',
            'hora' => '13:48:00 p m',
            'noOficio' => 'R9/-038/2022',
            'dependencia' => 'REGIDURIA 9',
            'remitente' => 'LIC ZAYRA NATALYE GONZALEZ CRUZ REGIDORA NOVENA FOMENTO AGROPECUARIO DE LA NI�EZ Y LA FAMILIA',
            'asunto' => 'SOLICITAR COPIA CERTIFICADA DEL ACTA DE LA SESION NOVENA EXTRAORDINARIA DE CABILDO Y COPIA CERTIFICADA DEL DICTAMEN DE ENTRGA-RECEPCION DE LA ADMINISTRACION MUNICIPAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001161',
            'fecha' => '09-feb-22',
            'hora' => '14:16:00 p m',
            'noOficio' => 'SIIO-1/',
            'dependencia' => 'SEDENA SECRETARIA DE LA DEFENSA NACIONAL',
            'remitente' => 'TTE COR INF PORFIRIO AVILA DIAZ',
            'asunto' => 'CEREMONIA DE BIENVENIDA SMN 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001162',
            'fecha' => '09-feb-22',
            'hora' => '14:45:00 p m',
            'noOficio' => '030/02/DIRIMM/2022',
            'dependencia' => 'INSTITUTO MUNICIPAL DE LAS MUJERES EN MINATITLAN VERACRUZ',
            'remitente' => 'LICEULALIA NATIVIDAD BERNARDO DIRECTORA DEL INSTITUTO MUNICIPAL DE LAS MUJERES EN MINATITLAN VERACRUZ',
            'asunto' => 'CONVOCATORIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001165',
            'fecha' => '09-feb-22',
            'hora' => '16:11:00 p m',
            'noOficio' => 'TRANSP2022/0059',
            'dependencia' => 'DIRECCION DE TRANSPARENCIA Y ACCESO A LA INFORMACION PUBLICA',
            'remitente' => 'LIC DEYCI MONTORES PEREZ TITULAR DE LA UNIDAD DE TRANSPARENCIA',
            'asunto' => 'INVITACION A CAPACITACION A UNIDADES ADMINISTRATIVAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '09-feb-22',
            'hora' => '16:11:00 p m',
            'noOficio' => 'TRANSP2022/0060',
            'dependencia' => 'DIRECCION DE TRANSPARENCIA Y ACCESO A LA INFORMACION PUBLICA',
            'remitente' => 'LIC DEYCI MONTORES PEREZ TITULAR DE LA UNIDAD DE TRANSPARENCIA',
            'asunto' => 'INVITACION A CAPACITACION A UNIDADES ADMINISTRATIVAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '09-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'TRANSP2022/0060',
            'dependencia' => 'DIRECCION DE TRANSPARENCIA Y ACCESO A LA INFORMACION PUBLICA',
            'remitente' => 'LIC DEYCI MONTORES PEREZ TITULAR DE LA UNIDAD DE TRANSPARENCIA',
            'asunto' => 'INVITACION A CAPACITACION A UNIDADES ADMINISTRATIVAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001174',
            'fecha' => '10-feb-22',
            'hora' => '09:40:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO EMILIANO ZAPATA 2',
            'remitente' => 'ENRIQUE MORALES CASTILLO SUB-AGENTE DEL EJIDO EMILIANO ZAPATA 2',
            'asunto' => 'SOLICITUD DE APOYO PARA COMPRAR UN ATAUD',
            'telefono' => '922 214 8718',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '10-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO ARROYO CINTA',
            'remitente' => 'FLOR DE MARIA CRUZ ASCENCIO SUB AGENTE MUNICIPAL',
            'asunto' => 'SOLICITUD DE APOYO CON UN ATAUD PARA UNA PERSONA QUE FALLECIO EN NUESTRA COMUNIDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001184',
            'fecha' => '10-feb-22',
            'hora' => '10:46:00 a m',
            'noOficio' => '00417/031/01/2022',
            'dependencia' => 'SECRETARIA DE BIENESTAR',
            'remitente' => 'CMARIA DE LOS ANGELES PRIETO LINARES DIRECTORA REGIONAL DE PROGRAMAS INTEGRALES DE DESARROLLO REGION 08 CON SEDE EN MINATITLAN VER',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '10-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'REGIDURIA DUODECIMO JEFATURA DE EDUCACION',
            'remitente' => 'MTROHUGO LEONARDO TORRES VILLEGAS REGIDOR DUODECIMO Y LICMARIA DE JESUS OROZCO CARTAS JEFATURA DE EDUCACION',
            'asunto' => 'INVITACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001185',
            'fecha' => '10-feb-22',
            'hora' => '11:06:00 a m',
            'noOficio' => '26/REG7/2022',
            'dependencia' => 'REGIDURIA SEPTIMA DEL H AYUNTAMIENTO DE MINATITLAN VER',
            'remitente' => 'LIC PATRICIA RUEDA HERNANDEZ REGIDORA SEPTIMA DEL H AYUNTAMIENTO DE MINATITLAN VER',
            'asunto' => 'PERMITO SOLICITAR COPIA SIMPLE DE LOS ARCHIVOS ACUERDOS DICTAMENES Y/O PROGRAMAS ASI COMO LA DEMAS DOCUMENTACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001186',
            'fecha' => '10-feb-22',
            'hora' => '11:05:00 a m',
            'noOficio' => '00029/R12ECRFDACRCPR/2022',
            'dependencia' => 'REGIDURIA DUODECIMO',
            'remitente' => 'MTROHUGO LEONARDO TORRES VILLEGAS REGIDOR DUODECIMO',
            'asunto' => 'SOLICITAR COPIA DE DOCUMENTOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001191',
            'fecha' => '10-feb-22',
            'hora' => '11:36:00 a m',
            'noOficio' => 'CIRCULAR 01',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LACESAR ARAM SORIANO BETANZO DIRECOR DE ADQUISICIONES ARRENDAMIENTOS Y SERVICIOS',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001192',
            'fecha' => '10-feb-22',
            'hora' => '11:39:00 a m',
            'noOficio' => 'TRANSP2022/0064',
            'dependencia' => 'DIRECCION DE TRANSPARENCIA Y ACCESO A LA INFORMACION PUBLICA',
            'remitente' => 'LIC DEYCI MONTORES PEREZ TITULAR DE LA UNIDAD DE TRANSPARENCIA',
            'asunto' => 'INVITACION A PRIMERA SESION DEL COMITE DE TRANSPARENCIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001204',
            'fecha' => '10-feb-22',
            'hora' => '14:14:00 p m',
            'noOficio' => 'JEB-0057/2022',
            'dependencia' => 'JEFATURA DE EDUCACION',
            'remitente' => 'LICMARIA DE JESUS OROZCO CARTAS JEFE DE EDUCACION',
            'asunto' => 'PETICION DE ESCUELA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001205',
            'fecha' => '10-feb-22',
            'hora' => '14:14:00 p m',
            'noOficio' => 'JEB-0058/2022',
            'dependencia' => 'JEFATURA DE EDUCACION',
            'remitente' => 'LICMARIA DE JESUS OROZCO CARTAS JEFE DE EDUCACION',
            'asunto' => 'PETICION DE ESCUELA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001222',
            'fecha' => '10-feb-22',
            'hora' => '14:34:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'BACHILLERATO MIXTO LAS AMERICAS',
            'remitente' => 'ING NORMA ANGELICA CRUZ TORRES SUBDIRECTORA',
            'asunto' => 'SOLICITUD DE AUTORIZACION DE OFERTA EDUCATIVA',
            'telefono' => '922 176 7041',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '10-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ORFIS',
            'remitente' => 'ORFIS',
            'asunto' => 'JORNADAS DE ORIENTACION RESPECTO DEL PROCESO DE ENTREGA Y RECEPCION Y ATENCION DE LOS ASPECTOS MAS RELEVANTES DE LA ADMINISTRACION PUBLICA MUNICIPAL CONFIRMACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '10-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ORFIS',
            'remitente' => 'ORFIS',
            'asunto' => 'JORNADAS DE ORIENTACION RESPECTO DEL PROCESO DE ENTREGA Y RECEPCION Y ATENCION DE LOS ASPECTOS MAS RELEVANTES DE LA ADMINISTRACION PUBLICA MUNICIPAL CONFIRMACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '10-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SEV/SEB/CECONEPASE/0330/2022',
            'dependencia' => 'SIN DATO',
            'remitente' => 'ESTEFANIA HERNANDEZ SALAZAR',
            'asunto' => 'CONFIRMACION DE CORREO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '11-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SEV/SEB/CECONEPASE/0330/2022',
            'dependencia' => 'SUBSECRETARIA DE EDUCACION BASICA',
            'remitente' => 'PROFFELIX CEBALLOS ALBA COORDINADOR EJECUTIVO DEL CONSEJO ESTATAL DE PARTICIPACION SOCIAL EN LA EDUCACION',
            'asunto' => 'INSTALACION DEL CONSEJO MUNICIPAL DE PARTICIPACION ESCOLAR EN LA EDUCACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001233',
            'fecha' => '08-feb-22',
            'hora' => '09:00:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'LA BRE�A MUNICIPIO DE MINATITLAN VERACRUZ',
            'remitente' => 'CFRANCISCO ARPISTA TRINIDAD SUB AGENTE MUNICIPAL CISMAEL RODRIGUEZ CLARA PASTOR DE LA IGLESIA',
            'asunto' => 'SOLICITUD PARA LA CONSTRUCCION DE UNA TECHURA PARA UNA CASA DE ORACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '11-feb-22',
            'hora' => '09:00:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CXITLALI OSORIO PEREZ',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001238',
            'fecha' => '11-feb-22',
            'hora' => '09:00:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CXITLALI OSORIO PEREZ',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001241',
            'fecha' => '11-feb-22',
            'hora' => '09:39:00 a m',
            'noOficio' => 'AD/0016/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LACESAR ARAM SORIANO BETANZO DIRECOR DE ADQUISICIONES ARRENDAMIENTOS Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001242',
            'fecha' => '11-feb-22',
            'hora' => '09:40:00 a m',
            'noOficio' => 'AD/0015/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LACESAR ARAM SORIANO BETANZO DIRECOR DE ADQUISICIONES ARRENDAMIENTOS Y SERVICIOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001249',
            'fecha' => '11-feb-22',
            'hora' => '10:40:00 a m',
            'noOficio' => '0017/DG-OTMS/2022',
            'dependencia' => 'DIRECCION GENERAL DE ORDENAMIENTO TERRITORIAL MUNICIPAL Y DE SUSTENTABILIDAD',
            'remitente' => 'ING VICTOR MANUEL ARIAS ORDO�EZ DIRECTOR GRAL DE ORENAMIENTO TERRITORIAL MUNICIPAL Y SUSTENTABILIDAD',
            'asunto' => 'NO SE CUENTA CON EXPEDIENTE SOLICITADO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001252',
            'fecha' => '11-feb-22',
            'hora' => '10:58:00 a m',
            'noOficio' => 'AP-048/2022',
            'dependencia' => 'DIRECCION DE ADMINISTRACION PATRIMONIAL',
            'remitente' => 'CMARIA SOFIA ALEMAN TOSCA DIRECTORA DE ADMINISTRACION PATRIMONIAL',
            'asunto' => 'SOLICITUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001259',
            'fecha' => '11-feb-22',
            'hora' => '11:22:00 a m',
            'noOficio' => '106/DIRECCION',
            'dependencia' => 'DIRECCION MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR DIRECTOR MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'EN RESPUESTA AL OFICIO N RH/107/2022 SE LE HACE LA ENTREGA EL 10 DE FEVRERO DEL 2022 15 CAJAS DE ARCHIVO CON 246 EXPEDIENTES DEL PERSONAL QUE SE ENCUENTRA A MI CARGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001264',
            'fecha' => '11-feb-22',
            'hora' => '11:40:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CLUB DE PERIODISTAS',
            'remitente' => 'ING MARCOS CESAR THEUREL COTERO',
            'asunto' => 'INVITACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001267',
            'fecha' => '11-feb-22',
            'hora' => '12:42:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EJIDO NUEVO CHAMIZAL MUNICIPIO DE MINATITLAN VER',
            'remitente' => 'CANGELA HERNANDEZ MARTINEZ PRODUCTOR EJIDO NUEVO CHAMIZAL',
            'asunto' => 'SOLICITUD DE APOYO DE FERTILIZANTE PARA DOS HECTAREAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001268',
            'fecha' => '11-feb-22',
            'hora' => '12:43:00 p m',
            'noOficio' => 'MMDGA/0005/2022',
            'dependencia' => 'DIRECCION GENERAL DE ADMON',
            'remitente' => 'LACESAR ARAM SORIANO BETANZO DIRECOR DE ADQUISICIONES ARRENDAMIENTOS Y SERVICIOS CPHUGO V LECHUGA APARICIO DIRECTOR GENERAL DE ADMON Y SERVICIOS GRALES LCMIRIAM DEL CARMEN DE LUNA SOLER DIRECTOR DE RECURSOS HUMANOS',
            'asunto' => 'SOLICITUD DE PAGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001274',
            'fecha' => '11-feb-22',
            'hora' => '13:44:00 p m',
            'noOficio' => '00038/JC/2022',
            'dependencia' => 'JEFATURA DE CULTURA',
            'remitente' => 'LICFRANCISCO MORALES MOLINA JEFATURA DE CULTURA',
            'asunto' => 'SOLICITUD DE AUTORIZACION PARA EL USO DE LA EXPLANADA DEL PALACIO MUNICIPAL DE MINATITLAN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001277',
            'fecha' => '11-feb-22',
            'hora' => '14:18:00 p m',
            'noOficio' => '0083/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'INFORME DE INICIO DE TRABAJOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001287',
            'fecha' => '11-feb-22',
            'hora' => '15:25:00 p m',
            'noOficio' => 'R3/010/2022',
            'dependencia' => 'REGIDURIA TERCERA COMISION DE COMUNICACIONES Y OBRAS PUBLICAS',
            'remitente' => 'LIC ROMINA GURRION VASQUEZ REGIDURIA TERCERA COMISION DE COMUNICACIONES',
            'asunto' => 'SOLICITUD DE INFORMACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001288',
            'fecha' => '11-feb-22',
            'hora' => '15:27:00 p m',
            'noOficio' => 'R3/011/2022',
            'dependencia' => 'REGIDURIA COMISION DE HACIENDA Y PATRIMONIO MUNICIPAL',
            'remitente' => 'LIC ROMINA GURRION VASQUEZ REGIDURIA TERCERA COMISION DE HACIENDA Y PATRIMONIO MUNICIPAL',
            'asunto' => 'SOLICITUD DE INFORMACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001289',
            'fecha' => '11-feb-22',
            'hora' => '16:05:00 p m',
            'noOficio' => 'DCAT/022/2022',
            'dependencia' => 'DIRECCION DE CATASTRO',
            'remitente' => 'LICJOSSELINE GUTIERRES ESPINOSA',
            'asunto' => 'LISTA DE ASISTENCIA DE PERSONAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '11-feb-22',
            'hora' => '17:00:00 p m',
            'noOficio' => 'DGJN/039/2022',
            'dependencia' => 'DIRECCION GENERAL JURIDICA Y NORMATIVIDAD',
            'remitente' => 'CANGEL JARQUIN ESCORCIA DIRECTOR GENERAL JURIDICO Y NORMATIVIDAD',
            'asunto' => 'APOYO DE VIATICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '11-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DP-008/2022',
            'dependencia' => 'DIRECCION DE PLANEACION',
            'remitente' => 'LIC NARCISO MARTINEZ ATILANO DIRECTOR DE PLANEACION Y POLITICAS PUBLICAS',
            'asunto' => 'SOLICITARLES LAS ADECUACIONES FINALES DE LAS LINEAS DE ACCION DEL PLAN MUNICIPAL DE DESARROLLO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFE DE DEPARTAMENTO DE LA JUVENTUD',
            'remitente' => 'ING JOSE ALFREDO JIMENEZ ESCUDERO',
            'asunto' => 'INVITACION A LA TOMA DE PROTESTA DEL CONSEJO MUNICIPAL DE JUVENTUD 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DP-009/2022',
            'dependencia' => 'DIRECCION DE PLANEACION',
            'remitente' => 'LIC NARCISO MARTINEZ ATILANO DIRECTOR DE PLANEACION Y POLITICAS PUBLICAS',
            'asunto' => 'ENTREGA DE DOCUMENTACION DEL MERCADO POPULAR SOLIDARIDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0112 DMAA/2022',
            'dependencia' => 'DIRECCION DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR DIRECTOR MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0112 DMAA/2022',
            'dependencia' => 'DIRECCION DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR DIRECTOR MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DMAA/0113',
            'dependencia' => 'DIRECCION DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR DIRECTOR MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'REUNION CON PERSONAL DEL DEPARTAMENTO JURIDICO DE CAEV PARA TRATAR ASUNTOS RELATIVOS AL AREA COMERCIAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DIRGOB/003/2022',
            'dependencia' => 'DIRECCION DE GOBERNACION',
            'remitente' => 'JOSE ALFREDO CARMONA CAPETILLO',
            'asunto' => 'SOLICITUD DE EXPEDICION DE GAFETE',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'INVEDEM/297/2022',
            'dependencia' => 'INSTITUTO VERACRUZANO DE DESARROLLO MUNICIPAL',
            'remitente' => 'LERAFAEL ACASTILLO ZUGASTI DIRECTOR GENERAL INSTITUTO VERACRUZANO DE DESARROLLO MUNICIPAL',
            'asunto' => 'INVITACION CONVERSATORIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => '10:36:00 a m',
            'noOficio' => 'SECTUR/DGST/050/2022',
            'dependencia' => 'SECRETARIA DE TURISMO Y CULTURA',
            'remitente' => 'DROMAR CASTRO PRADO DIRECTOR DE SERVICIOS TURISTICOS',
            'asunto' => 'SOLICITUD PARA UNA REUNION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001303',
            'fecha' => '14-feb-22',
            'hora' => '10:36:00 a m',
            'noOficio' => 'SECTUR/DGST/050/2022',
            'dependencia' => 'SECRETARIA DE TURISMO Y CULTURA',
            'remitente' => 'DROMAR CASTRO PRADO DIRECTOR DE SERVICIOS TURISTICOS',
            'asunto' => 'SOLICITUD PARA UNA REUNION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001304',
            'fecha' => '14-feb-22',
            'hora' => '11:06:00 a m',
            'noOficio' => '0081/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'INFORME DE INICIO DE TRABAJOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001305',
            'fecha' => '14-feb-22',
            'hora' => '11:07:00 a m',
            'noOficio' => '0084/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'SOLICITUD DE COPIA DE ESCRITURAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001310',
            'fecha' => '14-feb-22',
            'hora' => '12:10:00 a m',
            'noOficio' => 'OIC-068/2022',
            'dependencia' => 'ORGANO INTERNO DE CONTROL',
            'remitente' => 'LICGRACIELA GONZALEZ MARTINEZ TITULAR',
            'asunto' => 'CIRCULAR VIDEOCONFERENCIA ORFIS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001312',
            'fecha' => '14-feb-22',
            'hora' => '12:17:00 a m',
            'noOficio' => 'RHUM/2022/069',
            'dependencia' => 'DIRECCION DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR DIRECTOR MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'MEMORANDUM',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001331',
            'fecha' => '14-feb-22',
            'hora' => '03:48:00 p m',
            'noOficio' => 'REG2/37-2022',
            'dependencia' => 'REGIDURIA SEGUNDO',
            'remitente' => 'CJESUS ADRIAN PERALTA MARQUEZ REGIDOR SEGUNDO DEL HAYUNTAMIENTO DE MINATITLAN VER',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001333',
            'fecha' => '14-feb-22',
            'hora' => '16:01:00 p m',
            'noOficio' => 'SPM/001',
            'dependencia' => 'DIRECCION GENERAL DE SERVICIOS PUBLICOS MUNICIPALES',
            'remitente' => 'JOSE RAMIREZ DOMINGUEZ DIRECTOR GENERAL DE SERVICIOS PUBLICOS MUNICIPALES',
            'asunto' => 'SOLICITARLE NOS APOYE HACIENDO UNA GESTION O SOLICITUD CON LA 29 ZONA MILITAR SEDENA PARA COADYUVAR CON ESTE H AYUNTAMIENTO DE MINATITLAN EN EL DIA DE LOS SERVICIOS PUBLICOS MUNICIPALES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001334',
            'fecha' => '14-feb-22',
            'hora' => '16:02:00 p m',
            'noOficio' => 'SPM/001/2022',
            'dependencia' => 'DIRECCION GENERAL DE SERVICIOS PUBLICOS MUNICIPALES',
            'remitente' => 'JOSE RAMIREZ DOMINGUEZ DIRECTOR GENERAL DE SERVICIOS PUBLICOS MUNICIPALES',
            'asunto' => 'SE LLEVARA A CABO LA CAMPA�A DONA UNA PLANTA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => '13:53:00 p m',
            'noOficio' => '0054/10/DC2022',
            'dependencia' => 'DIRECCION DE COMERCIO',
            'remitente' => 'CMARIA DEL CARMEN CISNEROS GARCIA DIRECTORA DE COMERCIO',
            'asunto' => 'RFTE A INVITACION AL MERCADO SOLIDARIDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001336',
            'fecha' => '14-feb-22',
            'hora' => '16:14:00 p m',
            'noOficio' => 'DOPYJ/019/2022',
            'dependencia' => 'DIRECCION DE ORDENATOS PARQUES Y JARDINES',
            'remitente' => 'LICJUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORDENATOS PARQUES Y JARDINES',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => '10:13:00 a m',
            'noOficio' => 'REG2/36-2022',
            'dependencia' => 'REGIDURIA SEGUNDO DEL HAYUNTAMIENTO DE MINATITLANVER',
            'remitente' => 'CJESUS ADRIAN PERALTA MARQUEZ REGIDOR SEGUNDO DEL HAYUNTAMIENTO DE MINATITLAN VER',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'INSTITUTO MUNICIPAL DE LAS MUJERES EN MINATITLAN VERACRUZ',
            'remitente' => 'LICEULALIA NATIVIDAD BERNARDO DIRECTORA DEL INSTITUTO MUNICIPAL DE LAS MUJERES EN MINATITLAN VERACRUZ',
            'asunto' => 'SOLICITARLE GIRAR SUS APRECIABLES INSTRUCCIONES AL PERSONAL A SU DIGNO CARGO CON LA FINALIDAD DE PONER A DISPOSICION DE ESTE ORGANISMO PUBLICO DESCENTRALIZADO LOS RECURSOS ECONOMICOS DESTINADOS PARA SU OPERACION Y FUNCIONAMIENTO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '14-feb-22',
            'hora' => '10:13:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'C EMMANUEL RAMIREZ LAZARO',
            'asunto' => 'SOLICITUD DE VIATICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001339',
            'fecha' => '15-feb-22',
            'hora' => '09:11:00 a m',
            'noOficio' => '054/2022',
            'dependencia' => 'REGIDURIA DECIMA',
            'remitente' => 'CINGBLINO HERNANDEZ FERNANDEZ REGIDOR DECIMO FOMENTO FORESTAL ECOLOGIA Y MEDIO AMBIENTE',
            'asunto' => 'SOLICITUD DE PETICION HECHA POR LA DRA EMILY GARCIA MONTIEL DONDE SOLICITA PERMISO PARA UNOS INGENIROS AMBIENTALISTAS PARA REALIZAR UN MUESTREO DE SUELO EN LA ZONA DE TIRADERO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001340',
            'fecha' => '15-feb-22',
            'hora' => '09:40:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ESCUELA DE BACHILLERES MINATITLAN',
            'remitente' => 'LICLEDA NIDIA ANDRADE BALCAZAR DIRECTORA DE LA ESCUELA DE BACHILLERES MINATITLAN',
            'asunto' => 'SOLICITUD PARA UNA CITA CON LA PRESIDENTA MUNICIPAL DRACARMEN MEDEL PALMA',
            'telefono' => '922 282 2474',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001343',
            'fecha' => '15-feb-22',
            'hora' => '10:35:00 a m',
            'noOficio' => 'SEV/18/2022',
            'dependencia' => 'ESCUELA GRAL LAZARO CARDENAS DEL RIO',
            'remitente' => 'GABRIEL FRANCISCO MARQUEZ RAMOS DIRECTOR DE LA ESCUELA ANA MARIA DUHALT FIGUEROA PRESIDENTA APF MARGARITA FRANCISCO MORA SECRETARIA APF MARTA GOMEZ VAZQUEZ TESORERA APF',
            'asunto' => 'INVITACION A CONOCER LA ESCUELA GRAL LAZARO CARDENAS DEL RIO',
            'telefono' => '922 130 4614',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001355',
            'fecha' => '15-feb-22',
            'hora' => '12:22:00 p m',
            'noOficio' => 'SESVER/RS/JSXI/0018/2022',
            'dependencia' => 'DEPARTAMENTO DE REGULACION SANITARIA',
            'remitente' => 'IQCARLOS JAVIER ARTEGA RUIZ JEFE DEL DEPTODE REGULACION SANITARIA',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001360',
            'fecha' => '15-feb-22',
            'hora' => '14:09:00 p m',
            'noOficio' => 'PEP-DG-SE-GEG-2132-2021',
            'dependencia' => 'PEMEX',
            'remitente' => 'RUBEN ANTONIO AJANDA BENITEZ REPRESENTANTE LEGAL PEMEX EXPLORACION Y PRODUCCION',
            'asunto' => 'SOLICITUD DE CONFORMIDAD RESPECTO DE SEGURIDAD Y UBICACION DEL LUGAR DE CONSUMO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001367',
            'fecha' => '15-feb-22',
            'hora' => '14:40:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'LICROSALIA TORRES ALFONSO',
            'asunto' => 'SOLICITUD PARA GIRAR INSTRUCCIONES',
            'telefono' => '993 252 6351',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '15-feb-22',
            'hora' => '14:43:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'INSTITUTO MUNICIPAL DE LAS MUJERES DE MINATITLAN VERACRUZ',
            'remitente' => 'LICEULALIA NATIVIDAD BERNARDO DIRECTORA DEL INSTITUTO MUNICIPAL DE LAS MUJERES EN MINATITLAN VERACRUZ',
            'asunto' => 'SOLICITUD PARA GIRAR INSTRUCCIONES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001370',
            'fecha' => '15-feb-22',
            'hora' => '15:02:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CJOSE ANGEL RIVAS SUAREZ',
            'asunto' => 'SOLICITUD PARA PODER PERTENECER A ESTA DEPENDENCIA DE GOBIERNO DEL ESTADO COMO CHOFER',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001374',
            'fecha' => '15-feb-22',
            'hora' => '15:10:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'MERCADO POPULAR SOLIDARIDAD',
            'remitente' => 'UNION DE COMERCIANTES DEL MERCADO POPULAR SOLIDARIDAD PRESIDENTE FERNANDO RODRIGUEZ DIAZ',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '15-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'EB-0003/2022',
            'dependencia' => 'BIBLIOTECA',
            'remitente' => 'LICJOSE ALONSO ALDANA HERNANDEZ ENCARGADO DE BIBLIOTECAS',
            'asunto' => 'DISE�O DE EVENTO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001381',
            'fecha' => '15-feb-22',
            'hora' => '10:35:00 a m',
            'noOficio' => 'AD/0018/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LACESAR ARAM SORIANO BETANZO DIRECTOR DE ADQUISICIONES ARRENDAMIENTOS Y SERVICIOS',
            'asunto' => 'SOLICITUD DE INFORMACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001384',
            'fecha' => '15-feb-22',
            'hora' => '17:26:00 p m',
            'noOficio' => '0088/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'NOTIFICACION DEL CONTRATO NO CO-FEFMPHT - 501/2020',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => '29/a ZONA MILITAR',
            'remitente' => 'GENERAL DE BRIGADA DEM FERNANDO COLCHADO GOMEZ COMANDANTE',
            'asunto' => 'INVITACION PARA QUE NOS HONRE CON SU PRESENCIA CONMEMORATIVO AL DIA DEL EJERCITO MEXICANO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => '29/a ZONA MILITAR',
            'remitente' => 'GENERAL DE BRIGADA DEM FERNANDO COLCHADO GOMEZ COMANDANTE',
            'asunto' => 'INVITACION PARA QUE NOS HONRE CON SU PRESENCIA CONMEMORATIVO AL DIA DEL EJERCITO MEXICANO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => '29/a ZONA MILITAR',
            'remitente' => 'GENERAL DE BRIGADA DEM FERNANDO COLCHADO GOMEZ COMANDANTE',
            'asunto' => 'INVITACION PARA QUE NOS HONRE CON SU PRESENCIA CONMEMORATIVO AL DIA DEL EJERCITO MEXICANO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'MMDGA/0006/2022',
            'dependencia' => 'DIRECCION GENERAL DE ADMINISTRACION Y SERVICIOS GENERALES',
            'remitente' => 'C HUGO VIRGILIO LECHUGA APARICIO DIRECTOR GRAL DE ADMINISTRACION Y SERVICIOS GENERALES',
            'asunto' => 'SOLICITUD DE FIRMA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DGFAUT/612/032/2022',
            'dependencia' => 'DIRECCION GENERAL DE FOMENTO AMBIENTAL URBANO Y TURISTICO',
            'remitente' => 'MTRO SERGIO ISRAEL MENDOZA AGUIRRE DIRECTOR GENERAL',
            'asunto' => 'INVITACION PARA ASISTIR A REUNION DE TRABAJO EN EL TECNOLOGICO DE MINATITLAN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DSP/SPS/DPCYS/161/302/2022',
            'dependencia' => 'SERVICIOS DE SALUD DE VERACRUZ',
            'remitente' => 'DR ROBERTO RAMOS ALOR SECRETARIO DE SALUD Y DIRECTOR GENERAL DE SERVICIOS DE SALUD DE VERACRUZ',
            'asunto' => 'INVITACION A LA REUNION DE ELECCION DEL CONSEJO DIRECTIVO DE LA RED VERACRUZANA DE MUNICIPIOS POR LA SALUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001388',
            'fecha' => '16-feb-22',
            'hora' => '09:30:00 a m',
            'noOficio' => '032/02/DIR IMM/2022',
            'dependencia' => 'INSTITUTO MUNICIPAL DE LAS MUJERES DE MINATITLAN VERACRUZ',
            'remitente' => 'LICEULALIA NATIVIDAD BERNARDO DIRECTORA DEL INSTITUTO MUNICIPAL DE LAS MUJERES EN MINATITLAN VERACRUZ',
            'asunto' => 'SOLICITA GIRAR INSTRUCCIONES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'OIC-079/2022',
            'dependencia' => 'ORGANO INTERNO DE CONTROL',
            'remitente' => 'LICGRACIELA GONZALEZ MARTINEZ TITULAR',
            'asunto' => 'COMUNICADO 23409/20/2022 ORFIS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DGFAUT/612/DGIR/007-10/2022',
            'dependencia' => 'SECRETARIA DE MEDIO AMBIENTE Y RECURSOS NATURALES',
            'remitente' => 'LICRODRIGO VILLEGAS GOMEZ DIRECTOR',
            'asunto' => 'SOLICITUD DE APOYO PARA QUE SE REMITA INFORMACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DGFAUT/612/032/2022',
            'dependencia' => 'SECRETARIA DE MEDIO AMBIENTE Y RECURSOS NATURALES',
            'remitente' => 'MTROSERGIO ISRAEL MENDOZA AGUIRRE DIRECTOR GENERAL',
            'asunto' => 'INVITACION PARA ASISTIR A REUNION DE TRABAJO EN EL TECNOLOGICO DE MINATITLAN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001392',
            'fecha' => '16-feb-22',
            'hora' => '09:34:00 a m',
            'noOficio' => 'LMHC/018/2021-2022',
            'dependencia' => 'ESCPRIMLIBERTADOR MIGUEL HIDALGO Y COSTILLA',
            'remitente' => 'PROFRVICTOR VARGAS MORENO',
            'asunto' => 'SOLICITUD DE CONDONACION DE AGUA Y DRENAJE',
            'telefono' => '922 176 0991',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001395',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '057/2022',
            'dependencia' => 'REGIDURIA DECIMA',
            'remitente' => 'CLICBLINO HERNANDEZ FERNANDEZ REGIDOR DECIMO FOMENTO FORESTAL ECOLOGIA Y MEDIO AMBIENTE DESEMPE�O',
            'asunto' => 'SOLICITA QUE PROPORCIONE VIATICOS PARA DOS PERSONAS PARA VIAJAR A LA CIUDAD DE XALAPA DE ENRIQUEZ VER',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001396',
            'fecha' => '16-feb-22',
            'hora' => '10:02:00 a m',
            'noOficio' => '0532/2022',
            'dependencia' => 'SUEM',
            'remitente' => 'ANDRES SANTOS ESCANDON Y LIC MARIA ISABEL DIYARZA MARTINEZ',
            'asunto' => 'SOLICITA SE LES INFORME ANTES DE REALIZAR CUALQUIER CAMBIO QUE SE REALICE EN LOS DEPARTAMENTOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001398',
            'fecha' => '16-feb-22',
            'hora' => '10:23:00 a m',
            'noOficio' => 'OIC-076/2022',
            'dependencia' => 'ORGANO INTERNO DE CONTROL',
            'remitente' => 'LIC GRACIELA GONZALEZ MARTINEZ TITULAR',
            'asunto' => 'CIRCULAR VIDEOCONFERENCIA ORFIS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001400',
            'fecha' => '16-feb-22',
            'hora' => '10:48:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'AGENDA 2030',
            'remitente' => 'LICMILDRED YAMILET QUI�ONES BIELMA  ASESOR/CONSULTOR AGENDA 2030 PROMOTOR DE LA RED INTERNACIONAL PROMOTORES ODS INTERNATIONAL COUNCIL AGENDA 2030 FROM SOCIETY',
            'asunto' => 'SEGUIMIENTO DE LA ADOPCION E IMPLEMENTACION DE LA AGENDA 2030 Y LOS 17 ODS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001408',
            'fecha' => '16-feb-22',
            'hora' => '11:45:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'INTEGRANTES DE LA MESA DIRECTIVA DEL PATRONATO EDUARDO SOTO INNES',
            'remitente' => 'JULIO BASURTO VIDA�A PRESIDENTE MARIA DEL CARMEN FERIA SEGURA SECRETARIA JESUS SANCHEZ CORTES TESORERO',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001411',
            'fecha' => '16-feb-22',
            'hora' => '12:00:00 p m',
            'noOficio' => '00418/015/02/2022',
            'dependencia' => 'SECRETARIA DE BIENESTAR',
            'remitente' => 'CMARIA DE LOS ANGELES PRIETO LINARES DIRECTORA REGIONAL DE PROGRAMAS INTEGRALES DE DESARROLLO REGION 08 CON SEDE EN MINATITLAN VER',
            'asunto' => 'SOLICITA OCUPAR OTRO ESPACIO EN EJIDO TACOTENO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'OIC/080/2022',
            'dependencia' => 'ORGANO INTERNO DE CONTROL',
            'remitente' => 'LICGRACIELA GONZALEZ MARTINEZ TITULAR',
            'asunto' => 'COMUNICADO ORFIS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001425',
            'fecha' => '16-feb-22',
            'hora' => '13:54:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'OEGANIZACION CONURBA SA DE CV',
            'remitente' => 'M EN I FRANCISCO JOSE GARCIA MIER DIRECTOR GENERAL',
            'asunto' => 'PLANEACION URBANA HIDRAULICA Y DE RIESGOS NATURALES CARTERA DE PROYECTOS ESTRATEGICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001429',
            'fecha' => '16-feb-22',
            'hora' => '14:05:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'ARQFREDY MANUEL RUIZ SANCHEZ',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001436',
            'fecha' => '16-feb-22',
            'hora' => '14:48:00 p m',
            'noOficio' => 'REG2/40-2022',
            'dependencia' => 'REGIDURIA SEGUNDO DEL HAYUNTAMIENTO DE MINATITLANVER',
            'remitente' => 'CJESUS ADRIAN PERALTA MARQUEZ REGIDOR SEGUNDO DEL HAYUNTAMIENTO DE MINATITLAN VER',
            'asunto' => 'SOLICITUD PARA AGENDAR UNA CITA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0005/2022',
            'dependencia' => 'SECRETARIA MUNICIPAL',
            'remitente' => 'LICGUILLERMO REYES ESPRONCEDA SECRETARIO DEL HAYUNTAMIENTO',
            'asunto' => 'AUTORIZACION DE ESPACIOS PUBLICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0006/2022',
            'dependencia' => 'SECRETARIA MUNICIPAL',
            'remitente' => 'LICGUILLERMO REYES ESPRONCEDA SECRETARIO DEL HAYUNTAMIENTO',
            'asunto' => 'AUTORIZACION DE ESPACIOS PUBLICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '16-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DSP/SPS/DPCYS/161/302/2022',
            'dependencia' => 'SERVICIOS DE SALUD DE VERACRUZ',
            'remitente' => 'DR ROBERTO RAMOS ALOR SECRETARIO DE SALUD Y DIRECTOR GENERAL DE SERVICIOS DE SALUD DE VERACRUZ',
            'asunto' => 'INVITACION A LA REUNION DE ELECCION DEL CONSEJO DIRECTIVO DE LA RED VERACRUZANA DE MUNICIPIOS POR LA SALUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '38/016/02/2022',
            'dependencia' => 'DIF MINATITLAN',
            'remitente' => 'MTRAMARIA ISABEL DAVILA REYES DIRECTORA DEL SISTEMA DIF MINATITLAN',
            'asunto' => 'SOLICITUD PARA QUE EL INGWILLIAMS MAYO GONZALEZ ASISTA AL CURSO DE CAPACITACION PARA ENCARGADOS DEL INAPAM',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001441',
            'fecha' => '17-feb-22',
            'hora' => '08:36:00 a m',
            'noOficio' => 'JT/0030/2022',
            'dependencia' => 'JEFATURA DE TURISMO',
            'remitente' => 'LIC RUTH TORRES RENDON JEFATURA DE TURISMO',
            'asunto' => 'EN LA SALA DE CABILDO SE ABORDARAN TEMAS DEL SECTOR',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001445',
            'fecha' => '17-feb-22',
            'hora' => '09:49:00 a m',
            'noOficio' => 'DOPYJ/022/2022',
            'dependencia' => 'DIRECCION DE ORNATOS PARQUES Y JARDINES',
            'remitente' => 'LICJUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORNATOS PARQUES Y JARDINES',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001449',
            'fecha' => '17-feb-22',
            'hora' => '10:09 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'REGIDURIA OCTAVA',
            'remitente' => 'LIC MIGUEL ANGEL ESTRADA FERRER',
            'asunto' => 'INVITACION A CURSO \"CAPACITACION EN MATERIA DE DERECHOS HIUMANOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001449',
            'fecha' => '17-feb-22',
            'hora' => '10:09 a. m.',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'REGIDURIA OCTAVA',
            'remitente' => 'LIC MIGUEL ANGEL ESTRADA FERRER',
            'asunto' => 'INVITACION A CURSO \"CAPACITACION EN MATERIA DE DERECHOS HIUMANOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-feb-22',
            'hora' => '10:27:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SUB AGENTE DEL EJ NUEVO ATOYAC',
            'remitente' => 'C PORFIRIO SOLIS VERGARA',
            'asunto' => 'APOYO PARA COMPRA DE ATAUD FINADO POLICARPIO MARTINEZ SUAREZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001455',
            'fecha' => '17-feb-22',
            'hora' => '10:27:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SUB AGENTE DEL EJ NUEVO ATOYAC',
            'remitente' => 'C PORFIRIO SOLIS VERGARA',
            'asunto' => 'APOYO PARA COMPRA DE ATAUD FINADO POLICARPIO MARTINEZ SUAREZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001462',
            'fecha' => '17-feb-22',
            'hora' => '11:08:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'UNIVERSIDAD DEL GOLFO DE MEXICO CAMPUS MINATITLAN',
            'remitente' => 'LICCLAUDIA CANO OROZCO DIRECTORA',
            'asunto' => 'INVITACION A FIN DE CONTAR CON RESPETABLE PRESENCIA EN EL EVENTO CONCURSO DE ESCOLTAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001462',
            'fecha' => '17-feb-22',
            'hora' => '11:08:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'UNIVERSIDAD DEL GOLFO DE MEXICO CAMPUS MINATITLAN',
            'remitente' => 'LICCLAUDIA CANO OROZCO DIRECTORA',
            'asunto' => 'INVITACION A FIN DE CONTAR CON RESPETABLE PRESENCIA EN EL EVENTO CONCURSO DE ESCOLTAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001465',
            'fecha' => '17-feb-22',
            'hora' => '11:18:00 a m',
            'noOficio' => 'DMAA-0118/2022',
            'dependencia' => 'DIRECCION DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR DIRECTOR MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'CONTESTACION STATUS DE POZO EJIDO LA BOMBA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001467',
            'fecha' => '17-feb-22',
            'hora' => '11:45:00 a m',
            'noOficio' => 'SPM/002/2022',
            'dependencia' => 'DIRECCION GENERAL DE SERVICIOS PUBLICOS MUNICIPALES',
            'remitente' => 'LIC JOSE RAMIREZ DOMINGUEZ DIRECTOR GENERAL DE SERVICIOS PUBLICOS MUNICIPALES',
            'asunto' => 'SE LLEVARA A CABO LA CAMPA�A DONA UNA PLANTA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001475',
            'fecha' => '17-feb-22',
            'hora' => '13:07:00 p m',
            'noOficio' => '001/2022',
            'dependencia' => 'NAVICSA NAVIERA Y CONSTRUCCIONES INDUSTRIALES SA DE CV',
            'remitente' => 'INGJOEL AGUILERA DELGADO DIRECTOR GENERAL',
            'asunto' => 'MEZCALAPA 1',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001478',
            'fecha' => '17-feb-22',
            'hora' => '15:25:00 p m',
            'noOficio' => 'DOPYJ/022/2022',
            'dependencia' => 'DIRECCION DE ORNATOS PARQUES Y JARDINES',
            'remitente' => 'LICJUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORNATOS PARQUES Y JARDINES',
            'asunto' => 'SOLICITUD DE APOYO PARA QUE SE LLEVE A CABO EL CAMBIO DE LA CAMIONETA ESTAQUITAS RANGER MODELO 2009 COLOR ROJO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001480',
            'fecha' => '17-feb-22',
            'hora' => '15:30:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFATURA DE DEPARTAMENTO DE EDUCACION Y BIBLIOTECAS',
            'remitente' => 'LICMARIA DE JESUS OROZCO CARTAS JEFE DE EDUCACION',
            'asunto' => 'SOLICITUD DEL TELEBACHILLERATO DE MAPACHAPA EN DONDE SOLICITAN EL APOYO ECONOMICO PARA CUBRIR EL ADEUDO QUE TIENE CON LA COMISION DE ELECTRICIDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001482',
            'fecha' => '17-feb-22',
            'hora' => '13:58:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ASOCIACION GANADERA LOCAL GENERAL LOS AMIGOS DEL PROGRESO DE MINATITLAN VERACRUZ',
            'remitente' => 'RUFINO HERNANDEZ LEMUS PRESIDENTE ALBINO TELLEZ HERNANDEZ TESORERO MARTIN EFRAIN LOPEZ VELAZCO SECRETARIO',
            'asunto' => 'INVITACION PARA ASISTIR EL DIA 27 DE FEBRERO DEL A�O EN CURSO A LA CELEBRACION DE NUESTRA ASAMBLEA GENERAL ANUAL INFORMATIVA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001483',
            'fecha' => '17-feb-22',
            'hora' => '16:45:00 p m',
            'noOficio' => '096/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'SOLICITUD DE COSTALILLAS PARA LA COLONIA AGRICOLA Y GANADERA LA MICHOACANA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001484',
            'fecha' => '17-feb-22',
            'hora' => '17:02:00 p m',
            'noOficio' => 'SIIO-1/',
            'dependencia' => 'SEDENA SECRETARIA DE LA DEFENSA NACIONAL',
            'remitente' => 'TENIENTE CORONEL DE INFPORFIRIO AVILA DIAZ EL RESPONSABLE DEL 45/O BATALLON DE INFANTERIA',
            'asunto' => 'SOLICITUD DE APOYO DE CABALLETES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0007/2022',
            'dependencia' => 'SECRETARIA MUNICIPAL',
            'remitente' => 'LICGUILLERMO REYES ESPRONCEDA SECRETARIO DEL HAYUNTAMIENTO',
            'asunto' => 'AUTORIZACION PARA ESPACIOS PUBLICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0322/2022',
            'dependencia' => 'SECRETARIA DE DESARROLLO SOCIAL',
            'remitente' => 'INGGUILLERMO FERNANDEZ SANCHEZ SECRETARIO DE DESARROLLO SOCIAL',
            'asunto' => 'CONVOCATORIA A PARTICIPAR EN REUNION DE TRABAJO PARA CONSULTA PUBLICA DEL PROGRAMA DE ORDENAMIENTO TERRITORIAL DE LA REGION DEL ISTMO DE TEHUANTEPEC POT-RIT',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001485',
            'fecha' => '17-feb-22',
            'hora' => '17:44:00 p m',
            'noOficio' => '017-02-JEG-2022',
            'dependencia' => 'JEFATURA DE EQUIDAD DE GENERO',
            'remitente' => 'LIC DENHIA KRYSTAL HERRERA CUPIL JEFATURA DE EQUIDAD DE GENERO',
            'asunto' => 'SE REALICE EL DISE�O DE UNA INVITACION CON MOTIVO DEL 08 DE MARZO DIA INTERNACIONAL DE LA MUJER Y A SU VEZ QUE ESTA SEA DIFUNDIDA A LA BREVEDAD EN LAS REDES SOCIALES DEL HAYUNTAMIENTO CONSTITUCIONAL',
            'telefono' => '921 212 7383',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '17-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'P/003-22',
            'dependencia' => 'CMIC CAMARA MEXICANA DE LA INDUSTRIA DE LA CONSTRUCCION',
            'remitente' => 'LC Y MDFLUIS FERNANDO ESCAMILLA AGUILAR PRESIDENTE CMIC VERACRUZ SUR',
            'asunto' => 'SOLICITUD PARA QUE SE BRINDE UNA CITA DE TRABAJO',
            'telefono' => '    "223": "",',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001487',
            'fecha' => '18-feb-22',
            'hora' => '10:12:00 a m',
            'noOficio' => '0600/2022',
            'dependencia' => 'SINDICATO UNICO DE EMPLEADOS MUNICIPALES DE MINATITLAN VER',
            'remitente' => 'CANDRES SANTOS ESCANDON SECRETARIO GENERAL LICMARIA ISABEL DIYARZA MARTINEZ SECRETARIA DEL INTERIOR',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001492',
            'fecha' => '18-feb-22',
            'hora' => '11:06:00 a m',
            'noOficio' => 'SPM/007/2022',
            'dependencia' => 'DIRECCION GENERAL DE SERVICIOS PUBLICOS MUNICIPALES',
            'remitente' => 'LIC JOSE RAMIREZ DOMINGUEZ DIRECTOR GENERAL DE SERVICIOS GENERALES',
            'asunto' => 'SOLICITUD DE AUTORIZACION PARA EL ARRENDAMIENTO DE LA MAQUINARIA QUE SE UTILIZARA PARA REMOVER LOS DESECHOS EN EL AREA DEL BASURERO MUNICIPAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001493',
            'fecha' => '18-feb-22',
            'hora' => '11:16:00 a m',
            'noOficio' => 'DMAA-0122/2022',
            'dependencia' => 'DIRECCION DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR DIRECTOR MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'CONTESTACION A SOLICITUDES DE SERVICIOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001494',
            'fecha' => '18-feb-22',
            'hora' => '11:17:00 a m',
            'noOficio' => 'DMAA-0125/2022',
            'dependencia' => 'DIRECCION MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR DIRECTOR MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'CONTESTACION A SOLICITUD DE INFORMACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001504',
            'fecha' => '18-feb-22',
            'hora' => '13:23:00 p m',
            'noOficio' => '004/2021-2022',
            'dependencia' => 'TELESECUNDARIA MORY EJIDO EL DIAMANTE MUNICIPIO DE MINATITLAN VER',
            'remitente' => 'CGABINO GUZMAN MARCIAL PRESIDENTE APF CISABEL ALARCON MORALES SUBAGENTE MUNICIPAL CPROFRAADRIANA ROSARIO TORAL DIRECTORA DE TELESECUNDARIA',
            'asunto' => 'SOLICITUD PARA LA CONSTRUCCION DE UN DOMO EN EL PLANTEL EDUCATIVO',
            'telefono' => '922 212 4933 922 226 1841',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001507',
            'fecha' => '18-feb-22',
            'hora' => '13:28:00 p m',
            'noOficio' => '00053/R12ECRFDACRCPR/2022',
            'dependencia' => 'REGIDURIA DUODECIMO DEL HAYUNTAMIENTO DE MINATITLAN VER',
            'remitente' => 'MTROHUGO LEONARDO TORRES VILLEGAS REGIDOR DUODECIMO DEL HAYUNTAMIENTO DE MINATITLAN VERACRUZ',
            'asunto' => 'SOLICITA SE LE MANTEGA INFORMADO DE LAS ACTIVIDADES DE SUS COMISIONES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '18-feb-22',
            'hora' => '10:58:00 a m',
            'noOficio' => 'DIRGOB/004/2022',
            'dependencia' => 'DIRECCION DE GOBERNACION',
            'remitente' => 'JOSE ALFREDO CARMONA CAPETILLO DIRECTOR DE GOBERNACION',
            'asunto' => 'PROYECTO CLINICA DE SALUD CAPOACAN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '18-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'CIRCULAR N�03',
            'dependencia' => 'SECRETARIA MUNICIPAL',
            'remitente' => 'LIC GUILLERMO REYES ESPRONCEDA',
            'asunto' => 'SOLICITA NOMBRE DE ENLACE DE ARCHIVO DE TRAMITE CON EL AREA DE ARCHIVO DE ESTA SECRETARIA DEL H AYUNTAMIENTO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '18-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'CIRCULAR 10/2022',
            'dependencia' => 'JEFATURA DE LA JURISDICCION SANITARIA NO XI',
            'remitente' => 'DRASUSANA MORALES CASTRO JEFA DE LA JURISDICCION SANITARIA NOXI',
            'asunto' => 'COMITES INTERINSTITUCIONALES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '18-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'CIRCULAR 10/2022',
            'dependencia' => 'JEFATURA DE LA JURISDICCION SANITARIA NO XI',
            'remitente' => 'DRASUSANA MORALES CASTRO JEFA DE LA JURISDICCION SANITARIA NOXI',
            'asunto' => 'COMITES INTERINSTITUCIONALES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '18-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFATURA DE GOBIERNO DE LA CIUDAD DE MEXICO',
            'remitente' => 'DRA CLAUDIA SHEINBAUM PARDO JEFA DE GOBIERNO DE LA CIUDAD DE MEXICO',
            'asunto' => 'INVITACION PARA PARTICIPAR EN EL FORO MUJERES EN Y POR LA CUARTA TRANSFORMACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '18-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SSDR/067/2022',
            'dependencia' => 'SUBSECRETARIA DE DESARROLLO REGIONAL',
            'remitente' => 'LICROLANDO RAMIREZ SANCHEZ SUBSECRETARIO DE DESARROLLO REGIONAL',
            'asunto' => 'INVITACION PARA LA PRESENTACION DE LOS AVANCES DEL PROGRAMA DE ORDENAMIENTO TERRITORIAL DEL CORREDOR INTEROCEANICO DEL ISTMO DE TEHUANTEPEC',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '18-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C MARIO ANGEL MARTINEZ TOACHE',
            'asunto' => 'SOLICITUD DE AYUDA',
            'telefono' => '933 153 4350',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001514',
            'fecha' => '18-feb-22',
            'hora' => '02:23:00 p m',
            'noOficio' => '0035/REG6-AP/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'LICISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL HAYUNTAMIENTO CONSTITUCIONAL DE MINATITLAN VER',
            'asunto' => 'SOLICITUD DE SERVICIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001515',
            'fecha' => '18-feb-22',
            'hora' => '14:14:00 p m',
            'noOficio' => '0036/REG6-AP/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'LICISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL HAYUNTAMIENTO CONSTITUCIONAL DE MINATITLAN VER',
            'asunto' => 'SOLICITUD DE SERVICIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001516',
            'fecha' => '18-feb-22',
            'hora' => '14:15:00 p m',
            'noOficio' => '0034/REG6-AP/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'LICISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL HAYUNTAMIENTO CONSTITUCIONAL DE MINATITLAN VER',
            'asunto' => 'SOLICITUD DE SERVICIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001518',
            'fecha' => '18-feb-22',
            'hora' => '14:19:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'REGIDURIA 8',
            'remitente' => 'LIC MIGUEL ANGEL ESTRADA FERRER REGIDOR OCTAVO SALUD Y ASISTENCIA PUBLICA PROMOCION Y DEFENSA DE LOS DERECHOS HUMANOS',
            'asunto' => 'INVITA A PARTICIPAR EN EL CURSO CAPACITACION EN MATERIA DE DERECHOS HUMANOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001521',
            'fecha' => '18-feb-22',
            'hora' => '14:25:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONSEJO DE DEFENSA DE MINATITLAN AC',
            'remitente' => 'CJAVIER CRUZ BOZADA PRESIDENTE CROSALINO PINEDA REMENTERIA VICEPRESIDENTE CANTONIO MENDOZA VILLANUEVA SECRETARIO CJORGE CRUZ BOZADA TESORERO',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001528',
            'fecha' => '18-feb-22',
            'hora' => '15:02:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'MERCADO POPULAR SOLIDARIDAD',
            'remitente' => 'MARIO HERNANDEZ RODRIGUEZ ALFONSO GUTIERREZ MENDEZ JACOBO RODRIGUEZ RAMOS VICTORINO SUAREZ RAMIREZ  MARIA DEL CARMEN ALTAMIRANO ANDRADE AMALIA MARIN DIAZ',
            'asunto' => 'SOLICITUD PARA DARLE CONTINUIDAD Y RESPUESTA EXPEDITA A LOS ACUERDOS CONCERTADOS EN LAS JUNTAS PREVIAS ASI COMO TAMBIEN SE DE POR ESCRITO LO ACORDADO EN LAS JUNTAS',
            'telefono' => '922 114 8739',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '18-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ORFIS ORGANO DE FISCALIZACION SUPERIOR DEL ESTADO',
            'remitente' => 'MTRADELIA GONZALEZ COBOS AUDITORA GENERAL TITULAR DEL ORGANO DE FISCALIZACION SUPERIOR DEL ESTADO',
            'asunto' => 'PONE A SU DISPOSICION EL CALENDARIO DE OBLIGACIONES MUNICIPALES 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => 'SIN DATO',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CNORMA DOMINGUEZ DE LOS SANTOS',
            'asunto' => 'SOLICITUD DE AYUDA DE VIVIENDA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001531',
            'fecha' => '18-feb-22',
            'hora' => '04:50:00 p m',
            'noOficio' => 'DE-0071/2022',
            'dependencia' => 'EDUCACION',
            'remitente' => 'LIC MARIA DE JESUS OROZCO CARTAS',
            'asunto' => 'ENVIA SOLICITUD DEL TELEBACHILLERATO DE MAPACHAPA DONDE SOLICITA APOYO ECONOMICO PARA CUBRIR ADEUDO DE CFE $4312300',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001532',
            'fecha' => '18-feb-22',
            'hora' => '17:45:00 p m',
            'noOficio' => 'AP-055/2022',
            'dependencia' => 'DIRECCION DE PATRIMONIO',
            'remitente' => 'CMARIA SOFIA ALEMAN TOSCA DIRECTORA DE PATRIMONIO',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '18-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'CIRCULAR 10/2022',
            'dependencia' => 'SERVICIOS DE SALUD DE VERACRUZ',
            'remitente' => 'DRA SUSANA MORALES CASTRO JEFA DE LA JURISDICCION SANITARIA NO XI',
            'asunto' => 'COMITES INTERINSTITUCIONALES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '20-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'INVIDEM/308/2022',
            'dependencia' => 'INSTITUTO VERACRUZANO DE DESARROLLO MUNICIPAL',
            'remitente' => 'LERAFAEL ACASTILLO ZUGASTI DIRECTOR GENERAL INSTITUTO VERACRUZANO DE DESARROLLO MUNICIPAL',
            'asunto' => 'INVITACION CONVERSATORIO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '21-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SECRETARIA DE BIENESTAR',
            'remitente' => 'CECILIA FERNANDEZ GARELLI DIRECTORA GENERAL',
            'asunto' => 'CONVOCA A PARTICIPAR EN LA CAPACITACION INTENSIVA: PARTICIPACION D ELOS GOBIERNOS ESTATALES Y MUNICIPALES EN LA CONSTRUCCION DEL BIENESTAR: FONDO DE APORTACIONES PARA LA INFRAESTRUCTURA SOCIAL FAIS 2022 EL DIA 2 DE MARZO DE 2022 DE 9:00 AM A 6:00PM',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '21-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SECRETARIA DE BIENESTAR',
            'remitente' => 'CECILIA FERNANDEZ GARELLI DIRECTORA GENERAL',
            'asunto' => 'CONVOCA A PARTICIPAR EN LA CAPACITACION INTENSIVA: PARTICIPACION D ELOS GOBIERNOS ESTATALES Y MUNICIPALES EN LA CONSTRUCCION DEL BIENESTAR: FONDO DE APORTACIONES PARA LA INFRAESTRUCTURA SOCIAL FAIS 2022 EL DIA 2 DE MARZO DE 2022 DE 9:00 AM A 6:00PM',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '21-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0008/2022',
            'dependencia' => 'SECRETARIA MUNICIPAL',
            'remitente' => 'LIC GUILLERMO REYES ESPRONCEDA SECRETARIO DEL H AYUNTAMIENTO',
            'asunto' => 'AUTORIZACION PARA ESPACIOS PUBLICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001538',
            'fecha' => '21-feb-22',
            'hora' => '09:51:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ESCUELA PRIMARIA NARCISO MENDOZA COMUNIDAD NI�O ARTILLERO',
            'remitente' => 'PROFR JORGE LUIS DE GYVES MEDINA DIRECTOR',
            'asunto' => 'SOLICITUD DE DONACION DE MINI SPLIT PARA EL SALON NUEVO',
            'telefono' => '922 121 5629',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001542',
            'fecha' => '21-feb-22',
            'hora' => '10:09:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ DE IGNACIO DE LA LLAVE',
            'remitente' => 'SIN DATO',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => 'SIN DATO',
            'hora' => 'SIN DATO',
            'noOficio' => 'DG/6000/0272/2022',
            'dependencia' => 'INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'remitente' => 'LICDANIELA GUADALUPE GRIEGO CEBALLOS DIRECTORA GENERAL DEL INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'asunto' => 'SOLICITO PERMITIR EL ACCESO Y DAR FACILIDADES E INFORMES A LOS VERIFICADORES DEL INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ DE IGNACIO DE LA LLAVE PARA EL DESARROLLO DE SU LABOR ASI COMO A EXHIBIR LA DOCUMENTACION QUE LES SEA REQUERIDA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => 'SIN DATO',
            'hora' => 'SIN DATO',
            'noOficio' => 'DG/6000/0272/2022',
            'dependencia' => 'INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'remitente' => 'LICDANIELA GUADALUPE GRIEGO CEBALLOS DIRECTORA GENERAL DEL INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'asunto' => 'SOLICITO PERMITIR EL ACCESO Y DAR FACILIDADES E INFORMES A LOS VERIFICADORES DEL INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ DE IGNACIO DE LA LLAVE PARA EL DESARROLLO DE SU LABOR ASI COMO A EXHIBIR LA DOCUMENTACION QUE LES SEA REQUERIDA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => 'SIN DATO',
            'hora' => 'SIN DATO',
            'noOficio' => 'DG/6000/0272/2022',
            'dependencia' => 'INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'remitente' => 'LICDANIELA GUADALUPE GRIEGO CEBALLOS DIRECTORA GENERAL DEL INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'asunto' => 'SOLICITO PERMITIR EL ACCESO Y DAR FACILIDADES E INFORMES A LOS VERIFICADORES DEL INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ DE IGNACIO DE LA LLAVE PARA EL DESARROLLO DE SU LABOR ASI COMO A EXHIBIR LA DOCUMENTACION QUE LES SEA REQUERIDA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '21-feb-22',
            'hora' => '11:56:00 a m',
            'noOficio' => '00/2022',
            'dependencia' => 'SEDESOL SECRETARIA DE DESARROLLO SOCIAL',
            'remitente' => 'MARK JACINTO TONATIUH SUAREZ HIPOLITO ADMINISTRADOR TERRIRORIAL',
            'asunto' => 'INVITACION A MAPACHAPA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001545',
            'fecha' => '21-feb-22',
            'hora' => '10:23:00 a m',
            'noOficio' => 'OF/DEMA/0036/2022',
            'dependencia' => 'DIRECCION DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ DIRECTOR DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'asunto' => 'VISITA A LAS ESCUELAS Y PLATICAS DE LOS VECINOS DE DIFERENTES MANZANAS Y COLONIAS DE LA CIUDAD TRATANDO DE ORIENTAR Y CONCIENTIZAR A LOS NI�OS JOVENES Y CIUDADANIA EN GENERAL DE MINATITLAN SOBRE LOS TEMAS DE ORIENTACION Y CONCIENTIZACION Y SENSIBILIZACION AMBIENTAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001553',
            'fecha' => '21-feb-22',
            'hora' => '11:41:00 a m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'COMUDE JEFATURA DEL DEPORTE',
            'remitente' => 'LDERICK HERNANDEZ SOTO ENCARGADO DE LA JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'SOLICIYUD DE APOYO DE MATERIAL PARA LLEVAR A CABO EL EVENTO DEL PRIMER TORNEO INTERCOLONIA POR LA SALUD DE BASQUETBOL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001554',
            'fecha' => '21-feb-22',
            'hora' => '11:41:00 a m',
            'noOficio' => '066/CMD/2022',
            'dependencia' => 'COMUDE JEFATURA DEL DEPORTE',
            'remitente' => 'LDERICK HERNANDEZ SOTO ENCARGADO DE LA JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'PRIMER TORNEO INTERCOLONIA POR LA SALUD DE BASQUETBOL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001555',
            'fecha' => '21-feb-22',
            'hora' => '11:42:00 a m',
            'noOficio' => '067/CMD/2022',
            'dependencia' => 'COMUDE JEFATURA DEL DEPORTE',
            'remitente' => 'LDERICK HERNANDEZ SOTO ENCARGADO DE LA JEFATURA DE COMISION MUNICIPAL DEL DEPORTE COMUDE',
            'asunto' => 'PETICION DE LA HABILITACION DE LOS BA�OS UBICADOS AL INTERIOR DE LA UNIDAD DEPORTIVA BENITO JUAREZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001557',
            'fecha' => '21-feb-22',
            'hora' => '11:50:00 a m',
            'noOficio' => 'JT/0033/2022',
            'dependencia' => 'JEFATURA DE TURISMO',
            'remitente' => 'LIC RUTH TORRES RENDON JEFATURA DE TURISMO',
            'asunto' => 'INVITACION PARA QUE NOS ACOMPA�E EN LA INAUGURACION EN EVENTO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001558',
            'fecha' => '21-feb-22',
            'hora' => '12:15:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JUEGOS CONADE',
            'remitente' => 'PADRES DE FAMILIA',
            'asunto' => 'APOYO DE TRANSPORTE',
            'telefono' => '922 195 1157',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001560',
            'fecha' => '21-feb-22',
            'hora' => '12:54:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'CGLORIA ESTHER LUNA LOPEZ',
            'asunto' => 'RECLAMO',
            'telefono' => '922 227 0410',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001561',
            'fecha' => '21-feb-22',
            'hora' => '12:55:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'ILIANA LORENA DA SILVEIRA CRUZ TRABAJADOR',
            'asunto' => 'SE SOLICITA  SE OMITA LA PRESENTACION DEL CALCULO DE LA DECLARACION ANUAL CON EL FIN DE QUE DE MANERA PERSONAL PRESENTE Y CUMPLA CON LA OBLIGACION A QUE ME ENCUENTRO AFECTADA DE ACUERDO A LAS DISPOSICIONES FISCALES VIGENTES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001562',
            'fecha' => '21-feb-22',
            'hora' => '12:56:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'LAE ANA MARTHA ALAFITA GALINDO TTRABAJADOR',
            'asunto' => 'SE SOLICITA  SE OMITA LA PRESENTACION DEL CALCULO DE LA DECLARACION ANUAL CON EL FIN DE QUE DE MANERA PERSONAL PRESENTE Y CUMPLA CON LA OBLIGACION A QUE ME ENCUENTRO AFECTADA DE ACUERDO A LAS DISPOSICIONES FISCALES VIGENTES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '21-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'DR33/0023/2022',
            'dependencia' => 'DIRECCION RAMO 033',
            'remitente' => 'C JOSE LUIS CASTILLEJOS GOMEZ DIRECTOR DEL RAMO 033',
            'asunto' => 'SOLICITO SU VALIOSO APOYO Y CONVOQUE Y CONVOQUE A LOS INTEGRANTES DEL CABILDO DE ESTE H AYUNTAMIENTO DE MINATITLAN PARA EL DIA 24 DE FEBRERO DE 2022 CON EL PROPOSITO DE LLEVAR A CABO EL PUNTO DE SESION DE CABILDO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001571',
            'fecha' => '21-feb-22',
            'hora' => '13:33:00 p m',
            'noOficio' => 'DLP/039/2022',
            'dependencia' => 'DIRECCION DE LIMPIA PUBLICA',
            'remitente' => 'LIC HECTOR SOTO HERNANDEZ DIRECTOR DE LIMPIA PUBLICA',
            'asunto' => 'DICTAMEN DEL GASTO DE COMBUSTIBLE',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001579',
            'fecha' => '21-feb-22',
            'hora' => '15:31:00 p m',
            'noOficio' => '039/02/DIR IMM/2022',
            'dependencia' => 'INSTITUTO MUNICIPAL DE LA MUJER DE MINATITLAN',
            'remitente' => 'LIC EULALIA NATIVIDAD BERNARDO',
            'asunto' => 'INVITACION AL TALLER RUTA DE ACCESO AL REFUGIO ESTATAL PARA MUJERES EN SITUACION DE VIOLENCIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '0001583',
            'fecha' => '21-feb-22',
            'hora' => '03:24:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'EDUCACION',
            'remitente' => 'LIC MARIA DE JESUS OROZCO CARTAS',
            'asunto' => 'INVITACION PARA CONFERENCIAS INTERDISCIPLINARIAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001599',
            'fecha' => '21-feb-22',
            'hora' => '16:15:00 p m',
            'noOficio' => 'DCAT/032/2022',
            'dependencia' => 'DIRECCION DE CATASTRO',
            'remitente' => 'LIC JOSSELINE GUTIERREZ ESPINOSA DIRECTORA DE CATASTRO MUNICIPAL',
            'asunto' => 'SOLICITUD DE DIFUSION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001600',
            'fecha' => '21/02/2022 EN PRESIDENCIA SE RECIBIO EL 23/02/22',
            'hora' => '04:42:00 p m',
            'noOficio' => '00418/015/02/2022',
            'dependencia' => 'SECRETARIA DE BIENESTAR',
            'remitente' => 'MARIA DE LOS ANGELES PRIETO LINARES',
            'asunto' => 'SOLICITA MOBILIARIO PARA LA VACUNACION LOS DIAS 2526 Y 27 DE FEBRERO 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001619',
            'fecha' => '21-feb-22',
            'hora' => '17:18:00 p m',
            'noOficio' => '0109/DIOP/2022',
            'dependencia' => 'DIRECCION DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'remitente' => 'ARQ CARMELA MILLAN FONSECA DIRECTORA DE INFRAESTRUCTURA Y OBRAS PUBLICAS',
            'asunto' => 'SE ENVIA COPIA CERTIFICADA DE CONTRATO 2018301080077',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '21-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CENTRO ESTATAL DE PREVENCION SOCIAL DE LA VIOLENCIA Y DELINCUENCIA CON PARTICIPACION CIUDADANA',
            'remitente' => 'MTRO JOSE MANUEL JIMENEZ MORA DIRECTOR DEL CENTRO ESTATAL DE PREVENCION SOCIAL DE LA VIOLENCIA Y LA DELINCUENCIA CON PARTICIPACION CIUDADANA',
            'asunto' => 'SEGUIMIENTO A LA ESTRATEGIA NACIONAL MUJERES CONSTRUCTURAS DE PAZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '21-feb-22',
            'hora' => '01:28:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECCION DE EGRESOS',
            'remitente' => 'MARIA ISABEL DIYARZA MARTINEZ NOMBRE DEL COMISIONADO',
            'asunto' => 'SOLICITUD DE VIATICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '21-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SECRETARIA DE BIENESTAR',
            'remitente' => 'CECILIA FERNANDEZ GARELLI DIRECTORA GENERAL',
            'asunto' => 'CONVOCA A PARTICIPAR EN LA CAPACITACION INTENSIVA: PARTICIPACION D ELOS GOBIERNOS ESTATALES Y MUNICIPALES EN LA CONSTRUCCION DEL BIENESTAR: FONDO DE APORTACIONES PARA LA INFRAESTRUCTURA SOCIAL FAIS 2022 EL DIA 2 DE MARZO DE 2022 DE 9:00 AM A 6:00PM',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001636',
            'fecha' => '22-feb-22',
            'hora' => '10:55:00 a m',
            'noOficio' => '0025/DG-OTMS/2022',
            'dependencia' => 'DIRECC GRAL DE ORDENAMIENTO TERRITORIAL Y SUSTENTABILIDAD',
            'remitente' => 'ING VICTOR MANUEL ARIAS ORDO�EZ',
            'asunto' => 'SOLICITUD DE RESOLUCION EN OBRAS DE SEGUIMIENTO 2021',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001642',
            'fecha' => '22-feb-22',
            'hora' => '12:40:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'REGIDURIA DUODECIMO JEFATURA DE EDUCACION',
            'remitente' => 'MTRO HUGO LEONARDO TORRES VILLEGAS REGIDOR DUODECIMO LIC MARIA DE JESUS OROZCO CARTAS JEFATURA DE EDUCACION',
            'asunto' => 'INVITACION A LA CONMEMORACION DEL DIA DE LA BANDERA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001648',
            'fecha' => '22-feb-22',
            'hora' => '12:33:00 p m',
            'noOficio' => '639/2022',
            'dependencia' => 'SUEM',
            'remitente' => 'ANDRES SANTOS ESCANDON Y LIC VALENTINO JIMENEZ BAEZ',
            'asunto' => 'SOLICITA INFORMACION DEL PAGO DE LAS CUOTAS Y APORTACIONES IPE DEL PERSONAL SINDICALIZADO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001654',
            'fecha' => '22-feb-22',
            'hora' => '14:10:00 p m',
            'noOficio' => 'CIRCULAR OIC/0003/2022',
            'dependencia' => 'ORGANO INTERNO DE CONTROL',
            'remitente' => 'LIC GRACIELA GONZALEZ MARTINEZ TITULAR',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001661',
            'fecha' => '22-feb-22',
            'hora' => '14:59:00 p m',
            'noOficio' => 'CBV42 DIR/031/22',
            'dependencia' => 'CORDINACION DE ZONA VII',
            'remitente' => 'DR HERMILO ARISTA BONILLA COORDINADOR DE ZONA VII',
            'asunto' => 'SE ENTREGA INVITACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001663',
            'fecha' => '22-feb-22',
            'hora' => '15:11 PM',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'ISELA ITURRALDE ALVARADO',
            'asunto' => 'INVITACION COFERENCIA A \"VIOLENCIA LABORAL\" EL 25/FEB/22 11:00 AM',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '22-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'REG5-052/2022',
            'dependencia' => 'REGIDURIA QUINTA',
            'remitente' => 'LIC NAOMI EDITH GOMEZ SANTOS REGIDORA QUINTA DEL H AYUNTAMIENTO DE MINATITLAN VERACRUZ',
            'asunto' => 'SOLICITUD DE VIATICOS',
            'telefono' => '922 209 7711',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '22-feb-22',
            'hora' => '15:00:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'RODOLFO SOLIS HERNANDEZ COMIASARIADO EJIDAL EFREN ITEHUA ROMERO CONSEJO DE VIGILANCIA',
            'asunto' => 'SOLICITUD DE APOYO PARA REVACHAR EL CAMINO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '22-feb-22',
            'hora' => '15:00:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'RODOLFO SOLIS HERNANDEZ COMIASARIADO EJIDAL EFREN ITEHUA ROMERO CONSEJO DE VIGILANCIA',
            'asunto' => 'SOLICITUD DE APOYO PARA REVACHAR EL CAMINO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '22-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'RODOLFO SOLIS HERNANDEZ COMIASARIADO EJIDAL EFREN ITEHUA ROMERO CONSEJO DE VIGILANCIA',
            'asunto' => 'SOLICITUD DE UNA PLAZUELETA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001693',
            'fecha' => '23-feb-22',
            'hora' => '11:09:00 a m',
            'noOficio' => 'OF/DEMA/0044/2022',
            'dependencia' => 'DIRECCION DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ',
            'asunto' => 'APOYO PARA LA PODA DE ARBOL DE ROBLE DE LA CALLE LISBOA SUR No 50 ESQ ADALBERTO TEJEDA COL RUIZ CORTINEZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001694',
            'fecha' => '23-feb-22',
            'hora' => '11:10:00 a m',
            'noOficio' => 'OF/DEMA/0041/2022',
            'dependencia' => 'DIRECC DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ',
            'asunto' => 'PERMISO DE PODA DE ARBOL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001695',
            'fecha' => '23-feb-22',
            'hora' => '11:11:00 a m',
            'noOficio' => 'OF/DEMA/0046/2022',
            'dependencia' => 'DIRECC DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ DIRECTOR DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'asunto' => 'ENVIARLE LA PROPUESTA DE COBRO PARA PERMISOS AMBIENTALES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '23-feb-22',
            'hora' => '14:00:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C JOSE ALBERTO HERNANDEZ PACHECO',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '23-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'OIC-093/2022',
            'dependencia' => 'ORGANO INTERNO DE CONTROL',
            'remitente' => 'LIC GRACIELA GONZALEZ MARTINEZ TITULAR',
            'asunto' => 'INVITACION A VIDEO CONFERENCIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001701',
            'fecha' => '23-feb-22',
            'hora' => '12:03:00 p m',
            'noOficio' => 'DG/6000/0274/2022',
            'dependencia' => 'INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'remitente' => 'LIC DANIELA GUADALUPE GRIEGO CEBALLOS DIRECTORA GENERAL DEL INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'asunto' => 'SOLICITARLE QUE BRINDE ACCESO A LA COMISION VERIFICADORA A LAS INSTALACIONES QUE CONTENGAN LA DOCUMENTACION E INFORMACION REQUERIDA Y PROPORCIONE DOCUMENTACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001705',
            'fecha' => '23-feb-22',
            'hora' => '12:35:00 p m',
            'noOficio' => '47/REG6/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'ISELA ITURRALDE ALVARADO',
            'asunto' => 'SOLICITA SU APOYO PARA COFFE BREAK CONFERENCIA EN CONMEMORACION DEL DIA NARANJA 25/FEB/22',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001709',
            'fecha' => '23-feb-22',
            'hora' => '01:54:00 p m',
            'noOficio' => '48/REG6/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'ISELA ITURRALDE ALVARADO',
            'asunto' => 'SOLICITA SU APOYO PARA EL DIA VIERNES 25/FEB/22 CON LA IMPRESION DE LONA EN CONMEMORACION DEL DIA NARANJA 25/FEB/22',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '23-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0009/2022',
            'dependencia' => 'SECRETARIA MUNICIPAL',
            'remitente' => 'LIC GUILLERMO REYES ESPRONCEDA SECRETARIO DEL H AYUNTAMIENTO',
            'asunto' => 'AUTORIZACION PARA ESPACIOS PUBLICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001722',
            'fecha' => '23-feb-22',
            'hora' => '05:38:00 p m',
            'noOficio' => '042/02/DIR IMM/2022',
            'dependencia' => 'INSTITUTO MUNICIPAL DE LA MUJER',
            'remitente' => 'LIC EULALIA NATIVIDAD BERNARDO',
            'asunto' => 'INVITACION A LA CONFERENCIA ERRADICACION DE LA VIOLENCIA EN CONTRA DE LAS MUJERES 25 FEB 22 13:00 HRS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '01730',
            'fecha' => '23-feb-22',
            'hora' => '05:57:00 p m',
            'noOficio' => 'AD/0020/2022',
            'dependencia' => 'DIRECCION DE ADQUISICIONES',
            'remitente' => 'LA CESAR ARAM SORIANO BETANZO',
            'asunto' => 'SOLICITA INSTRUYA AL PERSONAL DE EGRESOS REALIZAR PAGO DEL 50% DE ANTICIPO COTIZACION N� 7896 EVENTO DIA NARANJA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-feb-22',
            'hora' => '13:00:00 p m',
            'noOficio' => '077/CMD/2022',
            'dependencia' => 'COMUDE JEFATURA DEL DEPORTE',
            'remitente' => 'LDERICK HERNANDEZ SOTO ENCARGADO DE LA JEFATURA DEL DEPORTE',
            'asunto' => 'SOLICITUD DE APOYO PARA REALIZAR LAS COTIZACIONES CORRESPONDIENTES Y COMPRA DE LAS MISMAS DE PLAYERAS Y MEDALLAS PARA LA DOTACION DE KIT DEPORTIVO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001741',
            'fecha' => '24-feb-22',
            'hora' => '11:48:00 a m',
            'noOficio' => 'OF/DEMA/0045/2022',
            'dependencia' => 'DIRECCION DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ',
            'asunto' => 'APOYO PARA LA PODA DE 2 ARBOLES 1 DE ROBLE Y 1 DE MANGO UBICADO EN LA CALLE PROLONGATENAS N� 5 COL OBRERA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001742',
            'fecha' => '24-feb-22',
            'hora' => '11:49:00 a m',
            'noOficio' => 'OF/DEMA/0052/2022',
            'dependencia' => 'DIRECCION DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ DIRECTOR DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'asunto' => 'PERMISO DE PODA DE ARBOL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001743',
            'fecha' => '24-feb-22',
            'hora' => '11:50:00 a m',
            'noOficio' => 'OF/DEMA/0049/2022',
            'dependencia' => 'DIRECCION DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ',
            'asunto' => 'APOYO PARA LA PODA DE 5 ARBOLES (3 ROBLES 1 MELINA Y 1 CEDRO) EN ESC PRIM EDUARDO R CORONEL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001744',
            'fecha' => '24-feb-22',
            'hora' => '11:51:00 a m',
            'noOficio' => 'CM-0048/2022',
            'dependencia' => 'DIRECCION DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ',
            'asunto' => 'APOYO PARA DERRIBO DE 4 ARBOLES (2 ROBLES 1 EBANO DE ORIENTE 1 TULIPAN AFRICANO) UBICADOS EN LA CALLE MIGUEL HIDALGO COL BUENA VISTA NORTE',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001745',
            'fecha' => '24-feb-22',
            'hora' => '11:52:00 a m',
            'noOficio' => 'OF/DEMA/0050/2022',
            'dependencia' => 'DIRECCION DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ',
            'asunto' => 'APOYO PARA DERRIBO DE 4 ARBOLES: 1 DE GUAYA 2 AGUACATES Y 1 MANGO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001746',
            'fecha' => '24-feb-22',
            'hora' => '11:53:00 a m',
            'noOficio' => 'CM-0051/2022',
            'dependencia' => 'DIRECCION DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ',
            'asunto' => 'APOYO PARA DERRIBO DE 1 ARBOL DE GUAYA UBICADO EN LA CALLE EMILIANO ZAPATA 25 COL EJ TACOTENO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001747',
            'fecha' => '24-feb-22',
            'hora' => '11:54:00 a m',
            'noOficio' => 'CM-0053/2022',
            'dependencia' => 'DIRECCION DE MEDIO AMBIENTE Y SUSTENTABILIDAD',
            'remitente' => 'ING JORGE DAVID PALAVICINI RODRIGUEZ',
            'asunto' => 'APOYO PARA DERRIBO DE 1 ARBOL DE MANGO UBICADO EN LA CALLE PENSADOR MEXICANO 18 COL OBRERA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001757',
            'fecha' => '24-feb-22',
            'hora' => '01:07:00 p m',
            'noOficio' => '324506679500/03/03/2022/CD',
            'dependencia' => 'IMSS',
            'remitente' => 'MTRO ERICK SANCHEZ LUCHO',
            'asunto' => 'SE EXHORTA A DAR CUMPLIMIENTO AL ARTICULO 16 DE LA LEY DEL SEGURO SOCIAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001758',
            'fecha' => '24-feb-22',
            'hora' => '01:13:00 p m',
            'noOficio' => '022-02-JEG-2022',
            'dependencia' => 'EQUIDAD DE GENERO',
            'remitente' => 'LIC DENHIA KRYSTAL HERRERA CUPIL',
            'asunto' => 'SOLICITA MOBILIARIO PARA REALIZAR LA SEMANA DE LA MUJER',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001759',
            'fecha' => '24-feb-22',
            'hora' => '01:12:00 p m',
            'noOficio' => '023-02-JEG-2022',
            'dependencia' => 'EQUIDAD DE GENERO',
            'remitente' => 'LIC DENHIA KRYSTAL HERRERA CUPIL',
            'asunto' => 'SOLICITA DISE�O DE INVITACIONES PARA DESAYUNO DE LA SEMANA DE LA MUJER PARA INVITADAS DE HONOR',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001761',
            'fecha' => '24-feb-22',
            'hora' => '14:03 PM',
            'noOficio' => '0482/2022',
            'dependencia' => 'SUEM',
            'remitente' => 'C ANDRES SANTOS ESCANDON Y C MARCOS CANDELARIA JUAREZ',
            'asunto' => 'INCAPACIDAD MEDICA DE LA C ISABEL DANIELA LOPEZ LOPEZ ADSCRITA A SECRETARIA MPAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '01762',
            'fecha' => '24-feb-22',
            'hora' => '14:04 PM',
            'noOficio' => '0525/2022',
            'dependencia' => 'SUEM',
            'remitente' => 'C ANDRES SANTOS ESCANDON Y C MARCOS CANDELARIA JUAREZ',
            'asunto' => 'INFORME DE VACACIONES DE LOS CC SANDRA LUZ GASPAR GAPIZ Y ALBERTO AQUINO CALZADA ADSCRITOS A SECRETARIA MUNICIPAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001771',
            'fecha' => '24-feb-22',
            'hora' => '04:58:00 p m',
            'noOficio' => '024-02-JEG-2022',
            'dependencia' => 'EQUIDAD DE GENERO',
            'remitente' => 'LIC DENHIA KRYSTAL HERRERA CUPIL',
            'asunto' => 'SOLICITA DECORACION DE MESA PRINCIPAL DE CUMPLEA�OS EL DIA 04 DE MARZO INICIANDO A LAS 9:00AM',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001772',
            'fecha' => '24-feb-22',
            'hora' => '16:30:00 p m',
            'noOficio' => 'DCAT/037/2022',
            'dependencia' => 'DIRECCION DE CATASTRO',
            'remitente' => 'LIC JOSSELINE GUTIERREZ ESPINOSA DIRECTORA DE CATASTRO MUNICIPAL',
            'asunto' => 'SE ENVIA PLANO DE TERRENO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIF MINATITLAN',
            'remitente' => 'SIN DATO',
            'asunto' => 'ENTREGA DE 200 APOYOS EXTRAORDINARIOS A PERSONAS DE ATENCION PRIORITARIA EN ATENCION A EMERGENCIA SANITARIA POR COVID-19',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'DIRECCION DE SEGURIDAD PUBLICA MUNICIPAL Y LA COORDINACION PARA LA PREVENCION Y ATENCION DE LAS ADICCIONES Y DE LAS CONDUCTAS ANTISOCIALES COPACA DE LA SEV',
            'remitente' => 'LIC ADRIANA SANCHEZ SALINAS TITULAR DEL AREA DE PREVENCION DEL DELITO',
            'asunto' => 'COORDIAL INVITACION E IMPORTANTE PRESENCIA A LA INAUGURACION DE LA PRIMERA JORNADA PARA LA PREVENCION EN CONDUCTAS DE RIESGO DEL CONTEXTO ESCOLAR',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-feb-22',
            'hora' => '13:30:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'PRESIDENTAS Y PRESIDENTES MUNICIPALES',
            'remitente' => 'PRESIDENTAS Y PRESIDENTES MUNICIPALES',
            'asunto' => 'SE LES INVITA ACOMPA�ARNOS JUNTO CON LA DRA GUADALUPE OSORNO MALDONADO SECRETARIA DE PROTECCION CIVIL A LA CLAUSURA DE LA PRESENTACION DE LA ESTRATEGIA DE TRABAJO PARA UNIDADES MUNICIPALES DE PROTECCION CIVIL 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'OIC-098/2022',
            'dependencia' => 'ORGANO INTERNO DE CONTROL',
            'remitente' => 'LIC GRACIELA GONZALEZ MARTINEZ TITULAR',
            'asunto' => 'SE REMITE COMUNICADO 23426/02/2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0010/2022',
            'dependencia' => 'SECRETARIA MUNICIPAL',
            'remitente' => 'LIC GUILLERMO REYES ESPRONCEDA SECRETARIO DEL H AYUNTAMIENTO',
            'asunto' => 'AUTORIZACION PARA ESPACIOS PUBLICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => '0011/2022',
            'dependencia' => 'SECRETARIA MUNICIPAL',
            'remitente' => 'LIC GUILLERMO REYES ESPRONCEDA SECRETARIO DEL H AYUNTAMIENTO',
            'asunto' => 'AUTORIZACION PARA ESPACIOS PUBLICOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CONSEJO DE ZONA UMAFOR 3001 LAS CHOAPAS',
            'remitente' => 'HECTOR MOTA VELAZCO TITULAR DE LA PROMOTORIA DE DESARROLLO FORESTAL EN EL ESTADO DE VERACRUZ Y SECRETARIO TECNICO DEL CONSEJO DE ZONA UMAFOR 3001 LAS CHOAPAS',
            'asunto' => 'INVITACION A LA PRIMERA SESION ORDINARIA DEL CONSEJO DE ZONA EN LA UMAFOR 3001 LAS CHOAPAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'CBV42 DIR/030/22',
            'dependencia' => 'DIRECCION DEL COBAEV-42',
            'remitente' => 'DRMIGUEL ANGEL MARTINEZ HERNANDEZ DIRECTOR DEL COBAEV-42',
            'asunto' => 'SE DONAN 45 BUGANVILIAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '24-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'SIN DATO',
            'asunto' => 'INVITACION PARA EL DOMINGO 06 DE MARZO EN LA UNIDAD DEPORTIVA BENITO JUAREZ COL PETROLERA DEL MUNICIPIO DE MINATITLAN',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001784',
            'fecha' => '25-feb-22',
            'hora' => '13:00:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ASOCIACION DE AGRICULTORES DE MINATITLAN JUNTOS HACEMOS MAS',
            'remitente' => 'ELISEO NOLASCO HERNANDEZ',
            'asunto' => 'SOLICITA INTERVENCION DE LA PRESIDENTA DRA CARMEN MEDEL PALMA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001791',
            'fecha' => '25-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'ARCOTECHOS PROYECTOS Y CONSTRUCCIONES ESTRUCTURAS METALICAS AMPLIACIONES ELECTRICAS ALUMBRADO PUBLICO Y OBRA CIVIL',
            'remitente' => 'ING TORIBIO LOPEZ FLORES REPRESENTANTE',
            'asunto' => 'SIN DATO',
            'telefono' => '222 323 3034 222 226 7322',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001791',
            'fecha' => '25-feb-22',
            'hora' => '14:10:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'SIN DATO',
            'asunto' => 'ENTREGA DE CORRESPONDENCIA EN LA PRESIDENCIA MUNICIPAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001792',
            'fecha' => '25-feb-22',
            'hora' => '14:12:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'AMIGOS DE LA CULTURA Y ARTES ACA',
            'remitente' => 'AMIGOS DE LA CULTURA Y ARTES ACA',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '25-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'HAYUNTAMIENTO DE MINATITLAN',
            'remitente' => 'HAYUNTAMIENTO DE MINATITLAN',
            'asunto' => 'FESTEJO DIA DE LAS MADRES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '25-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'SIN DATO',
            'remitente' => 'SIN DATO',
            'asunto' => 'INVITACION PARA LA INAGURACION DE NUESTRO SALON DE USOS MULTIPLES',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001793',
            'fecha' => '25-feb-22',
            'hora' => '14:15:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFATURA DE DEPARTAMENTO DE LA JUVENTUD',
            'remitente' => 'ING JOSE ALFREDO JIMENEZ ESCUDERO JEFE DE IMPULSO A LA JUVENTUD',
            'asunto' => 'SOLICITUD DE UNA UNIDAD MOVIL PARA EL TRASLADO AL AREA RURAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001795',
            'fecha' => '25-feb-22',
            'hora' => '15:20:00 p m',
            'noOficio' => 'R9-052/2022',
            'dependencia' => 'REGIDURIA NOVENA',
            'remitente' => 'LIC ZAYRA NATALYE GONZALEZ CRUZ REGIDORA NOVENA FOMENTO AGROPECUARIO DE LA NI�EZ Y LA FAMILIA',
            'asunto' => 'ME PERMITO INFORMARLE POR ESTE MEDIO QUE RECIBI EN COPIA EL OFICIO EMITIDO POR PARTE DE LA ASOCIACION DE AGRICULTORES DE MINATITLAN JUNTOS HACEMOS MAS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001796',
            'fecha' => '25-feb-22',
            'hora' => '04:01:00 p m',
            'noOficio' => '51/REG6/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'ISELA ITURRALDE ALVARADO',
            'asunto' => 'SOLICITA UN VEHICULO PARA EL DIA MARTES 1 DE MARZO 2022 YA QUE TIENE VISITA PROGRAMADA EN EL AREA RURAL PARA CORROBORAR SOLICITUDES DE LOS CIUDADANOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001797',
            'fecha' => '25-feb-22',
            'hora' => '15:59:00 p m',
            'noOficio' => '49/REG6/2022',
            'dependencia' => 'REGIDURIA SEXTA',
            'remitente' => 'ISELA ITURRALDE ALVARADO REGIDORA SEXTA DEL HAYUNTAMIENTO DE MINATITLAN VER',
            'asunto' => 'SOLICITUD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001798',
            'fecha' => '25-feb-22',
            'hora' => '16:30:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFE DE DEPARTAMENTO DE PARQUES Y JARDINES',
            'remitente' => 'LIC JUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORNATOS PARQUES Y JARDINES',
            'asunto' => 'DEBIDO A LA CARGA DE ACTIVIDADES DE ESTE DEPARTAMENTO SE REQUERIO DE PERSONAL SINDICALIZADO PARA LLEVAR A CABO DICHOS TRABAJOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001798',
            'fecha' => '25-feb-22',
            'hora' => '16:30:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFE DE DEPARTAMENTO DE PARQUES Y JARDINES',
            'remitente' => 'LIC JUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORNATOS PARQUES Y JARDINES',
            'asunto' => 'DEBIDO A LA CARGA DE ACTIVIDADES DE ESTE DEPARTAMENTO SE REQUERIO DE PERSONAL SINDICALIZADO PARA LLEVAR A CABO DICHOS TRABAJOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001799',
            'fecha' => '25-feb-22',
            'hora' => '16:35:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFE DE DEPARTAMENTO DE PARQUES Y JARDINES',
            'remitente' => 'LIC JUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORNATOS PARQUES Y JARDINES',
            'asunto' => 'DEBIDO A LA CARGA DE ACTIVIDADES DE ESTE DEPARTAMENTO SE REQUERIO DE PERSONAL SINDICALIZADO PARA LLEVAR A CABO DICHOS TRABAJOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001799',
            'fecha' => '25-feb-22',
            'hora' => '16:35:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFE DE DEPARTAMENTO DE PARQUES Y JARDINES',
            'remitente' => 'LIC JUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORNATOS PARQUES Y JARDINES',
            'asunto' => 'DEBIDO A LA CARGA DE ACTIVIDADES DE ESTE DEPARTAMENTO SE REQUERIO DE PERSONAL SINDICALIZADO PARA LLEVAR A CABO DICHOS TRABAJOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001800',
            'fecha' => '25-feb-22',
            'hora' => '16:36:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFE DE DEPARTAMENTO DE PARQUES Y JARDINES',
            'remitente' => 'LIC JUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORNATOS PARQUES Y JARDINES',
            'asunto' => 'DEBIDO A LA CARGA DE ACTIVIDADES DE ESTE DEPARTAMENTO SE REQUERIO DE PERSONAL SINDICALIZADO PARA LLEVAR A CABO DICHOS TRABAJOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001800',
            'fecha' => '25-feb-22',
            'hora' => '16:36:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFE DE DEPARTAMENTO DE PARQUES Y JARDINES',
            'remitente' => 'LIC JUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORNATOS PARQUES Y JARDINES',
            'asunto' => 'DEBIDO A LA CARGA DE ACTIVIDADES DE ESTE DEPARTAMENTO SE REQUERIO DE PERSONAL SINDICALIZADO PARA LLEVAR A CABO DICHOS TRABAJOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001801',
            'fecha' => '25-feb-22',
            'hora' => '16:38:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFE DE DEPARTAMENTO DE PARQUES Y JARDINES',
            'remitente' => 'LIC JUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORNATOS PARQUES Y JARDINES',
            'asunto' => 'DEBIDO A LA CARGA DE ACTIVIDADES DE ESTE DEPARTAMENTO SE REQUERIO DE PERSONAL SINDICALIZADO PARA LLEVAR A CABO DICHOS TRABAJOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001801',
            'fecha' => '25-feb-22',
            'hora' => '16:38:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'JEFE DE DEPARTAMENTO DE PARQUES Y JARDINES',
            'remitente' => 'LIC JUAN CARLOS VILLALOBOS GARFIAS DIRECTOR DE LA COMISION DE ORNATOS PARQUES Y JARDINES',
            'asunto' => 'DEBIDO A LA CARGA DE ACTIVIDADES DE ESTE DEPARTAMENTO SE REQUERIO DE PERSONAL SINDICALIZADO PARA LLEVAR A CABO DICHOS TRABAJOS',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001802',
            'fecha' => '25-feb-22',
            'hora' => '04:45:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'COMESA',
            'remitente' => 'RENE GALVEZ LOPEZ',
            'asunto' => 'INFORME DE PREVENCION DE ACCIDENTES EN LA ZONA RURAL',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001803',
            'fecha' => '25-feb-22',
            'hora' => '04:56:00 p m',
            'noOficio' => '025-02-JEG-2022',
            'dependencia' => 'EQUIDAD DE GENERO',
            'remitente' => 'LIC DENHIA KRYSTAL HERRERA CUPIL',
            'asunto' => 'SOLICITA AGUA ENBOTELLADA Y SERVICIO DE COFFEE BREAK PROGRAMA SEMANA DE LA MUJER',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001804',
            'fecha' => '25-feb-22',
            'hora' => '04:55:00 p m',
            'noOficio' => '026-02-JEG-2022',
            'dependencia' => 'EQUIDAD DE GENERO',
            'remitente' => 'LIC DENHIA KRYSTAL HERRERA CUPIL',
            'asunto' => 'SOLICITA MATERIAL QUE SE UTILIZARA PARA EL PROGRAMA DE LA MUJER INICIANDO EL 01 DE MARZO 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001805',
            'fecha' => '25-feb-22',
            'hora' => '17:51:00 p m',
            'noOficio' => 'DMAA-136/2022',
            'dependencia' => 'DIRECCION MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR DIRECTOR MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'ME PERMITO ADJUNTAR LA CIRCULAR NO FOPE09/CAEV/DG/01/14/020/2019 LA CUAL FUE EMITIDA POR LA COMISION DEL AGUA DEL ESTADO DE VERACRUZ',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001807',
            'fecha' => '25-feb-22',
            'hora' => '05:56:00 p m',
            'noOficio' => 'DMAA-0139/2022',
            'dependencia' => 'DIRECCION MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR',
            'asunto' => 'CONTESTACION A OFICIO REG: 5-53/2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '28-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SSP/DGTE/DJ/580/2022',
            'dependencia' => 'DIRECCION GENERAL DE TRANSPORTE DEL ESTADO',
            'remitente' => 'LIC NADIA IVONN CARRERA CERDAN DELEGADA JURIDICA EN LA DIRECCION GENERAL DE TRASNPORTE DEL ESTADO',
            'asunto' => 'SIN DATO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001809',
            'fecha' => '28-feb-22',
            'hora' => '08:34:00 a m',
            'noOficio' => '219/2022',
            'dependencia' => 'DIRECCION DE SEGURIDAD PUBLICA MUNICIPAL DE MINATITLAN VERACRUZ',
            'remitente' => 'COMISARIO JOSE ALBERTO ORTIZ ZAMBRANO DIRECTOR DE LA POLICIA MUNICIPAL DE MINATITLAN VER',
            'asunto' => 'SOLICITO SU VALIOSO APOYO Y GIRE SUS APRECIABLES INSTRUCCIONES A QUIEN CORRESPONDA PARA QUE ASISTA UN ASESOR JURIDICO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '28-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'LIC MARIA DE JESUS OROZCO CARTAS',
            'asunto' => 'RENUNCIA IRREVOCABLE Y VOLUNTARIA',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001817',
            'fecha' => '28-feb-22',
            'hora' => '09:12:00 a m',
            'noOficio' => 'OF-4600-125/2022',
            'dependencia' => 'TELECOMM',
            'remitente' => 'LIC EDGAR ALBERTO MORALES CASTELLANOS',
            'asunto' => 'SOLICITA SE BRINDE VIGILANCIA PERMANENTE EN SUCURSALES TELECOMM',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001817',
            'fecha' => '28-feb-22',
            'hora' => '09:12:00 a m',
            'noOficio' => 'OF-4600-125/2022',
            'dependencia' => 'TELECOMM',
            'remitente' => 'LIC EDGAR ALBERTO MORALES CASTELLANOS',
            'asunto' => 'SOLICITA SE BRINDE VIGILANCIA PERMANENTE EN SUCURSALES TELECOMM',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001829',
            'fecha' => '28-feb-22',
            'hora' => '10:35:00 a m',
            'noOficio' => '027-02-JEG-2022',
            'dependencia' => 'EQUIDAD DE GENERO',
            'remitente' => 'LIC DENHIA KRYSTAL HERRERA CUPIL',
            'asunto' => 'SOLICITA INGREDIENTES REQUERIDOS POR EL CHEF QUE IMPARTIRA CURSOS DE COMIDA CHINA EL DIA 01/MARZO/2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001834',
            'fecha' => '28-feb-22',
            'hora' => '11:48:00 a m',
            'noOficio' => '00062/R12ECRFDACRCPR/2022',
            'dependencia' => 'REGIDURIA DUODECIMA',
            'remitente' => 'PROFRHUGO LEONARDO TORRES VILLEGAS REGIDOR DUODECIMO EDUCACION CULTURA RECREACION FOMENTO AL DEPORTE ACTOS CIVICOS REGISTRO CIVIL PANTEONES Y RECLUTAMIENTO',
            'asunto' => 'AUSENCIA DE LABORES',
            'telefono' => '922 175 1106',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001835',
            'fecha' => '28-feb-22',
            'hora' => '12:05:00 p m',
            'noOficio' => 'SEV/18/2022',
            'dependencia' => 'ESCUELA GRAL LAZARO CARDENAS DEL RIO',
            'remitente' => 'GABRIEL FRANCISCO MARQUEZ RAMOS DIRECTOR DE LA ESCUELA ANA MARIA DUHALT FIGUEROA PRESIDENTA APF MARGARITA FRANCISCO MORA SECRETARIA APF MARTA GOMEZ VAZQUEZ TESORERA APF',
            'asunto' => 'SOLICITAR UNA REUNION CON LA ALCADESA DRA CARMEN MEDEL PALMA',
            'telefono' => '922 214 1027',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001841',
            'fecha' => '28-feb-22',
            'hora' => '12:54:00 p m',
            'noOficio' => 'DG/6000/0222/2022',
            'dependencia' => 'INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'remitente' => 'LIC DANIELA GUADALUPE GRIEGO CEBALLOS DIRECTORA GENERAL DEL INSTITUTO DE PENSIONES DEL ESTADO DE VERACRUZ',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001850',
            'fecha' => '28-feb-22',
            'hora' => '14:58:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'MARATON RITMOS LATINOS POR LA SALUD',
            'remitente' => 'MARATON RITMOS LATINOS POR LA SALUD',
            'asunto' => 'EXHIBICION BAMBOLEO',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001852',
            'fecha' => '28-feb-22',
            'hora' => '15:22:00 p m',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'COMERCIANTE',
            'remitente' => 'C MARIA ISABEL GUILLEN CRUZ',
            'asunto' => 'SOLICITA LE SEA CONCESIONADO EL LOCAL 13 DE LA MANZANA 8 DEL MERCADO POPULAR SOLIDARIDAD',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001858',
            'fecha' => '28-feb-22',
            'hora' => '07:00:00 p m',
            'noOficio' => 'R9-055/2022',
            'dependencia' => 'REGIDURIA NOVENA',
            'remitente' => 'LIC ZAYRA NATALYE GONZALEZ CRUZ',
            'asunto' => 'EN RESPUESTA A OFICIO REMITIDO DEL SNE SOLICITA DAR FACILIDADES Y ESPACIO AL SERVICIO NACIONAL DE EMPLEO (SNE) PARA EL DIA 03 DE MARZO 2022',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001859',
            'fecha' => '28-feb-22',
            'hora' => '11:00:00 a m',
            'noOficio' => 'CS/001/2022',
            'dependencia' => 'SNE',
            'remitente' => 'LIC BEATRIZ ROSAS MARTINEZ COORDINADORA REGIONAL DEL SNE COATZACOALCOS VER',
            'asunto' => 'SOLICITUD DE APOYO',
            'telefono' => '921 212 1942',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => '001860',
            'fecha' => '28-feb-22',
            'hora' => '19:10:00 p m',
            'noOficio' => 'DMAA-0145/2022',
            'dependencia' => 'DIRECCION MUNICIPAL DE POTABLE Y ALCANTARILLADO',
            'remitente' => 'ING EULALIO GONZALEZ AZAMAR DIRECTOR MUNICIPAL DE AGUA POTABLE DRENAJE ALCANTARILLADO Y TRATAMIENTO DE AGUAS RESIDUALES',
            'asunto' => 'SOLICITUD DE ENTRGA DEL POZO 1B',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '28-feb-22',
            'hora' => '09:00:00 a m',
            'noOficio' => 'SECTUR /DS/0149/2022',
            'dependencia' => 'SECRETARIA DE TURISMO Y CULTURA',
            'remitente' => 'LIC XOCHITL ARBESU LAGO SECRETARIA DE TURISMO Y CULTURA DEL ESTADO DE VERACRUZ',
            'asunto' => 'SOLICITUD PARA UNA REUNION',
            'telefono' => '922 112 9532',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '28-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'INVEDEM/322/2022',
            'dependencia' => 'INSTITUTO VERACRUZANO DE DESARROLLO MUNICIPAL',
            'remitente' => 'LERAFAEL ACASTILLO ZUGASTI DIRECTOR GENERAL INSTITUTO VERACRUZANO DE DESARROLLO MUNICIPAL',
            'asunto' => 'INVITACION CONVERSATORIO TRANSMISION VIA ZOOM',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '28-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'SIN DATO',
            'dependencia' => 'CIUDADANO',
            'remitente' => 'C FRUCTUOSA MENDEZ HERNANDEZ',
            'asunto' => 'SOLICITUD DE APOYO PARA COMPRAR BOTES DE PINTURA',
            'telefono' => '921 196 0559',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

        Oficio::create([
            'folio' => 'SIN DATO',
            'fecha' => '28-feb-22',
            'hora' => 'SIN DATO',
            'noOficio' => 'IVM/DG/0261/2022',
            'dependencia' => 'INSTITUTO VERACRUZANO DE LAS MUJERES',
            'remitente' => 'MARIA DEL ROCIO VILLAFUERTE MARTINEZ ENCARGADA DE DESPACHO DE LA DIRECCION GENERAL DEL INSTITUTO VERACRUZANO DE LAS MUJERES',
            'asunto' => 'INVITACION A CONMEMORACION',
            'telefono' => '0000000000',
            'observacion' => 'SIN DATO',
            'recibe' => 'SIN DATO',
        ]);

    }
}


