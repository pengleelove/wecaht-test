<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'zmpc');

// Project repository
set('repository', 'git@github.com:pengleelove/wecaht-test.git');
//set_time_limit(0);
// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);
set('cleanup_use_sudo', true);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', ['']);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('raybon.vip')
    ->user('deployer')
    ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/usr/local/nginx/html/wechat');
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});
task('artisan:cache:clear', function () {
    return true;
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

