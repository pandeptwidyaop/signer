<?php

return [
    /**
     * Set the output signed directory
     * 
     */
    'output_directory' => null,
    /**
     * For now just support for PKCS12
     * and willbe support for others keystore type
     * - BCPKCS12
     * - BKS
     * - BKS-V1
     * - BOUNCYCASTLE
     * - CASEEXACTJKS
     * - CloudFoxy
     * - DKS
     * - JCEKS
     * - JKS
     * - KEYCHAINSTORE
     * - PKCS12-3DES-3DES
     * - PKCS12-3DES-40RC2
     * - PKCS12-DEF
     * - PKCS12-DEF-3DES-3DES
     * - PKCS12-DEF-3DES-40RC2
     * 
     */
    'keystore_type' => env('SIGNER_KEYSTORE_TYPE', 'PKCS12'),
    'keystore_file' => env('SIGNER_KEYSTORE_FILE', null),
    'keystore_passphrase' => env('SIGNER_KEYSTORE_PASSPHRASE', null),
    'hash_algorithm' => 'SHA256',
    'tsa_hash_algorithm' => 'SHA256',
    'tsa_server_url' => null,
    'tsa_authentication' => 'PASSWORD',
    'tsa_user' => '',
    'tsa_password' => '',
    'location' => null,
    'reason' => null,
    'contact' => null,
    'output_prefix' => '',
    'output_suffix' => '_signed',
    'disable_acrobat6_layer_mode' => false,
    'disable_assembly' => false,
    'disable_copy' => false,
    'disable_fill' => false,
    'disable_modify_annotations' => true,
    'disable_modify_content' => true,
    'disable_screen_readers' => false,
    'append' => true,
    'bg_path' => null,
    'bg_scale' => null,
    'certification_level' => 'CERTIFIED_NO_CHANGES_ALLOWED',
    'crl' => false,
    'encryption_certificate' => null,
    'font_size' => 10.0,
    'img_path' => null,
    'key_alias' => null,
    'key_index' => null,
    '12_text' => null,
    '14_text' => null,
    'llx' => null,
    'lly' => null,
    'ocsp' => false,
    'ocsp_server_url' => null,
    'owner_password' => null,
    'encryption' => 'NONE',
    'page' => 1,
    'print_right' => 'ALLOW_PRINTING',
    'proxy_host' => null,
    'proxy_port' => 80,
    'proxy_type' => 'DIRECT',
    'render_mode' => 'DESCRIPTION_ONLY',
    'tsa_policy_oid' => null,
    'tsa_cert_file' => null,
    'tsa_cert_password' => null,
    'tsa_cert_file_type' => null,
    'user_password' => null,
    'urx' => null,
    'ury' => null,
    'visible_signature' => false
];
