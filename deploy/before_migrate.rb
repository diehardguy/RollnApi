run "ln -nfs #{config.release_path}/config/autoload/local.php.dist #{config.release_path}/config/autoload/local.php"
run "rm #{config.release_path}/data/doctrine.db 2> /dev/null"
run "php #{config.release_path}/public/index.php orm:schema-tool:create"
run "php #{config.release_path}/public/index.php data-fixture:import"

