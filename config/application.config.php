<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
return array(
    'modules' => array(
        'Application',
        'ZF\\DevelopmentMode',
        'ZF\\Apigility',
        'ZF\\Apigility\\Provider',
        'ZF\\Apigility\\Documentation',
        'AssetManager',
        'ZF\\ApiProblem',
        'ZF\\Configuration',
        'ZF\\MvcAuth',
        'ZF\\OAuth2',
        'ZF\\Hal',
        'ZF\\ContentNegotiation',
        'ZF\\ContentValidation',
        'ZF\\Rest',
        'ZF\\Rpc',
        'ZF\\Versioning',
        'DoctrineModule',
        'DoctrineORMModule',
        'Phpro\\DoctrineHydrationModule',
        'ZF\\Apigility\\Doctrine\\Server',
        'ZfcBase',
        'ZfcUser',
        'ZfcUserDoctrineORM',
        'DoctrineDataFixtureModule',
        'RollNApi'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php'
        )
    )
);
