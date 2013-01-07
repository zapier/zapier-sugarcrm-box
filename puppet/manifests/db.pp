
class db {
  import 'mysql'
  class { 'mysql::server':
    config_hash       => {
      'root_password' => 'cleverpassword'
    }
  }
  mysql::db { 'sugarcrm':
    user     => 'myuser',
    password => 'mypass',
    host     => 'localhost',
    grant    => ['all'],
    sql      => '/tmp/share/db.sql'
  }

}
