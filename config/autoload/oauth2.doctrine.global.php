<?php

return array(
    'zf-oauth2' => array(
        'storage' => 'ZF\OAuth2\Adapter\DoctrineAdapter',
        'storage_settings' => array(
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'event_manager' => 'doctrine.eventmanager.orm_default',
            'driver' => 'doctrine.driver.orm_default',
            'enable_default_entities' => true,
            'bcrypt_cost' => 14, # match zfcuser
            // Dynamically map the user_entity to the client_entity
            'dynamic_mapping' => array(
                'user_entity' => array(
                    'entity' => 'RollNApi\Entity\User',
                    'field' => 'user',
                ),
                'client_entity' => array(
                    'entity' => 'ZF\OAuth2\Entity\Client',
                    'field' => 'client',
                ),
            ),
            'mapping' => array(
                'ZF\OAuth2\Mapper\User' => array(
                    'entity' => 'RollNApi\Entity\User',
                    'mapping' => array(
                        'user_id' => array(
                            'type' => 'field',
                            'name' => 'id',
                            'datatype' => 'integer',
                        ),
                        'username' => array(
                            'type' => 'field',
                            'name' => 'username',
                            'datatype' => 'string',
                        ),
                        'password' => array(
                            'type' => 'field',
                            'name' => 'password',
                            'datatype' => 'string',
                        ),
                    ),
                ),

                'ZF\OAuth2\Mapper\Client' => array(
                    'entity' => 'ZF\OAuth2\Entity\Client',
                    'mapping' => array(
                        'client_id' => array(
                            'type' => 'field',
                            'name' => 'clientId',
                            'datatype' => 'integer',
                        ),
                        'client_secret' => array(
                            'type' => 'field',
                            'name' => 'secret',
                            'datatype' => 'string',
                        ),
                        'redirect_uri' => array(
                            'type' => 'field',
                            'name' => 'redirectUri',
                            'datatype' => 'text',
                        ),
                        'grant_types' => array(
                            'type' => 'field',
                            'name' => 'grantType',
                            'datatype' => 'array',
                        ),
                        'scope' => array(
                            'type' => 'collection',
                            'name' => 'scope',
                            'entity' => 'ZF\OAuth2\Entity\Scope',
                            'mapper' => 'ZF\OAuth2\Mapper\Scope',
                        ),
                        'user_id' => array(
                            'type' => 'relation',
                            'name' => 'user',
                            'entity_field_name' => 'id',
                            'entity' => 'RollNApi\Entity\User',
                            'datatype' => 'integer',
                            'allow_null' => true,
                        ),
                    ),
                ),

                'ZF\OAuth2\Mapper\AccessToken' => array(
                    'entity' => 'ZF\OAuth2\Entity\AccessToken',
                    'mapping' => array(
                        'access_token' => array(
                            'type' => 'field',
                            'name' => 'accessToken',
                            'datatype' => 'string',
                        ),
                        'expires' => array(
                            'type' => 'field',
                            'name' => 'expires',
                            'datatype' => 'datetime',
                        ),
                        'scope' => array(
                            'type' => 'collection',
                            'name' => 'scope',
                            'entity' => 'ZF\OAuth2\Entity\Scope',
                            'mapper' => 'ZF\OAuth2\Mapper\Scope',
                        ),
                        'client_id' => array(
                            'type' => 'relation',
                            'name' => 'client',
                            'entity_field_name' => 'clientId',
                            'entity' => 'ZF\OAuth2\Entity\Client',
                            'datatype' => 'integer',
                        ),
                    ),
                ),

                'ZF\OAuth2\Mapper\RefreshToken' => array(
                    'entity' => 'ZF\OAuth2\Entity\RefreshToken',
                    'mapping' => array(
                        'refresh_token' => array(
                            'type' => 'field',
                            'name' => 'refreshToken',
                            'datatype' => 'string',
                        ),
                        'expires' => array(
                            'type' => 'field',
                            'name' => 'expires',
                            'datatype' => 'datetime',
                        ),
                        'scope' => array(
                            'type' => 'collection',
                            'name' => 'scope',
                            'entity' => 'ZF\OAuth2\Entity\Scope',
                            'mapper' => 'ZF\OAuth2\Mapper\Scope',
                        ),
                        'client_id' => array(
                            'type' => 'relation',
                            'name' => 'client',
                            'entity_field_name' => 'clientId',
                            'entity' => 'ZF\OAuth2\Entity\Client',
                            'datatype' => 'integer',
                        ),
                    ),
                ),

                'ZF\OAuth2\Mapper\AuthorizationCode' => array(
                    'entity' => 'ZF\OAuth2\Entity\AuthorizationCode',
                    'mapping' => array(
                        'authorization_code' => array(
                            'type' => 'field',
                            'name' => 'authorizationCode',
                            'datatype' => 'string',
                        ),
                        'redirect_uri' => array(
                            'type' => 'field',
                            'name' => 'redirectUri',
                            'datatype' => 'text',
                        ),
                        'expires' => array(
                            'type' => 'field',
                            'name' => 'expires',
                            'datatype' => 'datetime',
                        ),
                        'scope' => array(
                            'type' => 'collection',
                            'name' => 'scope',
                            'entity' => 'ZF\OAuth2\Entity\Scope',
                            'mapper' => 'ZF\OAuth2\Mapper\Scope',
                        ),
                        'id_token' => array(
                            'type' => 'field',
                            'name' => 'idToken',
                            'datatype' => 'text',
                        ),
                        'client_id' => array(
                            'type' => 'relation',
                            'name' => 'client',
                            'entity_field_name' => 'clientId',
                            'entity' => 'ZF\OAuth2\Entity\Client',
                            'datatype' => 'integer',
                        ),
                    ),
                ),

                'ZF\OAuth2\Mapper\Jwt' => array(
                    'entity' => 'ZF\OAuth2\Entity\Jwt',
                    'mapping' => array(
                        'subject' => array(
                            'type' => 'field',
                            'name' => 'subject',
                            'datatype' => 'string',
                        ),
                        'public_key' => array(
                            'type' => 'field',
                            'name' => 'publicKey',
                            'datatype' => 'text',
                        ),
                        'client_id' => array(
                            'type' => 'relation',
                            'name' => 'client',
                            'entity_field_name' => 'clientId',
                            'entity' => 'ZF\OAuth2\Entity\Client',
                            'datatype' => 'integer',
                        ),
                    ),
                ),

                'ZF\OAuth2\Mapper\Jti' => array(
                    'entity' => 'ZF\OAuth2\Entity\Jti',
                    'mapping' => array(
                        'subject' => array(
                            'type' => 'field',
                            'name' => 'subject',
                            'datatype' => 'string',
                        ),
                        'audience' => array(
                            'type' => 'field',
                            'name' => 'audience',
                            'datatype' => 'string',
                        ),
                        'expiration' => array(
                            'type' => 'field',
                            'name' => 'expires',
                            'datatype' => 'datetime',
                        ),
                        'jti' => array(
                            'type' => 'field',
                            'name' => 'jti',
                            'datatype' => 'text',
                        ),
                        'client_id' => array(
                            'type' => 'relation',
                            'name' => 'client',
                            'entity_field_name' => 'clientId',
                            'entity' => 'ZF\OAuth2\Entity\Client',
                            'datatype' => 'integer',
                        ),
                    ),
                ),

                'ZF\OAuth2\Mapper\Scope' => array(
                    'entity' => 'ZF\OAuth2\Entity\Scope',
                    'mapping' => array(
                        'scope' => array(
                            'type' => 'field',
                            'name' => 'scope',
                            'datatype' => 'text',
                        ),
                        'is_default' => array(
                            'type' => 'field',
                            'name' => 'isDefault',
                            'datatype' => 'boolean',
                        ),
                        'client_id' => array(
                            'type' => 'relation',
                            'name' => 'client',
                            'entity_field_name' => 'clientId',
                            'entity' => 'ZF\OAuth2\Entity\Client',
                            'datatype' => 'integer',
                        ),
                    ),
                ),

                'ZF\OAuth2\Mapper\PublicKey' => array(
                    'entity' => 'ZF\OAuth2\Entity\PublicKey',
                    'mapping' => array(
                        'public_key' => array(
                            'type' => 'field',
                            'name' => 'publicKey',
                            'datatype' => 'text',
                        ),
                        'private_key' => array(
                            'type' => 'field',
                            'name' => 'privateKey',
                            'datatype' => 'text',
                        ),
                        'encryption_algorithm' => array(
                            'type' => 'field',
                            'name' => 'encryptionAlgorithm',
                            'datatype' => 'string',
                        ),
                        'client_id' => array(
                            'type' => 'relation',
                            'name' => 'client',
                            'entity_field_name' => 'clientId',
                            'entity' => 'ZF\OAuth2\Entity\Client',
                            'datatype' => 'integer',
                        ),
                    ),
                ),
            ),
        ),
    ),
);