
class webserver {
  import 'apache'
  class {'apache':
  }

  class { 'apache::mod::php':
  }
  apache::vhost { 'default':
    priority      => '3',
    port          => '80',
    docroot       => '/var/www/html',
    override      => 'All',
  }
  php::module { [ 'mysql', 'ldap', 'pdo','mbstring' ]: }

   
}


class add_apache_to_vagrant_group {
User<| title == 'apache' |> { groups +> [ "vagrant" ] }
}



