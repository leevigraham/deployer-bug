<?php
namespace Deployer;

localhost('function')
    ->set('db_password', function() {
        return 'password';
    });

localhost('static')
    ->set('db_password', 'password');

task('test', function() {
    runLocally('echo "{{ db_password }}"');
});
