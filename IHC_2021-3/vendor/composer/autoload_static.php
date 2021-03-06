<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4828849f604fe251f660dac57c3d996
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\AdmHomeController' => __DIR__ . '/../..' . '/app/controllers/admHomeController.php',
        'App\\Controllers\\AvaliacaoController' => __DIR__ . '/../..' . '/app/controllers/AvaliacaoController.php',
        'App\\Controllers\\ContatoController' => __DIR__ . '/../..' . '/app/controllers/ContatoController.php',
        'App\\Controllers\\DisciplinaController' => __DIR__ . '/../..' . '/app/controllers/DisciplinaController.php',
        'App\\Controllers\\GerarRelatorioController' => __DIR__ . '/../..' . '/app/controllers/GerarRelatorioController.php',
        'App\\Controllers\\GraficoAvaliacaoController' => __DIR__ . '/../..' . '/app/controllers/GraficoAvaliacaoController.php',
        'App\\Controllers\\GraficoCursoController' => __DIR__ . '/../..' . '/app/controllers/GraficoCursoController.php',
        'App\\Controllers\\GraficoDispersaoController' => __DIR__ . '/../..' . '/app/controllers/GraficoDispersaoController.php',
        'App\\Controllers\\GraficosController' => __DIR__ . '/../..' . '/app/controllers/GraficosController.php',
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
        'App\\Controllers\\IndexController' => __DIR__ . '/../..' . '/app/controllers/IndexController.php',
        'App\\Controllers\\ListaCursosController' => __DIR__ . '/../..' . '/app/controllers/ListaCursosController.php',
        'App\\Controllers\\SobreController' => __DIR__ . '/../..' . '/app/controllers/SobreController.php',
        'App\\Controllers\\TabelaCursosController' => __DIR__ . '/../..' . '/app/controllers/TabelaCursosController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInitc4828849f604fe251f660dac57c3d996' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitc4828849f604fe251f660dac57c3d996' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4828849f604fe251f660dac57c3d996::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4828849f604fe251f660dac57c3d996::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc4828849f604fe251f660dac57c3d996::$classMap;

        }, null, ClassLoader::class);
    }
}
